<?php
$header_image  = velocitytheme_option('header_image');
if($header_image){
    echo '<div class="bg-color-theme position-relative shadow-sm">';
        echo '<div class="container">';
            echo '<img class="img-fluid" src="'.$header_image.'" loading="lazy">';
        echo '</div>';
    echo '</div>';
}