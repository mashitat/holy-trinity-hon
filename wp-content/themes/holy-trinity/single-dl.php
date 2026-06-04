<?php get_header(); ?>

<?php
if(have_posts()): while(have_posts()): the_post();?>
<section class="main-title">
<div class="m-cnts-03">

<h1><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
</div>
</section><!-- /main-title -->

<section class="m-cnts-03 mt-80">
<div class="img-list">
<section class="img-lo-03">
<a href="<?php the_field('pamphlet-pdf'); ?>" target="_blank">
<figure class="img"><img src="<?php the_field('pamphlet-image'); ?>" width="200" height="auto" alt="<?php the_title(); ?>"/></figure>
<h4><?php the_title(); ?></h4>
<p class="ta-l"><?php the_field('pamphlet-text'); ?></p>
</a>
</section>

</div>
</section><!-- /m-cnts-03 -->

<?php endwhile; endif; ?>


<?php get_footer(); ?>
