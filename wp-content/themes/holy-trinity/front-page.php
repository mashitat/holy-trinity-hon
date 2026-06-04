<?php
/*
Template Name:フロントページのテンプレート
*/
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>聖三一幼稚園　幼稚園型認定こども園</title>
<meta name="keywords" content="<?php the_field('meta-keyword'); ?>">
<meta name="description" content="<?php the_field('meta-discription'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/style/css/reset.css" rel="stylesheet" type="text/css">
<link href="/style/css/style_base.css?20220913" rel="stylesheet" type="text/css">
<link href="/style/css/style_medium.css?20220913" rel="stylesheet" type="text/css">
<link href="/style/css/style_small.css?20220913" rel="stylesheet" type="text/css">
<link rel="icon" href="https://holy-trinity.jp/wp-content/uploads/2025/03/icon.jpg" type="image/x-icon">

<meta property="og:url" content="https://holy-trinity.jp" />
<meta property="og:type" content="website" />
<meta property="og:title" content="聖三一幼稚園　幼稚園型認定こども園" />
<meta property="og:site_name" content="聖三一幼稚園　幼稚園型認定こども園" />
<meta property="og:image" content="https://holy-trinity.jp/ogp.jpg" />

<PageMap>
  <DataObject type="thumbnail">
    <Attribute name="src" value="https://holy-trinity.jp/thumbnail.jpg"/>
    <Attribute name="width" value="100"/>
    <Attribute name="height" value="130"/>
  </DataObject>
</PageMap>
	
</head>

<body class="top-index">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YWHQ1D8RMG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YWHQ1D8RMG');
</script>

<header class="main-header">
<?php  
    include($_SERVER['DOCUMENT_ROOT'].'/inc/header.html'); 
    include($_SERVER['DOCUMENT_ROOT'].'/inc/header_subnav.html'); 
?>
</header>

<header class="modal-nav">
<div class="btnGnav"><a class="btn-open" href="javascript:void(0)"><span></span><span></span><span></span></a></div>
<div class="overlay modal-open">
<?php  
    include($_SERVER['DOCUMENT_ROOT'].'/inc/header.html'); 
    include($_SERVER['DOCUMENT_ROOT'].'/inc/mobileMenu.html'); 
?>
</div><!-- /overlay -->
</header><!-- /modal-nav-->

<div class="top-mainvisual">
<div class="animation"></div>
<p class="top-copy"></p>
<?php  
    include($_SERVER['DOCUMENT_ROOT'].'/inc/header_gnav.html'); 
?>
<?php  
    include($_SERVER['DOCUMENT_ROOT'].'/inc/header_gnavSp.html'); 
?>
</div>

<?php
if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>


<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.html'); 
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {    
    var now = new Date();
    var hour = now.getHours();
        if(hour >= 5 && hour <= 17) {
            $('body').addClass('daytime');
            $('.animation').html('<div class="bird01"></div><div class="bird02"></div><div class="sun"></div>');
        } else {
            $('body').addClass('night');
            $('.animation').html('<div class="bat01"></div><div class="bat02"></div><div class="bat03"></div><div class="bat04"></div><div class="moon"></div><div class="star"></div>');
        }    
});
</script>
<script type="text/javascript" src="/style/js/nav.js"></script>
<?php wp_footer(); ?>
</body>
</html>