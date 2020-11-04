
<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

<div class="this-media-header center">
  <h1 class="title"><?php the_title(); ?></h1>
  <p class="date"><?php the_time('Y年m月d日'); ?></p>
  <img src=<?php the_post_thumbnail(); ?>
</div>
<div class="about-media">
  <?php the_content(); ?>
</div>

  <?php endwhile; ?>
<?php else: ?>
  <h2>投稿が見つかりません。</h2>
<?php endif; ?>



<?php get_footer(); ?>
