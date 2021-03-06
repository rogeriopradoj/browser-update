<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo T_('Browser-Update.org'); ?> - <?php echo T_('Inform your visitors about browser-updates'); ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="browser, webbrowser, choice, change browser, firefox, safari, opera, firefox 3, internet explorer 6, internet explorer update, ie, safari, konqueror" />
	<meta http-equiv="content-language" content="<?php echo request_lang(); ?>" />
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png"/>
    <link rel="icon" href="/img/favicon.png" type="image/png"/>

	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" href="/base.css" type="text/css" />
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="/drecksie.css" type="text/css" />
	<![endif]-->
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="/drecksie6.css" type="text/css" />
	<![endif]-->
	<script type="text/javascript" src="/base.js">	</script>
</head>
<body>

<?php
//preg_match ("#[^?]#", string subject [, array matches [, int flags]])
$parts = Explode('/', $_SERVER["REQUEST_URI"]);
$curfile = end($parts);
?>

<div id="lang">
    <a href="/en/<?php echo $curfile?>">english</a>
    <a href="/de/<?php echo $curfile?>">deutsch</a>
    <a href="/fr/<?php echo $curfile?>">français</a>
    <a href="/it/<?php echo $curfile?>">italiano</a>
    <a href="/pt/<?php echo $curfile?>">português</a>
    <a href="/es/<?php echo $curfile?>">español</a>
    <a href="/pl/<?php echo $curfile?>">polski</a>
    <a href="/nl/<?php echo $curfile?>">nederlands</a>
    <a href="/ja/<?php echo $curfile?>">japanese</a>
    <a href="/sl/<?php echo $curfile?>">slovenščina</a>
    <a href="/ru/<?php echo $curfile?>">Русский</a>
    <a href="/id/<?php echo $curfile?>">Bahasa Indonesia</a>
    <a href="/kr/<?php echo $curfile?>">한국어</a>
    <a href="/uk/<?php echo $curfile?>">Українська</a>
    <a href="/rm/<?php echo $curfile?>">rumantsch</a>
    <a href="/da/<?php echo $curfile?>">dansk</a>
	<a href="/al/<?php echo $curfile?>">Gjuha Shqipe</a>
	<a href="/ca/<?php echo $curfile?>">català</a>
	
	
    
	
	


    <a href="contact.html">translate...</a>
</div>
    
<div id="co">
<div class="header">
    <h1><a href="index.html"><?php echo T_('Browser-Update.org'); ?></a></h1>
    <div class="tagline"><?php echo T_('An initiative by webdesigners to inform users about browser-updates'); ?></div>
</div>
<ul id="tabs">
	<li><a href="index.html"><?php echo T_('Start'); ?></a></li>
	<li><a href="update.html"><?php echo T_('Update Browser'); ?></a></li>
	<li class="r"><a href="contact.html"><?php echo T_('Contact'); ?></a></li>	
	<!--<li class="r"><a href="/help.html"><?php echo T_('Help'); ?></a></li>-->
	<!--<li class="r"><a href="/supporters.html"><?php echo T_('Supporters'); ?></a></li>-->
	<li class="r"><a href="stat.html"><?php echo T_('Statistics'); ?></a></li>
	<li class="r"><a href="/blog.html"><?php echo T_('Blog'); ?></a></li>
</ul>



<div id="bookmark">
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
	<a class="addthis_button_preferred_1"></a>
	<a class="addthis_button_preferred_2"></a>
	<a class="addthis_button_preferred_3"></a>
	<a class="addthis_button_preferred_4"></a>
	<a class="addthis_button_compact"></a>
	</div>
	<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=Jossele"></script>
	<!-- AddThis Button END -->
</div>
<div id="body">