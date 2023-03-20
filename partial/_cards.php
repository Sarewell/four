<a href="product.php">
	<div class="shadow-md w-72 bg-[#fff] rounded-3xl">
							<!-- box image -->
		<div class="h-56">
			<img src="<?=$product['img'] ?>" alt="gateau au yaourt" class="w-full h-full object-cover" />
		</div>
							<!-- card body -->
		<div class="px-10 py-5">
			<h3 class="pb-5"><?=$product['title'] ?></h3>
		<div class="pb-5">
			<p>
				<?=$product['description'] ?>
			</p>
	</div>
	<div class="flex place-content-between items-center text-[#bcbcbc]">
		<p><?=$product['avis'] ?></p>
		<p class="text-right text-xs">
			Note : <span class="font-bold"><?=$product['note'] ?></span>
		</p>
	</div>
	</div>
	</div>
</a>
