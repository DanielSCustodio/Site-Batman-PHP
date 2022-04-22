<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH;?>estilo\style.css" rel="stylesheet"/>
	<meta name= "viewport" content="width=device-width", initial=1.0>
	<meta name="keywords" content="palavra-chave, do, meu, site">
	<meta name="description" content="Desecrição do website">
	<meta charset="utf-8">
</head>


<body>

	<header>
		<div class="center">
			<div class="logo left"><img src="<?php echo INCLUDE_PATH;?>img/batLogo3.png"></div> <!--logo-->
				<nav class="desktop right">
					<ul>	
				     	<li><a href="<?php echo INCLUDE_PATH;?>" >Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH;?>comics">Comics </a></li>
						<li><a href="<?php echo INCLUDE_PATH;?>movies">Movies </a></li>
						<li><a href="<?php echo INCLUDE_PATH;?>contact">Contact </a></li>
					</ul>
				</nav>

				<nav class="mobile right">
					<div class="botao-menu-mobile">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
					<ul>
						<li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH;?>comics">Comics </a></li>
						<li><a href="<?php echo INCLUDE_PATH;?>movies">Movies </a></li>
						<li><a href="<?php echo INCLUDE_PATH;?>contact">Contact </a></li>
					</ul>
				</nav>
			</div>
			<div class="clear"></div>
		</div>
	</header>

	<?php
		$url = isset($_GET['url']) ? $_GET['url']:'home';

		if (file_exists('pages/'.$url.'.php')) {
			include('pages/'.$url.'.php');
		}else{
			$page404 = true;
			include('pages/404.php');
		}
	?>

	<footer <?php if (isset($page404) && $page404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>All rights reserved</p>
			
		</div>
	</footer>

	<script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
	

</body>
</html>