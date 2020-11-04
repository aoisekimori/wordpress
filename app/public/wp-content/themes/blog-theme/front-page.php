<?php
/*
Template Name: トップページ
*/
?>


<?php get_header(); ?>


 <?php if(have_posts()): ?>


<div class="latest">
  <h2 class="title">LATEST ARTICLES</h2>
  <div class="first-box"></div>
  <?php while (have_posts()): the_post(); ?>

  <div class="article-box">
    <img src=<?php the_post_thumbnail(); ?>
    <div class="article-info">
      <h5><?php the_title(); ?></h5>
      <span class="date"><?php the_time('Y年m月d日'); ?></span>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="read">記事を読む</a>
  </div>
</div>
<?php endwhile; ?>

  <div class="to-archive">
     <?php wp_pagenavi(); ?>
  </div>

</div>


<div class="about center">
  <div class="about-title">
    <h2 class="title">塾なし、予備校なし、部活動をしながら、独学で逆転合格は可能？</h2>
  </div>
  <div class="triangle">
  </div>
  <div class="about-detail">
    <img src="<?php bloginfo('template_directory'); ?>/images/annie-spratt-ORDz1m1-q0I-unsplash.jpg">
    <div class="detail">
      <h2 class="title">A.塾なし、予備校なしだからこそ可能です。</h2>
      <p>管理人は、塾や予備校の授業は<span class="stress">時間、労力の無駄である</span>と考えます。だって、予備校の授業を受けて成績が伸びる人って、そもそも学校の授業でも伸びなきゃおかしくないですか？要するに、予備校と学校の違いは、授業を行う場所だけです。<br>では、正しい勉強の方法とはなんなのか？それは、<span class="stress">参考書による独学</span>です。</p>
    </div>
  </div>
</div>

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
  <h2 class="title" id="subjects">HOW TO LEARN FOR EACH SUBJECT</h2>
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

<div class="structure">
  <h2 class="title">STRUCTURE OF THIS MEDIA</h2>
  <div class="first-box"></div>
  <p class="first-p">このサイトが扱うテーマは、主に３つです。</p>
  <div class="each-structure">
    <h4><span class="number">1</span> 大学受験の勉強方法</h4>
    <p>大学受験の勉強法、特に、参考書を使用した独学方法について詳しく解説していきます。</p>
  </div>
  <div class="each-structure">
    <h4><span class="number">2</span> モチベーション管理</h4>
    <p>塾や予備校に通わない場合、勉強に対する情熱を持ち続けるのが困難な場合があります。そこで、モチベーションを管理したり、メンタルを整えるための情報をシェアしていきます。</p>
  </div>
  <div class="each-structure">
    <h4><span class="number">3</span> 大学生の勉強や生活について</h4>
    <p>このサイトは、受験生のためだけのものではありません。大学に合格することだけを目標にすると、受験終了後に燃え尽きてしまい、だらだらとした大学生活を送ることになってしまいます。そこで、大学生になってからの心構えや、過ごし方のアドバイスなども発信していきます。</p>
  </div>
</div>

<?php else: ?>
<?php endif; ?>






<?php get_footer(); ?>
