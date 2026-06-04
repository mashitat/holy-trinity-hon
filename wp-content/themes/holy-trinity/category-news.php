<?php get_header(); ?>

<section class="main-title">
<div class="m-cnts-03">

<h1><?php $cat = get_the_category(); $cat = $cat[0]; {echo $cat -> cat_name;} ?>一覧<br>
<span></span></h1>
</div>
</section><!-- /main-title -->

<section class="m-cnts-02 mb80">

<?php 
  $args = array(
    'post_type' => 'post', // 任意のカスタム投稿タイプを指定
    'posts_per_page' => -1, // 1ページに表示する最大投稿数を指定、-1は全てを表示
    'order' => 'DESC', // 降順でソート
    'orderby'=>'date', // 日付で並べる
    'paged' => get_query_var('paged'),
    'post_status' => 'publish',
  );
  $the_query = new WP_Query($args);
?>

<ul class="news-list">
<?php if ( $the_query->have_posts() ): ?>
<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>

<li>
<p class="date"><?php the_time('Y.n.j'); ?></p>
<?php $post_tags = get_the_tags();
    if($post_tags) {
        foreach ($post_tags as $tag) {
            echo '<i class="' .$tag->slug .'">' .$tag->name .'</i>';
        }
    }
?>
<p class="news-text"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
</li>

<?php endwhile; ?>
</ul>

<?php endif; ?>

<?php wp_reset_postdata(); ?>

</section><!-- /news -->
<div class="m-cnts-03 btn-area">
<div class="link-btn-02-back"><a href="/">トップページに戻る</a></div>
</div>


<?php get_footer(); ?>
