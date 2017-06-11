<?php
function custom_dark()
{ 

	$wallstreet_pro_options=theme_data_setup();
    $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
	
	
	
	if($current_options['webriti_stylesheet'] == 'default.css' || $current_options['webriti_stylesheet'] == 'light.css')
	{
		$link_color = $current_options['link_color'];
		
		list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");
		$r = $r - 50;
		$g = $g - 25;
		$b = $b - 40;
	}
	else
	{
		$hash = substr($current_options['webriti_stylesheet'],0,1);
		$color = substr($current_options['webriti_stylesheet'],1);
		
		if($hash=='#')
		{
			$link_color = $current_options['webriti_stylesheet'];
		}
		else
		{
			$link_color = '#'.$current_options['webriti_stylesheet'];
		}
		list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");
		$r = $r - 50;
		$g = $g - 25;
		$b = $b - 40;		
	}
	
	
?>
	<style>
.header-top-area, .navbar .navbar-nav > .active > a, .navbar .navbar-nav > .active > a:hover, .navbar .navbar-nav > .active > a:focus, .navbar .navbar-nav > .open > a,
.navbar .navbar-nav > .open > a:hover, .navbar .navbar-nav > .open > a:focus, .navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li > a:focus, .navbar-inverse .navbar-toggle, .navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus, .flex_btn, .service-area:hover, .service-btn a, .other-service-area:hover i, .home-portfolio-showcase-overlay, .proejct-btn a:hover, .home-blog-btn a, .feature-icon, .tweet-btn a:hover, .post-date, .team-area:hover, .callout-section a, .blog-post-date span.date, a.blog-btn, .blog-pagination a:hover, .blog-pagination a.active, .sidebar-widget > .tagcloud a:hover, .search_btn, .search_error, .search_heading, .sidebar-widget-tab > .active a, .blog-author-social li:hover, .reply a:hover, .blogdetail-btn a, #blogdetail_btn, .portfolio-tabs li.active > a, .portfolio-tabs li > a:hover, .main-portfolio-showcase-overlay, .portfolio-detail-pagi li a:hover, .portfolio-detail-info .project-btn:hover, .prelated-project-btn  li a:hover, .google-map-title, .contact-detail-area i, .cont-btn a, .qua_contact_btn, .short-btn-green, .dropcape-square span, .dropcape-circle span, .panel-default > .short-panel-heading h4, .short-tabs li a, .wallstreet_page_heading, .post-password-form input[type="submit"], .blog-pagination span.current { background-color:<?php echo $link_color; ?>; }
.pagetitle-separator-border { background: <?php echo $link_color; ?> !important;}
.pagetitle-separator-box { background: <?php echo $link_color; ?> none repeat scroll 0 0 !important;}

/* Text Colors */

.head-contact-social li:hover i, .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus, .home-blog-area:hover .home-blog-info h2 > a, .tweet-icon i, .tweet-area p > a, .footer-blog-post:hover h3 a, .footer-blog-post:hover .post-date span.date, .footer-blog-post:hover .post-date span.month, .footer-copyright p a, .page-header-title h1 a, .page-breadcrumbs, .breadcrumbs > .active, .about-social-icons li > a > i:hover, .team-area h5 > span, .blog-post-title > .blog-post-title-wrapper > h1, .blog-post-title > .blog-post-title-wrapper > h2,
.blog-post-title > .blog-post-title-wrapper > h3, .blog-post-title > .blog-post-title-wrapper > h4, .blog-post-title > .blog-post-title-wrapper > h5,
.blog-post-title > .blog-post-title-wrapper > h6, .blog-post-date span.comment > i, .blog-post-title-wrapper h2 a:hover, .blog-post-title-wrapper-full h2 a:hover, .blog-post-title-wrapper > table > tbody > tr > th > a, .blog-post-title-wrapper-full > table > tbody > tr > th > a, 

.blog-post-title-wrapper > table > tbody > tr > th > a:hover, .blog-post-title-wrapper-full > table > tbody > tr > th > a:hover, .footer_widget_column > ul > li > a:hover, .footer_widget_column > ul > li > ul > li > a:hover, .footer_widget_column > ul > li > ul > li > ul > li > a:hover, .sidebar-widget ul.sidebar-tab.sidebar-widget-tab > li > a:hover, .sidebar-widget > ul > li > ul > li > ul > li > a:hover, .sidebar-widget div#calendar_wrap table > caption, #calendar_wrap a, .sidebar-tweet-area p > a, .post-content li:hover a, #recentcomments .recentcomments a, .blog-blockquote blockquote > small, .comment-date a, .comment-form-section > .comment-respond > h3.comment-reply-title a, .comment-form-section > .comment-respond > h3.comment-reply-title > small > a, .comment-form-section > .comment-respond > form#commentform > p.logged-in-as > a, .comment-awaiting-moderation, .portfolio-detail-info p small, .portfolio-detail-info p  > small > a, .portfolio-detail-info p  > small > a:hover, .typo-section h1, .typo-section h2,
.typo-section h3, .typo-section h4, .typo-section h5, .typo-section h6, .typo-para-icons i, .short-tooltip a, .image-para-title, .blog-post-title-wrapper > dl > dt a,
.blog-post-title-wrapper-full > dl > dt a, .blog-post-title-wrapper > dl > dd a, .blog-post-title-wrapper-full > dl > dd a, .blog-post-title-wrapper > ul,
.blog-post-title-wrapper > ul > li a, .blog-post-title-wrapper-full > ul, .blog-post-title-wrapper-full > ul > li a, .blog-post-title-wrapper > ul > li > ul > li a,
.blog-post-title-wrapper-full > ul > li > ul > li a, .blog-post-title-wrapper > ul > li > ul > li > ul > li a, .blog-post-title-wrapper-full > ul > li > ul > li > ul > li a, .blog-post-title-wrapper > ol, .blog-post-title-wrapper > ol > li a, .blog-post-title-wrapper-full > ol, .blog-post-title-wrapper-full > ol > li a,
.blog-post-title-wrapper > ol > li > ol > li a, .blog-post-title-wrapper-full > ol > li > ol > li a, .blog-post-title-wrapper > ol > li > ol > li > ol > li a,
.blog-post-title-wrapper-full > ol > li > ol > li > ol > li a, .blog-post-title-wrapper h1, .blog-post-title-wrapper-full h1, .blog-post-title-wrapper h2,
.blog-post-title-wrapper-full h2, .blog-post-title-wrapper h3, .blog-post-title-wrapper-full h3, .blog-post-title-wrapper h4, .blog-post-title-wrapper-full h4,
.blog-post-title-wrapper h5, .blog-post-title-wrapper-full h5, .blog-post-title-wrapper h6, .blog-post-title-wrapper-full h6, .blog-post-title-wrapper p a, .blog-post-title-wrapper-full p a, .post_message, .comment-detail > table > tbody > tr > th > a:hover, .comment-detail > table > tbody > tr > td > a, .comment-detail > dl > dt a, .comment-detail > dl > dd a, .comment-detail p a, .comment-detail > dl > dt a, .comment-detail > dl > dd a, .comment-detail > ul, .comment-detail > ul > li a, .comment-detail > ul, .comment-detail > ul > li a, .comment-detail > ul > li > ul > li a, .comment-detail > ul > li > ul > li > ul > li a, .comment-detail > ol,
.comment-detail > ol > li a, .comment-detail > ol > li > ol > li a, .comment-detail > ol > li > ol > li > ol > li a, #comment-nav-below > .nav-previous a, #comment-nav-below > .nav-next a, .tiled-gallery .tiled-gallery-item img, .tiled-gallery .tiled-gallery-item img:hover, #gallery-2 img, .post-content li > a:hover, 
.sidebar-widget > ul > li > a:hover, .sidebar-widget > ul > li > ul > li > a:hover, .page-links a { color: <?php echo $link_color; ?>; }

.testimonial-section .overlay { background: rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,0.7) !important; }

@media only screen and (min-width: 480px) and (max-width: 767px) {
.navbar .navbar-nav > .active > a, .navbar .navbar-nav > .active > a:hover, .navbar .navbar-nav > .active > a:focus, 
.navbar .navbar-nav > .open > a, .navbar .navbar-nav > .open > a:hover, .navbar .navbar-nav > .open > a:focus, 
.navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li > a:focus { color: <?php echo $link_color; ?>; }
.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover, .menu-primary-container li a:hover, th { color: <?php echo $link_color; ?>; }	
}

@media only screen and (min-width: 200px) and (max-width: 480px) {
.navbar .navbar-nav > .active > a, .navbar .navbar-nav > .active > a:hover, .navbar .navbar-nav > .active > a:focus, 
.navbar .navbar-nav > .open > a, .navbar .navbar-nav > .open > a:hover, .navbar .navbar-nav > .open > a:focus, 
.navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li > a:focus { color: <?php echo $link_color; ?>; }
.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover { color: <?php echo $link_color; ?>; }	
}

/* Border Colors */

.flex_btn, .other-service-area:hover i, .proejct-btn a:hover { border: 2px solid <?php echo $link_color; ?>; }
.service-area:hover, .service-btn a, .tweet-btn a:hover, .team-area:hover, .blog-pagination a:hover, .blog-pagination a.active, .sidebar-widget > .tagcloud a:hover, .blog-author-social li:hover, .reply a:hover, .portfolio-tabs li.active > a, .portfolio-tabs li > a:hover, .portfolio-detail-pagi li a:hover, .portfolio-detail-info .project-btn:hover, .prelated-project-btn  li a:hover { border: 1px solid <?php echo $link_color; ?>; }
.team-effect:hover .team-box img { border: 3px solid #<?php echo $link_color; ?>; }
.callout-section { border-top: 1px solid <?php echo $link_color; ?>; border-bottom: 5px solid <?php echo $link_color; ?>; }
.search_widget_input:focus { border-color: <?php echo $link_color; ?>; }
.blog-blockquote blockquote, .blog-post-title-wrapper > blockquote, .blog-post-title-wrapper-full > blockquote { border-left: 3px solid <?php echo $link_color; ?>; }
.typo-section blockquote { border-left: 5px solid <?php echo $link_color; ?>; }
.dropdown-menu > li > a { border-bottom: 1px solid rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,0.7); }
.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus{background:none !important;}
.other-service-area i { border: 2px solid <?php echo $link_color; ?>; }

/* Woocommerce */
.woocommerce #respond input#submit.alt, .woocommerce button.button.alt { background-color: <?php echo $link_color; ?>; }
.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current {
    background: <?php echo $link_color; ?>;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active { background: <?php echo $link_color; ?>; border-bottom-color: <?php echo $link_color; ?>; }
.woocommerce-message, .woocommerce-info { border-top-color: <?php echo $link_color; ?>; }
.woocommerce-message:before, .woocommerce-info:before { color: <?php echo $link_color; ?>; }
.woocommerce a.button.alt { background-color:<?php echo $link_color; ?>; }
.woocommerce a.button.alt:hover{ background-color: <?php echo $link_color; ?>;}
.woocommerce input.button.alt{background-color: <?php echo $link_color; ?>;}
.woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, 
.woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover { background-color:<?php echo $link_color; ?>; } 
.woocommerce-MyAccount-navigation ul li > a:hover { color: <?php echo $link_color; ?>; }

.woocommerce-product-search input[type="submit"] { 
	background-color: <?php echo $link_color; ?>;
}
.cart_list a { color:<?php echo $link_color; ?>; }
.order a, .wc-forward { color: <?php echo $link_color; ?>; }
.ui-slider-horizontal .ui-slider-range{background-color:<?php echo $link_color; ?>;}
.woocommerce-message a {color:<?php echo $link_color; ?>;}
.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, 
.woocommerce #respond input#submit.alt, .woocommerce button.button.alt{ background-color:<?php echo $link_color; ?>; }


</style>
<?php 
} 