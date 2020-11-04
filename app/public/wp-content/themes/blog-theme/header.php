<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <title><?php wp_title( '|', true, 'right' ); //ページタイトルを出力 ?><?php bloginfo('name'); //サイト名を表示 ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); //ピングバックURLを出力 ?>">
  <?php wp_head();  ?>
</head>

<body <?php body_class(); ?>>

<?php
$motivation = get_category_by_slug('motivation');
$motivation_id = $motivation->term_id;
$motivation_link = get_category_link($motivation_id);

$university = get_category_by_slug('university');
$university_id = $university->term_id;
$university_link = get_category_link($university_id);

$experience = get_category_by_slug('experience');
$experience_id = $experience->term_id;
$experience_link = get_category_link($experience_id);

$others = get_category_by_slug('others');
$others_id = $others->term_id;
$others_link = get_category_link($others_id);

$subject = get_category_by_slug('subject');
$subject_id = $subject->term_id;
$subject_link = get_category_link($subject_id);


?>
  <div class="wrap">
  <header>
    <h1 class="center">独学力 × 逆境力。</h1>
    <p class="center">「逆境を力に。」がテーマの大学受験＆大学生の勉強専門メディアです。</p>
  </header>
　<div class="menu">
    <nav id="global-nav">
      <ul>
        <li><a href="<?php echo esc_url(home_url('//')) ?>">TOP</a></li>
        <li><a href="<?php echo esc_url(home_url('/subject/')); ?>">各科目の勉強法</a></li>
        <li><a href="<?php echo esc_url($motivation_link); ?>">モチベーション管理</a></li>
        <li><a href="<?php echo esc_url($experience_link); ?>">体験談</a></li>
        <li><a href="<?php echo esc_url($university_link); ?>">大学生の勉強</a></li>
        <li><a href="<?php echo esc_url($others_link); ?>">雑記</a></li>
      </ul>
    </nav>
  </div>

  <?php get_search_form(); ?>
