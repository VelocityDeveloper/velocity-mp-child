<div class="vmpc-footer-image"></div>
<footer class="velocity-iklan-footer bg-light" id="colophon">
    <div class="container">
        <?php echo '<div class="row m-0 pt-4 footer-widget">';
            for ($x = 1; $x <= 4; $x++) {
                if (is_active_sidebar('footer-widget-'.$x)) {
                    echo '<div class="col-md col-12 footer-widget-'.$x.'" >';
                        dynamic_sidebar('footer-widget-'.$x);
                    echo '</div>';
                }
            }
        echo '</div>'; ?>
        <div class="site-info text-center py-3">
            <small>© <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved. Design by <a href="https://velocitydeveloper.com/" target="_blank" rel="noopener noreferrer"> Velocity Developer</a>.</small>
        </div>
    </div>
</footer>