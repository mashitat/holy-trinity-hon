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

<!--修正ID036内容文言追加(画像入れ替えあり)画像差し替え予定 -->
<section class="img-lo-01">
<div class="img"><img src="../images/archive-teacher_img001.png" width="375" height="211" alt="子ども性暴力防止法 イメージ画像"/></div>
<div class="sentence">
<h3 class="ttl-s03">子ども性暴力防止法</h3>
<p class="fs-00">当園では「子ども性暴力防止法」に基づき、 子どもたちの心と身体の安全を守るため、職員全員が性暴力防止に関する研修を受けています。 日々の保育の中で、適切な距離感・関わり方・環境づくりを徹底し、 子どもが安心して過ごせる場を職員一同で整えています。</p>
</div>
</section>
<section class="img-lo-01">
<div class="img"><img src="../images/archive-teacher_img002.png" width="375" height="211" alt="児童虐待防止法 イメージ画像"/></div>
<div class="sentence">
<h3 class="ttl-s03">児童虐待防止法</h3>
<p class="fs-00">「児童虐待防止法」に基づき、 子どもの最善の利益を守ることを第一に、職員全員が虐待防止に関する研修を受けています。 子どもの変化に気づく視点を大切にし、早期発見・早期対応を心がけながら、 園全体で子どもの安全と権利を守る取り組みを続けています。</p>
</div>
</section>
</section><!-- /m-cnts-02 -->


<?php get_footer(); ?>
