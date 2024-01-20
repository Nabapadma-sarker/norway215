<?php
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
  if($current_options['header_presets_stlyle']==4 || $current_options['header_presets_stlyle']==6)
   {
    $shop_button = '<ul class="nav navbar-nav navbar-left">%3$s';
    }
    else
    {
      $shop_button = '<ul class="nav navbar-nav navbar-right">%3$s';
    }

if ( class_exists( 'WooCommerce' ) ) {
  if($current_options['header_presets_stlyle']==4 || $current_options['header_presets_stlyle']==6)
  {
$shop_button .= '</ul> <div class="header-module">';
  }
  else
  {
    $shop_button .= '<li> <div class="header-module">';
  }
	 
   if($current_options['search_effect_style_setting']=='toogle' && $current_options['enable_search_btn']==true)
      {
        $shop_button .='<div class="search-box-outer dropdown">
                          <a href="#" title="Search" class="search-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-search"></i></a>
                            <ul class="dropdown-menu pull-right search-panel" role="menu" aria-hidden="true" aria-expanded="false">
                              <li class="dropdown-item panel-outer">
                                <div class="form-container">
                                  <form role="search" method="get" autocomplete="off" class="search-form" action="'.esc_url( home_url( '/' )).'">
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
    elseif($current_options['search_effect_style_setting']=='popup_light' && $current_options['enable_search_btn']==true || $current_options['search_effect_style_setting']=='popup_dark'  && $current_options['enable_search_btn']==true)
          {
            $shop_button .='<div class="nav-search nav-light-search wrap">
                            <div class="search-box-outer">
                              <div class="dropdown">
                                <a href="#searchbar_fullscreen" title="Search" class="nav-link search-iconaria-haspopup=" true"="" aria-expanded="false">
                                 <i class="fa fa-search"></i>
                                </a>
                              </div>
                            </div>
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
        
        $shop_button .= '<a class="cart-total" href="'.$link.'" ><span class="cart-total">
          '.sprintf(_n('%d item', $woocommerce->cart->cart_contents_count, 'wallstreet'), $woocommerce->cart->cart_contents_count).'</span></a>';   
          if($current_options['header_presets_stlyle']==4 || $current_options['header_presets_stlyle']==6)
          {
          $shop_button .= '</div>';   
        }
}
else {
  if($current_options['search_effect_style_setting']=='toogle'  && $current_options['enable_search_btn']==true)
      {
         if($current_options['header_presets_stlyle']==4 || $current_options['header_presets_stlyle']==6)
  {
    $shop_button .= '</ul><div class="header-module">';
  }
  else
  {
    $shop_button .= '<li ><div class="header-module">';
  }
        
         $shop_button .= '<div class="search-box-outer dropdown">
                  <a href="#" title="Search" class="search-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
               <i class="fa fa-search"></i></a>
              <ul class="dropdown-menu pull-right search-panel" role="menu" aria-hidden="true" aria-expanded="false">
                              <li class="dropdown-item panel-outer">
                             <div class="form-container">
                                <form role="search" method="get" autocomplete="off" class="search-form" action="'.esc_url( home_url( '/' )).'">
                                 <label>
                                  <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                 </label>
                                 <input type="submit" class="search-submit" value="'.__('Search','wallstreet').'">
                                </form>                   
                               </div>
                             </li>
                           </ul>
                   </div>
      </div>';
      }
  elseif($current_options['search_effect_style_setting']=='popup_light' && $current_options['enable_search_btn']==true || $current_options['search_effect_style_setting']=='popup_dark' && $current_options['enable_search_btn']==true)
     {
      if($current_options['header_presets_stlyle']==4 || $current_options['header_presets_stlyle']==6)  {
        $shop_button .= '</ul><div class="header-module">';
      }
      else{
         $shop_button .= '<li class="nav-item"><div class="header-module">';
      }

       
                 $shop_button .= '<div class="nav-search nav-light-search wrap">
                   <div class="search-box-outer">
                   <div class="dropdown">
                <a href="#searchbar_fullscreen" title="Search" class="nav-link search-iconaria-haspopup=" true"="" aria-expanded="false">
                  <i class="fa fa-search"></i>
                </a>
                        </div>
                      </div>
                    </div>
      </div>';
     }    

}	
 if($current_options['header_presets_stlyle']==4 || $current_options['header_presets_stlyle']==6)  {
        $shop_button .= '</ul></div>';
      }
 else
 {
   $shop_button .= '</ul>';
 }     
if($current_options['header_presets_stlyle']==6)
			{
      wp_nav_menu( array(  
          'theme_location' => 'primary',
          'container'  => 'nav-collapse collapse navbar-inverse-collapse',
          'menu_class' => 'nav navbar-nav navbar-left',
          'items_wrap'  => $shop_button,
          'fallback_cb' => 'webriti_fallback_page_menu',
          'walker' => new webriti_nav_walker()
          )
        );
               }
else{
        wp_nav_menu( array(  
          'theme_location' => 'primary',
          'container'  => 'nav-collapse collapse navbar-inverse-collapse',
          'menu_class' => 'nav navbar-nav navbar-right',
          'items_wrap'  => $shop_button,
          'fallback_cb' => 'webriti_fallback_page_menu',
          'walker' => new webriti_nav_walker()
          )
        );
}
			?>