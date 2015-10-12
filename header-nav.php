<?php
/**
 * The Header for our theme.
 *
 * Displays the navigation menu
 *
 * @package Flint/Aspen Grove
 * @since 0.0.3
 */
?>

  <nav class="navbar navbar-aspen-grove navbar-top" role="navigation">
    <h1 class="screen-reader-text"><?php _e( 'Menu', 'aspen-grove' ); ?></h1>
    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'aspen-grove' ); ?>"><?php _e( 'Skip to content', 'aspen-grove' ); ?></a></div>
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-aspen-grove-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
      </div><!-- .navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-aspen-grove-collapse">

        <?php
        if ( class_exists( 'Flint_Walker_Nav_Menu_Navbar' ) ) {
          wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right', 'fallback_cb' => false, 'walker' => new Flint_Walker_Nav_Menu_Navbar ) );
        } else {
          wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) );
        }
        ?>

      </div><!-- .navbar-collapse -->
    </div><!-- .container -->
  </nav><!-- .navbar -->
