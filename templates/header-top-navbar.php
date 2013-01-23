<div class="upper">
    <div class="container">
        <div class="brand-container">
            <a class="brand" href="<?php echo home_url(); ?>/">
                <img src="<?php echo get_bloginfo('wpurl'); ?>/assets/img/source.png" width="334" height="124" alt="The Source Skate and Snowboard Shop"/>
            </a>
        </div>

        <div class="sourceboards-container">
            <div class="sourceboards"><a href="http://www.sourceboards.com">www.sourceboards.com</a><br />toll free 1-877-576-8723</div>
        </div>
        <div class="brand-text">
            <div class="facebook"><a href="https://www.facebook.com/sourceboards"><img src="<?php echo get_bloginfo('wpurl'); ?>/assets/img/facebook.jpg" alt="Facebook" />/sourceboards</a></div>

            <div class="twitter"><a href="https://twitter.com/sourceboards"><img src="<?php echo get_bloginfo('wpurl'); ?>/assets/img/twitter.jpg" alt="Twitter" />#sourceboards</a></div>
        </div>
    </div>
</div>

<header id="banner" class="navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>