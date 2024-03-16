<div class="row align-items-center m-0 py-2">
    <div class="col-9 col-md-4">
        <?php echo the_custom_logo(); ?>
    </div>
    <div class="col-3 col-md-8 ps-0">
        <nav id="main-nav" class="navbar navbar-expand-md d-block navbar-white py-0 shadow-none text-end text-md-center" aria-labelledby="main-nav-label">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'justg'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNavOffcanvas">

                <div class="offcanvas-header justify-content-end">
                    <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div><!-- .offcancas-header -->

                <!-- The WordPress Menu goes here -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'offcanvas-body',
                        'container_id'    => '',
                        'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3 text-start text-md-center',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 4,
                        'walker'          => new justg_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
            </div><!-- .offcanvas -->
        </nav>
    </div>
</div>

<div class="container mt-2">
    <?php echo do_shortcode('[velocity-iklan-search]');?>
</div>