
<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
<div class="contents-header center">
  <h1 class="title"><?php the_title(); ?></h1>
  <span class="dates"><?php the_time('Y年m月d日'); ?></span>
  <img src=<?php the_post_thumbnail(); ?>
</div>
<div class="contents">
  <?php the_content(); ?>
</div>

<div id="comment-container"><?php comments_template();  ?></div>

<?php endwhile; ?>
<?php else: ?>
  <h2>投稿がありません。</h2>
<?php endif; ?>



<?php

$categ = get_the_category($post->ID);
$catID = array();

foreach($categ as $cat){
	array_push($catID, $cat -> cat_ID);
}

$args = array(
	'post__not_in' => array($post->ID),
	'category__in' => $catID,
	'posts_per_page' => 4,
	'orderby' => 'rand'
);

$the_query = new WP_Query($args);
if($the_query -> have_posts()) :?>



<div class="related">
  <h2 class="title">RELATED</h2>
  <div class="related-wrapper">

    <?php while($the_query -> have_posts()) : $the_query -> the_post();
    ?>

    <div class="related-box">
      <img src=<?php the_post_thumbnail(); ?>
      <h5><?php the_title(); ?></h5>
      <p class="date"><?php the_time('Y年m月d日'); ?></p>
      <a href="<?php the_permalink(); ?>">記事を読む</a>
    </div>


  <?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>

  </div>
</div>

<?php get_footer(); ?>
