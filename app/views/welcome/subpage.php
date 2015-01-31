		
		<!-- Container for centent --> 
		<div class="uk-container uk-container-center">
			<div class="page-header">
				<h1><?php echo $data['title'] ?></h1>
			</div>

			<p><?php echo $data['welcome_message'] ?></p>

			<a class="uk-button uk-button-success" href="<?php echo DIR ?>">
				<?php echo core\language::show('back_home', 'welcome') ?>
			</a>
		</div>