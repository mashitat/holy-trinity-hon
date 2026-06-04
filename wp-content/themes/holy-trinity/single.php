<?php get_header(); ?>

<?php
if(have_posts()): while(have_posts()): the_post();?>
<section class="main-title">
<div class="m-cnts-03">

<h1><?php $cat = get_the_category(); $cat = $cat[0]; {echo $cat -> cat_name;} ?><br>
<span><?php the_time('Y.n.j'); ?></span></h1>
</div>
</section><!-- /main-title -->

<section class="m-cnts-03 mb40 news-cnts">

<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php 
$linkText = get_field('link-text');
$linkURL = get_field('link-url'); ?>
<?php
if(empty($linkText && $linkURL )): ?>

<?php
else: ?>
    <div class="link-btn"><a href="<?php the_field('link-url'); ?>" target="_blank" rel="noopener"><?php the_field('link-text'); ?></a></div>

<?php endif;?>

</section><!-- /m-cnts-03 -->
<?php endwhile; endif; ?>

<div class="m-cnts-03 btn-area">
<div class="link-btn-02-back"><a href="/news/">お知らせ一覧に戻る</a></div>
</div>
<?php get_footer(); ?>
