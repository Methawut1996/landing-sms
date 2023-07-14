<?php
/* Template Name: Home Page */
get_header();
?>
<div class="content-banner">
    <div class="container">

      <div class="my-Swiper">
        <div class="swiper-wrapper">
          <?php 
                                $z = 0;
                                while( have_rows('banner') ): the_row();?>
			<div class="swiper-slide">
            <div class="banner-img">
              <figure class="thumb"><img src="<?php the_sub_field('banner_img'); ?>" alt=""></figure>
            </div>
          </div>
          <?php 
                                $z++;
                                endwhile; ?>

        </div>
      </div>
    </div>
  </div>






  <div class="package-main " id="package">
    <div class="container">
      <div class="content-package">
        <h1 class="style-header"><?php the_field('package_head'); ?></h1>
        <p class="package-head-title"><?php the_field('package_title'); ?>
        </p>
        <div class="card-section-package">
          <div class="swiper-package">			  
            <div class="swiper-wrapper align-items-end">
				<?php $args = array(
'post_type' => 'post',
'cat' => '2',
'posts_per_page' => -1,
);
      $blogs = new WP_Query($args);
       while($blogs->have_posts()) : $blogs->the_post();
       ?>              
			<div class="card-width-package swiper-slide">                
                <div class="card-content-package ">                  
                  <div class="card">					  
						  <?php
							$checkbox_values = get_field('package_promote');							
							if (in_array('p1', $checkbox_values) ) {										
								echo "<div class='popular-package'></div>";		
							  }					  			
							?>	                    
                    <div class="card-header">
                   <?php
							$checkbox_values = get_field('package_promote');							
							if (in_array('p1', $checkbox_values) ) {
								echo "<div class='package-interesting'><p><i class='fas fa-star mr-1'></i>แพ็กเกจแนะนำ</p></div>";			
							  }					  			
							?>		
                </div>
                  <div class="card-content-popular">
                    <p class="package-head style-color-text">
						<?php							
							$my_radio_value = get_field('standard_package');	
							$selected_option = array();
							if( $my_radio_value ) {
								$selected_option[] = $my_radio_value;
							}
							if( in_array('v1', $selected_option) ) {
								echo "Standard Pack A";
							}				
					 		 if( in_array('v2', $selected_option) ) {
								echo "Standard Pack B";
							}	
					   			if( in_array('v3', $selected_option) ) {
								echo "Standard Pack C";
							}	 if( in_array('v4', $selected_option) ) {
								echo "Standard Pack D";
							}	
						if( in_array('v5', $selected_option) ) {
								echo "Standard Pack E";
							}
						if( in_array('v6', $selected_option) ) {
								echo "Standard Pack F";
							}
							?></p>
                    <p class="price-package style-color-text"><?php the_field('price_package'); ?></p>
                    <p>บาท / SMS</p>
                    <hr>
					  	
					  <?php 
                                $z = 0;
                                while( have_rows('list_package') ): the_row();?>
                    <div class="package-list-promotion">
                      <img src="<?php bloginfo('template_url');?>/assets/img/icon/icon-check.png" alt="">
                      <p><?php the_sub_field('list_package_item'); ?></p>
                    </div>
                    <?php 
                                $z++;
                                endwhile; ?>
                    <a href="<?php the_field('line','option');?>" target="_blank">
                      <div class="button-buy-package">
                        ซื้อแพ็กเกจ
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
			<?php endwhile; wp_reset_postdata(); ?>

              
            </div>			 
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="example-mobile item-mobile">
	   <div class="container">
      <div class="head-example">
        <h2><?php the_field('example_head'); ?></h2>
        <h2 class="style-header"><?php the_field('example_title'); ?></h2>
      </div>
		   <div class="wrapper">
			     <div style="overflow: hidden;">
          <div class="slide-exam-mobile" style="margin: 1.5rem 0 0rem;">
            <div class="swiper-exam">
              <div class="swiper-wrapper">
               <?php 
                                $z = 0;
                                while( have_rows('content_example') ): the_row();?>
				  <div class="swiper-slide">
                  <img class="" src="<?php the_sub_field('example_img'); ?>" alt="" />
                  <div class="caption-slide-wrapper">
                    <p><?php the_sub_field('example_title'); ?></p>
                  </div>
                </div>
				 <?php 
                                $z++;
                                endwhile; ?>
				  
              </div>
              <!-- <div class="swiper-pagination"></div> -->
            </div>
            <div class="pagi-custom-wrap-mobile">
				<?php 
                                $z = 0;
                                while( have_rows('content_example') ): the_row();?>
              <div class="item-pagi-mobile"></div>
				<?php 
                                $z++;
                                endwhile; ?>
              
            </div>
          </div>
        </div>
		   </div>
	  </div>
</div>
  <div class="example-main" id="example">
    <div class="container">
      <div class="head-example">
        <h2><?php the_field('example_head'); ?></h2>
        <h2 class="style-header"><?php the_field('example_title'); ?></h2>
      </div>
      <div class="wrapper">
        <div class="item-pc">

          <div class="slider-wrapper-main">
            <div class="pagi-custom-wrap">
             <?php 
                                $z = 0;
                                while( have_rows('content_example') ): the_row();?>
				<div class="item-pagi"></div>
              <?php 
                                $z++;
                                endwhile; ?>
            </div>
            <div class="flex-slide-wrapp w-100 d-flex flex-wrap align-items-center justify-content-between">
              <div class="item-caption-slide text-left">
                <div class="title-blog-flex">
					<?php 
                                $z = 0;
                                while( have_rows('content_example') ): the_row();?>
                  <p class="title-slide slide1"><?php the_sub_field('example_title'); ?></p>
					<?php 
                                $z++;
                                endwhile; ?>
                  
                </div>
              </div>
              <div class="item-slide-swiper " style="overflow: hidden;">
                <div class="swiper-tel">
                  <div class="swiper-container">
                    <div class="swiper">
                      <div class="swiper-wrapper ">
						  <?php 
                                $z = 0;
						  	$total_rows = count(get_field('content_example'));
                                while( have_rows('content_example') ): the_row();?>
						    <div class="swiper-slide">
													   <?php if ($z === 0) : ?>
            <div class="item-cover-img">
				
				<img class="" src="<?php the_sub_field('example_img'); ?>" alt="" />
				
													</div>
        <?php endif; ?>
																						   <?php if ($z === $total_rows - 1) : ?>
            <div class="item-cover-img-sub">
				
				<img class="" src="<?php the_sub_field('example_img'); ?>" alt="" />
				
													</div>
        <?php endif; ?>
                                                    <div class="image-wrap">
                                                        <img class="" src="<?php the_sub_field('example_img'); ?>" alt="" />
                                                    </div>
                                                </div>
                        <div class="swiper-slide">
                          <div class="image-wrap">
                            <img class="" src="<?php the_sub_field('example_img'); ?>" alt="" />
                          </div>
                        </div>
                        <?php 
                                $z++;
                                endwhile; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
			
        </div>
      

      </div>
    </div>
  </div>

  <div class="promotion-main" id="promotion">
    <div class="container">
      <div class="swiper-promotion">
        <div class="swiper-wrapper">
          <?php 
                                $z = 0;
                                while( have_rows('promotion') ): the_row();?>
			<div class="swiper-slide ">
            <a href="<?php the_field('line', 'option'); ?>" target="_blank">
              <figure class="thumb">
                <img class="" src="<?php the_sub_field('promotion_img'); ?>" alt="" />
              </figure>
            </a>
          </div>
			<?php 
                                $z++;
                                endwhile; ?>
          

        </div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>
  </div>

<?php
function enqueue_scripts() {
    wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array( 'jquery' ), '2.0.7', true );
    wp_enqueue_script( 'scrollmagic-debug', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array( 'scrollmagic' ), '2.0.7', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
?>
    <?php get_footer(); ?>
		<script>
			setTimeout(() => { 
jQuery(document).ready(function ($) {
	
	

	const swiperM = new Swiper(".swiper", {
    effect: "coverflow",
    loop: false,
    speed: 800,
    centeredSlides: false,
    slidesPerView: 1,
    initialSlide: 0,
    coverflowEffect: {
      rotate: 0,
      stretch: 30,
      depth: 30,
      modifier: 1,
      slideShadows: false,
    },
    allowTouchMove: false,
  });

  var controller = new ScrollMagic.Controller();
  var progressIndicators = document.querySelectorAll('.title-slide');
  var pagiSlides = document.querySelectorAll('.item-pagi');
  var windowHeight = window.innerHeight;
  var scrollHeight = document.documentElement.scrollHeight - windowHeight;
  var indicatorSpacing = scrollHeight * 1;
  var activeIndex = 0;

  var triggerDuration = indicatorSpacing * (progressIndicators.length - 1);

  var scrollScene = new ScrollMagic.Scene({
    triggerElement: '#example',
    triggerHook: 0,
	  
	  duration: triggerDuration,
  })
  .setPin('#example')
  .on('enter', function() {
  window.addEventListener('scroll', scrollHandler);
})
  .addTo(controller)
function scrollHandler() {
  var scrollPosition = window.pageYOffset;

  progressIndicators.forEach(function(indicator, index) {
    var indicatorOffset = indicatorSpacing * index;

    if (scrollPosition >= indicatorOffset) {
      activeIndex = index;
    }
  });

  if (activeIndex !== swiperM.realIndex) {
    swiperM.slideTo(activeIndex);
  }

  pagiSlides.forEach(function(pagiSlide, index) {
    if (index === activeIndex) {
      pagiSlide.classList.add('active');
    } else {
      pagiSlide.classList.remove('active');
    }
  });
}

  swiperM.on('slideChange', function() {
    var activeIndex = swiperM.realIndex;

    progressIndicators.forEach(function(indicator, index) {
      if (index === activeIndex) {
        indicator.classList.add('active');
      } else {
        indicator.classList.remove('active');
      }
    });

    pagiSlides.forEach(function(pagiSlide, index) {
      if (index === activeIndex) {
        pagiSlide.classList.add('active');
      } else {
        pagiSlide.classList.remove('active');
      }
    });
  });

  progressIndicators[0].classList.add('active');
  pagiSlides[0].classList.add('active');
// 	swiperM.slideTo(1);
//   progressIndicators[progressIndicators.length - 1].classList.add('active');
//   pagiSlides[pagiSlides.length - 1].classList.add('active');

  progressIndicators.forEach(function(indicator, index) {
    indicator.addEventListener('click', function() {
      swiperM.slideTo(index);
    });
  });




});
				
				}, 1000);
</script>
<style>
	.example-mobile{
		background-color: rgba(255, 255, 255, 0.521);
    text-align: center;
    padding: 1.5rem 0;


    width: 100%;
	}
	.item-cover-img{
		position:absolute;
		top:0;
		left:0;
		width:100%;
transform: translate3d(-55%, 0px, -320px)!important;
	}
		.item-cover-img-sub{
		position:absolute;
		top:0;
		left:0;
		width:100%;
transform: translate3d(55%, 0px, -320px)!important;
	}
	
.example-main {
    padding-top: 6rem;
}
	.flex-slide-wrapp {
    margin: -11rem 0;
}
	@media only screen and (max-width: 600px) {
		.example-main{
			display:none;
		}
	}
</style>