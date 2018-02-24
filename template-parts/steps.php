<?php 
global $comet;

$title = $comet['ts-title'];
$sub_title = $comet['sub-title'];
$items = $comet['ts-steps'];




?>

<div class="col-md-5 howtorroworks">
	<h3><img src="<?php echo get_template_directory_uri(); ?>/imgn/rightarrow.png" alt="Arrow"><?php echo $title; ?></h3>
	<h4><?php echo $sub_title; ?></h4>
	
	<ul>
	 

	<?php foreach ($items as $key => $value): ?>

		<li class="step<?php echo $value['url']; ?>"><span><?php echo $value['title']; ?></span><?php echo $value['description']; ?></li>

	<?php endforeach; ?>
		
	</ul>

</div>