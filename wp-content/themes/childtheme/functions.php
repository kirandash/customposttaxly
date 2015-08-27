<?php

function my_add_reviews( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ($query->is_home() || $query->is_search() ) {
        $query->set( 'post_type', array( 'post', 'review' ) );
        }
    }
}

add_action( 'pre_get_posts', 'my_add_reviews' );
                
?>				