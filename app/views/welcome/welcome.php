
		<!-- Container for centent --> 
		<div class="uk-container uk-container-center">

			<div class="uk-panel-title">
				<h1><?php echo $data['title'] ?></h1>
			</div>

			<?php if (isset($alert['error'])){ echo \core\alert::display($alert, $class = 'danger'); } ?>
			<?php if (isset($alert['success'])){ echo \core\alert::display($alert, $class = 'success'); } ?>
			<?php if (isset($alert['info'])){ echo \core\alert::display($alert, $class = 'warning'); } ?>

			<p><?php echo $data['welcome_message'] ?></p>

			<a class="uk-button uk-button-success" href="<?php echo DIR ?>subpage">
				<?php echo core\language::show('open_subpage', 'welcome') ?>
			</a>

			<hr>

			<a class="uk-button uk-button-danger" href="/?ex=error" class="uk-button uk-button-danger">Alert error</a>
			<a class="uk-button uk-button-success" href="/?ex=success" class="uk-button uk-button-danger">Alert success</a>
			<a class="uk-button uk-button-primary" href="/?ex=infos" class="uk-button uk-button-danger">Alert informations</a>	

		</div>