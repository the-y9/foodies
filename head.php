<head>
    <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Foodies</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
	<!-- For Card -->
	<link rel="stylesheet" id="compiled.css-css" href="./Bootstrap Flipping Cards_files/compiled-4.5.11.min.css" type="text/css" media="all">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/8C65AA3D-A023-5841-994C-795A737B12A2/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/2FC5C8BA-990A-214A-AC31-504C6796ED4A/abn/main.css"/>

  <!-- Required meta tags always come first -->

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#33b5e5">
    <link rel="manifest" href="https://mdbootstrap.com/manifest.json">
                    
    
    
    <title>Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap</title>

    
    <link rel="shortcut icon" href="food pics/favicon.ico" type="image/x-icon">

    <script type="text/javascript" async="" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/recaptcha__en.js.download"></script><script src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/289867067833087" async=""></script><script async="" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/fbevents.js.download"></script><script type="text/javascript" async="" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/f.txt"></script><script type="text/javascript" async="" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/analytics.js.download"></script><script async="" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/gtm.js.download"></script><script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<script type="text/javascript">var ajax_url = 'https://mdbootstrap.com/wp-load.php';</script>
    
<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" type="text/javascript">//<![CDATA[
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
	var gtm4wp_use_sku_instead        = 0;
	var gtm4wp_id_prefix              = '';
	var gtm4wp_remarketing            = false;
	var gtm4wp_eec                    = 1;
	var gtm4wp_classicec              = 1;
	var gtm4wp_currency               = 'EUR';
	var gtm4wp_product_per_impression = 0;
//]]>
</script>
<!-- End Google Tag Manager for WordPress by gtm4wp.com -->
<!-- This site is optimized with the Yoast SEO plugin v8.3 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Bootstrap carousel is responsive and interactive slideshow which is created for presenting content, especially images and videos.">
<link rel="canonical" href="https://mdbootstrap.com/javascript/carousel/">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage">
<meta property="og:description" content="Bootstrap carousel is responsive and interactive slideshow which is created for presenting content, especially images and videos.">
<meta property="og:url" content="https://mdbootstrap.com/javascript/carousel/">
<meta property="og:site_name" content="Material Design for Bootstrap">
<meta property="article:publisher" content="https://www.facebook.com/mdbootstrap">
<meta property="article:author" content="https://www.facebook.com/dawid.adach.5">
<meta property="og:image" content="https://mdbootstrap.com/wp-content/uploads/2017/12/carousel.jpg">
<meta property="og:image:secure_url" content="https://mdbootstrap.com/wp-content/uploads/2017/12/carousel.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="628">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Bootstrap carousel is responsive and interactive slideshow which is created for presenting content, especially images and videos.">
<meta name="twitter:title" content="Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage">
<meta name="twitter:site" content="@MDBootstrap">
<meta name="twitter:image" content="https://mdbootstrap.com/wp-content/uploads/2017/12/carousel.jpg">
<meta name="twitter:creator" content="@dawidadach">
<!-- / Yoast SEO plugin. -->

<link rel="dns-prefetch" href="https://chimpstatic.com/">
<link rel="dns-prefetch" href="https://s.w.org/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/mdbootstrap.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="contact-form-7-css" href="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="global-css-css" href="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/global.css" type="text/css" media="all">
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" id="wsl-widget-css" href="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/style.css" type="text/css" media="all">
<link rel="stylesheet" id="compiled.css-css" href="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/compiled-4.5.12.min.css" type="text/css" media="all">


<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/load-scripts.php"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/gtm4wp-woocommerce-classic.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/gtm4wp-woocommerce-enhanced.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/mdb-search.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/jquery.validate.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/ajax-auth-script.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/tutorial-share-counts.js.download"></script>
<link rel="https://api.w.org/" href="https://mdbootstrap.com/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mdbootstrap.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://mdbootstrap.com/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.9.8">
<meta name="generator" content="WooCommerce 3.4.5">
<link rel="shortlink" href="https://mdbootstrap.com/?p=170">
<link rel="alternate" type="application/json+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fjavascript%2Fcarousel%2F">
<link rel="alternate" type="text/xml+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fjavascript%2Fcarousel%2F&amp;format=xml">





</head>