<?php

# 加载JavaScript到footer [Add JavaScript to footer]
function the4_enqueue_scripts() {
    wp_enqueue_script( 'jquery.min'          ,THE4_JS_PATH . "jquery.min.js"          , array() , false , true  );
    wp_enqueue_script( 'jquery.easing.1.3'   ,THE4_JS_PATH . "jquery.easing.1.3.js"   , array() , false , true  );
    wp_enqueue_script( 'bootstrap.min'       ,THE4_JS_PATH . "bootstrap.min.js"       , array() , false , true  );
    wp_enqueue_script( 'jquery.waypoints.min',THE4_JS_PATH . "jquery.waypoints.min.js", array() , false , true  );
    wp_enqueue_script( 'main'                ,THE4_JS_PATH . "main.js"                , array() , false , true  );
    wp_enqueue_script( 'modernizr-2.6.2.min' ,THE4_JS_PATH . "modernizr-2.6.2.min.js" , array() , false , false );
    wp_enqueue_script( 'respond.min'         ,THE4_JS_PATH . "respond.min.js"         , array() , false , false );
    if ( is_singular() ) {
        wp_enqueue_script( 'comments-ajax', get_template_directory_uri().'/comments-ajax.js' , array(),true );
        wp_enqueue_script( 'smile'        , THE4_JS_PATH."smilies.js", array(),true );
    };
}

add_action( 'wp_enqueue_scripts' , 'the4_enqueue_scripts' , 999);
