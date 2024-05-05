
	<footer id="footer">
		<div class="container">

			<div class="social">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<svg class="img" role="img" aria-label="Linkedin" width="24" height="24"><use xlink:href="#icon-linkedin"/></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<svg class="img" role="img" aria-label="Instagram" width="24" height="24"><use xlink:href="#icon-instagram"/></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<svg class="img" role="img" aria-label="Facebook" width="24" height="24"><use xlink:href="#icon-facebook"/></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<svg class="img" role="img" aria-label="YouTube" width="24" height="24"><use xlink:href="#icon-youtube"/></svg>
						</a>
					</li>
				</ul>
			</div>

			<div class="legal">
				<ul class="nav">
					<li class="nav-item <?php echo ($baseFunctions->view=='f_legal_terms')?'active':''; ?>">
						<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_legal_terms")); ?>">Terms of Use </a>
					</li>
					<li class="nav-item <?php echo ($baseFunctions->view=='f_legal_privacy')?'active':''; ?>">
						<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_legal_privacy")); ?>">Privacy Notice</a>
					</li>
					<li class="nav-item <?php echo ($baseFunctions->view=='f_legal_cookies')?'active':''; ?>">
						<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_legal_cookies")); ?>">Cookie Notice</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Cookie Settings</a>
					</li>
				</ul>
			</div>

			<div class="copy">&copy;Atelierul de Matematică <?php echo date("Y"); ?></div>
		</div>
	</footer>

	<script src="/js/jquery-3.7.1.min.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
	<script src="/js/custom.js"></script>

	<?php if ($baseFunctions->pageSel2): ?>
		<script src="/js/select2.min.js"></script>
		<script src="/js/select-custom.js?v=<?php echo $baseFunctions->version; ?>"></script>
	<?php endif ?>

	<script>
		(() => {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			const forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.from(forms).forEach(form => {
				form.addEventListener('submit', event => {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated');

        				
					if (form.checkValidity() !== false && form.classList.contains('ajaxForm')) {

						event.preventDefault();
						event.stopPropagation();

						if (form.id === 'ajaxLoginUserForm') {
							var ajxusr = $("#ajxusr").val();
							var ajxpwd = $("#ajxpwd").val();

							$.ajax({
								type:'post',
								url:'/ajax.php',
								data:{
									ajxlogin: true,
									ajxusr:ajxusr,
									ajxpwd:ajxpwd
								},
								success:function(response) {
									console.log('response', response);
									var responseObj = JSON.parse(response);
									console.log('responseObj', responseObj);
									if(responseObj.success){
										window.location.reload();
									}else{
										var alert_div = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' + responseObj.msg + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
										$("#ajaxLoginUserFormMsg").html(alert_div);
									}
								}
							});
						}


						if (form.id === 'ajaxRegisterUserForm') {
							var ajxregusrname = $("#regusr-lastname").val();
							var ajxregusremail = $("#regusr-email").val();
							var ajxregusrpassword = $("#regusr-password").val();
							var ajxregusracctc = $("#regusr-acc_tc").val();
							var ajxregusraccnl = $("#regusr-acc_nl").val();
							var ajxregusrsource = $("#regusr-source").val();

							console.log('aici');

							$.ajax({
								type:'post',
								url:'/ajax.php',
								data:{
									registerUser: true,
									ajxregusrname: ajxregusrname,
									ajxregusremail: ajxregusremail,
									ajxregusrpassword: ajxregusrpassword,
									ajxregusracctc: ajxregusracctc,
									ajxregusraccnl: ajxregusraccnl,
									ajxregusrsource: ajxregusrsource
								},
								success:function(response) {
									console.log('response', response);
									var responseObj = JSON.parse(response);
									console.log('responseObj', responseObj);
									if(responseObj.success){
										form.innerHTML = responseObj.msg;
									}else{
										var alert_div = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' + responseObj.msg + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
										$("#ajaxRegisterUserFormMsg").html(alert_div);
									}
								}
							});
						}
					}
				}, false)
			})
		})()
	</script>
</body>
</html>