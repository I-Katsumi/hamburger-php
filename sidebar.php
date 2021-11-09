<aside class="l-sidebar l-grid--sidebar">
  <button class="p-slideIn-Out" title="close button">
    <span class="c-mark p-slideIn-Out__button p-slideIn-Out__button--Out"></span>
  </button>
  <div class="p-sidebarMenu">
    <div class="c-logo p-sidebarMenu__title">Menu</div>
      <?php
        $args = array (
            'theme_location' => 'side-menu' ,
            'menu' => 'sidebar-nav',
            'menu_class' => 'p-sidebarMenu__list',
        ) ;
        wp_nav_menu ($args);
      ?>
  </div>
</aside>
