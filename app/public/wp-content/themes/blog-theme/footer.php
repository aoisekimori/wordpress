<footer>

  <div class="edited">
    <h2 class="title">EDITED BY</h2>
    <img src="<?php bloginfo('template_directory'); ?>/images/image1.jpg" class="portleit">
    <h5>Aoi</h5>
    <p class="text">21歳の大学2年生。高校3年で偏差値50→独学で猛勉強→早稲田大学教育学部に現役合格もすぐに中退→浪人の末法政大学に合格。「逆境を武器に。」をコンセプトに、大学受験の独学法や大学に入ったあとの過ごし方についてを発信しています。趣味は読書、プログラミング、猫と遊ぶこと。プロフィールとこのサイトについての詳細は<a href="<?php echo esc_url(home_url('/about/')); ?>" class="kochira">こちら</a></p>
  </div>
  <div class="contact">
    <h2 class="title">CONTACT</h2>
    <p>勉強に関する質問や要望、お仕事の御依頼などはこちらのフォームよりお願いします。</p>
    <?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>
  </div>
  <div class="copyright center">
    Copyright &copy; 2020 <?php bloginfo('name'); ?> All Rights Reserved.
  </div>

</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
