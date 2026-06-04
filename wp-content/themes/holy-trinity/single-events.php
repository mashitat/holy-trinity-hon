<?php get_header(); ?>

<?php
if(have_posts()): while(have_posts()): the_post();?>
<section class="main-title">
<div class="m-cnts-03">

<h1><?php echo esc_html(get_post_type_object(get_post_type())->label); ?><br>
<span><?php echo esc_html(get_post_type_object(get_post_type())->description); ?></span></h1>
</div>
</section><!-- /main-title -->

<section class="m-cnts-02 mb80">
<div class="img-list events mb40">

<section class="img-lo-04 <?php $terms = get_the_terms(0,'target'); echo $terms[0]->slug; ?>
">
<figure class="img"><img src="<?php the_field('event_image'); ?>" width="347" height="211" alt="<?php the_title(); ?>"/></figure>
<h3><?php the_title(); ?></h3>
<p class="date"><?php the_field ('event_date'); ?></p>
<?php the_content(); ?>
</section>

</div><!-- /img-list -->

</section><!-- /m-cnts-02 -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
