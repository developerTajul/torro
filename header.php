<?php 
global $comet;

$logo = $comet['upload-logo']['url'];
$phone = $comet['upload-favicon']['url'];


?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,700italic|Just+Another+Hand|Lato:400,900,700'' rel='stylesheet' type='text/css'>
	 <link href="<?php echo get_template_directory_uri(); ?>/css/l3-1.css" rel="stylesheet">
	 

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jc.js"></script>
  </head>
  <body>
 <a id="applylink"></a>
	<div class="container">
		<div class="row headerrow">
			<div class="col-sm-6 logo"><img src="<?php echo $logo; ?>" alt="Torro Funding"></div>
			<div class="col-sm-6 customer-service"><img src="<?php echo $phone; ?>"  alt="Torro Customer Service"></div>
		</div>	