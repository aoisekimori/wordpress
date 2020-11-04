<?php get_header(); ?>


<?php if(have_posts()): ?>
<div class="latest archive">
  <h2 class="title"><?php the_category(); ?></h2>
  <div class="first-box"></div>

  <?php while(have_posts()): the_post(); ?>

  <div class="article-box">
    <img src=<?php the_post_thumbnail(); ?>
    <div class="article-info">
      <h5><?php the_title(); ?></h5>
      <span class="date"><?php the_time('Y年m月d日'); ?></span>
      <?php the_excerpt();; ?>
      <a href="<?php the_permalink(); ?>" class="read">記事を読む</a>
    </div>
  </div>


<?php endwhile; ?>
<?php else: ?>
  <h2 class="title"><?php the_category(); ?></h2>
  <h5 class="title">投稿がありません。</h5>

<?php endif; ?>


<div class="to-archive">
   <?php wp_pagenavi(); ?>
</div>

</div>




<?php get_footer(); ?>
