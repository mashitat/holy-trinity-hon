<?php get_header(); ?>


<section class="main-title">
<div class="m-cnts-03">
<h1><?php echo esc_html(get_post_type_object(get_post_type())->label); ?><br>
<span><?php echo esc_html(get_post_type_object(get_post_type())->description); ?></span></h1>
</div>
</section><!-- /main-title -->

<section class="m-cnts-02 teacher-illust01">
<h2 class="ttl-col-A">園児に寄り添いながら、豊かな生活を育む</h2>
<figure class="img-c"><img src="/images/nursery_top_009@2x.png" width="205" height="205" alt=""/></figure>

<div class="img-list teachers">
<?php
    $paged = (int) get_query_var('paged');
    $args = array(
        'posts_per_page' => -1,
        'paged' => $paged,
        'post_type' => 'teachers' // カスタム投稿タイプ名
    );
    $the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ): ?>
<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>

<section class="img-lo-03">
<figure><img src="<?php the_field('teacher-image'); ?>" width="218" height="218" alt="<?php the_title(); ?>"/></figure>
<p class="copy"><?php the_field('teacher-text'); ?></p>
<p class="name"><?php the_title(); ?></p>
</section>
<?php endwhile; endif; ?>

<?php wp_reset_postdata(); ?>

</div>
</section><!-- /m-cnts-02 -->


<?php get_footer(); ?>
