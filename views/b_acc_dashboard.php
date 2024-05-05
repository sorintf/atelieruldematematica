<?php 
	/**
		* T&F
	*/ 
?>
<?php include_once('views/_head.php') ?>

<?php include_once('views/_header.php') ?>

<?php include_once('views/_b_acc_nav.php'); ?>

	<div class="section bacc"> 
		<div class="container">
			<h1 class="page-title">Dashboard</h1>
			<p class="welcome-message">Bine ai revenit, <?php echo $baseFunctions->lastname_user; ?>!</p>
		</div>
	</div>

	<div class="section bg-pale">
		<div class="container">
			<?php include_once('views/_messages.php'); ?>

			<div class="row">
				<div class="col col-md-3">acc nav</div>
				<div class="col col-md-9">acc main</div>
			</div>
		</div>
	</div>

<?php include_once('views/_footer.php') ?>