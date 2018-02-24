<div class="col-md-7 customerslide">
<div class="carwrap">
<div id="carousel-example-generic" class="carousel  carousel-fade" data-ride="carousel">
		  <!-- Indicators -->
				

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">

<?php 

$q = new WP_Query(array(
	'post_type'	=> 'comet-slider',
	'posts_per_page'	=> -1
));



while( $q->have_posts() ):$q->the_post(); 	
	$name = get_post_meta(get_the_ID(), 'client-name', true);	
	?>		  

<div class="item">
	

	<?php the_post_thumbnail('slide_bg', array(
		'class'		=> 'caralignright'
	)); ?>

	<h4><?php the_title(); ?></h4>

	<?php the_content(); ?>
	<p><span class="stars"><img src="<?php echo get_template_directory_uri(); ?>/imgn/goldstar.png" alt="Star"><img src="<?php echo get_template_directory_uri(); ?>/imgn/goldstar.png"  alt="Star"><img src="<?php echo get_template_directory_uri(); ?>/imgn/goldstar.png"  alt="Star"><img src="<?php echo get_template_directory_uri(); ?>/imgn/goldstar.png"  alt="Star"><img src="<?php echo get_template_directory_uri(); ?>/imgn/goldstar.png"  alt="Star"></span></p>
	<p>
	<span class="name"><?php echo $name; ?></span><span class="namebio"></span>
	</p>
</div>
<?php endwhile; ?>

</div>
</div>
</div>
</div>