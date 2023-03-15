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
		<link rel="stylesheet" href="css/product.css" />
		<title>Four | Recette de ...</title>
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
		<main class="container">
			<h2 class="title_h2">Titre de la recette</h2>
			<!-- box image -->
			<div class="box_img">
				<img src="images/gateau_chocolat.jpeg" alt="gateau au chocolat" />
			</div>
			<!-- box information de la recette -->
			<div class="box_info_recette">
				<!-- durée recette -->
				<div class="">
					<p>30 min</p>
				</div>
				<!-- dificulté recette -->
				<div class="">
					<p>Facile</p>
				</div>
				<!-- budget recette -->
				<div class="">
					<p>Bon marché</p>
				</div>
			</div>
			<!-- box etape recette -->
			<div class="box_etape_recette">
				<!-- etape 1 -->
				<div class="box_etape">
					<h2>Etape 1</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
						dicta consequuntur incidunt voluptate quis quo soluta quod? Hic
						accusantium error quibusdam necessitatibus, laudantium quam, commodi
						fugit tenetur odit sed deleniti!
					</p>
				</div>
				<!-- etape 2 -->
				<div class="box_etape">
					<h2>Etape 2</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
						dicta consequuntur incidunt voluptate quis quo soluta quod? Hic
						accusantium error quibusdam necessitatibus, laudantium quam, commodi
						fugit tenetur odit sed deleniti!
					</p>
				</div>
			</div>
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
