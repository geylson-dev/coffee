<?php session_start(); ?>
<?php include "header.php"; ?>
<!-- Start slides -->
<br>
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-left">
			<img src="images/banner01.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Transformando o simples ato de tomar café em uma experiência extraordinária.</strong></h1>
						<p class="m-b-40">Cada aroma, cada sabor, um convite ao deleite dos sentidos.</p>

					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="images/banner02.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Onde a arte do café encontra o requinte em cada detalhe.</strong></h1>
						<p class="m-b-40">Sua experiência será completa, com ambientes acolhedores e um atendimento cuidadoso.</p>

					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="images/banner03.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>O sabor refinado que sua paixão por café merece.</strong></h1>
						<p class="m-b-40">Aqui, a tradição se encontra com a inovação, proporcionando momentos únicos em cada chávena.</p>

					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="images/banner04.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Elevando o café a um patamar de<br>sofisticação inigualável.</strong></h1>
						<p class="m-b-40">Descubra a fusão perfeita entre grãos selecionados e técnicas refinadas.</p>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	</div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Bem-vindo à <span>Cafeteria Gourmet</span></h1>
					<h4>Pequena História</h4>
					<p>Explore o sabor refinado em nossa Cafeteríra t. Localizada em Parauapebas, Pará, oferecemos uma fusão única de grãos selecionados e um ambiente acolhedor.</p>
					<p>Desfrute de momentos deliciosos em cada xícara, enquanto nos tornamos seu destino favorito para cafés especiais e experiências memoráveis.</p>
					<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Contact Us</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="images/images.jpg" width="200%" height="200%" class="img-fluid">
			</div>
		</div>
	</div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<p class="lead ">
					" Se não está por trás do balcão, aprecie e elogie nosso barista, cada xícara é uma obra-prima do sabor, e cada elogio é um tributo ao talento que colocamos em cada café. "
				</p>
				<span class="lead">Cafeteria Gourmet</span>
			</div>
		</div>
	</div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Menu Especial</h2>
					<p>Desfrute das Novidades Saborosas</p>
				</div>
			</div>
		</div>

		<div class="row inner-menu-box">
			<div class="col-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
					<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Classico</a>
					<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Cremoso</a>
					<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Extra Forte</a>


				</div>
			</div>

			<div class="col-9">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<div class="row">
							<?php include "connect.php";
							$s = mysqli_query($con, "select * from menu");
							while ($r = mysqli_fetch_array($s)) {
							?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:200px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>R$ <?php echo $r['price']; ?>,00</p>
											<h5 align="center">
												<?php if (isset($_SESSION['uid'])) {
												?>
													<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Comprar</a>
											</h5>

										<?php
												} else {
										?>
											<a href="login.php">Comprar</a>
										<?php } ?>

										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>


					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						<div class="row">


							<?php include "connect.php";
							$s = mysqli_query($con, "select * from menu where category='classico'");
							while ($r = mysqli_fetch_array($s)) {
							?>

								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:200px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>R$ <?php echo $r['price']; ?>,00</p>
											<h5 align="center">
												<?php if (isset($_SESSION['uid'])) {
												?>
													<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Comprar</a>
											</h5>

										<?php
												} else {
										?>
											<a href="login.php">Comprar</a>
										<?php } ?>




										</h5>
										</div>
									</div>
								</div>
							<?php } ?>


						</div>

					</div>
					<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
						<div class="row">

							<?php include "connect.php";
							$s = mysqli_query($con, "select * from menu where category='cremoso'");
							while ($r = mysqli_fetch_array($s)) {
							?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:200px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>R$ <?php echo $r['price']; ?>,00</p>
											<h5 align="center">
												<?php if (isset($_SESSION['uid'])) {
												?>
													<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Comprar</a>
											</h5>

										<?php
												} else {
										?>
											<a href="login.php">Comprar</a>
										<?php } ?>


										</h5>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
						<div class="row">

							<?php include "connect.php";
							$s = mysqli_query($con, "select * from menu where category='extraforte'");
							while ($r = mysqli_fetch_array($s)) {
							?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:200px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>R$ <?php echo $r['price']; ?>,00</p>
											<h5 align="center">
												<?php if (isset($_SESSION['uid'])) {
												?>
													<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Comprar</a>
											</h5>

										<?php
												} else {
										?>
											<a href="login.php">Comprar</a>
										<?php } ?>


										</h5>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Menu -->

<!-- Start Customer Reviews -->

<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Avaliações dos Clientes</h2>
					<p>"Se você criar uma experiência excepcional, os clientes comentam entre si, e o boca a boca é muito poderoso."</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						<?php include "connect.php";
						$s = mysqli_query($con, "select * from review  limit 4");
						while ($r = mysqli_fetch_array($s)) {
						?>
							<div class="carousel-item text-center ">
								<div class="img-box p-1 border m-auto">
									<img class="d-block w-100" src="images/avaliar.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">
										<?php echo $r['name']; ?>
									</strong></h5>
								<h6 class="text-dark m-0">Avaliação : <?php echo $r['review']; ?></h6>
								<p class="m-0 pt-3">
									<?php echo $r['description']; ?>
								</p>
							</div>
						<?php } ?>
						<div class="carousel-item text-center active">
							<div class="img-box p-1 border m-auto">
								<img class="d-block w-100" src="images/avaliar.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Mariana Furtado</strong></h5>
							<h6 class="text-dark m-0">Avaliação : Excelente</h6>
							<p class="m-0 pt-3">
								A Cafeteria Gourmet é um tesouro para os apreciadores de café. A qualidade dos grãos é excepcional, e o atendimento caloroso transforma cada visita em um momento especial.</p>
						</div>

					</div>
					<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Customer Reviews -->
<?php include "footer.php"; ?>