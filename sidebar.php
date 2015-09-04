
<body id="DivScrollTop" <?php body_class( $class ); ?>>
  <div class="container">
    <div class="menu-wrap">
      <nav class="menu-top">
        <!-- <div class="profile"><img src="img/user1.png" alt="John Doe"/><span>John Doe</span></div> -->
        <div class="icon-list">
          <!-- <a href="#"><i class="fa fa-fw fa-star-o"></i></a>
          <a href="#"><i class="fa fa-fw fa-bell-o"></i></a>
          <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
          <a href="#"><i class="fa fa-fw fa-comment-o"></i></a> -->
          <form method="get" id="searchform" action="<?php echo esc_url( home_url('home')); ?>/">
            <div>
             <input type="text"  value="<?php echo esc_html($s, 1); ?>" name="s" id="s"  class="search-box" placeholder="Search in <?php echo get_bloginfo( 'name' ); ?>"/>

             <a href="#" id="div-search"><i class="fa fa-fw fa-search"></i></a>

             <script>
              var form = document.getElementById("searchform");
              document.getElementById("div-search").addEventListener("click", function () {
                form.submit();
              });
            </script>
          </div>
        </form>

      </div>
    </nav>
    <nav class="menu-side nav-sidebar">
      <?php 
      wp_nav_menu( array( 'theme_location' => 'menu-main-navigation' ) );
      ?>
    </nav>

    <nav class="menu-side nav-sidebar">
      <?php 
      dynamic_sidebar( $index );
      ?>
    </nav>
  </div>
  <button class="menu-button" id="open-button">Open Menu</button>
  <div class="content-wrap">
    <div class="content">
      <header class="">
        <div class="container">
          <div class="custom-container">
            <div class="site-title-wrapper">
                <!-- <h1 class="site-title">
                  <a class="js-ajax-link" title="tutorial drive" href="<?php echo network_site_url( '/' ); ?>">Tutorial Drive</a>
                </h1> -->
                <a class="button-square" href="<?php echo get_option('general_setting_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="button-square" href="<?php echo get_option('general_setting_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                <a class="button-square" href="<?php echo get_option('general_setting_googleplus'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                <a class="button-square" href="<?php echo get_option('general_setting_facebook'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                <a class="button-square" href="<?php echo get_option('general_setting_facebook'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
              </div>