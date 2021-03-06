<?php

get_header();
?>
<section class="section-white single">
	<div class="container">
		<h1>Våra Produkter</h1>
		<div class="row">
			<div class="col-md-3">
					<div class="sibebar-wrap">
				<div class="sidebar-border">
					<?php wp_nav_menu( array( 'theme_location' => 'products_nav', 'menu_class' => 'nav-products', 'container_class' => 'products-menu-container') ); ?>

				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="service-wrap">
        <?php $post = get_post(9); ?>
        <?php setup_postdata( $post ); ?>
				<?php the_content(); ?>
        <?php wp_reset_postdata(); ?>
				<div class="row">
					<div class="col-md-12">
						<div class="offert"></div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>
<script>
$(document).ready(function(){

	var sideMapPos = $('.sibebar-map').offset();
var sideMapStartPos = sideMapPos.top;
	$('.tjanst-item').click(function(){
		$('.hidden-tjanst',this).slideToggle();
	});

$(window).scroll(function(){


			var $el = $('.sibebar-map .map-wrap')
		var bottom = $el.offset().top + $el.innerHeight();

			//get footer
		var footer = $('footer').offset();
		var footerTop = footer.top;


	var top = $(window).scrollTop()
	headerpos = $('.bottom-header').offset();
	var headertop  = headerpos.top;

	var sideMapPos = $('.sibebar-map').offset();

	console.log('bottom:'+ bottom +'');
	console.log('footer'+ footerTop +'');

		if (bottom  >= footerTop - 90 && top + $('.bottom-header').height() > $el.offset().top) {

			console.log('yo');
			$('.sibebar-map .map-wrap').css({'bottom':footerTop})

			$('.sibebar-map .map-wrap').offset({ top: footerTop - $el.innerHeight()});


	}else if (top + $('.bottom-header').height() >= sideMapStartPos && bottom <= footerTop){
		console.log('bigger')
		$('.map-wrap').addClass('fixed');
		$('.map-wrap').offset({ top: headertop + $('.bottom-header').height()});
	}else if(top <= sideMapStartPos){
		$('.map-wrap').removeClass('fixed');
	}
});
});
</script>
<?php
get_footer();
?>
