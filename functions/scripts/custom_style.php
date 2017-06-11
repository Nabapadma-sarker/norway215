<?php 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );	 
if($current_options['enable_custom_typography']==true)
{
?>
<style> 
/****** custom typography *********/ 
 .home-blog-description p,
 .portfolio-detail-description p,
 .blog-post-title-wrapper-full p,
 .blog-post-title-wrapper p
 {
	font-size:<?php echo $current_options['general_typography_fontsize'].'px'; ?> ;
	font-family:'Roboto' !important;
	font-weight:<?php echo $current_options['general_typography_fontfamily']; ?> ;
	font-style:<?php echo $current_options['general_typography_fontstyle']; ?> ;
	line-height:<?php echo ($current_options['general_typography_fontsize']+5).'px'; ?> ;
	
}
/*** Menu title */
.navbar .navbar-nav > li > a{
	font-size:<?php echo $current_options['menu_title_fontsize'].'px' ; ?> !important;
	font-family:'Roboto' !important;
	font-style:<?php echo $current_options['menu_title_fontstyle']; ?> !important;
	font-weight:<?php echo $current_options['menu_title_fontfamily']; ?> !important;
}
/*** post and Page title */
.blog-post-title-wrapper h2, .blog-post-title-wrapper-full h2 {
	font-size:<?php echo $current_options['post_title_fontsize'].'px'; ?>;
	font-family:'Roboto' !important;
	font-weight:<?php echo $current_options['post_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['post_title_fontstyle']; ?>;
}
/*** service title */
.service-area h2
{
	font-size:<?php echo $current_options['service_title_fontsize'].'px'; ?>;
	font-family:'Roboto' !important;
	font-weight:<?php echo $current_options['service_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['service_title_fontstyle']; ?>;
}

/******** portfolio title ********/
.main-portfolio-showcase .main-portfolio-showcase-detail h4  { 
	font-size:<?php echo $current_options['portfolio_title_fontsize'].'px'; ?>;
	font-family:'Roboto' !important;
	font-weight:<?php echo $current_options['portfolio_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['portfolio_title_fontstyle']; ?>;
}
/******* footer widget title*********/
.footer_widget_title,
.sidebar-widget-title h2{
	font-size:<?php echo $current_options['widget_title_fontsize'].'px'; ?>;
	font-family:'Roboto' !important;
	font-weight:<?php echo $current_options['widget_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['widget_title_fontstyle']; ?>;
}
.callout-section h3{
	font-size:<?php echo $current_options['calloutarea_title_fontsize'].'px'; ?>;
	font-family:'Roboto' !important;
	font-weight:<?php echo $current_options['calloutarea_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['calloutarea_title_fontstyle']; ?>;
}
.callout-section p{
	font-size:<?php echo $current_options['calloutarea_description_fontsize'].'px'; ?>;
	font-family:'Roboto' !important;
	font-weight:<?php echo $current_options['calloutarea_description_fontfamily']; ?>;
	font-style:<?php echo $current_options['calloutarea_description_fontstyle']; ?>;
}
.callout-section a {	
	font-size:<?php echo $current_options['calloutarea_purches_fontsize'].'px'; ?>;
	font-family:'Roboto' !important;
	font-weight:<?php echo $current_options['calloutarea_purches_fontfamily']; ?>;
	font-style:<?php echo $current_options['calloutarea_purches_fontstyle']; ?>;
}
</style>
<?php } ?>