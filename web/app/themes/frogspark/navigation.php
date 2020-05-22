<div class="topgap"></div>
<header id="header">
  <div class="container">
    <div class="row">
      <div class="align-items-center col-6 col-lg-auto d-flex flex-row">
        <a class="logo" href="/">
          <img alt="<?php echo get_bloginfo('name'); ?>" src="<?php echo get_field('logo', 'option')['url']; ?>">
          <img alt="<?php echo get_bloginfo('name'); ?>" src="/img/oc-footer.svg" class="mob-logo">
          <img alt="<?php echo get_bloginfo('name'); ?>" src="/img/oc-head.png" class="fixed-logo">
        </a>
      </div>
      <div class="align-items-center col-6 col-lg d-flex flex-row justify-content-end">
        <div class="social-icons">
            <?php foreach(get_field('social_media', 'option') as $sm): ?>
              <a href="<?php $sm['social_media_url'] ?>" target="_blank"><i class="fab fa-<?php echo $sm['social_media_platform']; ?>"></i></a>
            <?php endforeach; ?>
          </div>
        <nav class="d-none d-lg-block" id="navigation">
          <?php  $menu = wp_get_nav_menu_items('Main menu'); ?>
          <?php  echo print_menu($menu); ?>
        </nav>
        <nav class="d-block d-lg-none" id="navigation-mobile">
          <?php  $menu = wp_get_nav_menu_items('Main menu'); ?>
          <?php  echo print_menu($menu); ?>
        </nav>
        <div class="d-block d-lg-none">
          <button class="align-items-center d-flex flex-row p-0" id="burger" name="menu" type="button">
            <span class="burger"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>