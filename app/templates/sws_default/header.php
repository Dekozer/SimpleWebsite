<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>" class="uk-height-1-1">
	<head>

		<!-- Site meta -->
		<meta charset="utf-8">
		<meta http-equiv="content-type" content="text/html">
		<title><?php echo $data['title'].' - '.SITETITLE; ?></title>

		<!-- CSS -->
			<?php
				helpers\assets::css(array(           
					helpers\url::template_path() . 'css/uikit.almost-flat.css',	
					helpers\url::template_path() . 'css/components/notify.almost-flat.css',		 	 			
				))
			?> 
			
		<!-- JS -->
		<?php
			helpers\assets::js(array(
				helpers\url::template_path() . 'js/jquery.js',  			          
				helpers\url::template_path() . 'js/uikit.min.js',
				helpers\url::template_path() . 'js/components/notify.min.js',
			))
		?>

	</head>

	<body class="uk-height-1-1">
	
		<!-- Container for centent -->
    	<div class="uk-container uk-container-center uk-panel-header uk-margin-top">
    		<h1><a href="<?php echo DIR ?>" class="uk-link" style="text-decoration: none;"><?php echo SITETITLE ?></a></h1>
    	</div>