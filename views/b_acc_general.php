<?php 
	/**
		* T&F
	*/ 
?>
<?php include_once('views/_head.php') ?>

<?php include_once('views/_header.php') ?>

	<div class="section">
		<div class="container">
			<h1 class="section-title">Setări generale</h1>

			<?php include_once('views/_messages.php'); ?>

			<div class="row">
				<?php include_once('views/_b_acc_nav.php'); ?>

				<div class="acc-main col-lg-10">
					<div class="card card-form">
						<p class="h3">Modifică datele generale</p>
						
						<form action="" method="post" class="needs-validation" novalidate>

							<div class="form-input">
								<label for="acc-lastname" class="form-label">Nume</label>
								<div class="input-group has-validation">
									<input type="text" class="form-control <?php echo isset($baseFunctions->rep['errors']['lastname'])?$baseFunctions->rep['errors']['lastname']:''; ?>" id="acc-lastname" name="acc-lastname" value="<?php echo $baseFunctions->lastname_user; ?>" placeholder="Nume" required>
									<div class="invalid-feedback">
										Please fill in your last name.
									</div>
								</div>
							</div>

							<div class="form-input submit">
								<input type="hidden" name="source" value="<?php echo $baseFunctions->view; ?>">
								<input type="submit" name="acc_general_info" class="btn btn-primary w-100" value="Modifică">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include_once('views/_footer.php') ?>