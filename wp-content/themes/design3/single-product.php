<?php
get_header();
?>
<section class="section-white single">
	<div class="container-wrap">
		<div class="container">

      <?php if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>

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
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						//
						// Post Content here
						the_post_thumbnail('medium');
						the_title('<h1>','</h1>');
						the_content();
						//
					} // end while
				} // end if
			?>
    </div>
    </div>
		</div>
  </div>
	</div>
</section>
<?php get_footer(); ?>
