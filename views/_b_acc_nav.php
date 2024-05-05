
<div class="acc-nav">
	<div class="container">
		<ul class="nav">
			<?php if ($baseFunctions->admin_status): ?>
				<li class="nav-item">
					<a class="nav-link bg-info" href="/admin.php">Admin</a>
				</li>
				<li class="nav-item">
					<hr class="divider">
				</li>
			<?php endif ?>

			<li class="nav-item <?php echo ($baseFunctions->view=='b_acc_dashboard')?'active':''; ?>">
				<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_dashboard")); ?>">Dashboard</a>
			</li>
			<li class="nav-item <?php echo ($baseFunctions->view=='b_acc_courses_list')?'active':''; ?>">
				<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_courses_list")); ?>">Cursurile mele</a>
			</li>
			<li class="nav-item <?php echo ($baseFunctions->view=='b_acc_webinars_list')?'active':''; ?>">
				<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_webinars_list")); ?>">Webinariile mele</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_logout")); ?>">Logout</a>
			</li>
		</ul>
	</div>
</div>