<?php get_header(); ?>

<section class="main-title">
<div class="m-cnts-03">

<h1><?php echo esc_html(get_post_type_object(get_post_type())->label); ?><br>
<span><?php echo esc_html(get_post_type_object(get_post_type())->description); ?></span></h1>
</div>
</section><!-- /main-title -->

<section class="m-cnts-02">
<div class="img-list teachers">
<?php echo get_post_type_archive_link( 'teacher' ); ?>
<?php
if(have_posts()): while(have_posts()): the_post();?>

<section class="img-lo-03">
<figure><img src="<?php the_field('teacher-image'); ?>" width="218" height="218" alt="<?php the_title(); ?>"/></figure>
<p class="copy"><?php the_field('teacher-text'); ?></p>
<p class="name"><?php the_title(); ?></p>
</section>
<?php endwhile; endif; ?>

</div>
</section>

<?php get_footer(); ?>
