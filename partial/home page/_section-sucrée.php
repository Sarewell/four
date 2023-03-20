			<!-- section sucré -->
			<section class="px-[10%] py-24">
				<h2 class="text-5xl text-[#333A7B] font-semibold pb-20">Nos gateaux sucrés</h2>
				<div class="flex place-content-around">
					<?php
						foreach($productsSucres  as $product){
						include('partial/_cards.php');

       				 } ?>
				</div>
				<!-- button more ++ -->
				<div class="btn_more">
					<a href="product.php">Voir plus</a>
					<i class="fa-solid fa-circle-arrow-right"></i>
				</div>
			</section>