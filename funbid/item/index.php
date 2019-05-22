<?php
	session_start();
	include('../api.php');
	if (isset($_GET['auction_id'])) {
		$item = $_GET['auction_id'];
		// create curl resource
		$ch = curl_init();
		$data = array('itemid' => $item);
		curl_setopt($ch, CURLOPT_URL, $API_SERVER."/get-item-detail");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		// $output contains the output json
		$output = curl_exec($ch);
		// close curl resource to free up system resources 
		curl_close($ch);
		$item_info = json_decode($output, true);
		$item_id = $item;
		$item_name = $item_info['name'];
		$item_sellerid = $item_info['sellerid'];
		$item_image = $item_info['image'];
		$item_category = $item_info['category'];
		$item_initprice = $item_info['initprice'];
		$item_createdate = $item_info['createdate'];
		$item_startdate = $item_info['startdate'];
		$item_enddate = $item_info['enddate'];
		$item_iswinner = $item_info['iswinner'];
		$item_currentprice = $item_info['currentprice'];
		$item_currentwinner = $item_info['currentwinner'];
	} else die('Nothing to display');
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
						<a class="btn head_login_btn" href="/login" role="button"><span class="icon-lock"></span> Log in</a>
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
                --><a href="/login/" class="navbutton">Log in</a><!--
                --><a href="/register/" class="navbutton">Register</a><!--
                                --><a href="/add-new-item/" class="navbutton">Add new item</a><!--
                                --><a href="/logout/" class="navbutton">Logout</a><!--
                --><a href="/dashboard" class="navbutton user_only"><span class="icon-user"></span> My Dashboard</a><!--
                --><a href="/login" role="button" class="navbutton join_only">Log in</a><!--
                --><a href="/" class="navbutton guest_only getstarted"><span class="icon-user"></span>Help</a><!--
                --><a href="/join2" class="navbutton new_only getstarted">&gt; Start Bidding!</a>
			</div>

	

	
		<div id="fb-root"></div>
	<script>(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&version=v2.4";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<script>!function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
			if (!d.getElementById(id)) {
				js = d.createElement(s);
				js.id = id;
				js.src = p + '://platform.twitter.com/widgets.js';
				fjs.parentNode.insertBefore(js, fjs);
			}
		}(document, 'script', 'twitter-wjs');</script>


	<div class="row battle_container  desktop_redesign_guest_battle" id="auctionid" role="main"
		 data-id="7741927" >

		
		<div class="battle">
			

			<div class="battle_right">

				<div class="battleTagRow">
											<div class="productPageOnePerUser tooltip_title"
							 title="You may only win this product once."></div>
																			</div>
									<div class="auctionBookmark user_only" id="bookmark_auction_7741927">
																		<a title="Bookmark this auction!"
						   href="/bookmark.php?bookmarkAuctionAction=7741927"
						   data-auction-id="7741927" class="tooltip_title bookmark save"
						   data-original-title="Bookmark this auction!"><span>Bookmark this auction!</span></a>
					</div>
								<div class="auctionShare user_only">
					<a href="https://twitter.com/share" class="twitter-share-button" aria-label="Share in Twitter!" title="Share in Twitter!"></a>
					<div class="fb-like" data-width="78px" data-layout="button_count" data-action="like"
						 data-show-faces="false" data-share="false"></div>
				</div>

				<div class="clear"></div>

				
				<div class="auctionDataContainer">
					<div id="finalPrice">
						<span class="productPage_label">Current highest price:</span>
						<span class="productPage_bidInfo">
													<span id="productPage_bidInfo_current_price" class="">
								<?php
									echo $item_currentprice;
								?>
															</span>
						</span>
						<div class="clear"></div>
					</div>

					<div id="winningBidder">
						<span class="productPage_label">Your bid:</span>
					</div>

					<ul id="previousBids"></ul>

					<p id="time" class=" ">
											</p>

											
											
					<div id="auctionControls" >
																																																																	<div class="bbbox newbidbuddy ab user_only" id="bidbuddy">
								<div class="bidbuddyStatus hidden2" id="bidsLeftCount">
									0 Bids left
								</div>

								<input type="number" max="9999" min="0"
									   class="bidbuddybidbox" placeholder="Add Bids here" title="Add Bids here">
								<button id="cancelBidbuddy" class="bidbuddyCancel bidbuddyButton"
										type="button" title="Cancel BidBuddy"></button>
								<button id="bookBidsButton" class="bidbuddySubmit bidbuddyButton"
										type="button" title="Book Bids"></button>

								<div class="clear"></div>

								
							</div>
						
						<div class="clear"></div>
						
															
							
							<div class="clear"></div>

							

							<div class="ctaBox purchase-bids-box">
							<form action="../bid/?auction_id=<?php echo $item_id;?>" method="POST">
							<input type="number" name="newprice">	
									<div>
										<button type="submit" class="ctabutton_yellow_black" name="bid">Bid now</button>
									</div>
							</form>
								</div>
							
							<div class="alertButtonsAreaContainer logged_in_only">
								<div class="alertButtonsContainer">
									<a href="/alert-product-id?product-id=30540"
									   class="alertMe btn btn-primary showAlertMeButton">Alert
										Me</a>
									<a href="/disable-alert-product-id?product-id=30540"
									   class="removeAlertButton anyAuctionAlert btn btn-danger hideRemoveAlertMeButton">Remove
										Alert</a>
								</div>
								<div class="alertButtonExplanatoryText">Set an alert and we'll email you the next time
									this item comes up for auction.
								</div>
							</div>
						
					</div>

					
					<div class="clear"></div>
					<span class="sold sold-ribbon">SOLD</span>
				</div>
			</div>


			<div class="battle_left">

				<h1 class="auctionTitle">
				<?php
					echo $item_name;
				?>
				</h1>

				<div class="retailPriceTitle">Buy it Now price:
					<span>$
					<?php
						echo $item_currentprice;
					?>
					</span></div>

				<div id="auctionMainImage">

				<img class="mainpicture" src="<?php echo $item_image;?>?ch=Width%2CDPR&amp;fm=jpg&amp;fit=max&amp;w=468&amp;h=936" alt="<?php echo $item_name;?>">
																					
									</div>

				<div>
					<div class="wonlistContainer wonlistContainerBlue">
    
</div>

									</div>

			</div>

			<div class="clear"></div>

			

			<div class="productDescription">
				<h3><?php
					echo $item_name;
				?></h3>



	
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt=""
				 src="https://www.googleadservices.com/pagead/conversion/959561683/?label=wOI7CN2AqgMQ0__GyQM&amp;guid=ON&amp;script=0"/>
		</div>
	</noscript>

	

	

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
				</ul>
			</div>
			<div class="span3">
				<div class="blogs">
					<h2>Latest blogs</h2>
					<ul class="blogs"><li class="blogLink"> <span class="date">05/10/2019</span><br /><a href="https://dealdashblog.com/2019/05/10/7-amazing-dealdash-finds-to-give-mom-on-mothers-day/">7 Amazing DealDash Finds to Give Mom on Mother’s Day</a></li><li class="blogLink"> <span class="date">04/26/2019</span><br /><a href="https://dealdashblog.com/2019/04/26/a-spring-blast-of-new-items-to-go-live-on-saturday-april-27th/">A Spring Blast of New Items to Go Live on Saturday, April 27th!</a></li><li class="blogLink"> <span class="date">04/16/2019</span><br /><a href="https://dealdashblog.com/2019/04/16/hop-on-dealdash-this-week-for-a-special-easter-egg-hunt-and-even-more-fun-events/">Hop On DealDash this Week for a Special Easter Egg Hunt and Even More Fun Events!</a></li><li class="last"> <a href="https://dealdashblog.com">More posts</a></li></ul>
				</div>
				
			</div>
			<div class="span3">
				<div class="footer_cta">
											<a href="/support" class="ctabutton_yellow ctabutton_yellow_black">CONTACT SUPPORT</a>
									</div>

				<div class="social-links">
					<a href="https://www.youtube.com/DealDashOfficial" class="youtube" target="_blank">DealDash
						on YouTube (opens in a new window)</a>
					<a href="https://www.facebook.com/DealDash" class="facebook" target="_blank">DealDash on
						Facebook (opens in a new window)</a>
					<a href="http://en.wikipedia.org/wiki/DealDash" class="wikipedia" target="_blank">DealDash on
						Wikipedia (opens in a new window)</a>
					<a href="https://twitter.com/DealDash" class="twitter" target="_blank">DealDash on Twitter (opens in a new window)</a>
					<a href="https://www.linkedin.com/company/dealdash" class="linkedin" target="_blank">DealDash on
						LinkedIn (opens in a new window)</a>
					<a href="http://www.pinterest.com/dealdash/" class="pinterest" target="_blank">DealDash on
						Pinterest (opens in a new window)</a>
					<!--a href="https://plus.google.com/+DealDashOfficial" class="google-plus" target="_blank">DealDash on
						Google+ (opens in a new window)</a-->
					<a href="https://play.google.com/store/apps/details?id=com.dealdash" class="google-play"
					   target="_blank">DealDash on Google Play (opens in a new window)</a>
					<a href="http://about.me/DealDash" class="aboutme" target="_blank">DealDash on About.me (opens in a new window)</a>
					<a href="http://www.crunchbase.com/organization/dealdash" class="crunchbase" target="_blank">DealDash
						on Crunchbase (opens in a new window)</a>
					<a href="http://www.sitejabber.com/reviews/www.dealdash.com" class="sitejabber" target="_blank">DealDash
						on Sitejabber (opens in a new window)</a>
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
	if (dd.websocket) {
		dd.websocket.appKey = 'df027db501fc94fa40c9';
	}

	if (window.DealDashNative) {
		DealDashNative.versionShouldBeAtLeast(7, function (version) {
			DealDashNative.call('loadCompleted');
		});
	}
</script>

<script>
	$(document).ready(function() {
		if (dd.user.isLogged()) {
			dd.websocket.subscribe();
		}
	});
</script>


<script>
    if (dd.user.isLogged()) {
        (function () {
            var se = document.createElement('script');
            se.type = 'text/javascript';
            se.async = true;
            se.src = '//commondatastorage.googleapis.com/code.snapengage.com/js/42cb32ef-369e-4fd4-9eef-6527b78000fd.js';
            var done = false;
            se.onload = se.onreadystatechange = function () {
                if (!done && (!this.readyState || this.readyState === 'loaded' || this.readyState === 'complete')) {
                    done = true;
                    // Place your SnapEngage JS API code below
                    SnapEngage.setUserEmail('hungsantqhn@yahoo.com.vn', true);
                    
                }
            };
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(se, s);

        })();
    }
</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"80849c9e6c","applicationID":"1062626","transactionName":"NAdTbURUCBICABJeXQ1NckxFQQkMTAEHQ0YPBw==","queueTime":0,"applicationTime":218,"atts":"GEBQGwxOGxw=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>