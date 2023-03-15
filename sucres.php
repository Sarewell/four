<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- font google -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700;800;900;1000&display=swap"
			rel="stylesheet"
		/>
		<!-- font awesome cdn -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link rel="stylesheet" href="css/sucres.css" />
		<title>Four | Nos recettes sucrées</title>
	</head>
	<body>
		<!-- header -->
		<header class="container">
			<!-- div logo -->
			<div class="">
				<a href="index.html" class="logo">Logo</a>
			</div>
			<!-- end div logo -->
			<!-- navigation -->
			<nav>
				<a href="sucres.html">Recettes Sucrées</a>
				<a href="sales.html" class="nav_padding_left">Recettes Salées</a>
				<a href="add-recette.html" class="nav_padding_left">Ajouter Recette</a>
			</nav>
			<!-- end navigation -->
		</header>
		<!-- end header -->

		<!-- body/content -->
		<main>
			<section class="container">
				<h2 class="section_h2">Nos gateaux sucrés</h2>
				<div class="section_card">
					<!-- card1 -->
					<a href="product.html">
						<div class="card_container">
							<!-- box image -->
							<div class="image">
								<img src="images/yaourt.jpeg" alt="gateau au yaourt" />
							</div>
							<!-- card body -->
							<div class="card_body">
								<h3>Gateau au yaourt</h3>
								<div class="card_description">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Accusamus, iure!
									</p>
								</div>
								<div class="card_body_bottom text-gray-light">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
					<!-- card2 -->
					<a href="product.html">
						<div class="card_container">
							<!-- box image -->
							<div class="image">
								<img
									src="images/gateau_chocolat.jpeg"
									alt="gateau au chocolat"
								/>
							</div>
							<!-- card body -->
							<div class="card_body">
								<h3>Gateau au chocolat</h3>
								<div class="card_description">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Accusamus, iure!
									</p>
								</div>
								<div class="card_body_bottom text-gray-light">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
					<!-- card3 -->
					<a href="product.html">
						<div class="card_container">
							<!-- box image -->
							<div class="image">
								<img src="images/brownies_couverture.jpg" alt="brownies" />
							</div>
							<!-- card body -->
							<div class="card_body">
								<h3>Browny</h3>
								<div class="card_description">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Accusamus, iure!
									</p>
								</div>
								<div class="card_body_bottom text-gray-light">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
				</div>
			</section>
		</main>

		<!-- footer -->
		<footer class="container">
			<div class="footer_list_container">
				<!-- box sucré -->
				<div class="box_list list_left">
					<p>Sucré</p>
					<ul>
						<li>Lorem, ipsum dolor.</li>
						<li>Lorem, ipsum.</li>
						<li>Lorem dolor.</li>
					</ul>
				</div>
				<!-- box salé -->
				<div class="box_list list_center">
					<p>Salé</p>
					<ul>
						<li>Lorem, ipsum dolor.</li>
						<li>Lorem, ipsum.</li>
						<li>Lorem dolor.</li>
					</ul>
				</div>
				<!-- box contact -->
				<div class="box_list list_right">
					<p>Contact</p>
					<ul>
						<li>Tel: 0909090909</li>
						<li>Email: info@four.com</li>
					</ul>
				</div>
			</div>
			<!-- icons social media -->
			<div class="footer_icon_container">
				<a href="https://www.facebook.com/" target="_blank">
					<i class="fa-brands fa-facebook"></i>
				</a>
				<a href="https://www.instagram.com/" target="_blank">
					<i class="fa-brands fa-instagram"></i>
				</a>
				<a href="https://www.youtube.com/" target="_blank">
					<i class="fa-brands fa-youtube"></i>
				</a>
			</div>
		</footer>
		<!-- end footer -->
	</body>
</html>
