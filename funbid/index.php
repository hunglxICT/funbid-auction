<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"/js/nr-1123.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
		<meta name="description" content="Bid on auctions and save. All auctions start at $0 with no minimum reserve. Everything must go! FunBid is the fair and honest bidding site." /><meta property="og:title" content="Bid on auctions and save. All auctions start at $0 with no minimum reserve. Everything must go! DealDash is the fair and honest bidding site." /><meta name="keywords" content="penny auctions, penny auction, DealDash, game-shopping, social shopping, entertainment shopping, online auctions" /><!--

-->		<meta property="fb:admins" content="100001154770025,1023358872,614100147,63104056,92500661,720276362,100000066874419,100001650073023,100001816544475,100004991853881,100001031357619" />
		<meta property="fb:app_id" content="329011240518769" />
		<meta name="inmobi-site-verification" content="78649f87c1afc9b56d7d31458eeeb66d" />
		<link rel="publisher" href=https://plus.google.com/103417761745184174293" />
		<title>FunBid&trade; - Bid & Save - The fair & honest bidding site</title>
                <meta name="apple-itunes-app" content="app-id=965782383, app-argument=dealdash:///mobile/?&">
				<link rel="apple-touch-icon" href="/apple-touch-icon-iphone.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-iphone4.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-ipad3.png" />
<link rel="stylesheet" href="/css/popup.css">
						<link href="/css/ddr.611783c6b3eb1f5c48e65386966541de.gy.min.css" rel="stylesheet">

				<script  src="/js/dd.178ab063441e85738102cba29b913646.min.js"></script>		
		<script>
		  var user_class='Guest';
		  var websiteVersion='DEFAULT';
		  var nativeApp='';

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','/js/analytics.js','ga');

			ga('create', 'UA-15792067-1', 'auto' );

		  
		  
		  ga("set", "dimension3", user_class);
		  
		  ga("set", "dimension5", ".673.678.cb.cd.");
		  ga("set", "dimension6", websiteVersion);
		  
		    ga('require', 'displayfeatures');
		    ga('send', 'pageview');
		</script>
				
		<!--[if lte IE 7.0]>
		<link rel="stylesheet" href="/css/ie7-and-down.css" type="text/css" media="all" />
		<![endif]-->

		<!--[if lte IE 9.0]>
		<link rel="stylesheet" href="/css/ie9-and-down.css" type="text/css" media="all" />
		<![endif]-->

		<script>
			var userID = '';
			var username = '';

			dd.checkout = dd.checkout || {};
			dd.checkout.pciHostname = 'https://payments.dealdash.com';
			Object.defineProperty(dd.checkout, 'pciHostname', {configurable: false, writable: false});
		</script>

	</head>

	<body class="guest COMPACT_JOIN2 HFBPR DESKTOP_NOTIFICATIONS DESKTOP_NOTIFICATIONS_TAHB ONE_WIN_PER_ITEM_PER_WEEK FREEZE_GONZALES DISMISS_SIGNUP_MODAL DESKTOP_COLUMN_SPACING_FIX page_uiIndex">
				<!-- Google Tag Manager -->
<script>
			var userSpending = '',
			userLtv = '',
			userPlacedBids ='';
	</script>

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PZ3SG5"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PZ3SG5');</script>
<!-- End Google Tag Manager -->
				<div class="container guest COMPACT_JOIN2 HFBPR DESKTOP_NOTIFICATIONS DESKTOP_NOTIFICATIONS_TAHB ONE_WIN_PER_ITEM_PER_WEEK FREEZE_GONZALES DISMISS_SIGNUP_MODAL DESKTOP_COLUMN_SPACING_FIX page_uiIndex">

			<div id="mm_header" class="MMAXCSS_SHOW" aria-hidden="true">
				<a href="javascript: window.history.back();">Back</a>
			</div>

			<div class="navbar mobile-navigation" role="navigation">
				<div class="navbar-inner">
					<div class="container">

						<a class="btn btn-navi pull-right collapsed menu_nav" data-toggle="collapse" data-target=".menu_list">
							<span class="menu-bar"></span>
							<span class="menu-bar"></span>
							<span class="menu-bar"></span>
						</a>

						<a class="brand" href="/"><img src="/images/logo.png" alt="Home" width="129" height="32"></a>

						<div class="pull-right guest_only user_nav sign_in_link">
							<a href="/login" role="button">Sign In</a>
						</div>

						<div class="nav-collapse collapse menu_list">
							<ul class="nav">
								<li class="user_only"><a href="/dashboard"><strong>Dashboard</strong></a></li>
								<li class="new_only"><a href="/join2"><strong>Start Bidding!</strong></a></li>
								<li class="guest_only"><a href="/join" class="signup_focus"><strong>Create Account</strong></a></li>
								<li><a href="/">Auctions</a></li>
								<li><a href="/how-does-it-work">How does it work?</a></li>
								<li><a href="/whats-the-catch">What's the catch?</a></li>
								<li><a href="/winners">Winners</a></li>
								<li><a href="/support">Contact Support</a></li>
							</ul>
							<ul class="nav pull-right">
								<li class="divider-vertical"></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-label="Help">Help <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="/faq">FAQ</a></li>
										<li><a href="/tactics-and-tips">Tactics & tips</a></li>
										<li><a href="/house-rules">House rules</a></li>
										<li><a href="/no-jumper-auctions">No Jumper&trade; auctions</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav pull-right">
								<li class="divider-vertical"></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">About <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="/careers#our-team">Our team</a></li>
										<li><a href="/careers">Careers</a></li>
										<li><a href="/careers#our-mission">Our values</a></li>
										<li><a href="/terms-of-use">Terms of use</a></li>
										<li><a href="/privacy-policy">Privacy policy</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav">
								<li class="logged_in_only"><a href="/logout">Log out</a></li>
							</ul>

													</div>
					</div>
				</div>
			</div>

			<div class="row desktop-header" role="banner">
				<div class="span4 logo_span">
                    <h1 style="margin: 0 !important;">
                        <a id="logo" href="/">ICT FunBid</a>
                    </h1>
				</div>
				<div class="span4"></div>
				<div class="span4 headsecurity text-right">
					<?php
						if (isset($_SESSION['username']))
						{
							echo "Welcome ".$_SESSION['username'];
						}
					?>
					
					<div class="guest_only">
						
<script type="text/javascript" src="/js/loginpopup.js"></script>


<button onclick="document.getElementById('modal-login').style.display='block'" style="width:200px; margin-top:10px; margin-left:0px;">
Log in</button>

<div id="modal-login" class="modal2">
<form class="modal-content2 animate" action="/login/login.php" method="POST">
<div class="imgcontainer2">
<span onclick="document.getElementById('modal-login').style.display='none'" class="close2" title="Close PopUp">&times;</span>
<h1 style="text-align:center">FunBid Login</h1>
</div>
<div class="container2">
<input type="text" class="text2" placeholder="Enter Username" name="username">
<input type="password" class="password2" placeholder="Enter Password" name="password">
<button type="submit" class="button2">Login</button>
</div>
</form>
</div>

<div id="modal-register" class="modal2">
<form class="modal-content2 animate" action="/register/register.php" method="POST">
<div class="imgcontainer2">
<span onclick="document.getElementById('modal-register').style.display='none'" class="close2" title="Close PopUp">&times;</span>
<h1 style="text-align:center">FunBid Register</h1>
</div>
<div class="container2">
<input type="text" class="text2" placeholder="Enter Username" name="username">
<input type="password" class="password2" placeholder="Enter Password" name="password">
<input type="password" class="password2" placeholder="Confirm Password" name="confirm_password">
<input type="text" class="text2" placeholder="First name" name="first_name">
<input type="text" class="text2" placeholder="Last name" name="last_name">
<button type="submit" class="button2">Register</button>
</div>
</form>
</div>

<div id="modal-add-item" class="modal2">
<form class="modal-content2 animate" action="/add-new-item/add_item.php" method="POST">
<div class="imgcontainer2">
<span onclick="document.getElementById('modal-add-item').style.display='none'" class="close2" title="Close PopUp">&times;</span>
<h1 style="text-align:center">FunBid Register</h1>
</div>
<div class="container2">
<input type="text" class="text2" placeholder="Item Name" name="name">
<input type="text" class="text2" placeholder="Image Link" name="image">
<input type="text" class="text2" placeholder="Category" name="category">
<input type="text" class="text2" placeholder="Init Price" name="initprice">
<input type="datetime-local" class="text2" placeholder="Start Date" name="startdate">
<input type="datetime-local" class="text2" placeholder="End Date" name="enddate">
<button type="submit" class="button2">Add Item</button>
</div>
</form>
</div>
					</div>

					<div class="join2-redesign-2-help">
						<a href="/help">Help</a>
						-
						<a href="/help/how-it-work">How it Works</a>
					</div>
				</div>
			</div>

			<div style="clear:both;"></div>

			
			<div class="navi desktop-navigation" role="navigation">
				<a href="/" class="navbutton user_only">Auctions</a><!--
                --><a class="navbutton" onclick="document.getElementById('modal-login').style.display='block'">Log in</a><!--
                --><a class="navbutton" onclick="document.getElementById('modal-register').style.display='block'">Register</a><!--
                --><a class="navbutton" onclick="document.getElementById('modal-add-item').style.display='block'">Add new item</a><!--
                                --><a href="/logout/" class="navbutton">Logout</a><!--
                --><a href="/dashboard" class="navbutton user_only"><span class="icon-user"></span> My Dashboard</a><!--
                --><a href="/login" role="button" class="navbutton join_only">Log in</a><!--
                --><a href="/" class="navbutton guest_only getstarted"><span class="icon-user"></span>Help</a><!--
                --><a href="/join2" class="navbutton new_only getstarted">&gt; Start Bidding!</a>
			</div>

			
			
			<div id='promoBannerContainer' data-server_time="1557070669">
	<div class='frontpage_banner' data-promo_end='1557126000'><style type="text/css">
    .frontpage_banner_d .timer {
        color: #fff;
        position: absolute;
        font-weight: bold;
    }

    .bidpack_banner_d .timer {
        color: #fff;
        position: absolute;
        font-weight: bold;
    }


    @media (min-width: 1200px) {
        .frontpage_banner_d .timer {
            font-size: 25px !important;
            left: 755px;
            top: 170px;
        }

        .bidpack_banner_d .timer {
            font-size: 25px !important;
            left: 755px;
            top: 130px;
        }

        .extra-banner {
            font-size: 20px;
        }
    }

    @media (min-width: 980px) and (max-width: 1199px) {
        .frontpage_banner_d .timer {
            font-size: 20px !important;
            left: 630px;
            top: 145px;
        }

        .bidpack_banner_d .timer {
            font-size: 20px !important;
            left: 630px;
            top: 105px;
        }

        .extra-banner {
            font-size: 17px;
        }
    }

    @media (min-width: 768px) and (max-width: 979px) {
        .frontpage_banner_d .timer {
            font-size: 15px !important;
            left: 470px;
            top: 100px;
        }

        .bidpack_banner_d .timer {
            font-size: 15px !important;
            left: 470px;
            top: 75px;
        }

        .extra-banner {
            font-size: 15px;
        }
    }




    .extra-banner {
        color: #fff;
        background-color: #0A4461;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        text-align: center;
        padding: 15px;
        line-height: 1.1em;
    }


    .primary_color_banner {
        color: #fff;
    }

    .secondary_color_banner {
        color: #fff;
    }

    .tertiary_color_banner {
        color: #fff;
        margin: 4px;
        padding: 7px
    }

    .tertiary_color_banner small {
        color: inherit;
    }

    .basic_banner_m,
    .background_banner_mm {
        background: #1E2C32;
    }

    .button_color_banner {
        color: #000 !important;
        background: #CACACA;
        background: -webkit-gradient(linear, 0 0, 0 100%, from(#CACACA), color-stop(100%, #CACACA));
        background: -moz-linear-gradient(top, #CACACA, #CACACA 100%);
        background: -o-linear-gradient(top, #CACACA, #CACACA 100%);
        background: -ms-linear-gradient(top, #CACACA 0, #CACACA 100%);
        background: linear-gradient(top, #CACACA, #CACACA 100%);
        border: 1px solid #CACACA;
    }

    .text_strikethrough {
        text-decoration: line-through;
    }

    .basic_banner_m {
        width: 100%;
        margin: -10px auto 0 auto;
        border: 0;
        text-align: center;
        padding: 15px;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .frontpage_banner_d {
        font-size: 20px;
    }

    .frontpage_banner_m {
        padding: 15px;
    }

    .frontpage_banner_m h2,
    .bidpack_banner_m h2 {
        text-transform: uppercase;
        font-size:26px;
        line-height: 26px;
    }

    .frontpage_banner_m h3 {
        line-height: 90%;
    }

    .font_size_80 {
        font-size: 80%;
    }
    .font_size_100 {
        font-size: 100%;
    }
    .font_size_120 {
        font-size: 120%;
    }

    .font_size_160 {
        font-size: 160%;
    }

    .frontpage_banner_m a.button_banner {
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        padding: 12px 24px;
        font: normal normal bold 16px arial;
        text-decoration: none !important;
        position: relative;
    }

    .bidpack_banner_m {
        padding: 5px;
    }

    .bidpack_banner_d {
        font-size: 25px;
    }

    .background_banner_mm {
        margin: 0 auto;
        text-align: center;
        padding: 0.5em;
    }

    .padding_bottom_mm {
        padding: 0.5em;
    }

    .bottom_line_mm {
        padding: 0.5em;
        margin: 0;
    }

    .font_size_big_mm {
        font-size: 6vw;
    }

    .font_size_medium_mm {
        font-size: 5.6vw;
    }

    .font_size_small_mm {
        font-size: 4.2vw;
    }

    .banner_tahb {
        font-weight: bold;
        font-style: italic
    }

    .banner_header {
    }
</style>
<div class="frontpage_banner_d" data-bidpackids="" role="complementary">
    <a href="/buybids" aria-label="Buy bids page"><img src="/image/banner.jpg" alt="Friendship sale: Buy bids for only 13 cents each!"></a>
        <div class="timer">Sale ends in... <span class="promo_timer"></span></div>
        
</div>

<div class="bidpack_banner_d">
    <img src="https://static.dealdash.com/promo/2019/20190506_000000_friendshipsale_19_buybids5.png" alt="Friendship sale: Bids now only 13 cents each!">
        <div class="timer">Sale ends in... <span class="promo_timer"></span></div>
        
</div>
<div class="frontpage_banner_m basic_banner_m primary_color_banner" >
    <h2 class="tertiary_color_banner banner_header">
        Friendship sale
    </h2>

    

    <p class="font_size_120">
        All auction wins 50% OFF!
    </p>


    <p class="banner_tahb">
        Get free bids twice as fast!<br>
        <img src="https://static.dealdash.com/promo/2xtahb_trans.png" alt=""><br>
        Time As Highest Bidder meter will fill up twice as fast today!
    </p>







    <p class="font_size_160">Bids now
                13&cent; each!
    </p>
    <p><a href="/buybids" class="button_banner button_color_banner">Click here to see the offer &gt;</a></p>

            <p>Sale ends in... <strong class="promo_timer"></strong></p>
        
</div>

<div class="bidpack_banner_m basic_banner_m primary_color_banner">
    <h2 class="tertiary_color_banner banner_header">
        Friendship sale
    </h2>

    <p class="font_size_160">Bids now
                13&cent; each!
    </p>
            <p>Sale ends in... <strong class="promo_timer"></strong></p>
        
</div>
<div class="frontpage_banner_mm primary_color_banner">
    <div class="background_banner_mm">
        <span class="font_size_big_mm tertiary_color_banner banner_header">
            Friendship sale
        </span>

        

    <p class="primary_color_banner">
        All auction wins 50% OFF!
    </p>


    <p class="banner_tahb primary_color_banner">
        Get free bids <span style="background-color: #1E2C32; color: #fff;"><span class="dd-icon-bolt"></span>2x</span> as fast!<br>
        Time As Highest Bidder meter will fill up twice as fast today!
    </p>







        <p class="font_size_medium_mm primary_color_banner">Bids now
                        13&cent; each!
        </p>
        <a class="btn btn-danger" style="background-color: #CACACA !important; color: #000;"  href="/buybids">Click here to see the offer &gt;</a>

                    <p class="padding_bottom_mm font_size_small_mm primary_color_banner">Sale ends in... <strong class="promo_timer"></strong></p>
                
    </div>
</div>

<div class="bidpack_banner_mm">
    <div class="background_banner_mm">
        <span class="tertiary_color_banner font_size_big_mm banner_header">
            Friendship sale
        </span>

        <p class="font_size_medium_mm primary_color_banner">Bids now
                        13&cent; each!
        </p>

                    <p class="padding_bottom_mm font_size_small_mm primary_color_banner">Sale ends in... <strong class="promo_timer"></strong></p>
                
    </div>
</div>
</div></div>

<div class="navbar" id="homeSearchPanel">
	<div class="navbar-inner">
		<div class="container" role="navigation">
			<ul class="nav">
				<li><a href="#" class="categoryMenu showAllAuctionsMenu" role="button" data-query="all">All Auctions</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><span id="browse_label">Browse<span class="browseCategoriesLabel"> Categories</span></span> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li role="menuitem"><a href="#" class="categoryMenu" data-query="all">All auctions</a></li>
						<li role="menuitem"><a href="#" class="categoryMenu" data-query="new">New items</a></li>
						<li role="presentation" class="divider"></li>
						<li><a href="#" class="categoryMenu" data-query="7">Bid Packs</a></li><li><a href="#" class="categoryMenu" data-query="21">Bundles</a></li><li><a href="#" class="categoryMenu" data-query="23">Cars</a></li><li><a href="#" class="categoryMenu" data-query="3">Electronics & Computers</a></li><li><a href="#" class="categoryMenu" data-query="13">Fashion, Health & Beauty</a></li><li><a href="#" class="categoryMenu" data-query="6">Gift Cards</a></li><li><a href="#" class="categoryMenu" data-query="12">Hobbies, Toys, Outdoors & Games</a></li><li><a href="#" class="categoryMenu" data-query="10">Home, Garden & Tools</a></li><li><a href="#" class="categoryMenu" data-query="2">Kitchen & Dining</a></li>					</ul>
				</li>
			</ul>

			<form class="navbar-search form-search pull-right" action="index.php" id="auction_search" role="search">
				<div class="input-append">
					<input type="text" id="auction_search_q" name="q" class="span4 search-query" title="Search Auctions" placeholder="Search Auctions..." value="" aria-label="Search">
					<button type="submit" class="btn btn-inverse"><span class="icon-search icon-white"></span><span class="searchButtonLabel"> Search Auctions</span></button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="loadingAuctions" class="alert alert-info info">
	<img src="images/progress.gif" height="32" width="32" alt="Loading indicator"/> Loading auctions...
</div>

<div class="auction-container" id="auction-container" role="main">

<?php
	include('displayitem.php');
?>

	<div class="auctionbox product update onePerUser     " id="auction_7681851" data-bin="550" data-id="7681851" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681851" class="productname" aria-label="Volsen Atom Cordless Vacuum ">
        <span data-name="Volsen Atom Cordless Vacuum "></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30510_e0e0a24626_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681851" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$4.34</li>
		<li id="bidder_7681851" class="bidder">corychaney</li>
		<li id="time_7681851" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681851">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681851">Buy it Now for                 $550            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681851">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681851" data-auction-id="7681851" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681851" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681851">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681902" data-bin="4200" data-id="7681902" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681902" class="productname" aria-label="Joshua Steinberg Piedmont Wine Cabinet">
        <span data-name="Joshua Steinberg Piedmont Wine Cabinet"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/26312_fadfd9543d_26312_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681902" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.00</li>
		<li id="bidder_7681902" class="bidder"></li>
		<li id="time_7681902" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681902">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681902">Buy it Now for                 $4,200            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681902">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681902" data-auction-id="7681902" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681902" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681902">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681904" data-bin="360" data-id="7681904" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681904" class="productname" aria-label="600 Bid Pack!">
        <span data-name="600 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/976_b21fd4991a_Bidpacks%20-%20Product%20-%20600%20Bids.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681904" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.00</li>
		<li id="bidder_7681904" class="bidder"></li>
		<li id="time_7681904" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681904">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681904">Buy it Now for                 $360            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681904">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681904" data-auction-id="7681904" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681904" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681904">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681901" data-bin="199" data-id="7681901" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681901" class="productname" aria-label="Kamikoto 7-Inch Santoku Chef's Knife">
        <span data-name="Kamikoto 7-Inch Santoku Chef's Knife"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/24960_78db924f8c_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681901" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.00</li>
		<li id="bidder_7681901" class="bidder"></li>
		<li id="time_7681901" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681901">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681901">Buy it Now for                 $199            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681901">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681901" data-auction-id="7681901" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681901" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681901">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681903" data-bin="870" data-id="7681903" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681903" class="productname" aria-label="Aava Elements Stainless Steel Frying Pan">
        <span data-name="Aava Elements Stainless Steel Frying Pan"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30354_36e9eb401c_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681903" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.00</li>
		<li id="bidder_7681903" class="bidder"></li>
		<li id="time_7681903" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681903">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681903">Buy it Now for                 $870            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681903">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681903" data-auction-id="7681903" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681903" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681903">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681900" data-bin="105" data-id="7681900" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681900" class="productname" aria-label="175 Bid Pack!">
        <span data-name="175 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/31422_3a670701f5_175.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681900" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.10</li>
		<li id="bidder_7681900" class="bidder">chelliegirl</li>
		<li id="time_7681900" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681900">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681900">Buy it Now for                 $105            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681900">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681900" data-auction-id="7681900" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681900" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681900">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681899" data-bin="135" data-id="7681899" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681899" class="productname" aria-label="Sheaffer Fine Nib Red Calligraphy Pen (Set of 20)">
        <span data-name="Sheaffer Fine Nib Red Calligraphy Pen (Set of 20)"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/31331_06538cd07c_73400_A.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681899" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.13</li>
		<li id="bidder_7681899" class="bidder">Slippers22</li>
		<li id="time_7681899" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681899">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681899">Buy it Now for                 $135            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681899">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681899" data-auction-id="7681899" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681899" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681899">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681898" data-bin="150" data-id="7681898" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681898" class="productname" aria-label="Ashlynn Avenue - Maisie Silver Blossom, Silver-Plated, 1.1 Ctw Drop Earrings">
        <span data-name="Ashlynn Avenue - Maisie Silver Blossom, Silver-Plated, 1.1 Ctw Drop Earrings"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28299_c91524646b_earrings100.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681898" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.28</li>
		<li id="bidder_7681898" class="bidder">Famerob</li>
		<li id="time_7681898" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681898">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681898">Buy it Now for                 $150            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681898">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681898" data-auction-id="7681898" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681898" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681898">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681897" data-bin="120" data-id="7681897" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681897" class="productname" aria-label="200 Bid Pack!">
        <span data-name="200 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/3395_0289679589_Bidpacks%20-%20Product%20-%20200%20Bids.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681897" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.39</li>
		<li id="bidder_7681897" class="bidder">trbotrek</li>
		<li id="time_7681897" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681897">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681897">Buy it Now for                 $120            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681897">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681897" data-auction-id="7681897" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681897" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681897">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update onePerUser     " id="auction_7681895" data-bin="1880" data-id="7681895" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681895" class="productname" aria-label="Wilcott Weaves Midnight Rhône Rug">
        <span data-name="Wilcott Weaves Midnight Rhône Rug"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30007_b826e36449_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681895" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.64</li>
		<li id="bidder_7681895" class="bidder">Bpierson83</li>
		<li id="time_7681895" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681895">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681895">Buy it Now for                 $1,880            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681895">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681895" data-auction-id="7681895" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681895" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681895">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681894" data-bin="150" data-id="7681894" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681894" class="productname" aria-label="250 Bid Pack!">
        <span data-name="250 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/24934_bcccbee8a2_Bidpacks%20-%20Product%20-%20250%20Bids.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681894" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.75</li>
		<li id="bidder_7681894" class="bidder">ALLREALallIn</li>
		<li id="time_7681894" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681894">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681894">Buy it Now for                 $150            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681894">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681894" data-auction-id="7681894" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681894" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681894">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681893" data-bin="270" data-id="7681893" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681893" class="productname" aria-label="Kamikoto Shogai Cutting Board | Maple Wood">
        <span data-name="Kamikoto Shogai Cutting Board | Maple Wood"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30139_c36bcc75ec_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681893" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.90</li>
		<li id="bidder_7681893" class="bidder">Yenni_ns</li>
		<li id="time_7681893" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681893">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681893">Buy it Now for                 $270            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681893">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681893" data-auction-id="7681893" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681893" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681893">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681892" data-bin="210" data-id="7681892" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681892" class="productname" aria-label="Ashlynn Avenue - Aurora 18K White-Gold Plated Weave Ring 0.42 Ctw - Size 8">
        <span data-name="Ashlynn Avenue - Aurora 18K White-Gold Plated Weave Ring 0.42 Ctw - Size 8"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/29867_4c9991c99f_aa_aurora_wg_1-01.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681892" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$0.91</li>
		<li id="bidder_7681892" class="bidder">izzysails2004</li>
		<li id="time_7681892" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681892">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681892">Buy it Now for                 $210            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681892">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681892" data-auction-id="7681892" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681892" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681892">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681890" data-bin="120" data-id="7681890" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681890" class="productname" aria-label="200 Bid Pack!">
        <span data-name="200 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/3395_0289679589_Bidpacks%20-%20Product%20-%20200%20Bids.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681890" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.12</li>
		<li id="bidder_7681890" class="bidder">joelora</li>
		<li id="time_7681890" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681890">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681890">Buy it Now for                 $120            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681890">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681890" data-auction-id="7681890" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681890" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681890">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681888" data-bin="520" data-id="7681888" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681888" class="productname" aria-label="Thaynards - Uptown Shoe Shine Machine ">
        <span data-name="Thaynards - Uptown Shoe Shine Machine "></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28158_30e55f8359_Thaynards3.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681888" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.22</li>
		<li id="bidder_7681888" class="bidder">BslammerP</li>
		<li id="time_7681888" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681888">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681888">Buy it Now for                 $520            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681888">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681888" data-auction-id="7681888" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681888" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681888">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681889" data-bin="135" data-id="7681889" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681889" class="productname" aria-label="Sheaffer Fine Nib Red Calligraphy Pen (Set of 20)">
        <span data-name="Sheaffer Fine Nib Red Calligraphy Pen (Set of 20)"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/31331_06538cd07c_73400_A.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681889" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.19</li>
		<li id="bidder_7681889" class="bidder">tiffeney1</li>
		<li id="time_7681889" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681889">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681889">Buy it Now for                 $135            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681889">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681889" data-auction-id="7681889" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681889" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681889">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681885" data-bin="170" data-id="7681885" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681885" class="productname" aria-label="Ashlynn Avenue - Emrys 18K Rose-Gold Plated Weave Ring 0.24 Ctw - Size 6">
        <span data-name="Ashlynn Avenue - Emrys 18K Rose-Gold Plated Weave Ring 0.24 Ctw - Size 6"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/29873_64c5839d10_aa_emrys_weave_1-01.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681885" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.25</li>
		<li id="bidder_7681885" class="bidder">oOiOo</li>
		<li id="time_7681885" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681885">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681885">Buy it Now for                 $170            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681885">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681885" data-auction-id="7681885" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681885" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681885">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update onePerUser     " id="auction_7681886" data-bin="890" data-id="7681886" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681886" class="productname" aria-label="Aava Elements Stainless Steel Casserole Pot">
        <span data-name="Aava Elements Stainless Steel Casserole Pot"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30353_53b63eba88_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681886" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.28</li>
		<li id="bidder_7681886" class="bidder">buffalogals4u</li>
		<li id="time_7681886" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681886">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681886">Buy it Now for                 $890            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681886">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681886" data-auction-id="7681886" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681886" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681886">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681887" data-bin="135" data-id="7681887" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681887" class="productname" aria-label="225 Bid Pack!">
        <span data-name="225 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/31423_ce0e38ea13_225.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681887" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.26</li>
		<li id="bidder_7681887" class="bidder">jensinden</li>
		<li id="time_7681887" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681887">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681887">Buy it Now for                 $135            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681887">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681887" data-auction-id="7681887" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681887" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681887">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681883" data-bin="679" data-id="7681883" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681883" class="productname" aria-label="Aava 24-Piece Flatware Set">
        <span data-name="Aava 24-Piece Flatware Set"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/24491_0510baf559_aava50.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681883" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.46</li>
		<li id="bidder_7681883" class="bidder">tiffeney1</li>
		<li id="time_7681883" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681883">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681883">Buy it Now for                 $679            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681883">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681883" data-auction-id="7681883" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681883" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681883">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681884" data-bin="238" data-id="7681884" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681884" class="productname" aria-label="The Barrel Shack™ - The Hayes - Handmade Messenger Bag (Ships by 7/10)">
        <span data-name="The Barrel Shack™ - The Hayes - Handmade Messenger Bag (Ships by 7/10)"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/25483_e5eeb28ade_25483_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681884" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.38</li>
		<li id="bidder_7681884" class="bidder">nate619</li>
		<li id="time_7681884" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681884">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681884">Buy it Now for                 $238            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681884">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681884" data-auction-id="7681884" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681884" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681884">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681881" data-bin="1600" data-id="7681881" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681881" class="productname" aria-label="Bolvaint - Eanes Classic Minute, Men's Watch, Black">
        <span data-name="Bolvaint - Eanes Classic Minute, Men's Watch, Black"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28190_023800f519_blackblackwatch1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681881" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.56</li>
		<li id="bidder_7681881" class="bidder">suevest</li>
		<li id="time_7681881" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681881">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681881">Buy it Now for                 $1,600            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681881">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681881" data-auction-id="7681881" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681881" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681881">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681882" data-bin="105" data-id="7681882" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681882" class="productname" aria-label="175 Bid Pack!">
        <span data-name="175 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/31422_3a670701f5_175.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681882" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.53</li>
		<li id="bidder_7681882" class="bidder">2good2B4got</li>
		<li id="time_7681882" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681882">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681882">Buy it Now for                 $105            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681882">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681882" data-auction-id="7681882" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681882" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681882">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update onePerUser     " id="auction_7681877" data-bin="3400" data-id="7681877" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681877" class="productname" aria-label="Bolvaint Adelais Lambskin Moto Jacket – Women’s, S">
        <span data-name="Bolvaint Adelais Lambskin Moto Jacket – Women’s, S"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/29713_eaa27dd86a_29355_ad5340981b_bol_wjacket91.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681877" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$1.91</li>
		<li id="bidder_7681877" class="bidder">Watchmenotstop</li>
		<li id="time_7681877" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681877">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681877">Buy it Now for                 $3,400            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681877">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681877" data-auction-id="7681877" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681877" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681877">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681875" data-bin="245" data-id="7681875" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681875" class="productname" aria-label="The Barrel Shack™ - The Washington - Handmade Shoulder Bag (Ships by 7/10)">
        <span data-name="The Barrel Shack™ - The Washington - Handmade Shoulder Bag (Ships by 7/10)"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/25686_000d8d16bc_25686_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681875" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$2.40</li>
		<li id="bidder_7681875" class="bidder">AmazonSun</li>
		<li id="time_7681875" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681875">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681875">Buy it Now for                 $245            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681875">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681875" data-auction-id="7681875" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681875" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681875">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681876" data-bin="270" data-id="7681876" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681876" class="productname" aria-label="450 Bid Pack!">
        <span data-name="450 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/31426_eef370a539_450.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681876" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$2.27</li>
		<li id="bidder_7681876" class="bidder">bronco2081</li>
		<li id="time_7681876" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681876">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681876">Buy it Now for                 $270            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681876">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681876" data-auction-id="7681876" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681876" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681876">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681874" data-bin="150" data-id="7681874" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681874" class="productname" aria-label="Ashlynn Avenue - Faith 18K Rose Gold-Plated Drop Pendant 0.6 Ctw">
        <span data-name="Ashlynn Avenue - Faith 18K Rose Gold-Plated Drop Pendant 0.6 Ctw"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30892_bfcd4b9000_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681874" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$2.24</li>
		<li id="bidder_7681874" class="bidder">saadaq124</li>
		<li id="time_7681874" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681874">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681874">Buy it Now for                 $150            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681874">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681874" data-auction-id="7681874" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681874" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681874">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681873" data-bin="120" data-id="7681873" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681873" class="productname" aria-label="Ashlynn Avenue - Symphony Luna 18K White-Gold 0.4 Ctw Plated Ring - Size 6">
        <span data-name="Ashlynn Avenue - Symphony Luna 18K White-Gold 0.4 Ctw Plated Ring - Size 6"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/29291_534e6f123f_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681873" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$2.24</li>
		<li id="bidder_7681873" class="bidder">ejbiii</li>
		<li id="time_7681873" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681873">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681873">Buy it Now for                 $120            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681873">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681873" data-auction-id="7681873" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681873" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681873">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681871" data-bin="208" data-id="7681871" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681871" class="productname" aria-label="Kamikoto Chuka Bocho Cleaver">
        <span data-name="Kamikoto Chuka Bocho Cleaver"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30137_89ddbd5489_2-01.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681871" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$2.53</li>
		<li id="bidder_7681871" class="bidder">Copykatt111</li>
		<li id="time_7681871" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681871">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681871">Buy it Now for                 $208            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681871">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681871" data-auction-id="7681871" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681871" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681871">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681869" data-bin="475" data-id="7681869" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681869" class="productname" aria-label="Bardenshire Enchantment I60-105 - Water Fountain">
        <span data-name="Bardenshire Enchantment I60-105 - Water Fountain"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/26434_f18c4ac53a_A382758%20-%20DSC3981%20-%20v.1.0.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681869" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$2.62</li>
		<li id="bidder_7681869" class="bidder">AmazonSun</li>
		<li id="time_7681869" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681869">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681869">Buy it Now for                 $475            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681869">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681869" data-auction-id="7681869" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681869" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681869">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681864" data-bin="150" data-id="7681864" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681864" class="productname" aria-label="Ashlynn Avenue - Faith 18K Gold-Plated Drop Pendant 0.6 Ctw">
        <span data-name="Ashlynn Avenue - Faith 18K Gold-Plated Drop Pendant 0.6 Ctw"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30893_64226bfb3b_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681864" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$2.90</li>
		<li id="bidder_7681864" class="bidder">Sleephead</li>
		<li id="time_7681864" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681864">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681864">Buy it Now for                 $150            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681864">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681864" data-auction-id="7681864" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681864" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681864">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update onePerUser     " id="auction_7681865" data-bin="1080" data-id="7681865" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681865" class="productname" aria-label="Wilcott Weaves River Waikato Rug">
        <span data-name="Wilcott Weaves River Waikato Rug"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/29986_28bd410a75_2.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681865" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$2.84</li>
		<li id="bidder_7681865" class="bidder">jeanice083071</li>
		<li id="time_7681865" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681865">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681865">Buy it Now for                 $1,080            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681865">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681865" data-auction-id="7681865" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681865" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681865">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681862" data-bin="945" data-id="7681862" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681862" class="productname" aria-label="J.W. Krogman - Set of 6 Dinner Plates in Fine Bone China - The Allingham Gold Tableware Collection">
        <span data-name="J.W. Krogman - Set of 6 Dinner Plates in Fine Bone China - The Allingham Gold Tableware Collection"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28683_32077a729d_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681862" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$3.16</li>
		<li id="bidder_7681862" class="bidder">sforzando</li>
		<li id="time_7681862" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681862">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681862">Buy it Now for                 $945            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681862">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681862" data-auction-id="7681862" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681862" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681862">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681863" data-bin="420" data-id="7681863" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681863" class="productname" aria-label="700 Bid Pack!">
        <span data-name="700 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/31427_b1d100e5b0_700.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681863" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$3.19</li>
		<li id="bidder_7681863" class="bidder">lasa851</li>
		<li id="time_7681863" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681863">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681863">Buy it Now for                 $420            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681863">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681863" data-auction-id="7681863" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681863" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681863">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681859" data-bin="1600" data-id="7681859" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681859" class="productname" aria-label="Bolvaint - Eanes Classic Minute, Men's Watch, Black">
        <span data-name="Bolvaint - Eanes Classic Minute, Men's Watch, Black"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28190_023800f519_blackblackwatch1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681859" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$3.14</li>
		<li id="bidder_7681859" class="bidder">localsocalgirl</li>
		<li id="time_7681859" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681859">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681859">Buy it Now for                 $1,600            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681859">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681859" data-auction-id="7681859" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681859" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681859">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681860" data-bin="142" data-id="7681860" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681860" class="productname" aria-label="The Barrel Shack™ - The Alexa - Handmade Throw Pillow">
        <span data-name="The Barrel Shack™ - The Alexa - Handmade Throw Pillow"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30988_f2a740db49_Alex-2.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681860" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$3.17</li>
		<li id="bidder_7681860" class="bidder">leejazzy</li>
		<li id="time_7681860" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681860">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681860">Buy it Now for                 $142            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681860">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681860" data-auction-id="7681860" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681860" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681860">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681857" data-bin="990" data-id="7681857" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681857" class="productname" aria-label="Aava - Elements Stainless Steel Sauté Pan with lid">
        <span data-name="Aava - Elements Stainless Steel Sauté Pan with lid"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28155_eab02cebd6_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681857" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$3.48</li>
		<li id="bidder_7681857" class="bidder">sargentlucky13</li>
		<li id="time_7681857" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681857">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681857">Buy it Now for                 $990            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681857">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681857" data-auction-id="7681857" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681857" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681857">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681854" data-bin="75" data-id="7681854" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681854" class="productname" aria-label="125 Bid Pack!">
        <span data-name="125 Bid Pack!"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/31421_84d9860258_125.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681854" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$3.95</li>
		<li id="bidder_7681854" class="bidder">squid00</li>
		<li id="time_7681854" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681854">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681854">Buy it Now for                 $75            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681854">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681854" data-auction-id="7681854" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681854" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681854">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681852" data-bin="459" data-id="7681852" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681852" class="productname" aria-label="Crossford Furniture Co. Executive Lumbar-Support Office Chair ">
        <span data-name="Crossford Furniture Co. Executive Lumbar-Support Office Chair "></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/26639_b4d05e6313_41.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681852" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$4.10</li>
		<li id="bidder_7681852" class="bidder">MeatBurner</li>
		<li id="time_7681852" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681852">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681852">Buy it Now for                 $459            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681852">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681852" data-auction-id="7681852" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681852" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681852">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681848" data-bin="1850" data-id="7681848" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681848" class="productname" aria-label="Bolvaint - Soto Satchel ">
        <span data-name="Bolvaint - Soto Satchel "></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28339_44fbf89241_B1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681848" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$4.22</li>
		<li id="bidder_7681848" class="bidder">studio1</li>
		<li id="time_7681848" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681848">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681848">Buy it Now for                 $1,850            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681848">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681848" data-auction-id="7681848" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681848" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681848">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681821" data-bin="2800" data-id="7681821" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681821" class="productname" aria-label="Bolvaint - Ines Shoulder Bag in Beige Sable  ">
        <span data-name="Bolvaint - Ines Shoulder Bag in Beige Sable  "></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28344_9b65b32746_BB9.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681821" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$6.49</li>
		<li id="bidder_7681821" class="bidder">KelDot</li>
		<li id="time_7681821" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681821">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681821">Buy it Now for                 $2,800            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681821">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681821" data-auction-id="7681821" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681821" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681821">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681825" data-bin="2500" data-id="7681825" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681825" class="productname" aria-label="Bolvaint - René Noir Motif Bag  ">
        <span data-name="Bolvaint - René Noir Motif Bag  "></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28343_5ff0477254_B1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681825" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$6.04</li>
		<li id="bidder_7681825" class="bidder">Karma4u62</li>
		<li id="time_7681825" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681825">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681825">Buy it Now for                 $2,500            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681825">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681825" data-auction-id="7681825" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681825" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681825">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681795" data-bin="3400" data-id="7681795" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681795" class="productname" aria-label="Bolvaint Adelais Lambskin Moto Jacket – Women’s, S">
        <span data-name="Bolvaint Adelais Lambskin Moto Jacket – Women’s, S"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/29355_ad5340981b_bol_wjacket91.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681795" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$8.21</li>
		<li id="bidder_7681795" class="bidder">pmatson</li>
		<li id="time_7681795" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681795">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681795">Buy it Now for                 $3,400            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681795">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681795" data-auction-id="7681795" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681795" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681795">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update onePerUser     " id="auction_7681836" data-bin="2030" data-id="7681836" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681836" class="productname" aria-label="Savannah Dawn - Oil Painting from Far East Collection - 59-in x 59-in">
        <span data-name="Savannah Dawn - Oil Painting from Far East Collection - 59-in x 59-in"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30866_556d685bc7_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681836" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$5.26</li>
		<li id="bidder_7681836" class="bidder">localsocalgirl</li>
		<li id="time_7681836" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681836">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681836">Buy it Now for                 $2,030            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681836">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681836" data-auction-id="7681836" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681836" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681836">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681806" data-bin="2150" data-id="7681806" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681806" class="productname" aria-label="Bardenshire Buckingham O45-232 - Water Fountain ">
        <span data-name="Bardenshire Buckingham O45-232 - Water Fountain "></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/26977_f67f0feb5c_MZ13448GA%20front%20-%20v.1.0.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681806" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$7.43</li>
		<li id="bidder_7681806" class="bidder">Sleephead</li>
		<li id="time_7681806" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681806">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681806">Buy it Now for                 $2,150            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681806">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681806" data-auction-id="7681806" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681806" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681806">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681803" data-bin="2250" data-id="7681803" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681803" class="productname" aria-label="Bolvaint - Cabot Briefcase ">
        <span data-name="Bolvaint - Cabot Briefcase "></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28338_f78c9e78b6_cabot1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681803" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$7.88</li>
		<li id="bidder_7681803" class="bidder">Nimbusthecat</li>
		<li id="time_7681803" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681803">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681803">Buy it Now for                 $2,250            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681803">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681803" data-auction-id="7681803" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681803" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681803">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681830" data-bin="1500" data-id="7681830" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681830" class="productname" aria-label="Bolvaint Poenui Mother-of-Pearl Ladies’ Watch - Tahitian Grey">
        <span data-name="Bolvaint Poenui Mother-of-Pearl Ladies’ Watch - Tahitian Grey"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/29808_59f09f98e5_bolvaint_watch_dark2.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681830" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$5.57</li>
		<li id="bidder_7681830" class="bidder">jenniferny</li>
		<li id="time_7681830" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681830">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681830">Buy it Now for                 $1,500            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681830">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681830" data-auction-id="7681830" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681830" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681830">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681779" data-bin="1850" data-id="7681779" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681779" class="productname" aria-label="Wilcott Weaves Westminster Trellis Rug">
        <span data-name="Wilcott Weaves Westminster Trellis Rug"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30020_17150b758b_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681779" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$9.36</li>
		<li id="bidder_7681779" class="bidder">skisdo</li>
		<li id="time_7681779" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681779">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681779">Buy it Now for                 $1,850            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681779">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681779" data-auction-id="7681779" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681779" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681779">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681687" data-bin="4200" data-id="7681687" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681687" class="productname" aria-label="Joshua Steinberg Piedmont Wine Cabinet">
        <span data-name="Joshua Steinberg Piedmont Wine Cabinet"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/26312_fadfd9543d_26312_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681687" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$21.72</li>
		<li id="bidder_7681687" class="bidder">bigbuckhunter</li>
		<li id="time_7681687" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681687">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681687">Buy it Now for                 $4,200            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681687">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681687" data-auction-id="7681687" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681687" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681687">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681838" data-bin="850" data-id="7681838" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681838" class="productname" aria-label="Somtex SplitCell Memory Foam Mattress Topper - Queen Size">
        <span data-name="Somtex SplitCell Memory Foam Mattress Topper - Queen Size"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30320_8c174f65e2_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681838" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$5.20</li>
		<li id="bidder_7681838" class="bidder">jamminonthe1</li>
		<li id="time_7681838" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681838">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681838">Buy it Now for                 $850            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681838">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681838" data-auction-id="7681838" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681838" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681838">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681745" data-bin="1600" data-id="7681745" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681745" class="productname" aria-label="Bolvaint - Eanes Classic Minute, Men's Watch, White">
        <span data-name="Bolvaint - Eanes Classic Minute, Men's Watch, White"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/28189_bd1e3afea3_blackwhitewatch1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681745" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$12.69</li>
		<li id="bidder_7681745" class="bidder">bookies19525</li>
		<li id="time_7681745" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681745">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681745">Buy it Now for                 $1,600            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681745">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681745" data-auction-id="7681745" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681745" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681745">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681751" data-bin="890" data-id="7681751" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681751" class="productname" aria-label="Aava Elements Stainless Steel Casserole Pot">
        <span data-name="Aava Elements Stainless Steel Casserole Pot"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30353_53b63eba88_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681751" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$11.97</li>
		<li id="bidder_7681751" class="bidder">THUNDERHIGH</li>
		<li id="time_7681751" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681751">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681751">Buy it Now for                 $890            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681751">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681751" data-auction-id="7681751" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681751" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681751">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681746" data-bin="870" data-id="7681746" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681746" class="productname" aria-label="Aava Elements Stainless Steel Frying Pan">
        <span data-name="Aava Elements Stainless Steel Frying Pan"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30354_36e9eb401c_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681746" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$12.60</li>
		<li id="bidder_7681746" class="bidder">Pperrotta</li>
		<li id="time_7681746" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681746">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681746">Buy it Now for                 $870            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681746">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681746" data-auction-id="7681746" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681746" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681746">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update onePerUser     " id="auction_7681833" data-bin="380" data-id="7681833" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681833" class="productname" aria-label="Sheaffer 200 Matte Metallic Pink w/ Chrome Trim Ballpoint Pen (Set of 20)">
        <span data-name="Sheaffer 200 Matte Metallic Pink w/ Chrome Trim Ballpoint Pen (Set of 20)"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/31367_ac2294fc8e_E2915651DC_A.png?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681833" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$5.54</li>
		<li id="bidder_7681833" class="bidder">Vanwags1</li>
		<li id="time_7681833" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681833">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681833">Buy it Now for                 $380            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681833">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681833" data-auction-id="7681833" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681833" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681833">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update onePerUser     " id="auction_7681639" data-bin="2010" data-id="7681639" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681639" class="productname" aria-label="Forest Rain - Oil Painting from Far East Collection - 47.2-in x 31.5-in">
        <span data-name="Forest Rain - Oil Painting from Far East Collection - 47.2-in x 31.5-in"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/30849_d602233c20_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681639" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$31.72</li>
		<li id="bidder_7681639" class="bidder">djrockinr</li>
		<li id="time_7681639" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681639">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681639">Buy it Now for                 $2,010            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681639">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681639" data-auction-id="7681639" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681639" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681639">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="auctionbox product update      " id="auction_7681828" data-bin="370" data-id="7681828" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">
    <a href="../battle.php?auction_id=7681828" class="productname" aria-label="New Haven - Large Column Floor Lamp - Beige">
        <span data-name="New Haven - Large Column Floor Lamp - Beige"></span>
    </a>
    <div class="productImage"><img src="https://img.dealdash.com/25362_c8fc0815a1_25362_1.jpg?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>
	<ul>
		<li id="price_7681828" class="price discountpromo tooltip_title"  title="During the Friendship Sale you have to pay only 50% of the final auction price when you win! And shipping on DealDash is always free!">$6.16</li>
		<li id="bidder_7681828" class="bidder">girafficjam</li>
		<li id="time_7681828" class="time"></li>
	</ul>
	<div class="bidbutton-wrapper" data-id="7681828">
		<a class="bidlink bidNow bidbutton" href="join">Join auction</a>	</div>

	                    <a class="buyItNow" href="#" data-id="7681828">Buy it Now for                 $370            </a>
            
	<a class="sold" href="../battle.php?auction_id=7681828">Sold</a>

	
	
	<span class="onePerUser tooltip_title" title="You may only win this product once.">One per user</span>
	<span class="onePerWeek tooltip_title" title="">One per week</span>
		<span class="win_one_get_one_flag tooltip_title" title="This is a Win 1 Get 1 Free Auction.<br>The winner will receive two of this product!"></span>
			<a title="Bookmark this auction!" href="/bookmark.php?save=7681828" data-auction-id="7681828" class="tooltip_title bookmark save">Bookmark this auction</a>
	    	<a href="../battle.php?auction_id=7681828" aria-label="This is a No Jumper Auction"><span class="no_jumper_stripe" id="no_jumper_stripe_7681828">This is a No Jumper Auction</span></a>

	<div class="bids_booked"><strong class="bids_booked_amount"></strong> Bids Booked</div>
</div><div class="clear"><!-- pagination --></div><div class="pagination"><ul><li class=" active  first "><a href="#" class="selectpage" data-pageindex="0"><div style="text-decoration: underline;" aria-current="page" >1</div></a></li><li class=""><a href="#" class="selectpage" data-pageindex="1"><div >2</div></a></li><li class=""><a href="#" class="selectpage" data-pageindex="2"><div >3</div></a></li><li class=" last "><a href="#" class="selectpage" data-pageindex="3"><div >4</div></a></li><li class=""><a href="#" class="selectpage" data-pageindex="4"><div >5</div></a></li><li class=""><a href="#" class="selectpage" data-pageindex="5"><div >6</div></a></li><li class=""><a href="#" class="selectpage" data-pageindex="6"><div >7</div></a></li><li class=""><a href="#" class="selectpage" data-pageindex="7"><div >8</div></a></li><li class=""><a href="#" class="selectpage" data-pageindex="8"><div >9</div></a></li><li class="next"><a href="#" class="selectpage" data-pageindex="1"><div>Next</div></a></li></ul></div></div>

<div id="binModal" class="modal hide fade" tabindex="-1" role="dialog">
	<div class="modal-body">
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		<button class="btn btn-primary buy_now_dialog_button">Buy it Now!</button>
	</div>
</div>

			
		</div>

		
		<div id="footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="span2">
						<h2>Site links</h2>
						<ul>
							<li><a href="/">Auctions</a></li>
							<li class="logged_in_only"><a href="/dashboard">My dashboard</a></li>
							<li class="logged_in_only"><a href="/buybids">Buy bids</a></li>
							<li><a href="/winners">DealDash Reviews</a></li>
							<li><a href="/whats-the-catch">DealDash is Legit</a></li>
							<li class="guest_only"><a href="/login">Log in</a></li>
							<li class="guest_only"><a href="/join">Create account</a></li>
						</ul>
					</div>
					<div class="span2">
						<h2>Help</h2>
						<ul>
							<li><a href="/help/how-it-works">How it works</a></li>
							<li><a href="/help/auction">How to bid in an auction</a></li>
							<li class="tutorial-auction-link"><a href="/help/tutorial">Tutorial auction</a></li>
							<li><a href="/help/tips-and-tricks">Tips &amp; Tricks</a></li>
							<li><a href="/help/bid-pack">What is a bid pack?</a></li>
							<li><a href="/help/time-as-highest-bidder">What is "Time as highest bidder"?</a></li>
							<li><a href="/help/promotions">Promotions</a></li>
							<li><a href="/help/orders-and-shipping">Orders &amp; Shipping</a></li>
							<li><a href="/help/payments">Payments</a></li>
							<li><a href="/help/house-rules">House Rules</a></li>
						</ul>
					</div>
					<div class="span2">
						<h2>About</h2>
						<ul>
							<li><a href="/careers#our-team">Our team</a></li>
							<li><a href="/careers">Careers</a></li>
							<li><a href="/careers#our-mission">Our values</a></li>
							<li><a href="/terms-of-use">Terms of use</a></li>
                            <li><a href="/privacy-policy">Privacy policy</a></li>
                            <li><a href="/accessibility">Accessibility</a></li>
						</ul>
					</div>
					<div class="span3">
						<div class="blogs">
							<h2>Latest blogs</h2>
							<ul class="blogs"><li class="blogLink"> <span class="date">04/26/2019</span><br /><a href="https://dealdashblog.com/2019/04/26/a-spring-blast-of-new-items-to-go-live-on-saturday-april-27th/">A Spring Blast of New Items to Go Live on Saturday, April 27th!</a></li><li class="blogLink"> <span class="date">04/16/2019</span><br /><a href="https://dealdashblog.com/2019/04/16/hop-on-dealdash-this-week-for-a-special-easter-egg-hunt-and-even-more-fun-events/">Hop On DealDash this Week for a Special Easter Egg Hunt and Even More Fun Events!</a></li><li class="blogLink"> <span class="date">03/26/2019</span><br /><a href="https://dealdashblog.com/2019/03/26/celebrating-10-years-of-dealdash-select-highlights/">Celebrating 10 Years of DealDash – Select Highlights</a></li><li class="last"> <a href="https://dealdashblog.com">More posts</a></li></ul>						</div>
											</div>
					<div class="span3">
						<div class="footer_cta">
							<ul class="footerChecklist"><li><span class="tick"></span> FREE Shipping on all items!</li><li class="HFBPR_show"><span class="tick"></span> Amazing Deals 24/7!</li><li class="HFBPR_hide"><span class="tick"></span> <span class="tooltip_title" title="Applies to first bid pack purchase only. To get the refund email refunds@dealdash.com.">90-Day money back guarantee!</span></li></ul><a href="/join.php" id="FooterCTAButton">Get Started</a>						</div>

						<div class="social-links">
							<a href="https://www.youtube.com/DealDashOfficial" class="youtube" target="_blank">DealDash on YouTube (opens in a new window)</a>
							<a href="https://www.facebook.com/DealDash" class="facebook" target="_blank">DealDash on Facebook (opens in a new window)</a>
							<a href="https://twitter.com/DealDash" class="twitter" target="_blank">DealDash on Twitter (opens in a new window)</a>
							<a href="https://www.pinterest.com/dealdash/" class="pinterest" target="_blank">DealDash on Pinterest (opens in a new window)</a>
							<!--a href="https://plus.google.com/+DealDash/posts" class="google-plus" target="_blank">DealDash on Google+ (opens in a new window)</a-->
							<a href="https://play.google.com/store/apps/details?id=com.dealdash" class="google-play" target="_blank">DealDash on Google Play (opens in a new window)</a>
							<a href="https://about.me/DealDash" class="aboutme" target="_blank">DealDash on About.me (opens in a new window)</a>
							<a href="https://www.linkedin.com/company/dealdash" class="linkedin" target="_blank">DealDash on LinkedIn (opens in a new window)</a>
							<a href="https://en.wikipedia.org/wiki/DealDash" class="wikipedia" target="_blank">DealDash on Wikipedia (opens in a new window)</a>
							<a href="https://www.crunchbase.com/organization/dealdash" class="crunchbase" target="_blank">DealDash on Crunchbase (opens in a new window)</a>
							<a href="https://www.sitejabber.com/reviews/www.dealdash.com" class="sitejabber" target="_blank">DealDash on Sitejabber (opens in a new window)</a>
							<a href="https://www.instagram.com/dealdash_auctions" class="instagram" target="_blank">DealDash on Instagram (opens in a new window)</a>
						</div>

						
					</div>
				</div>
				<p class="s">
					U.S. Patent Pending
				</p>
			</div>
		</div>

		<div id="badge-earned-modal" class="modal hide fade in badge-earned-modal" tabindex="-1" role="dialog"></div>
<script type="application/x-template" id="badge-earned-modal-template">
	<div class="modal-body badge-detail-modal">
		<h2 class="badge-earned-title">New Badge Earned!</h2>
		<figure class="badge achieved">
			<img class="badge-image achieved" src="<%= image %>">
			<svg class="radial-chart" width="100" height="100" viewBox="0 0 100 100">
				<circle class="radial-chart-inactive" cx="50" cy="50" r="45" fill="none" />
				<circle class="radial-chart-value" cx="50" cy="50" r="45" fill="none" style="stroke-dasharray: 0; stroke-dashoffset: <%= progressData.dashoffset %>;" />
			</svg>
		</figure>
		<div class="badge-detail-text">
			<h3 class="badge-detail-title">
				<%= name %>
				<% if (progress && progress.level) { %>
					(Level <%= progress.level %>)
				<% } %>
			</h3>
			<div class="badge-congratulation-message"><%= congratulationMessage %></div>
		</div>
	</div>
	<div class="modal-footer">
		<a href="/badges" id="btn-badges-modal-view-other" class="btn btn-default" aria-hidden="true">View Other Badges</a>
		<a href="#" id="btn-badges-modal-dismiss" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">&nbsp; OK &nbsp;</a>
	</div>
</script>

		<!--
		  Hey there, seems like you're interested in our html,
		  would you be interested working with us?
		  Check out dealdash.com/careers
		-->

		<script>
			if (window.DealDashNative)
			{
				DealDashNative.versionShouldBeAtLeast(7, function(version)
				{
					DealDashNative.call('loadCompleted');
				});
			}
		</script>

        <script>
            dd.websocket.appKey = 'df027db501fc94fa40c9';
            $(document).ready(function() {
            	if (dd.user.isLogged()) {
                    dd.websocket.subscribe();
                }
            });
        </script>

        		
<div style="display: none">
	<!-- Google Code for 2012 Remarketing Remarketing List -->
	<script>
		/* <![CDATA[ */
		var google_conversion_id = 1017960582;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "4XKDCIrLxwIQhrGz5QM";
		var google_conversion_value = 0;
		/* ]]> */
	</script>
	<script  src="/js/conversion.js">
	</script>
	<noscript>
	<img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1017960582/?value=0&amp;label=4XKDCIrLxwIQhrGz5QM&amp;guid=ON&amp;script=0"/>
	</noscript>

		<!-- Google Code for Remarketing Tag -->
	<script>
	/* <![CDATA[ */
	var google_conversion_id = 979997032;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script  src="/js/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/979997032/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>

		<!-- Google Code for Remarketing Tag -->
	<script>
	/* <![CDATA[ */
	var google_conversion_id = 968991101;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script  src="/js/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/968991101/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	
	<!-- No tracking for logged out --><!-- Inspectlet disabled - logged out --><script>
	if (window.DealDashNative)
	{
		DealDashNative.versionShouldBeAtLeast(10, function(version)
		{
			var xml_http = new XMLHttpRequest();

			xml_http.onreadystatechange = function() {
				if (xml_http.readyState == 4 && xml_http.status == 200) {
					try
					{
						var data = jQuery.parseJSON(xml_http.responseText);
					}
					catch(e)
					{
						return;
					}

					data['purchases'] = data['purchases'] || [];
					data['events'] = data['events'] || [];

					for (var i=0; i<data['purchases'].length; ++i)
					{
						DealDashNative.call(
							'trackPurchase',
							data['purchases'][i]['amount'],
							data['purchases'][i]['type'],
							data['purchases'][i]['productId']
						);
					}

					DealDashNative.versionShouldBeAtLeast(11, function(version)
					{
						for (var i=0; i<data['events'].length; ++i)
						{
							DealDashNative.call(
								'trackEvent',
								data['events'][i]['name'],
								data['events'][i]['params']
							);
						}
					});
				}
			}

			xml_http.open("GET", '\/last\u002Dpurchases\u002Dand\u002Devents', true);
			xml_http.send();
		});
	}
</script><script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Dealdash",
        "url": "https://www.dealdash.com",
        "sameAs": [
            "https://www.facebook.com/DealDash",
            "https://www.instagram.com/dealdash_auctions",
            "https://www.linkedin.com/company/dealdash",
            "https://www.youtube.com/channel/UC6ZD-5Kzo8MeEQHaJ_ekyhw"
        ]
    }
</script>

</div>

		<script>
            if (dd.user.isLogged()) {
                (function() {
                    var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
                    se.src = '/js/42cb32ef-369e-4fd4-9eef-6527b78000fd.js';
                    var done = false;
                    se.onload = se.onreadystatechange = function() {
                        if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
                            done = true;
                            // Place your SnapEngage JS API code below
                            SnapEngage.setUserEmail('', true);
                                                    }
                    };
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
                })();
            }
		</script>
	<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"3a48b106b4","applicationID":"72838233","transactionName":"MlxQZUoFC0YFUkxbCwsWcURLEApYS1dKXQoRSVNWXUkJWgNWXVZJCkxG","queueTime":0,"applicationTime":101,"atts":"HhtTEwIfGEg=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

</html>
<?php
	if (isset($_SESSION['status']))
	{
		echo "<script>alert('".$_SESSION['status']."');</script>";
		unset($_SESSION['status']);
	}
?>