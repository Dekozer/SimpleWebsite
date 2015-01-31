
<div class="page-header">
	<h1><?php echo $data['title'] ?></h1>
</div>

<?php if (isset($alert['error'])){ echo \core\alert::display($alert, 'alert alert-danger'); } ?>
<?php if (isset($alert['success'])){ echo \core\alert::display($alert, 'alert alert-success'); } ?>
<?php if (isset($alert['infos'])){ echo \core\alert::display($alert, 'alert alert-info'); } ?>

<p><?php echo $data['welcome_message'] ?></p>

<a class="btn btn-md btn-success" href="<?php echo DIR ?>subpage">
	<?php echo core\language::show('open_subpage', 'welcome') ?>
</a>

<hr>

<a class="btn btn-md btn-danger" href="/?ex=error" class="uk-button uk-button-danger">Alert error</a>
<a class="btn btn-md btn-success" href="/?ex=success" class="uk-button uk-button-danger">Alert success</a>
<a class="btn btn-md btn-info" href="/?ex=infos" class="uk-button uk-button-danger">Alert informations</a>