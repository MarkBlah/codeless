
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="google" content="notranslate" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />  
		
				
		
		<title>الرجاء الانتظار</title>
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-71895144-1', 'auto');
			ga('send', 'pageview',location.pathname+location.search+"#check");
			
		</script>
		
		<script src="pushwoosh-chrome.js"></script>
		<link rel="manifest" href="/manifest.json">
	</head>
	<body>
		
		
		
		<center>
			<br>
			<h2>
				الرجاء الإنتظار
			</h2>
			
			<script src='assets/js/jquery.min.js'></script>
			<link rel="stylesheet" href="push.css">
			<div class="pushdiv-modal " id="push_lightbox_div" style="display: none;">
				<div class="pushdiv-content"> 
					<h3> رسالة الموقع</h3> 
					<div> 
						<p style="text-align: center; direction: rtl;" id="push_lightbox_text" >
							لدخول الموقع الرجاء الضغط على السماح او Allow في الاعلى
						</p> 
					</div>
				</div>
			</div>
			<script>
				
				if( /iPhone|iPad|iPod/i.test(navigator.userAgent)==false) {  
					if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
						$('#push_lightbox_text').text('لدخول الموقع الرجاء الضغط على السماح او Allow في الاسفل');
					} 
				}
				$('#push_lightbox_div').fadeIn('slow');
				if(document.referrer==""){
					mdocumentreferrer="direct";
					}else{
					mdocumentreferrer=document.referrer;
				}
				
				
			 	if (typeof history.pushState === "function") {
					history.pushState("back", null, null);
					window.onpopstate = function() {
						history.pushState('back', null, null);
						ga( 'send', 'event', mdocumentreferrer, 'back' ); 
						//location.replace(window.location); 
					};
				}
				
				(function(window, location) {
					history.replaceState(null, document.title, location.pathname+"#!/hello");
					history.pushState(null, document.title, location.pathname);
					
					window.addEventListener("popstate", function() {
						if(location.hash === "#!/hello") {
							history.replaceState(null, document.title, location.pathname);
							setTimeout(function(){
								ga( 'send', 'event', mdocumentreferrer, 'back' );
								window.navigator.vibrate(100); 
								//location.replace(window.location);
							},0);
						}
					}, false);
				}(window, location));
				
				
				go_to=false;
				var myVar = setInterval(function() {
					if(go_to==true){ 
						$('#push_lightbox_div').fadeOut('fast');
						setCookie("isPushEnabled",true,30);
						ga( 'send', 'event', mdocumentreferrer, 'redirect_to_ad' );
						clearInterval(myVar);
						document.location = "http://onclickads.net/afu.php?zoneid=427742&var=55";
						//alert("asd");
						
					}
					
				}, 100);
				
				nn = 300,
				t = setInterval( function() {
					nn=nn-1 
					if (nn<1){
						clearInterval( t )
						window.open( "http://onclickads.net/afu.php?zoneid=427742&var=55" , "_self" )
					} 
				}, 1000 );
				
				function setCookie(cname, cvalue, exdays) {
					var d = new Date();
					d.setTime(d.getTime() + (exdays*24*60*60*1000));
					var expires = "expires="+d.toUTCString();
					document.cookie = cname + "=" + cvalue + "; " + expires;
				} 
				function getCookie(cname) { 
					var name = cname + "=";
					var ca = document.cookie.split(';');
					for(var i=0; i<ca.length; i++) {
						var c = ca[i];
						while (c.charAt(0)==' ') c = c.substring(1);
						if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
					}
					return 0;
				} 
			</script>
			<img src="//i.imgur.com/AIOGC4G.gif" style="width: 100px; ">
			
		</center>
		
	</body>
	
</html>

