<?php 
global $comet;

$txt = $comet['txt'];
$link_txt = $comet['fs-link-text'];
$link_url = $comet['fs-link-url'];


?>


<div class="bottom-border"><img src="<?php echo get_template_directory_uri(); ?>/imgn/bottomborder.png" alt="---------"></div>
		
<section id="loan-apply-bar">
	<div class="container">
	  <div class="row">
		<div class="col-md-12">
			<i class="fa fa-th"></i><?php echo  $link_txt; ?> <a href="<?php echo  $link_url; ?>" class="btn btn-warning btn-lg" style="background-color:#FF6600; border-radius:0;"><?php echo  $link_txt; ?></a>
		</div>  
	  </div>
	</div>  
</section>