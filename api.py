from flask import *
import json
import jwt
import datetime
from flaskext.mysql import MySQL

ADMIN_ROLE = 1
USER_ROLE = 0
FAIL_MESSAGE = "NO"

setrole = ['user','admin']

app = Flask(__name__)
mysql = MySQL()
app.config['MYSQL_DATABASE_USER'] = 'root'
app.config['MYSQL_DATABASE_PASSWORD'] = 'root'
app.config['MYSQL_DATABASE_DB'] = 'funbid'
app.config['MYSQL_DATABASE_HOST'] = 'localhost'
mysql.init_app(app)

dbconn = mysql.connect()
db = dbconn.cursor()

JWT_SECRET = '99'

default_bidcount = 10

def encode(account):
	iat = datetime.datetime.utcnow()
	return jwt.encode({
		#'sub': account['id'],
		'id': str(account['id']),
		'role': str(account['role']),
		'iat': iat,
		'exp': iat + datetime.timedelta(days=365)
		}, JWT_SECRET).decode('utf-8')

def decode(access_token):
	try:
		token = jwt.decode(access_token, JWT_SECRET, leeway=10)
	except jwt.InvalidTokenError:
		return None
	return token

def token_valid():
	if request.headers.get('Authorization'):
		jwt_token = decode(request.headers.get('Authorization'))
		if jwt_token == None:
			return None
		'''
		t = datetime.datetime.utcnow()
		iat = datetime.datetime.fromtimestamp(jwt_token.get('iat'))
		exp = datetime.datetime.fromtimestamp(jwt_token.get('exp'))
		if (t < iat) or (t > exp):
			return None
		'''
		return jwt_token
	return None

def login():
	if (request.values.get('loginusername')) and (request.values.get('loginpassword')):
		username = request.values.get('loginusername')
		password = request.values.get('loginpassword')
		db.execute("SELECT id,role FROM funbid.user WHERE username='"+username+"' AND password='"+password+"' AND active=1")
		data = db.fetchone()
		if data == None:
			return None
		token = encode({'id':data[0],'role':data[1]})
		return token
	return None

def authorcheck():
	t = token_valid()
	if t != None:
		return t
	t = login()
	if t != None:
		return decode(t)
	return None

def checkrole(user):
	# return the role of userid in db: admin, tutor or student
	if user == None:
		return None
	if 'role' in user.keys():
		roleid = int(user['role'])
		return setrole[roleid]
	if 'id' in user.keys():
		userid = str(user['id'])
		db.execute('SELECT role FROM aloha.account WHERE id = '+userid)
		data = db.fetchone()
		if data == None:
			return None
		return setrole[data[0]]
	return None

def valid_name(name):
	if name == None:
		return None
	if ("'" in name) or ('"' in name) or ('\\' in name):
		return None
	if (len(name) < 3) or (len(name) > 50):
		return None
	return name

def valid_email(email):
	if email == None:
		return None
	if ("'" in email) or ('"' in email) or ('\\' in email):
		return None
	if (len(email) < 3) or (len(email) > 255):
		return None
	# check for duplicate email
	cmd = "SELECT DISTINCT email FROM aloha.account"
	db.execute(cmd)
	while (99):
		emailcheck = db.fetchone()
		if emailcheck == None:
			break
		if emailcheck[0] == email:
			return None
	return email

def valid_limit(limit):
	if limit == None:
		return None
	for c in limit:
		if (ord(c) < ord('0')) or (ord(c) > ord('9')):
			return None
	if (int(c) <= 0) or (int(c) > 15):
		return None
	return limit

def valid_id(id_):
	if id_ == None:
		return None
	for c in id_:
		if (ord(c) < ord('0')) or (ord(c) > ord('9')):
			return None
	return id_

def valid_number(number_):
	if number_ == None:
		return None
	for c in number_:
		if (ord(c) < ord('0')) or (ord(c) > ord('9')):
			return None
	return number_

def valid_password(password):
	if password == None:
		return None
	if ("'" in password) or ('"' in password) or ('\\' in password):
		return None
	if (len(password) < 5) or (len(password) > 10):
		return None
	if ' ' in password:
		return None
	check = 0
	for c in password:
		if (ord(c) >= ord('0')) and (ord(c) <= ord('9')):
			check = 1
			break
	if check:
		return password
	return None

@app.route('/user-login', methods=['POST'])
def user_login():
	token = login()
	if token != None:
		user = decode(token)
		if user == None:
			return FAIL_MESSAGE
		if 'role' in user.keys():
			roleid = int(user['role'])
			return token
	return FAIL_MESSAGE

@app.route('/admin-login', methods=['POST'])
def admin_login():
	token = login()
	if token != None:
		user = decode(t)
		if user == None:
			return FAIL_MESSAGE
		if 'role' in user.keys():
			roleid = int(user['role'])
			if setrole[roleid] == 'admin':
				return token
	return FAIL_MESSAGE

@app.route('/upload-new-item', methods=['POST'])
def upload_new_item():
	author = authorcheck()
	userid = str(author['id'])
	role = checkrole(author)
	if (role == 'admin') or (role == 'user'):
		#Name, image, category, init-price, create-date, start-date, end-date
		name = request.values.get('name')
		image = request.values.get('image')
		category = request.values.get('category')
		initprice = request.values.get('initprice')
		createdate = str(datetime.datetime.now())
		startdate = request.values.get('startdate')
		enddate = request.values.get('enddate')
		if (True):
			# add to db
			cmd = "INSERT INTO funbid.item (name,sellerid,image,category,initprice,createdate,startdate,enddate,iswinner,currentprice,currentwinner,active) VALUES ('"+name+"',"+userid+",'"+image+"','"+category+"',"+initprice+",'"+createdate+"','"+startdate+"','"+enddate+"',0,"+initprice+",-1,1)"
			print(cmd)
			db.execute(cmd)
			dbconn.commit()
			item_id = dbconn.insert_id()
			return str(item_id)
	return FAIL_MESSAGE

@app.route('/register', methods=['POST'])
def register():
	username = request.values.get('username')
	password = request.values.get('password')
	createdate = str(datetime.datetime.now())
	fullname = request.values.get('fullname')
	if (fullname == None):
		fullname = ""
	address = request.values.get('address')
	if (address == None):
		address = ""
	image = request.values.get('image')
	if (image == None):
		image = ""
	role = request.values.get('role')
	cmd = "SELECT id FROM funbid.user WHERE username='"+username+"'"
	db.execute(cmd)
	temp = db.fetchone()
	if (temp == None):
		# add to db
		cmd = "INSERT INTO funbid.user (username,password,createdate,fullname,address,image,bidcount,active,role) values ('"+username+"','"+password+"','"+createdate+"','"+fullname+"','"+address+"','"+image+"',"+str(default_bidcount)+",1,"+str(role)+")"
		db.execute(cmd)
		dbconn.commit()
		user_id = dbconn.insert_id()
		return str(user_id)
	return FAIL_MESSAGE

@app.route('/get-item-list-id', methods=['GET','POST'])
def get_item_list_id():
	if (True):
		cmd = "SELECT id FROM funbid.item ORDER BY createdate DESC LIMIT 20"
		db.execute(cmd)
		res = []
		while (99):
			temp = db.fetchone()
			if temp == None:
				break
			res.append(temp[0])
		return json.dumps(res)
	return FAIL_MESSAGE

@app.route('/get-item-detail', methods=['POST'])
def get_item_detail():
	itemid = request.values.get('itemid')
	if (valid_id(itemid)):
		cmd = "SELECT name,sellerid,image,category,initprice,createdate,startdate,enddate,iswinner,currentprice,currentwinner FROM funbid.item WHERE id = "+itemid+" AND active = 1"
		db.execute(cmd)
		temp = db.fetchone()
		if temp == None:
			return FAIL_MESSAGE
		res = {'name':temp[0],'sellerid':temp[1],'image':temp[2],'category':temp[3],'initprice':temp[4],'createdate':str(temp[5]),'startdate':str(temp[6]),'enddate':str(temp[7]),'iswinner':temp[8],'currentprice':temp[9],'currentwinner':temp[10]}
		return json.dumps(res)
	return FAIL_MESSAGE

@app.route('/get-user-detail', methods=['POST'])
def get_user_detail():
	userid = request.values.get('userid')
	if (valid_id(userid)):
		cmd = "SELECT username,createdate,fullname,address,image,bidcount,password,role FROM funbid.user WHERE id = "+userid+" AND active = 1"
		db.execute(cmd)
		temp = db.fetchone()
		if temp == None:
			return FAIL_MESSAGE
		res = {'username':temp[0],'createdate':str(temp[1]),'fullname':temp[2],'address':temp[3],'image':temp[4],'bidcount':temp[5],'password':temp[6],'role':temp[7]}
		return json.dumps(res)
	return FAIL_MESSAGE

@app.route('/bid', methods=['POST'])
def bid():
	author = authorcheck()
	userid = str(author['id'])
	role = checkrole(author)
	if (role == 'admin') or (role == 'user'):
		itemid = request.values.get('itemid')
		bidprice = request.values.get('bidprice')
		userbidcount = 0
		cmd = "SELECT bidcount FROM funbid.user WHERE id = "+userid+" AND active = 1"
		db.execute(cmd)
		temp = db.fetchone()
		if temp == None:
			return FAIL_MESSAGE
		userbidcount = temp[0]
		if userbidcount <= 0:
			return FAIL_MESSAGE
		cmd = "SELECT startdate,enddate,currentprice FROM funbid.item WHERE id = "+itemid+" AND active = 1"
		db.execute(cmd)
		temp = db.fetchone()
		if temp == None:
			return FAIL_MESSAGE
		startdate = temp[0]
		enddate = temp[1]
		currentprice = temp[2]
		timenow = datetime.datetime.now()
		if (timenow < startdate) or (timenow > enddate) or (int(bidprice) <= currentprice):
			return FAIL_MESSAGE
		cmd = "INSERT INTO funbid.auction (userid,itemid,bidprice,time) VALUES ("+userid+","+itemid+","+bidprice+",'"+str(timenow)+"')"
		db.execute(cmd)
		cmd = "UPDATE funbid.item SET currentwinner = "+userid+", currentprice = "+bidprice+" WHERE id = "+itemid+" AND active = 1"
		db.execute(cmd)
		cmd = "UPDATE funbid.user SET bidcount = "+str(userbidcount-1)+" WHERE id = "+userid+" AND active = 1"
		db.execute(cmd)
		dbconn.commit()
		return "OK"
	return FAIL_MESSAGE

@app.route('/search-item', methods=['POST'])
def seach_item():
	itemname = request.values.get('itemname')
	number = request.values.get('number')
	if (valid_name(itemname)) and (valid_number(number)):
		cmd = "SELECT name,sellerid,image,category,initprice,createdate,startdate,enddate,iswinner,currentprice,currentwinner FROM funbid.item WHERE name like '%"+itemname+"%' AND active = 1 LIMIT "+number
		db.execute(cmd)
		item_list = []
		while (99):
			temp = db.fetchone()
			if temp == None:
				break
			item_list.append({'name':temp[0],'sellerid':temp[1],'image':temp[2],'category':temp[3],'initprice':temp[4],'createdate':str(temp[5]),'startdate':str(temp[6]),'enddate':str(temp[7]),'iswinner':temp[8],'currentprice':temp[9],'currentwinner':temp[10]})
		return json.dumps(item_list)
	return FAIL_MESSAGE

@app.route('/search-user', methods=['POST'])
def seach_user():
	username = request.values.get('username')
	number = request.values.get('number')
	if (valid_name(username)) and (valid_number(number)):
		cmd = "SELECT username,createdate,fullname,address,image,bidcount,role FROM funbid.user WHERE ((username like '%"+username+"%') or (fullname like '%"+username+"%')) and active=1 LIMIT "+number
		db.execute(cmd)
		item_list = []
		while (99):
			temp = db.fetchone()
			if temp == None:
				break
			item_list.append({'username':temp[0],'createdate':str(temp[1]),'fullname':temp[2],'address':temp[3],'image':temp[4],'bidcount':temp[5],'role':temp[6]})
		return json.dumps(item_list)
	return FAIL_MESSAGE

@app.route('/delete-user', methods=['POST'])
def delete_user():
	author = authorcheck()
	userid = str(author['id'])
	role = checkrole(author)
	if (role == 'admin'):
		userid = request.values.get('userid')
		cmd = "SELECT id FROM funbid.user WHERE id = "+userid+" AND active = 1"
		db.execute(cmd)
		temp = db.fetchone()
		if temp == None:
			return FAIL_MESSAGE
		cmd = "UPDATE funbid.user SET active = 0 WHERE id = "+userid+" AND active = 1"
		db.execute(cmd)
		dbconn.commit()
		return "OK"
	return FAIL_MESSAGE

@app.route('/delete-item', methods=['POST'])
def delete_item():
	author = authorcheck()
	userid = str(author['id'])
	role = checkrole(author)
	if (role == 'admin'):
		itemid = request.values.get('itemid')
		cmd = "SELECT id FROM funbid.item WHERE id = "+itemid+" AND active = 1"
		db.execute(cmd)
		temp = db.fetchone()
		if temp == None:
			return FAIL_MESSAGE
		cmd = "UPDATE funbid.item SET active = 0 WHERE id = "+itemid+" AND active = 1"
		db.execute(cmd)
		dbconn.commit()
		return "OK"
	return FAIL_MESSAGE

#------------------------------------------------------------------------------

@app.route('/', methods=['GET','POST'])
def index():
	return "Yes"

def init_db():
	#cmd = "CREATE DATABASE IF NOT EXISTS funbid"
	
	cmd = "CREATE TABLE IF NOT EXISTS user (\
		id INT AUTO_INCREMENT PRIMARY KEY,\
		username VARCHAR(60),\
		createdate DATETIME,\
		fullname VARCHAR(60),\
		address VARCHAR(60),\
		image VARCHAR(255),\
		bidcount INT,\
		password VARCHAR(60),\
		role INT,\
		active INT)"
	db.execute(cmd)
	dbconn.commit()
	cmd = "CREATE TABLE IF NOT EXISTS item (\
		id INT AUTO_INCREMENT PRIMARY KEY,\
		name VARCHAR(60),\
		sellerid INT,\
		image VARCHAR(255),\
		category VARCHAR(60),\
		initprice INT,\
		createdate DATETIME,\
		startdate DATETIME,\
		enddate DATETIME,\
		iswinner INT,\
		currentprice INT,\
		currentwinner INT,\
		active INT)"
	db.execute(cmd)
	dbconn.commit()
	cmd = "CREATE TABLE IF NOT EXISTS funbid.auction (\
		id INT AUTO_INCREMENT PRIMARY KEY,\
		userid INT,\
		itemid INT,\
		bidprice INT,\
		time DATETIME)"
	db.execute(cmd)
	dbconn.commit()

if __name__ == "__main__":
	init_db()
	app.run(host='0.0.0.0')
