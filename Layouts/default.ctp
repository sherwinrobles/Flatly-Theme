<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?php echo Configure::read('Site.title'); ?> | <?php echo $title_for_layout; ?></title>
		<?php

		echo $this->Html->css(array(
			'bootstrap',
			'bootswatch.min',
			'custom',
			'/croogo/css/thickbox',
		));
		echo $this->Layout->js();
		echo $this->Html->script(array(
			'/croogo/js/html5',
			'/croogo/js/jquery/jquery.min',
			'/croogo/js/jquery/jquery-ui.min',
			'/croogo/js/jquery/jquery.slug',
			'/croogo/js/jquery/jquery.cookie',
			'/croogo/js/jquery/jquery.hoverIntent.minified',
			'/croogo/js/jquery/superfish',
			'/croogo/js/jquery/supersubs',
			'/croogo/js/jquery/jquery.tipsy',
			'/croogo/js/jquery/jquery.elastic-1.6.1.js',
			'/croogo/js/jquery/thickbox-compressed',

			'/croogo/js/underscore-min',
			'bootstrap.min.js',
			'theme.js',
		));

		echo $this->fetch('script');
		echo $this->fetch('css');

		?>
	</head>
	<body id="top">
	<?php echo $this->element('header'); ?>
		<div class="container body">

					<div class="page-header" id="banner">
					    <div class="row">
					      	<div class="col-lg-2 col-md-2 ">
					      		<?php echo $this->Html->image('cakephp_small.png', $options = array('class' =>'img-rounded', 'width' => '140px', 'height' => '140px')); ?>
					      	</div>	
					      	<div class="col-lg-10 col-md-10">
					           <h1><?php echo Configure::read('Site.title'); ?></h1>
					           <p class="lead"><?php echo Configure::read('Site.tagline'); ?></p>
					        </div>
					    </div>
					</div>

					<div class="row">
						<?php echo $this->element('admin/breadcrumb'); ?>
						<div id="inner-content" class="col-lg-8">
							
								<?php echo $this->Layout->sessionFlash(); ?>
								<?php 
									if ($this->Regions->blocks('region1')){ 
										echo $this->Regions->blocks('region1'); 
									}
								?>
							
							<div class="well">
								<?php echo $this->fetch('content'); ?>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="well">
							<?php echo $this->Regions->blocks('right'); ?>
							</div>
						</div>
					</div>	
					
					
		
			<?php echo $this->element('footer'); ?>
		</div>

		<script type="text/javascript">

			$(document).ready(function(){
				
				$( "#promo_discount" ).load( "<?php echo $this->base; ?>/promo_discount" );
		       			
		    });

		</script>


		<?php
			echo $this->Blocks->get('scriptBottom');
			echo $this->Js->writeBuffer();
		?>
	</body>
</html>