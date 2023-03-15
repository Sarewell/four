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
		<!-- my css -->
		<link rel="stylesheet" href="css/style.css" />
		<title>Cours 1</title>
        <script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body class="w-100">
        <?php
    $navItems = 
    [
        [
            "name"=>"Recettes Sucrées",
            "url"=>"sucres.php",
        ],
        [
            "name"=>"Recettes Salées",
            "url"=>"sales.php",
        ],
        [
            "name"=>"Ajouter Recette",
            "url"=>"add-recette.php"
        ]
    ];
        ?>
		<!-- header -->
		<header class="px-[10%] max-w-full bg-[#333A7B] px-5 py-10 flex place-content-between items-center">
			<!-- div logo -->
			<div class="">
				<a href="index.php" class="text-2xl text-bold uppercase text-white">Logo</a>
			</div>
			<!-- end div logo -->
			<!-- navigation -->
            
			<nav class= "text-white text-xl pr-10">
            <?php
            foreach($navItems as $navItem){?>
                <a href="<?=$navItem['url']?>" class= "hover:text-[#B4FFD8] hover:underline pl-5 "><?=$navItem['name']?></a>

       <?php } ?>
                
				<!-- <a href="sucres.html" class= "hover:text-[#B4FFD8] hover:underline ">Recettes Sucrées</a>
				<a href="sales.html" class="pl-5 hover:text-[#B4FFD8] hover:underline">Recettes Salées</a>
				<a href="add-recette.html" class="pl-5 hover:text-[#B4FFD8] hover:underline">Ajouter Recette</a> -->
			</nav>
			<!-- end navigation -->
		</header>
		<!-- end header -->