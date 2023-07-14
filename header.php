<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gds
 */

?>
    <!doctype html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">


        <?php wp_head(); ?>
    </head>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js?ver=5.4.4"></script>
		<script>			
			jQuery(document).ready(function($) {   
					$(window).scroll(function(){
					if($(this).scrollTop()>20){
					  $(".back-to-top").fadeIn();
					}else{
					  $(".back-to-top").fadeOut();
					}    
				  });
					$(".back-to-top").click(function(){
					$("html, body").animate({scrollTop:0},1000)
				  });     	
			});
		</script>
		
		<style>
		.dropdown .dropdown-menu.show {
    		top: -40px !important;
}
		.dropdown .dropdown-item {
    		margin: 5px 0;
			padding: 0.25rem 1rem;
}
			.dropdown-item i{
				color: #c4c5ca; 
				margin-right: 0.5rem;
			}
			.dropdown-item:hover i{
				color: white !important;
			}
			.dropdown-item:hover{
				background:#0085e4 !important;
			}
			.package-main .card-section-package .card-width-package .card-content-package .button-buy-package{
				background-color:#0085e4 ;
			}
		</style>
    <body <?php body_class(); ?>>

    <header>
    <div class="container">
      <div class="header-main">
        <div class="header-left">
          <div class="icon-header">
            <figure class="thumb"><img src="<?php the_field('logo_header', 'option'); ?>" alt=""></figure>
          </div>
          <p>SMS FLOW ผู้นำในการส่ง SMS ครบวงจร</p>
        </div>
        <div class="header-right">
          <a href="#package" class="scrollTo">แพ็กเกจ</a>
          <a href="#example" class="scrollTo">ตัวอย่างข้อความ</a>
          <a href="#promotion" class="scrollTo">โปรโมชั่น</a>
        </div>
        

      <div class="dropdown">
        <div class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="<?php bloginfo('template_url');?>/assets/img/icon/menu-mb.png" alt="">
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item scrollTo" href="#package"><i class="far fa-envelope"></i>แพ็กเกจ</a>
          <a class="dropdown-item scrollTo" href="#example"><i class="fas fa-sms"></i>ตัวอย่างข้อความ</a>
          <a class="dropdown-item scrollTo" href="#promotion"><i class="fas fa-bullhorn"></i>โปรโมชั่น</a>
          <a class="dropdown-item scrollTo" href="#"><i class="fas fa-headset"></i>ติดต่อเรา</a>
        </div>
      </div>

      </div>


      <div class="popup">
        <div class="socail-popup">
          <a href="<?php the_field('line', 'option'); ?>" target="_blank">
            <figure class="thumb">
              <img src="<?php bloginfo('template_url');?>/assets/img/icon/line-popup.png" alt="">
            </figure>
          </a>
          <a href="<?php the_field('telegram', 'option'); ?>" target="_blank">
            <figure class="thumb">
              <img src="<?php bloginfo('template_url');?>/assets/img/icon/telegram.png" alt="">
            </figure>
          </a>
        </div>

        <div class="back-to-top" id="button">
          <figure class="thumb">
            <img src="<?php bloginfo('template_url');?>/assets/img/icon/backtotop.png" alt="">
          </figure>
        </div>
      </div>

  </header>
