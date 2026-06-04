<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>

<?php if( is_category()): ?>
<meta name="keywords" content="<?php echo get_meta_keyword_from_category(); ?>">
<meta name="description" content="<?php echo get_meta_description_from_category(); ?>">

<?php elseif('events' == get_post_type()): ?>
<meta name="keywords" content="子育て支援,見学,相談">
<meta name="description" content="園庭開放には未就園のお友達とお家の方、どなたでもおいでになれます。園の環境や、雰囲気を知っていただく為の機会にもなりますので、是非おこしください。お友達も誘ってきてね！">

<?php elseif('teachers' == get_post_type()): ?>
<meta name="keywords" content="教諭,保育教諭,理事長">
<meta name="description" content="聖三一幼稚園、自慢の先生達を紹介します。その先生にしかない素敵な賜物を持った先生達ばかりです。職員みんなで力を合わせ、丁寧に心込めて関わっていきます。">

<?php else: ?>
<meta name="keywords" content="<?php the_field('meta-keyword'); ?>">
<meta name="description" content="<?php the_field('meta-discription'); ?>">
<?php endif; ?>

<meta property="og:title" content="<?php echo get_page_title(); ?>" />
<meta property="og:url" content="<?php the_permalink(); ?> " />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="聖三一幼稚園　幼稚園型認定こども園" />
<meta property="og:image" content="https://holy-trinity.jp/ogp.jpg" />
<PageMap>
  <DataObject type="thumbnail">
    <Attribute name="src" value="https://holy-trinity.jp/thumbnail.jpg"/>
    <Attribute name="width" value="100"/>
    <Attribute name="height" value="130"/>
  </DataObject>
</PageMap>

<link href="/style/css/reset.css" rel="stylesheet" type="text/css">
<link href="/style/css/style_base.css" rel="stylesheet" type="text/css">
<link href="/style/css/style_medium.css" rel="stylesheet" type="text/css">
<link href="/style/css/style_small.css" rel="stylesheet" type="text/css">
<link rel="icon" href="https://holy-trinity.jp/wp-content/uploads/2025/03/icon.jpg" type="image/x-icon">
<?php wp_enqueue_script('jquery'); ?>
</head>

<body <?php body_class( $class ); ?>>
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
    include($_SERVER['DOCUMENT_ROOT'].'/inc/header_gnav.html'); 
?>

</header>

<header class="modal-nav">
<div class="btnGnav"><a class="btn-open" href="javascript:void(0)"><span></span><span></span><span></span></a></div>
<div class="overlay modal-open">
<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/header.html'); 
      include($_SERVER['DOCUMENT_ROOT'].'/inc/mobileMenu.html'); 
?>
</div><!-- /overlay -->
</header><!-- /modal-nav-->