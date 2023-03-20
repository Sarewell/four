<?php
		include ('partial/_header.php');
		include ('helpers/_data.php');
		?>

		<!-- body/content -->
		<main>
			<section class="px-[10%] py-24">
				<h2 class="text-5xl text-[#333A7B] font-semibold pb-20">Nos gateaux salés</h2>
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
										<?=$productsSale['description'] ?>
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
						<a href="product.php">Voir plus</a>
						<i class="fa-solid fa-circle-arrow-right"></i>
					</div>
				
			</section>
				
		</main>

<?php
		include('partial/_footer.php');
		?>
