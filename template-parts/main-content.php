<?php 

global $comet;
$heading = $comet['fs-heading'];
$title = $comet['fs-title'];
$subtitle = $comet['fs-subtitle'];
$f_one = $comet['f-one'];
$f_two = $comet['f-two'];
$f_three = $comet['f-three'];
$f_four = $comet['f-four'];
$profit_image = $comet['profit-image']['url'];




?>

<div class="row maincontent">



<div class="col-sm-5 col-sm-push-7 formright">

<h1 class="formh3">Small Business Loans Approved In Under 48 Hours</h1>
	
	<div class="form-wrap">


			<?php echo do_shortcode('[contact-form-7 id="24" title="step-1"]'); ?>
	
	</div>
</div>
	




	<div class="col-sm-7 col-sm-pull-5 leftcontent">
		<h1>
		<?php echo $title; ?>
		</h1>
		<h3>
		<h2><?php echo $subtitle; ?></h2>
		<img src="<?php echo get_template_directory_uri(); ?>/imgn/greenarrow.png" class="greenarrow" alt="Arrow">
		<div class="row fundingfeatures">
			<div class="col-sm-6">
				<ul>
				<li><?php echo $f_one; ?></li>
				<li><?php echo $f_two; ?></li>
				</ul>
			</div>
			<div class="col-sm-6">
				<ul>
				<li><?php echo $f_three; ?></li>
				<li><?php echo $f_four; ?></li>
				</ul>
			</div>
		</div>
		<div class="business-money-customer">
		<img src="<?php echo $profit_image; ?>" alt="Your Business + Funding = Happiness"/>
		</div>
	</div>
			
</div>