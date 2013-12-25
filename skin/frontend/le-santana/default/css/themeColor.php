<?php
	define('MAGENTO_ROOT', (dirname(__FILE__).'../../../../../../'));
	$mageFilename = MAGENTO_ROOT . '/app/Mage.php';
	require_once $mageFilename;
	umask(0);
	Mage::app();
	$config = Mage::getStoreConfig('mdloption');
	$color_helper = Mage::helper('mdloption/color');
	header("Content-type: text/css; charset: UTF-8");
?>


<?php if ( $config['genral_theme_setting']['enable_font'] ) : ?>
    body{font-family:"<?php echo $config['genral_theme_setting']['font']; ?>"} 
    <?php endif; ?>

	<?php if ( $config['genral_theme_setting']['font_size'] ) : ?>
    body{font-size:<?php echo $config['genral_theme_setting']['font_size']; ?>px;}
    <?php endif; ?>
    
<?php if ( $config['genral_theme_setting']['theme-color-option']):?>
	    
    <?php if ( $config['genral_theme_setting']['color'] ) : ?>
    .promoBlock h2, .mix_wrapper .jcarousel-prev, .mix_wrapper .jcarousel-next, .sale strong, .new strong, .fancybox.quick_view, button.button span, button.button span span, .ac-heading, .link_box h3, .goTop, .fancybox.btn, .sorter .view-mode strong.grid, .sort-by .direction, .pager li > a, .pager li > span, .zoomBtn, .add, .dec.add, .prod-prev, .prod-next, .product_custom_content li em, .product-tabs li.active a, .checkout-types-top li a, .product-options-cart span, h2.sec-heading, .block-progress dt, .opc .active .step-title, .opc .allow .step-title, .mix_wrapper .link-wishlist, .mix_wrapper .compareR, ul.itemPro .link-wishlist, ul.itemPro .compareR{
    background-color:<?php echo $config['genral_theme_setting']['color']; ?>;}
    
    .subtitle, .sub-title, .ic_caption .regular-price .price, .lookbook-wrapper span.box-links, .footer.container ul li em, .promoBlock a, .block-content_pan em, .h-top-left span span, .h-top-right span span, .shippingLInk em, .price-box .price, a, #narrow-by-list li a, .product-shop .regular-price .price, .product-view .product-shop .add-to-links li i, .email-friend i, .h-top-left i {color:<?php echo $config['genral_theme_setting']['color']; ?>;}
    body, .copyright, .remain_cart{border-color:<?php echo $config['genral_theme_setting']['color']; ?>;}
    <?php endif; ?>

	<?php if ( $config['genral_theme_setting']['hover_color'] ) : ?>
    .mix_wrapper .jcarousel-prev:hover, .mix_wrapper .jcarousel-next:hover, ul.add-to-links li a.link-wishlist:hover, ul.add-to-links li a.link-compare:hover, .metro-banner-control .control-left:hover, .metro-banner-control .control-right:hover, .prod-next:hover, .prod-prev:hover, .prod-next:hover, .prod-prev:hover, .more-views .jcarousel-next.jcarousel-next-horizontal:hover, .more-views .jcarousel-prev.jcarousel-prev-horizontal:hover, .product_custom_content ul li:hover span, .viewAll:hover, .flexslider .flex-prev:hover, .theme-default a.nivo-prevNav:hover, .theme-default a.nivo-nextNav:hover, .flexslider .flex-next:hover{background-color:<?php echo $config['genral_theme_setting']['hover_color']; ?>;}
    <?php endif; ?>
    
    
	<?php if ( $config['genral_theme_setting']['body_font_color'] ) : ?>
    body{color:<?php echo $config['genral_theme_setting']['body_font_color']; ?>;}
    <?php endif; ?>

	<?php if ( $config['genral_theme_setting']['anchor_hover'] ) : ?>
    a:hover{color:<?php echo $config['genral_theme_setting']['anchor_hover']; ?>;}
    <?php endif; ?>
    
	<?php if ( $config['genral_theme_setting']['left_menu_bg'] ) : ?>
    .magicat-container .block-title.cat_heading{background-color:<?php echo $config['genral_theme_setting']['left_menu_bg']; ?>;}
    <?php endif; ?>

	<?php if ( $config['genral_theme_setting']['block_heading'] ) : ?>
    .block .block-title{background:<?php echo $config['genral_theme_setting']['block_heading']; ?>; }
    .block .block-title{border-bottom-color:<?php echo $config['genral_theme_setting']['block_heading']; ?>; }
    <?php endif; ?>

	<?php if ( $config['genral_theme_setting']['content_heading'] ) : ?>
    .block .block-title strong, h2.line_heading, .page-title h1{color:<?php echo $config['genral_theme_setting']['content_heading']; ?>; }
    <?php endif; ?>


	<?php if ( $config['genral_theme_setting']['new_batch'] ) : ?>
    .new strong{background-color:<?php echo $config['genral_theme_setting']['new_batch']; ?>;}
    <?php endif; ?>
    
    
	<?php if ( $config['genral_theme_setting']['new_batch_color'] ) : ?>
    .new strong{color:<?php echo $config['genral_theme_setting']['new_batch_color']; ?>;}
    <?php endif; ?>

	<?php if ( $config['genral_theme_setting']['sale_batch'] ) : ?>
    .sale strong{background-color:<?php echo $config['genral_theme_setting']['sale_batch']; ?>;}
    <?php endif; ?>
    
	<?php if ( $config['genral_theme_setting']['sale_batch_color'] ) : ?>
    .sale strong{color:<?php echo $config['genral_theme_setting']['sale_batch_color']; ?>;}
    <?php endif; ?>
    
<?php endif; ?>

/*Navigation*/
    
<?php if ( $config['navsettings']['theme-color-option'] ) : ?>
    
     <?php if ( $config['navsettings']['nav_color_hover_color'] ) : ?>
    	.cms-index-index .sf-menu > li.home a:hover, .cms-index-index #nav li.home a:hover, #nav a:hover, #nav a.level-top.over, #nav li.over a span, .sf-menu > li > a:hover, .sf-menu > li.sfHover > a, .sf-menu > li.current-menu-item > a{color:<?php echo $config['navsettings']['nav_color_hover_color']; ?>;}
     <?php endif; ?>
    
    <?php if ( $config['navsettings']['nav_color'] ) : ?>
    	#nav a, .sf-menu > li > a{color:<?php echo $config['navsettings']['nav_color']; ?>;}
    <?php endif; ?>
    
    
    
    
     <?php if ( $config['navsettings']['nav_color_active'] ) : ?>
    	.cms-index-index .sf-menu > li.home a, .sf-menu > li.active > a, .cms-index-index #nav li.home a, #nav li.level-top.active > a{background:<?php echo $config['navsettings']['nav_color_active']; ?>;}
    <?php endif; ?>
    
    <?php if ( $config['navsettings']['nav_color_active_color'] ) : ?>
    	.cms-index-index .sf-menu > li.home a, .sf-menu > li.active > a, .cms-index-index #nav li.home a, #nav li.level-top.active > a{color:<?php echo $config['navsettings']['nav_color_active_color']; ?>;}
    <?php endif; ?>
    
     <?php if ( $config['navsettings']['nav_color_hover'] ) : ?>
    	.cms-index-index .sf-menu > li.home a:hover, .cms-index-index #nav li.home a:hover, #nav li.level-top.active > a:hover, #nav li.level-top.active.over > a, #nav a:hover, #nav a.level-top.over, .sf-menu > li:hover > a, .sf-menu > li.sfHover > a, .sf-menu > li.current-menu-item > a{background:<?php echo $config['navsettings']['nav_color_hover']; ?>;}
        .sf-menu > li > a:hover.level-top.parent:before, .sf-menu > li.parent:hover > a:before{border-top-color:<?php echo $config['navsettings']['nav_color_hover']; ?>;}
    <?php endif; ?>
    
    
     
     <?php if ( $config['navsettings']['nav_submenu_heading_bg'] ) : ?>
    	#nav li.over ul li a span, .sf-menu li li a:hover, .sf-menu li li.sfHover > a,
		.sf-menu li li.current-menu-item > a{background:<?php echo $config['navsettings']['nav_submenu_heading_bg']; ?>;}
     <?php endif; ?>
     
      <?php if ( $config['navsettings']['nav_submenu_color'] ) : ?>
    	#nav ul li li a span, #nav ul li li a, #nav li.over ul li ul li a span, #nav li.over ul li ul li a, #nav li ul li ul li a, #nav li ul li ul li a span, .sf-menu li li a {color:<?php echo $config['navsettings']['nav_submenu_color']; ?>;}
     <?php endif; ?>
     
      <?php if ( $config['navsettings']['nav_submenu_color_hover'] ) : ?>
    	#nav ul li li a:hover, #nav li.over ul li ul li a span:hover, .sf-menu li li a:hover,
		.sf-menu li li.sfHover > a,
		.sf-menu li li.current-menu-item > a{color:<?php echo $config['navsettings']['nav_submenu_color_hover']; ?>;}
     <?php endif; ?>
     
     <?php if ( $config['navsettings']['nav_bg'] ) : ?>
    	#nav ul, .sf-menu li ul{background:<?php echo $config['navsettings']['nav_bg']; ?>;}
     <?php endif; ?>
      
     <?php if ( $config['navsettings']['sub_menu_bottom_border'] ) : ?>
    	#nav ul.level0, .sf-menu li ul{border-color:<?php echo $config['navsettings']['sub_menu_bottom_border']; ?>;}
     <?php endif; ?>
     
        
<?php endif; ?>

/*button setting*/
<?php if ( $config['buttonSetting']['theme-color-option'] ) : ?>
<?php if ($config['buttonSetting']['enable_font']==1) :?>
	<?php if ( $config['buttonSetting']['button_font'] ) : ?>
    button.button span, .viewCart{font-family:"<?php echo $config['buttonSetting']['button_font']; ?>"} 
    <?php endif; ?>
<?php endif; ?>

	<?php if ( $config['buttonSetting']['button_color'] ) : ?>
    button.button span, button.button span span, .viewCart, .form-subscribe button.button span, button.button.btn-mdlcart span, button.button.btn-mdlcart span span{background-color:<?php echo $config['buttonSetting']['button_color']; ?>;}
    <?php endif; ?>

	<?php if ( $config['buttonSetting']['button_hover'] ) : ?>
    button.button:hover span, button.button:hover span span, .viewCart, .form-subscribe button.button:hover span, button.button.btn-mdlcart:hover span, button.button.btn-mdlcart:hover span span{background-color:<?php echo $config['buttonSetting']['button_hover']; ?>;}
    <?php endif; ?>
    
	<?php if ( $config['buttonSetting']['button_text'] ) : ?>
    button.button span, button.button span span, .viewCart, .form-subscribe button.button span, button.button.btn-mdlcart span, button.button.btn-mdlcart span span{color:<?php echo $config['buttonSetting']['button_text']; ?>;}
    <?php endif; ?>
    
	<?php if ( $config['buttonSetting']['button_text_hover'] ) : ?>
    button.button:hover span, button.button:hover span span, .viewCart, .form-subscribe button.button:hover span, button.button.btn-mdlcart:hover span, button.button.btn-mdlcart:hover span span{color:<?php echo $config['buttonSetting']['button_text_hover']; ?>;}
    <?php endif; ?>
    
	<?php if ( $config['buttonSetting']['next_pre_btn'] ) : ?>
    .prod-prev, .prod-next{background-color:<?php echo $config['buttonSetting']['next_pre_btn']; ?>; }
    <?php endif; ?>
    
<?php endif; ?>
/*-----------*/

/*price setting*/
<?php if ( $config['priceSetting']['theme-color-option'] ) : ?>
	<?php if ($config['priceSetting']['enable_font']==1) :?>
		<?php if ( $config['priceSetting']['price_font'] ) : ?>
        .price-box{font-family:"<?php echo $config['priceSetting']['price_font']; ?>"} 
        <?php endif; ?>
<?php endif; ?>

	<?php if ( $config['priceSetting']['regular_price'] ) : ?>
    .regular-price .price, .product-shop .regular-price .price{color:<?php echo $config['priceSetting']['regular_price']; ?>;}
    <?php endif; ?>

	<?php if ( $config['priceSetting']['special_price'] ) : ?>
    .special-price .price, .minimal-price-link .price{color:<?php echo $config['priceSetting']['special_price']; ?>;}
    <?php endif; ?>

	<?php if ( $config['priceSetting']['special_price_label'] ) : ?>
    .special-price .price-label, .minimal-price-link .label{color:<?php echo $config['priceSetting']['special_price_label']; ?>;}
    <?php endif; ?>
    
<?php endif; ?>

/*footer setting*/
<?php if ( $config['footer_setting']['theme-color-option'] ) : ?>
<?php if ( $config['footer_setting']['footer_heading_bg'] ) : ?>
.link_box h3{background-color:<?php echo $config['footer_setting']['footer_heading_bg']; ?>; }
<?php endif; ?>
<?php if ( $config['footer_setting']['footer_heading'] ) : ?>
.footer h3, .footer2 .link_box h3, .footer3 .link_box h3{color:<?php echo $config['footer_setting']['footer_heading']; ?>; }
<?php endif; ?>
<?php if ( $config['footer_setting']['footer_text'] ) : ?>
.footer p, .footer ul.connect li, .footer.container ul li a, .footer.container ul li em, .footer.container ul li, .copyText, .footer2 .copyText, .footer.container ul li, .footer3 .copyText, .footer.container ul li{color:<?php echo $config['footer_setting']['footer_text']; ?>; }
<?php endif; ?>
<?php if ( $config['footer_setting']['footer_anchor'] ) : ?>
.footer a, .footer ul.footer_links li a, .footer2 .footer.container ul li a, .footer3 .footer.container ul li a{color:<?php echo $config['footer_setting']['footer_anchor']; ?>; }
<?php endif; ?>
<?php if ( $config['footer_setting']['footer_hover'] ) : ?>
.footer a:hover, .footer ul.footer_links li a:hover{color:<?php echo $config['footer_setting']['footer_hover']; ?>; }
<?php endif; ?>
<?php endif; ?>
