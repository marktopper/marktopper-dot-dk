<?php
if (extension_loaded('newrelic')) {
  newrelic_set_appname('marktopper.dk');
}

$birthDate = "08/08/1991";
$birthDate = explode("/", $birthDate);
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2]));
?>
<!DOCTYPE html>
<html lang="da" class="wf-sourcesanspro-n3-active wf-active"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/animate.css">
<script src="js/source-sans-pro-n3.js"></script>
<script src="js/konami.js"></script>
<script src="js/getNodesByType.js"></script>
<script src="js/l33t.js"></script>
<link rel="stylesheet" href="https://use.edgefonts.net/c/b6a685/source-sans-pro:n3.Xw3:N:2/d">
<title>Mark Topper Diderichsen - marktopper.dk</title>
<meta http-equiv="x-dns-prefetch-control" content="off">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45963832-1', 'marktopper.dk');
  ga('send', 'pageview');

</script>

</head>

<body>
<div id="card">
<div class="avatar">
	<!--<img src="http://graph.facebook.com/marktopper/picture?width=100&height=100" class="animated bounceInDown">-->
	<img src="img/me.jpg" class="animated bounceInDown">
	<img src="img/legolized-me.jpg" class="konami animated fadeIn">
</div>
<p class="animated rollIn">
	<!--
	
	What I need to link to:
	- Twitter
	- CV
	- Facebook
	- Email
	- Blog (webman.io)
	- Forrst
	- Codepen
	- Dribble
	- My Work (bymark.net)
	- Github
	
	-->

Mit navn er Mark Diderichsen, øgenavn Topper.<br>
Jeg er en <?php echo $age; ?> årig web-udvikler fra Danmark.<br>
Jeg fokuserer på <a href="https://github.com/marktopper" class="blue" target="_blank">kernen i PHP</a>, og nyder derudover også virkelig at arbejde med HTML5 & CSS3.<br>
I min fritid skriver jeg på min <a href="https://webman.io/blog/" class="green" target="_blank">blog</a> og holder mig opdateret på den nye teknologi.<br>
Du kan se mine <a href="https://dribbble.com/webman" class="pink" target="_blank">motiver</a> og mine forrige <a href="https://webman.io/portfolio/" class="orange" target="_blank">projekter</a> i mit <a href="http://webman.io/cv-da.pdf" class="blue" target="_blank">CV</a>.<br>
Det var alt <a href="https://webman.io/about/" class="pink" target="_blank">om mig</a> for nu, så hold dig <a href="https://twitter.com/webmanio" class="orange" target="_blank">opdateret</a>.<br>
- Mark "Topper".

</p>

<a class="html5-logo animated bounceInUp" href="http://www.w3.org/html/logo/" target="_blank">
	<p><img src="/img/html5-badge.png" width="63" height="64" alt="HTML5 Powered" title="HTML5 Powered"><span>Jeg har set <strong class="orange">fremtiden</strong>.<br>
	  Det er i min <strong class="orange">browser</strong>!</span></p>
</a>
</div>
<script>
	var easter_egg = new Konami(function() {
		document.getElementById('card').className = 'konami-entered';
		toL33T();
	});
</script>
</body></html>