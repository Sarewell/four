<?php
		include ('partial/header.php');
		include ('helpers/data.php');
		?>

		<!-- hero -->
		<div class="" id="hero">
			<h1>Bienvenue au <span class="text_primary">Four</span></h1>
			<p>Nos recettes sont chouettes</p>
			<a href="" class="btn_primary">En savoir plus</a>
			<div class="trait"></div>
		</div>
		<!-- end hero -->

		<!-- body/content -->
		<main>
			<!-- section sucré -->
			<section class="px-[10%] py-24">
				<h2 class="text-5xl text-[#333A7B] font-semibold pb-20">Nos gateaux sucrés</h2>
				<div class="flex place-content-around">
					<?php
						foreach($productsSucres  as $productsSucre){?>
						<a href="product.php">
						<div class="shadow-md w-72 bg-[#fff] rounded-3xl">
									<!-- box image -->
						<div class="h-56">
						<img src="<?=$productsSucre['img'] ?>" alt="gateau au yaourt" class="w-full h-full object-cover" />
						</div>
									<!-- card body -->
						<div class="px-10 py-5">
						<h3 class="pb-5"><?=$productsSucre['title'] ?></h3>
						<div class="pb-5">
						<p>
						<?=$productsSucre['description'] ?>
						</p>
						</div>
						<div class="flex place-content-between items-center text-[#bcbcbc]">
						<p><?=$productsSucre['avis'] ?></p>
						<p class="text-right text-xs">
						Note : <span class="font-bold"><?=$productsSucre['note'] ?></span>
						</p>
						</div>
						</div>
						</div>
						</a>

       				<?php } ?>
				</div>
				<!-- button more ++ -->
				<div class="btn_more">
					<a href="">Voir plus</a>
					<i class="fa-solid fa-circle-arrow-right"></i>
				</div>
			</section>
			<!-- section salé -->
			<section class="px-[10%] py-24">
				<h2 class="text-5xl text-[#333A7B] font-semibold pb-20">Nos gateaux sucrés</h2>
				<div class="flex place-content-around">
					<?php
						foreach($productsSales  as $productsSale){?>
						<a href="product.php">
						<div class="shadow-md w-72 bg-[#fff] rounded-3xl">
									<!-- box image -->
						<div class="h-56">
						<img src="<?=$productsSale['img'] ?>" alt="gateau au yaourt" class="w-full h-full object-cover" />
						</div>
									<!-- card body -->
						<div class="px-10 py-5">
						<h3 class="pb-5"><?=$productsSale['title'] ?></h3>
						<div class="pb-5">
						<p>
						<?=$productsSucre['description'] ?>
						</p>
						</div>
						<div class="flex place-content-between items-center text-[#bcbcbc]">
						<p><?=$productsSale['avis'] ?></p>
						<p class="text-right text-xs">
						Note : <span class="font-bold"><?=$productsSale['note'] ?></span>
						</p>
						</div>
						</div>
						</div>
						</a>

       				<?php } ?>
					</div>
					<!-- button more ++ -->
					<div class="btn_more">
						<a href="">Voir plus</a>
						<i class="fa-solid fa-circle-arrow-right"></i>
					</div>
				
			</section>
			<!-- image publicité -->
			<section class="px-[10%] section_twitch py-24">
				<!-- card twitch -->
				<div class="box_twitch_container">
					<!-- box body -->
					<div class="body_box_twitch">
						<div class="box_body_title_twitch">
							<h4>Live Twitch</h4>
							<i class="fa-brands fa-twitch" aria-hidden="true"></i>
						</div>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Perspiciatis hic nulla eum tempore, excepturi sequi earum ipsam at
							minus dolore. Lorem ipsum dolor sit amet consectetur adipisicing
							elit. Cumque exercitationem architecto laudantium deserunt tempore
							corporis ipsum ea fugiat nostrum perspiciatis.
						</p>
						<div class="btn_container_twitch">
							<a href="" class="btn_twitch">Découvrez nos lives Twitch</a>
						</div>
					</div>
					<!-- box image -->
					<div class="box_img_twitch">
						<a href="https://www.twitch.tv/" target="_blank">
							<img src="" alt="" />
						</a>
					</div>
				</div>

				<!-- card live cooking -->
				<div class="box_card_cooking">
					<!-- box body -->
					<div class="body_box_twitch">
						<div class="box_body_title_twitch">
							<h4>Live Twitch</h4>
							<i class="fa-brands fa-twitch" aria-hidden="true"></i>
						</div>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Perspiciatis hic nulla eum tempore, excepturi sequi earum ipsam at
							minus dolore. Lorem ipsum dolor sit amet consectetur adipisicing
							elit. Cumque exercitationem architecto laudantium deserunt tempore
							corporis ipsum ea fugiat nostrum perspiciatis.
						</p>
						<div class="btn_container_twitch">
							<a href="" class="btn_twitch">Découvrez nos lives Twitch</a>
						</div>
					</div>
					<!-- box image -->
					<div class="box_img_twitch">
						<a href="https://www.twitch.tv/" target="_blank">
							<img src="" alt="" />
						</a>
					</div>
				</div>
			</section>
		</main>
		<!-- end body -->

		<?php
		include('partial/footer.php');
		?>
