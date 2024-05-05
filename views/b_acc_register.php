<?php 
	/**
		* T&F
	*/ 
?>
<?php 
	/**
	 	* will use Ajax
	*/
?>
<?php include_once('views/_head.php') ?>

<?php include_once('views/_header.php') ?>

	<div class="section login">
		<div class="container">
			<h1 class="section-title">Register</h1>

			<?php include_once('views/_messages.php'); ?>

			<div class="card card-form">
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-input">
							<div class="form-floating">
								<input type="text" class="form-control <?php echo isset($baseFunctions->rep['errors']['lastname'])?$baseFunctions->rep['errors']['lastname']:''; ?>" id="register-lastname" name="register-lastname" value="<?php echo isset($baseFunctions->rep['lastname'])?$baseFunctions->rep['lastname']:''; ?>" placeholder="Nume și prenume" required>
								<label for="register-lastname">Nume și prenume</label>
								<div class="invalid-feedback">
									Please fill in your last name.
								</div>
							</div>
						</div>

						<div class="form-input">
							<div class="form-floating">
								<input type="email" class="form-control <?php echo isset($baseFunctions->rep['errors']['email'])?$baseFunctions->rep['errors']['email']:''; ?>" id="register-email" name="register-email" value="<?php echo isset($baseFunctions->rep['email'])?$baseFunctions->rep['email']:''; ?>" placeholder="E-mail" required>
								<label for="register-email">E-mail</label>
								<div class="invalid-feedback">
									Please fill in your email address.
								</div>
							</div>
						</div>

						<div class="form-input">
							<div class="form-floating">
								<input type="password" class="form-control <?php echo isset($baseFunctions->rep['errors']['password'])?$baseFunctions->rep['errors']['password']:''; ?>" id="register-password" name="register-password" value="" placeholder="Creează o parolă" required>
								<label for="register-password">Creează o parolă</label>
								<div class="invalid-feedback">
									Please fill in a password.
								</div>
							</div>
							<div class="additional-info">
								Parola trebuie să conțină minim 8 caractere
							</div>
						</div>

						<div class="form-input">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="da" id="register-acc_tc" name="register-acc_tc" required>
								<label class="form-check-label <?php echo isset($baseFunctions->rep['errors']['acc_tc'])?$baseFunctions->rep['errors']['acc_tc']:''; ?>" for="register-acc_tc">
									Agree to <a href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_policy_tc")); ?>" class="label-link" target="_blank">terms and conditions</a>
								</label>
								<div class="invalid-feedback">
									You must agree before submitting.
								</div>
							</div>
						</div>

						<div class="form-input">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="da" id="register-acc_nl" name="register-acc_nl">
								<label class="form-check-label" for="register-acc_nl">
									Sign up to our awesome newsletter
								</label>
							</div>
						</div>

						<div class="form-input submit">
							<input type="hidden" name="source" value="<?php echo $baseFunctions->view; ?>">
							<input type="submit" name="register" class="btn btn-dark w-100" value="Creează cont">
						</div>
					</form>

					<div class="card-divider">
						<span class="">SAU</span>
					</div>

					<!--
					<div class="social-login">
						<a href="#" class="btn btn-outline-dark w-100">Continuă cu Google</a>
						<a href="#" class="btn btn-outline-dark w-100">Continuă cu Facebook</a>
					</div>
					-->
				</div>

                
                <div class="card-footer">
                    Ai cont? <a href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_login")); ?>" class="">Autentifică-te.</a>
                </div>
			</div>
		</div>
	</div>

<?php include_once('views/_footer.php') ?>