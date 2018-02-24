<?php 
global $comet;

$copy = $comet['fs-copyright'];
$link_txt = $comet['fs-link-text'];
$link_url = $comet['fs-link-url'];
$f_logos = $comet['f_gallery'];


?>

<section id="footer-content">
  
  <?php echo $copy; ?>
  </section>


  <div class="fundingbadges">

<?php foreach ($f_logos as $key => $value) : ?>
        <a name="trustlink" href="<?php echo $value['url']; ?>" rel="nofollow" target="_blank">
          <img src="<?php echo $value['image']; ?>">
      </a>
<?php endforeach; ?>



  </div>	
	</div><!--end-->
	
	 <script>
    
    </script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>



  </body>
</html>