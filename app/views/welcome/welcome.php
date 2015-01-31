
		<!-- Container for centent --> 
		<div class="uk-container uk-container-center">

			<div class="uk-panel-title">
				<h1><?php echo $data['title'] ?></h1>
			</div>

			<p><?php echo $data['welcome_message'] ?></p>

			<a class="uk-button uk-button-success" href="<?php echo DIR ?>subpage">
				<?php echo core\language::show('open_subpage', 'welcome') ?>
			</a>

			<hr>

			<a class="uk-button uk-button-danger" href="/?ex=error">Alert error</a>
			<a class="uk-button uk-button-success" href="/?ex=success">Alert success</a>
			<a class="uk-button uk-button-primary" href="/?ex=infos">Alert informations</a>	

		</div>