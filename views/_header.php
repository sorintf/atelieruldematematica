<?php 
	/**
		* T&F
	*/ 
?>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="/images/logo.jpeg" alt="Atelierul de Matematică" width="500" height="500">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-0 me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_about")); ?>" class="nav-link">Meniu</a>
						</li>
					</ul>

					<ul class="navbar-nav ms-auto me-0 mb-2 mb-lg-0">
						<li class="nav-item">
							<a href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_test")); ?>" class="nav-link <?php echo ($baseFunctions->view=='f_test')?'active':''; ?>">Test</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_about")); ?>" class="nav-link <?php echo ($baseFunctions->view=='f_about')?'active':''; ?>">About</a>
						</li>
					</ul>
					<ul class="navbar-nav ms-0 me-0 mb-2 mb-lg-0 ">
						<?php if ($baseFunctions->user_is_logged_in): ?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle bold" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">
									<span class="icon-letter"><?php echo substr($baseFunctions->lastname_user, 0, 1); ?></span>
									<?php echo $baseFunctions->lastname_user; ?>
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_dashboard")); ?>">Dashboard</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_logout")); ?>">Logout</a></li>
								</ul>
							</li>
						<?php else: ?>
							<li class="nav-item">
								<a class="btn btn-outline-dark" href="#" data-bs-toggle="modal" data-bs-target="#loginUserModal">Intră în cont</a>
							</li>
							<li class="nav-item">
								<a class="btn btn-dark" href="#" data-bs-toggle="modal" data-bs-target="#registerUserModal">Creează cont</a>
							</li>
						<?php endif ?>
						<?php if ($baseFunctions->admin_status): ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"a_index")); ?>">Admin</a>
							</li>
						<?php endif ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>

    <?php if (!$baseFunctions->user_is_logged_in): ?>
    	<!-- DELETE this if login with modal is not wanted -->
        <!-- Login User Modal -->
        <div class="modal fade" id="loginUserModal" tabindex="-1" aria-labelledby="loginUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h2 class="modal-title" id="loginUserModalLabel">Intră în cont</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation ajaxForm mb-4" id="ajaxLoginUserForm" action="" method="post" novalidate>
                            <div id="ajaxLoginUserFormMsg"></div>

							<div class="form-input">
								<div class="form-floating">
									<input type="email" class="form-control" id="ajxusr" name="ajxusr" value="" placeholder="E-mail" required>
									<label for="ajxusr">E-mail</label>
									<div class="invalid-feedback">
										Please fill in your email address.
									</div>
								</div>
							</div>

							<div class="form-input">
								<div class="form-floating">
									<input type="password" class="form-control password" id="ajxpwd" name="ajxpwd" value="" placeholder="Parola" required>
									<label for="ajxpwd">Parola</label>
									<span class="pass-toggle"></span>
									<div class="invalid-feedback">
										Please fill in a password.
									</div>
								</div>
							</div>

                            <div class="text-end mb-3">
                                <a href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_password_request_reset")); ?>" class="">Ai uitat parola?</a>
                            </div>

							<div class="form-input submit">
								<input type="hidden" name="source" value="<?php echo $baseFunctions->view; ?>">
								<input type="submit" name="ajaxLoginUser" class="btn btn-dark w-100" value="Intră în cont">
							</div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        Nu ai cont? <a href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_register")); ?>" class="">Înregistrează-te.</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register User Modal -->
        <div class="modal fade" id="registerUserModal" tabindex="-1" aria-labelledby="registerUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h2 class="modal-title" id="registerUserModalLabel">Creează cont</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    	<p class="">Creează cont utilizator AIEPS</p>
                    	
                    	<div id="ajaxRegisterUserFormMsg"></div>

						<form action="" method="post" class="needs-validation ajaxForm" id="ajaxRegisterUserForm" novalidate>

							<div class="form-input">
								<div class="form-floating">
									<input type="text" class="form-control" id="regusr-lastname" name="regusr-lastname" value="" placeholder="Nume și prenume" required>
									<label for="regusr-lastname">Nume și prenume</label>
									<div class="invalid-feedback">
										Please fill in your last name.
									</div>
								</div>
							</div>

							<div class="form-input">
								<div class="form-floating">
									<input type="email" class="form-control" id="regusr-email" name="regusr-email" value="<?php echo isset($baseFunctions->rep['email'])?$baseFunctions->rep['email']:''; ?>" placeholder="E-mail" required>
									<label for="regusr-email">E-mail</label>
									<div class="invalid-feedback">
										Please fill in your email address.
									</div>
								</div>
							</div>

							<div class="form-input">
								<div class="form-floating">
									<input type="password" class="form-control password" id="regusr-password" name="regusr-password" value="" placeholder="Creează o parolă" minlength="8" required>
									<label for="regusr-password">Creează o parolă</label>
									<span class="pass-toggle"></span>
									<div class="invalid-feedback">
										Please fill in a password.
									</div>
								</div>
								<div class="additional-info">
									<span class="info-icon"></span> Parola trebuie să conțină minim 8 caractere
								</div>
							</div>

							<div class="form-input">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="da" id="regusr-acc_tc" name="regusr-acc_tc" required>
									<label class="form-check-label" for="regusr-acc_tc">
										Agree to <a href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_policy_tc")); ?>" class="label-link" target="_blank">terms and conditions</a>
									</label>
									<div class="invalid-feedback">
										You must agree before submitting.
									</div>
								</div>
							</div>

							<div class="form-input">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="da" id="regusr-acc_nl" name="regusr-acc_nl">
									<label class="form-check-label" for="regusr-acc_nl">
										Sign up to our awesome newsletter
									</label>
								</div>
							</div>

							<div class="form-input submit">
								<input type="hidden" id="regusr-source" name="source" value="<?php echo $baseFunctions->view; ?>">
								<input type="submit" id="registerUser" name="registerUser" class="btn btn-dark w-100" value="Creează cont">
							</div>
						</form>
                    </div>
                    
                    <div class="modal-footer">
                        Ai deja cont? <a href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_register")); ?>" class="">Autentifică-te.</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>




<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	<symbol id="icon-camera" fill="currentColor" viewBox="0 0 35 35">
		<path d="M17.4997 34.1211C26.889 34.1211 34.5 26.5094 34.5 17.1208C34.5 7.73212 26.889 0.121094 17.4997 0.121094C8.11036 0.121094 0.5 7.73212 0.5 17.1208C0.5 26.5094 8.11103 34.1211 17.4997 34.1211Z" fill="#2196F3"/>
		<path fill-rule="evenodd" clip-rule="evenodd" d="M10.4757 21.9795H21.7191V13.735C21.7191 12.4929 20.7126 11.4863 19.4705 11.4863H8.22705V19.7308C8.22705 20.9729 9.23362 21.9795 10.4757 21.9795ZM23.2176 18.9819L27.715 21.9795V11.4863L23.2183 14.4846L23.2176 18.9819Z" fill="white"/>
	</symbol>

	<symbol id="icon-video" fill="currentColor" viewBox="0 0 35 35">
		<path d="M17.4997 34.1211C26.889 34.1211 34.5 26.5094 34.5 17.1208C34.5 7.73212 26.889 0.121094 17.4997 0.121094C8.11036 0.121094 0.5 7.73212 0.5 17.1208C0.5 26.5094 8.11103 34.1211 17.4997 34.1211Z" fill="#012131"/>
		<path d="M23.3274 15.1706C24.8909 16.0209 24.8909 18.2218 23.3274 19.0721L13.887 24.2057C12.3674 25.0321 10.5 23.9565 10.5 22.255V11.9877C10.5 10.2862 12.3674 9.21063 13.887 10.037L23.3274 15.1706Z" fill="white"/>
	</symbol>

	<symbol id="icon-lock" fill="currentColor" viewBox="0 0 35 35">
		<path d="M17.3766 34.6445C26.7659 34.6445 34.377 27.0328 34.377 17.6442C34.377 8.25556 26.7659 0.644531 17.3766 0.644531C7.98731 0.644531 0.376953 8.25556 0.376953 17.6442C0.376953 27.0328 7.98798 34.6445 17.3766 34.6445Z" fill="#6F90A4"/>
		<path d="M22.627 14.1445H21.752V13.2695C21.752 12.1092 21.291 10.9964 20.4705 10.1759C19.6501 9.35547 18.5373 8.89453 17.377 8.89453C16.2166 8.89453 15.1038 9.35547 14.2834 10.1759C13.4629 10.9964 13.002 12.1092 13.002 13.2695V14.1445H12.127C11.6628 14.1445 11.2177 14.3289 10.8895 14.6571C10.5613 14.9853 10.377 15.4304 10.377 15.8945V24.6445C10.377 25.1087 10.5613 25.5538 10.8895 25.882C11.2177 26.2102 11.6628 26.3945 12.127 26.3945H22.627C23.0911 26.3945 23.5362 26.2102 23.8644 25.882C24.1926 25.5538 24.377 25.1087 24.377 24.6445V15.8945C24.377 15.4304 24.1926 14.9853 23.8644 14.6571C23.5362 14.3289 23.0911 14.1445 22.627 14.1445ZM14.752 13.2695C14.752 12.5733 15.0285 11.9057 15.5208 11.4134C16.0131 10.9211 16.6808 10.6445 17.377 10.6445C18.0731 10.6445 18.7408 10.9211 19.2331 11.4134C19.7254 11.9057 20.002 12.5733 20.002 13.2695V14.1445H14.752V13.2695Z" fill="white"/>
	</symbol>

	<symbol id="icon-youtube" fill="none" stroke="currentColor" fill-rule="evenodd" clip-rule="evenodd" stroke-width="2.77786" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 27 27">
		<path d="M20.3289 25.3726C23.0942 25.5163 25.4193 22.4393 25.5273 18.4933V8.27623C25.4193 4.3303 23.0942 1.25326 20.3289 1.39692H6.72574C3.9605 1.25326 1.63532 4.3303 1.52734 8.27623V18.4933C1.63532 22.4393 3.9605 25.5163 6.72574 25.3726H20.3289Z"/>
		<path d="M12.9361 9.99461L16.7293 12.5722C16.975 12.7157 17.1261 12.9788 17.1261 13.2634C17.1261 13.548 16.975 13.8112 16.7293 13.9546L12.9361 16.7746C12.2161 17.263 11.1265 16.8466 11.1265 16.0834V10.6834C11.1265 9.92381 12.2173 9.50621 12.9361 9.99461Z"/>
	</symbol>

	<symbol id="icon-facebook" fill="currentColor" stroke="currentColor" stroke-width="0.277786" viewBox="0 0 26 25">
		<path d="M5.57734 0.247337C2.84967 0.247337 0.638451 2.45855 0.638451 5.18623V19.5862C0.638451 22.3139 2.84967 24.5251 5.57734 24.5251H19.9773C22.705 24.5251 24.9162 22.3139 24.9162 19.5862V5.18623C24.9162 2.45855 22.705 0.247337 19.9773 0.247337H5.57734ZM3.31624 5.18623C3.31624 3.93746 4.32857 2.92512 5.57734 2.92512H19.9773C21.2262 2.92512 22.2385 3.93745 22.2385 5.18623V19.5862C22.2385 20.835 21.2262 21.8473 19.9773 21.8473H15.3162V13.7251H17.6973C18.4368 13.7251 19.0362 13.1257 19.0362 12.3862C19.0362 11.6468 18.4368 11.0473 17.6973 11.0473H15.3162V9.38623C15.3162 8.46883 16.06 7.72512 16.9773 7.72512H17.6973C18.4368 7.72512 19.0362 7.12567 19.0362 6.38623C19.0362 5.64679 18.4368 5.04734 17.6973 5.04734H16.9773C14.581 5.04734 12.6385 6.98992 12.6385 9.38623V11.0473H11.5773C10.8379 11.0473 10.2385 11.6468 10.2385 12.3862C10.2385 13.1257 10.8379 13.7251 11.5773 13.7251H12.6385V21.8473H5.57734C4.32857 21.8473 3.31624 20.835 3.31624 19.5862V5.18623Z"/>
	</symbol>

	<symbol id="icon-instagram" fill="none" stroke="currentColor" stroke-width="2.77786" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 28 27">
		<path d="M10.6227 25.3862H17.8227C23.8227 25.3862 26.2227 22.9862 26.2227 16.9862V9.78623C26.2227 3.78623 23.8227 1.38623 17.8227 1.38623H10.6227C4.62266 1.38623 2.22266 3.78623 2.22266 9.78623V16.9862C2.22266 22.9862 4.62266 25.3862 10.6227 25.3862Z"/>
		<path d="M14.2234 17.587C16.543 17.587 18.4234 15.7066 18.4234 13.387C18.4234 11.0674 16.543 9.18701 14.2234 9.18701C11.9038 9.18701 10.0234 11.0674 10.0234 13.387C10.0234 15.7066 11.9038 17.587 14.2234 17.587Z"/>
		<path d="M20.9823 7.38599H20.9962"/>
	</symbol>

	<symbol id="icon-linkedin" fill="none" stroke="currentColor" stroke-width="2.77786" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 27 27">
		<path d="M22.5636 1.38623H4.38175C2.7751 1.38623 1.47266 2.68867 1.47266 4.29532V22.4771C1.47266 24.0838 2.7751 25.3862 4.38175 25.3862H22.5636C24.1702 25.3862 25.4727 24.0838 25.4727 22.4771V4.29532C25.4727 2.68867 24.1702 1.38623 22.5636 1.38623Z"/>
		<path d="M8.01758 11.5679V19.5679"/>
		<path d="M8.01607 9.02164C8.81939 9.02164 9.47061 8.37042 9.47061 7.56709C9.47061 6.76377 8.81939 6.11255 8.01607 6.11255C7.21275 6.11255 6.56152 6.76377 6.56152 7.56709C6.56152 8.37042 7.21275 9.02164 8.01607 9.02164Z" fill="currentColor" stroke="none"/>
		<path d="M18.9311 19.5679V14.8406C18.9311 13.0331 17.4658 11.5679 15.6583 11.5679C13.8509 11.5679 12.3856 13.0331 12.3856 14.8406V19.5679"/>
	</symbol>

	<symbol id="icon-star-solid" fill="currentColor" stroke="none" viewBox="0 0 15 14">
		<path d="M3.16329 13.11L7.5 10.9098L11.8367 13.11L11.0086 8.40982L14.5 5.08294L9.65943 4.39628L7.5 0.101074L5.34057 4.39628L0.5 5.08294L4.00921 8.40982L3.16329 13.11Z"/>
	</symbol>

	<symbol id="icon-check" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 13 10">
		<path d="M0.5 5.1888L4.50025 9.18905L12.5 1.18848"/>
	</symbol>

	<symbol id="icon-dots" fill="currentColor" stroke="none" viewBox="0 0 19 5">
		<path d="M2.90876 4.7853C4.17113 4.7853 5.19448 3.76195 5.19448 2.49958C5.19448 1.23722 4.17113 0.213867 2.90876 0.213867C1.6464 0.213867 0.623047 1.23722 0.623047 2.49958C0.623047 3.76195 1.6464 4.7853 2.90876 4.7853Z"/>
		<path d="M9.62312 4.7853C10.8855 4.7853 11.9088 3.76195 11.9088 2.49958C11.9088 1.23722 10.8855 0.213867 9.62312 0.213867C8.36075 0.213867 7.3374 1.23722 7.3374 2.49958C7.3374 3.76195 8.36075 4.7853 9.62312 4.7853Z"/>
		<path d="M16.3372 4.7853C17.5996 4.7853 18.6229 3.76195 18.6229 2.49958C18.6229 1.23722 17.5996 0.213867 16.3372 0.213867C15.0749 0.213867 14.0515 1.23722 14.0515 2.49958C14.0515 3.76195 15.0749 4.7853 16.3372 4.7853Z"/>
	</symbol>

	<symbol id="icon-hat" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 17 14">
		<path d="M8.49993 1.35547L0.673828 5.37788L8.49993 9.4003L16.326 5.37788L8.49993 1.35547Z"/>
		<path d="M3.80469 6.9873V10.4064C3.80469 11.5125 5.89165 12.9204 8.50035 12.9204C11.1091 12.9204 13.196 11.5125 13.196 10.4064V6.9873"/>
		<path d="M16.3262 5.37793V11.9144"/>
	</symbol>

	<symbol id="icon-user" fill="none" stroke="currentColor" viewBox="0 0 12 14">
		<path d="M6.07334 5.98123C7.39882 5.98123 8.47334 4.94572 8.47334 3.66835C8.47334 2.39098 7.39882 1.35547 6.07334 1.35547C4.74786 1.35547 3.67334 2.39098 3.67334 3.66835C3.67334 4.94572 4.74786 5.98123 6.07334 5.98123Z"/>
		<path d="M10.8734 10.3178C10.8734 11.7549 10.8734 12.9198 6.07344 12.9198C1.27344 12.9198 1.27344 11.7549 1.27344 10.3178C1.27344 8.88076 3.42247 7.71582 6.07344 7.71582C8.72442 7.71582 10.8734 8.88076 10.8734 10.3178Z"/>
	</symbol>

	<symbol id="icon-userinteraction" fill="currentColor" stroke="none" viewBox="0 0 11 12">
		<path d="M0 11.5162C0 10.4553 0.421427 9.43792 1.17157 8.68777C1.92172 7.93763 2.93913 7.5162 4 7.5162C5.06087 7.5162 6.07828 7.93763 6.82843 8.68777C7.57857 9.43792 8 10.4553 8 11.5162H7C7 10.7206 6.68393 9.95749 6.12132 9.39488C5.55871 8.83227 4.79565 8.5162 4 8.5162C3.20435 8.5162 2.44129 8.83227 1.87868 9.39488C1.31607 9.95749 1 10.7206 1 11.5162H0ZM4 7.0162C2.3425 7.0162 1 5.6737 1 4.0162C1 2.3587 2.3425 1.0162 4 1.0162C5.6575 1.0162 7 2.3587 7 4.0162C7 5.6737 5.6575 7.0162 4 7.0162ZM4 6.0162C5.105 6.0162 6 5.1212 6 4.0162C6 2.9112 5.105 2.0162 4 2.0162C2.895 2.0162 2 2.9112 2 4.0162C2 5.1212 2.895 6.0162 4 6.0162ZM10.274 0.908203C10.7531 1.87412 11.0016 2.938 11 4.0162C11 5.1327 10.7385 6.1882 10.274 7.1242L9.4515 6.5262C9.8141 5.73918 10.0013 4.88274 10 4.0162C10 3.1202 9.8035 2.2697 9.4515 1.5062L10.274 0.908203ZM8.623 2.1082C8.87272 2.71328 9.00082 3.36162 9 4.0162C9.00082 4.67079 8.87272 5.31912 8.623 5.9242L7.7845 5.3142C7.92758 4.89642 8.0004 4.45781 8 4.0162C8.00056 3.57463 7.92791 3.13601 7.785 2.7182L8.623 2.1082Z"/>
	</symbol>

	<symbol id="icon-info" fill="none" stroke="currentColor" stroke-linecap="round" viewBox="0 0 18 18">
		<path d="M9 17.1123C13.4183 17.1123 17 13.5306 17 9.1123C17 4.69403 13.4183 1.1123 9 1.1123C4.58172 1.1123 1 4.69403 1 9.1123C1 13.5306 4.58172 17.1123 9 17.1123Z"/>
		<path d="M9 13.1125V8.3125"/>
		<path d="M9.30068 5.91191C9.30068 5.74623 9.16637 5.61191 9.00068 5.61191C8.835 5.61191 8.70068 5.74623 8.70068 5.91191C8.70068 6.0776 8.835 6.21191 9.00068 6.21191C9.16637 6.21191 9.30068 6.0776 9.30068 5.91191Z"/>
	</symbol>


</svg>