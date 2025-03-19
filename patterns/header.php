<?php

/**
 * Title: Header
 * Slug: invoice-360-vonome/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site title and navigation.
 */

?>
<!-- wp:group {"align":"full","className":"header-sticky","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull d-none d-md-block">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide container d-flex justify-content-between" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
            <a href="/">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/invoice-360-logo.png" alt="" srcset="" class="header-logo">
            </a>
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container'      => 'nav',
                    'container_class' => 'header-menu',
                    'menu_class'     => 'nav-menu',
                ));
                ?>
            </div>
            <!-- /wp:group -->
            <!-- wp:group -->
            <div class="header-action">
                <a href="/" class="header-btn header-btn-alt">সাইন ইন</a>
                <a href="/" class="header-btn">সাইন আপ</a>
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->


<!-- Navbar for Mobile device -->

<nav class="navbar navbar-expand-lg navbar-light bg-light d-block d-md-none">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/invoice-360-logo.png" alt="" srcset="" class="header-logo-mobile">
        </a>
        <div class="d-flex align-items-center gap-3">
            <a href="/contact-us" class="header-btn header-btn-alt">সাইন ইন</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="wp-block-group">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container'      => 'nav',
                    'container_class' => 'header-menu',
                    'menu_class'     => 'nav-menu',
                ));
                ?>
            </div>
        </div>
    </div>
</nav>