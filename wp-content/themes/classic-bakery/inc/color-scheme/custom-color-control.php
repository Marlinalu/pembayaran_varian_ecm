<?php 

$classic_bakery_color_scheme_one = get_theme_mod('classic_bakery_color_scheme_one');

$classic_bakery_color_scheme_css = "";

if($classic_bakery_color_scheme_one != false){

  $classic_bakery_color_scheme_css .='.rsvp_button a,
  .social-icons i:hover,
  span.cartcount,
  .pagemore a:hover,
  .woocommerce ul.products li.product .button:hover, 
  .woocommerce #respond input#submit.alt:hover, 
  .woocommerce a.button.alt:hover, 
  .woocommerce button.button.alt:hover, 
  .woocommerce input.button.alt:hover, 
  .woocommerce a.button:hover, 
  .woocommerce button.button:hover, 
  #commentform input#submit:hover,
  .header::-webkit-scrollbar-thumb,
  .catwrapslider .owl-prev:hover,
  .catwrapslider .owl-next:hover,
  span.onsale,
  .toggle-nav button,
  #footer input.search-submit,
  #sidebar input.search-submit, 
  #footer input.search-submit, 
  form.woocommerce-product-search button,
  #product_cat_slider button.owl-dot.active{';

  $classic_bakery_color_scheme_css .='background: '.esc_attr($classic_bakery_color_scheme_one).';';

  $classic_bakery_color_scheme_css .='}';

  $classic_bakery_color_scheme_css .='.search-cart form input,
  .search-cart,
  .entry-content table th,
  .comment-body table th,
  .entry-content table td,
  .comment-body table td,
  .listarticle,
  aside.widget,
  .social-icons i,
  .rsvp_inner,
  .woocommerce table.shop_table,
  .woocommerce .quantity .qty,
  #sidebar select,
  .toggle-nav,
  #sidebar input[type="text"], 
  #sidebar input[type="search"], 
  #footer input[type="search"],
  #sidebar .tagcloud a {';

  $classic_bakery_color_scheme_css .='border-color: '.esc_attr($classic_bakery_color_scheme_one).';';

  $classic_bakery_color_scheme_css .='}';

  $classic_bakery_color_scheme_css .='span.cartbox i,
  .social-icons i,
  .woocommerce ul.products li.product .button,
  .woocommerce #respond input#submit.alt,
  .woocommerce a.button.alt, 
  .woocommerce button.button.alt, 
  .woocommerce input.button.alt, 
  .woocommerce a.button, 
  .woocommerce button.button, 
  .woocommerce #respond input#submit, 
  #commentform input#submit,
  a,h1, h2, h3, h4, h5, h6,
  .listarticle h2 a:hover, 
  #sidebar ul li a:hover, 
  ftr-4-box ul li a:hover, 
  .ftr-4-box ul li.current_page_item a,
  .postmeta a:hover,
  .ftr-4-box h5 span,
  .listarticle h2 a:hover, 
  #sidebar ul li a:hover, 
  .ftr-4-box ul li a:hover, 
  .ftr-4-box ul li.current_page_item a,
  #sidebar .tagcloud a{';

  $classic_bakery_color_scheme_css .='color: '.esc_attr($classic_bakery_color_scheme_one).';';

  $classic_bakery_color_scheme_css .='}';
}

//---------------------------------Logo-Max-height--------- 
  $classic_bakery_logo_width = get_theme_mod('classic_bakery_logo_width');

  if($classic_bakery_logo_width != false){

    $classic_bakery_color_scheme_css .='.logo .custom-logo-link img{';

      $classic_bakery_color_scheme_css .='width: '.esc_html($classic_bakery_logo_width).'px;';

    $classic_bakery_color_scheme_css .='}';
  }