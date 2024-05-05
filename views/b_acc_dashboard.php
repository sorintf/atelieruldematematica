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
				<div class="main acc-main col-lg-9">
					<div class="section border-bottom">
						<p class="section-title">Cursurile mele</p>
						<div class="section-description">Nu ai nici un curs în listă.</div>
						<a href="<?php echo $baseFunctions->buildUrl(array('f_courses_list')); ?>" class="btn btn-outline-dark">Caută cursuri</a>
					</div>

					<div class="section border-bottom">
						<p class="section-title">Cursurile mele</p>

						<div class="courses-list">
						
							<div class="card row-card bg-paleblue">
								<div class="course-main">
									<p class="course-category">Alergologie si imunologie</p>
									<p class="course-title">Certificate Course in Drug Regulatory Affairs (DRA)</p>
									<div class="lector-info">
										<img src="<?php echo BASE_URL.'/images/users/avatar-lector-mihai-enulescu.png' ?>" alt="" class="avatar">
										<div class="text">
											Lector, <span class="name">Mihai Enulescu</span>
										</div>
									</div>
								</div>
								<div class="course-side">
									<div class="course-info">
										<div class="icon">
											<svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
										</div>
										<div class="text">
											<div class="tag outline-orange">ASTĂZI</div> <span class="color-blue">15:00</span>
											<p class="date">20 Martie 2024</p>
										</div>
									</div>
									<div class="course-meta">
										<svg class="img" role="img" aria-label="Seen" width="12" height="8"><use xlink:href="#icon-check"/></svg> Acces live și vizionare ulterioară*
									</div>
								</div>
								<div class="course-bottom">
									<div class="course-stats">
										<div class="users">
											<svg class="img" role="img" aria-label="Users" width="12" height="14"><use xlink:href="#icon-user"/></svg>
											<div class="text">34 / 100</div>
										</div>

										<div class="nivel">
											<div class="icon">
												<svg class="img" role="img" aria-label="Users" width="17" height="14"><use xlink:href="#icon-hat"/></svg>
											</div> 
											<div class="text">Orice nivel</div>
										</div>

										<div class="rating">
											<div class="icon">
												<svg class="img" role="img" aria-label="Stars" width="14" height="13"><use xlink:href="#icon-star-solid"/></svg>
											</div> 
											<div class="text">Nou</div>
										</div>
									</div>
									<div class="course-buttons">
										<a href="#" class="">
											<svg class="img" role="img" aria-label="More" width="19" height="5"><use xlink:href="#icon-dots"/></svg>
										</a>
										<a href="#" class="btn btn-outline-dark">Detalii</a>
										<a href="#" class="btn btn-dark">Live in 13 ore, 24 de minut(e)</a>
									</div>
								</div>
							</div>

							<div class="card row-card">
								<div class="course-main">
									<p class="course-category">Alergologie si imunologie</p>
									<p class="course-title">Certificate Course in Drug Regulatory Affairs (DRA)</p>
									<div class="lector-info">
										<img src="<?php echo BASE_URL.'/images/users/avatar-lector-mihai-enulescu.png' ?>" alt="" class="avatar">
										<div class="text">
											Lector, <span class="name">Mihai Enulescu</span>
										</div>
									</div>
								</div>
								<div class="course-side">
									<div class="course-info">
										<div class="icon">
											<svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
										</div>
										<div class="text">
											<div class="tag outline-blue">LIVE</div> <span class="color-blue">15:00</span>
											<p class="date">20 Martie 2024</p>
										</div>
									</div>
									<div class="course-meta">
										<svg class="img" role="img" aria-label="Seen" width="12" height="8"><use xlink:href="#icon-check"/></svg> Acces live și vizionare ulterioară*
									</div>
								</div>
								<div class="course-bottom">
									<div class="course-stats">
										<div class="users">
											<svg class="img" role="img" aria-label="Users" width="12" height="14"><use xlink:href="#icon-user"/></svg>
											<div class="text">34 / 100</div>
										</div>

										<div class="nivel">
											<div class="icon">
												<svg class="img" role="img" aria-label="Users" width="17" height="14"><use xlink:href="#icon-hat"/></svg>
											</div> 
											<div class="text">Orice nivel</div>
										</div>

										<div class="rating">
											<div class="icon">
												<svg class="img" role="img" aria-label="Stars" width="14" height="13"><use xlink:href="#icon-star-solid"/></svg>
											</div> 
											<div class="text">Nou</div>
										</div>
									</div>
									<div class="course-buttons">
										<a href="#" class="">
											<svg class="img" role="img" aria-label="More" width="19" height="5"><use xlink:href="#icon-dots"/></svg>
										</a>
										<a href="#" class="btn btn-outline-dark">Detalii</a>
										<a href="#" class="btn btn-dark">Accesibil 20 martie</a>
									</div>
								</div>
							</div>

							<div class="card row-card">
								<div class="course-main">
									<p class="course-category">Alergologie si imunologie</p>
									<p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
									<div class="lector-info">
										<img src="<?php echo BASE_URL.'/images/users/avatar-lector-mihai-enulescu.png' ?>" alt="" class="avatar">
										<div class="text">
											Lector, <span class="name">Mihai Enulescu</span>
										</div>
									</div>
								</div>
								<div class="course-side">
									<div class="course-info">
										<div class="icon">
											<svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
										</div>
										<div class="text">
											<div class="tag pale">VIDEO</div>
											<p class="date">2 ore, 30 minut(e)</p>
										</div>
									</div>
									<div class="course-meta">
										<svg class="img" role="img" aria-label="Seen" width="12" height="8"><use xlink:href="#icon-check"/></svg> Vizionat 16 Martie, 2024
									</div>
								</div>
								<div class="course-bottom">
									<div class="course-stats">
										<div class="users">
											<svg class="img" role="img" aria-label="Users" width="12" height="14"><use xlink:href="#icon-user"/></svg>
											<div class="text"><?php echo number_format(11343); ?></div>
										</div>

										<div class="nivel">
											<div class="icon">
												<svg class="img" role="img" aria-label="Users" width="17" height="14"><use xlink:href="#icon-hat"/></svg>
											</div> 
											<div class="text">Orice nivel</div>
										</div>

										<div class="rating">
											<div class="icon">
												<svg class="img" role="img" aria-label="Stars" width="14" height="13"><use xlink:href="#icon-star-solid"/></svg>
											</div> 
											<div class="text"><?php echo number_format(4.8, 1);?> <span> / <?php echo number_format(9413); ?></span></div>
										</div>
									</div>
									<div class="course-buttons">
										<a href="#" class="">
											<svg class="img" role="img" aria-label="More" width="19" height="5"><use xlink:href="#icon-dots"/></svg>
										</a>
										<a href="#" class="btn btn-outline-dark">Detalii</a>
										<a href="#" class="btn btn-dark">Vizionare</a>
									</div>
								</div>
							</div>

							<div class="card row-card">
								<div class="course-main">
									<p class="course-category">Alergologie si imunologie</p>
									<p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
									<div class="lector-info">
										<img src="<?php echo BASE_URL.'/images/users/avatar-lector-mihai-enulescu.png' ?>" alt="" class="avatar">
										<div class="text">
											Lector, <span class="name">Mihai Enulescu</span>
										</div>
									</div>
								</div>
								<div class="course-side">
									<div class="course-info">
										<div class="icon">
											<svg class="img" role="img" aria-label="Încheiat" width="34" height="34"><use xlink:href="#icon-lock"/></svg>
										</div>
										<div class="text">
											<div class="tag pale">ÎNCHEIAT</div>
											<p class="date">2 ore, 30 minut(e)</p>
										</div>
									</div>
									<div class="course-meta">
										Încheiat 10 Martie, 2024
									</div>
								</div>
								<div class="course-bottom">
									<div class="course-stats">
										<div class="users">
											<svg class="img" role="img" aria-label="Users" width="12" height="14"><use xlink:href="#icon-user"/></svg>
											<div class="text"><?php echo number_format(11343); ?></div>
										</div>

										<div class="nivel">
											<div class="icon">
												<svg class="img" role="img" aria-label="Users" width="17" height="14"><use xlink:href="#icon-hat"/></svg>
											</div> 
											<div class="text">Orice nivel</div>
										</div>

										<div class="rating">
											<div class="icon">
												<svg class="img" role="img" aria-label="Stars" width="14" height="13"><use xlink:href="#icon-star-solid"/></svg>
											</div> 
											<div class="text"><?php echo number_format(4.8, 1);?> <span> / <?php echo number_format(9413); ?></span></div>
										</div>
									</div>
									<div class="course-buttons">
										<a href="#" class="">
											<svg class="img" role="img" aria-label="More" width="19" height="5"><use xlink:href="#icon-dots"/></svg>
										</a>
										<a href="#" class="btn btn-outline-dark">Detalii</a>
										<a href="#" class="btn btn-dark disabled" disabled>Indisponibil</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="section border-bottom">
						<p class="section-title">Webinariile mele</p>
						<div class="section-description">Nu ai participat la webinarii încă.</div>
						<a href="<?php echo $baseFunctions->buildUrl(array('f_webinars_list')); ?>" class="btn btn-outline-dark">Caută webinarii </a>
					</div>

					<div class="section">
						<p class="section-title">Populare</p>
						<div class="row">
							<div class="col-md-4">
								<div class="card">
									<p class="course-category">Farmaceutic</p>
									<p class="course-title">Strategic Medical Affairs for Modern Pharma</p>
									<div class="lector-info">
										<img src="<?php echo BASE_URL.'/images/users/avatar-lector-adrian-popescu.png' ?>" alt="" class="avatar">
										<div class="text">
											Lector, <span class="name">Adrian Popescu</span>
										</div>
									</div>
									<div class="course-description">Medical Affairs has become a strategically critical function for the success of any pharma product.</div>
									<div class="course-info">
										<div class="icon">
											<svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
										</div>
										<div class="text">
											<div class="tag outline-blue">LIVE</div>
											<p class="date">20 Martie, 2024</p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="card">
									<p class="course-category">Farmaceutic</p>
									<p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
									<div class="lector-info">
										<img src="<?php echo BASE_URL.'/images/users/avatar-lector-mariana-dumitru.png' ?>" alt="" class="avatar">
										<div class="text">
											Lector, <span class="name">Mariana Dumitru</span>
										</div>
									</div>
									<div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
									<div class="course-info">
										<div class="icon">
											<svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
										</div>
										<div class="text">
											<div class="tag pale">VIDEO</div>
											<p class="date length">2 ore, 30 minut(e)</p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="card">
									<p class="course-category">Farmaceutic</p>
									<p class="course-title">Practical Regulatory Affairs 2020 - European Medical Devices</p>
									<div class="lector-info">
										<img src="<?php echo BASE_URL.'/images/users/avatar-lector-mihai-enulescu.png' ?>" alt="" class="avatar">
										<div class="text">
											Lector, <span class="name">Mihai Enulescu</span>
										</div>
									</div>
									<div class="course-description">A practical course discussing the EU Medical Device Regulation (MDR) in real-world situations.</div>
									<div class="course-info">
										<div class="icon">
											<svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
										</div>
										<div class="text">
											<div class="tag outline-blue">LIVE</div>
											<p class="date">20 Martie, 2024</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="side col-lg-3">
					<div class="section border-bottom">
						<p class="section-title">În curând</p>
						<div class="section-description">Nici un eveniment programat.</div>
						<a href="#" class="btn btn-outline-dark">Răsfoiește</a>
					</div>

					<div class="section border-bottom">
						<p class="section-title">În curând</p>
						<div class="section-description">1 Eveniment(e) live in curand</div>

						<div class="card bg-paleblue">
							<div>
								<div class="tag outline-orange">ASTĂZI</div>
							</div>

							<p class="course-title">Practical Regulatory Affairs 2020 - European Medical Devices</p>
							<div class="lector-info">
								<img src="<?php echo BASE_URL.'/images/users/avatar-lector-magdalena-muntenescu.png' ?>" alt="" class="avatar">
								<div class="text">
									Lector, <span class="name">Magdalena Muntenescu</span>
								</div>
							</div>
							<a href="#" class="btn btn btn-outline-blue w-100">Live in 13 ore, 24 de minut(e)</a>
						</div>

						<div class="section-info">
							<div class="icon">
								<svg class="img" role="img" aria-label="Info" width="16" height="16"><use xlink:href="#icon-info"/></svg>
							</div>
							<div class="text">Linkul de acces la evenimentele live este deblocat cu 5 minute inainte de incepere</div>
						</div>
					</div>

					<div class="section">
						<p class="section-title">Recomandate</p>

						<div class="card">
							<div class="rating">
								<div class="icon">
									<svg class="img" role="img" aria-label="Stars" width="14" height="13"><use xlink:href="#icon-star-solid"/></svg>
								</div> 
								<div class="text"><?php echo number_format(4.8, 1);?> <span> / <?php echo number_format(13413); ?></span></div>
							</div>

							<p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
							<div class="lector-info">
								<img src="<?php echo BASE_URL.'/images/users/avatar-lector-magdalena-muntenescu.png' ?>" alt="" class="avatar">
								<div class="text">
									Lector, <span class="name">Magdalena Muntenescu</span>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="rating">
								<div class="icon">
									<svg class="img" role="img" aria-label="Stars" width="14" height="13"><use xlink:href="#icon-star-solid"/></svg>
								</div> 
								<div class="text"><?php echo number_format(4.8, 1);?> <span> / <?php echo number_format(13413); ?></span></div>
							</div>

							<p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
							<div class="lector-info">
								<img src="<?php echo BASE_URL.'/images/users/avatar-lector-magdalena-muntenescu.png' ?>" alt="" class="avatar">
								<div class="text">
									Lector, <span class="name">Magdalena Muntenescu</span>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="rating">
								<div class="icon">
									<svg class="img" role="img" aria-label="Stars" width="14" height="13"><use xlink:href="#icon-star-solid"/></svg>
								</div> 
								<div class="text"><?php echo number_format(4.8, 1);?> <span> / <?php echo number_format(13413); ?></span></div>
							</div>

							<p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
							<div class="lector-info">
								<img src="<?php echo BASE_URL.'/images/users/avatar-lector-magdalena-muntenescu.png' ?>" alt="" class="avatar">
								<div class="text">
									Lector, <span class="name">Magdalena Muntenescu</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include_once('views/_footer.php') ?>