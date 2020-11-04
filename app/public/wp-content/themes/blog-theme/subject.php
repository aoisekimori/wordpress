<?php
/*
Template Name: 教科別
*/
?>
<?php get_header(); ?>

<?php
$japanese = get_category_by_slug('japanese');
$japanese_id = $japanese->term_id;
$japanese_link = get_category_link($japanese_id);

$math = get_category_by_slug('math');
$math_id = $math->term_id;
$math_link = get_category_link($math_id);

$science = get_category_by_slug('science');
$science_id = $science->term_id;
$science_link = get_category_link($science_id);

$ja_history = get_category_by_slug('ja-history');
$ja_history_id = $ja_history->term_id;
$ja_history_link = get_category_link($ja_history);

$world_history = get_category_by_slug('world-history');
$world_history = $world_history->term_id;
$world_history_link = get_category_link($world_history);

$english = get_category_by_slug('english');
$english_id = $english->term_id;
$english_link = get_category_link($english_id);
?>

<div class="learn">
  <h2 class="title" id="subjects"><?php the_title(); ?></h2>
  <div class="first-box"></div>
  <div class="learn-boxes container">
    <div class="row">
      <div class="col-md-4 learn-box">
        <img src="<?php bloginfo('template_directory'); ?>/images/books-4305459_640.jpg">
        <h5>国語の勉強法</h5>
        <a href="<?php echo esc_url($japanese_link); ?>">記事一覧へ</a>
      </div>
      <div class="col-md-4 learn-box">
        <img src="<?php bloginfo('template_directory'); ?>/images/girl-2771936_640.jpg">
        <h5>英語の勉強法</h5>
        <a href="<?php echo esc_url($english_link); ?>">記事一覧へ</a>
      </div>
      <div class="col-md-4 learn-box">
        <img src="<?php bloginfo('template_directory'); ?>/images/japanese-garden-752918_640.jpg">
        <h5>日本史の勉強法</h5>
        <a href="<?php echo esc_url($ja_history_link); ?>">記事一覧へ</a>
      </div>
      <div class="col-md-4 learn-box">
        <img src="<?php bloginfo('template_directory'); ?>/images/kyle-glenn-nXt5HtLmlgE-unsplash.jpg">
        <h5>世界史の勉強法</h5>
        <a href="<?php echo esc_url($world_history_link); ?>">記事一覧へ</a>
      </div>
      <div class="col-md-4 learn-box">
        <img src="<?php bloginfo('template_directory'); ?>/images/jeswin-thomas-2Q3Ivd-HsaM-unsplash.jpg">
        <h5>数学の勉強法</h5>
        <a href="<?php echo esc_url($math_link); ?>">記事一覧へ</a>
      </div>
      <div class="col-md-4 learn-box">
        <img src="<?php bloginfo('template_directory'); ?>/images/analysis-2030265_1920.jpg">
        <h5>理科の勉強法</h5>
        <a href="<?php echo esc_url($science_link); ?>">記事一覧へ</a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
