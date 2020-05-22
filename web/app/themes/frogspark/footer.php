<?php wp_footer(); ?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1 col-md-6">
        <div class="footer-logo">
          <a href="/"><img src="/img/oc-footer.svg"></a>
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <div class="footer-menu">
          <?php  $menu = wp_get_nav_menu_items('Footer Menu'); ?>
          <?php  echo print_menu($menu); ?>
        </div>
      </div>
      <div class="col-md-12">
      <div class="copy text-right">
        <a href="https://frogspark.co.uk">Website by Frogspark</a>
      </div>
      </div>
    </div>
  </div>
</footer>

<script>
  AOS.init({disable: 'mobile'});
</script>

</body>
</html>