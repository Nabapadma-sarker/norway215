<?php
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
$shop_button='';
if ( class_exists( 'WooCommerce' ) ) {
	if($current_options['search_effect_style_setting']=='toogle')
      {
        
      	$shop_button .='<div class="header-module">';
        if($current_options['enable_search_btn']==true){
        $shop_button .='<div class="search-box-outer dropdown menu-item"> 
                    <a href="#" class="search-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-search"></i></a>
                    <ul class="dropdown-menu pull-right search-panel" role="menu" aria-hidden="true" aria-expanded="false">
                                <li class="dropdown-item panel-outer">
                                 <div class="form-container">
                                    <form role="search" method="get" class="search-form" action="'.esc_url( home_url( '/' )).'">
                                     <label>
                                      <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                     </label>
                                     <input type="submit" class="search-submit" value="'.__('Search','wallstreet').'">
                                    </form>                   
                                   </div>
                                 </li>
                                </ul>
                    </div>';
                    }
				 $shop_button .='<div class="cart-header ">';
      global $woocommerce; 
      $link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
      $shop_button .= '<a class="cart-icon" href="'.$link.'" >';
      
      if ($woocommerce->cart->cart_contents_count == 0){
          $shop_button .= '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
        }
        else
        {
          $shop_button .= '<i class="fa fa-cart-plus" aria-hidden="true"></i>';
        }
           
        $shop_button .= '</a>';
        
        $shop_button .= '<a href="'.$link.'" class="cart-total"><span class="cart-total">
          '.sprintf(_n('%d item', $woocommerce->cart->cart_contents_count, 'wallstreet'), $woocommerce->cart->cart_contents_count).'</span></a>';
					$shop_button .='</div></div>';
      }

elseif($current_options['search_effect_style_setting']=='popup_light' || $current_options['search_effect_style_setting']=='popup_dark')
          {
          	$shop_button .='<div class="header-module">';
             if($current_options['enable_search_btn']==true){
          	$shop_button .='<div class="nav-search nav-light-search wrap">
                   <div class="search-box-outer">
                   <div class="dropdown">
                <a href="#searchbar_fullscreen" class="nav-link search-iconaria-haspopup=" true"="" aria-expanded="false">
                  <i class="fa fa-search"></i>
                </a>
                        </div>
                      </div>
                    </div>';}
          $shop_button .='<div class="cart-header ">';
      global $woocommerce; 
      $link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
      $shop_button .= '<a class="cart-icon" href="'.$link.'" >';
      
      if ($woocommerce->cart->cart_contents_count == 0){
          $shop_button .= '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
        }
        else
        {
          $shop_button .= '<i class="fa fa-cart-plus" aria-hidden="true"></i>';
        }
           
        $shop_button .= '</a>';
        
        $shop_button .= '<a href="'.$link.'" class="cart-total"><span class="cart-total">
          '.sprintf(_n('%d item', $woocommerce->cart->cart_contents_count, 'wallstreet'), $woocommerce->cart->cart_contents_count).'</span></a>';
					$shop_button .='</div></div>';

}
	}
	//Below Condition will run whenever Woocommerce plugin is deactivated
	else
	{
		if($current_options['search_effect_style_setting']=='toogle'  && $current_options['enable_search_btn']==true)
      {
      	$shop_button .= '<div class="header-module">
                          <div class="search-box-outer dropdown">
                            <a href="#" title="Search" class="search-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-search"></i></a>
                            <ul class="dropdown-menu pull-right search-panel" role="menu" aria-hidden="true" aria-expanded="false">
                              <li class="dropdown-item panel-outer">
                                <div class="form-container">
	                                <form role="search" method="get" class="search-form" action="'.esc_url( home_url( '/' )).'">
	                                 <label>
	                                  <input type="search" class="search-field" placeholder="Search …" value="" name="s">
	                                 </label>
	                                 <input type="submit" class="search-submit" value="'.__('Search','wallstreet').'">
	                                </form>                   
	                               </div>
	                            </li>
	                          </ul>
		                    </div>
		                  </div>
					</div>';
      }
      elseif($current_options['search_effect_style_setting']=='popup_light' && $current_options['enable_search_btn']==true || $current_options['search_effect_style_setting']=='popup_dark' && $current_options['enable_search_btn']==true)
          {
          	$shop_button .='<div class="header-module">
          	<div class="nav-search nav-light-search wrap">
                   <div class="search-box-outer">
                   <div class="dropdown">
                <a href="#searchbar_fullscreen" class="nav-link search-iconaria-haspopup=" true"="" aria-expanded="false">
                  <i class="fa fa-search"></i>
                </a>
                        </div>
                      </div>
                    </div>
                    </div>';
          }
	}
echo $shop_button;	
?>