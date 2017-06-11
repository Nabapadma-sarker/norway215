<?php

/*--------------------------------------------------------------------*/
/*     Register Google Fonts
/*--------------------------------------------------------------------*/
function wallstreet_fonts_url() {
	
    $fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Roboto:100,300,400,500,700','900','italic');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $fonts_url;
}
function wallstreet_scripts_styles() {
    wp_enqueue_style( 'spicy-fonts', wallstreet_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'wallstreet_scripts_styles' );
?>