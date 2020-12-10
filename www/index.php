
<!DOCTYPE html>
<html>
<head>
	<title>Mon Site</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="includes/css/styles.css">

</head>
<body>

	<!-- Menu Nav -->
	<?php 

	include 'includes/database.php';
	global $db;

	?>

	<div class="header">
		<?php include 'includes/menuNav.php';?>

		<h1 class="title">Bienvenue sur le monde Under-Sword !</h1>
		<p class="introduction">Il n'est jamais trop tard pour commencer quelque chose, l'erreur est l'abandon avant même d'avoir essayé de le faire !</p>
	</div>


	<div id="content">
		<div class="premierBloc">
			<h3><u>Qu'est-ce qu'un MMO / RPG / MMORPG ?</u></h3>
			<div class="def">
				<p><n><mark>MMO : </mark></n>(Massively Multiplayer Online) jeu en ligne massivement multijoueur.</p>
				<p><n><mark>RPG : </mark></n>(Role playing Game) jeu de rôle.</p>
				<p><n><mark>MMORPG : </mark></n>(Massively Multiplayer Online Role Playing Game) jeu de rôle en ligne massivement multijoueur.</p>
			</div>
			<div class="exemple">
				<h3><u>Exemple de jeu : </u></h3>
				<div class="exempleImg">
					<a class="exemple" href="https://warspear-online.com/" target="_BLANK">Warspear : MMORPG</a><br>
					<img class="test" src="includes/css/img/Warspear.png" width="50%">
				</div>
				<div class="exempleVideo">
					
					<a class="exemple" href="https://www.monsterhunterworld.com/" target="_BLANK">Monster Hunter World IceBorn : RPG et MMORPG</a><br>
					<a class="exemple" href="https://www.youtube.com/channel/UCFq8gzlH3fmi5w2aA_mIMog?view_as=subscriber" target="_BLANK">(ma Chaîne Youtube)</a><br>
					<iframe width="400px" height="400px" src="https://www.youtube.com/embed/SlxJbyBJ4hA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
				</div>
			</div>

		</div>
	</div>



	
	<script type="text/javascript" src="includes/main.js"></script>
</body>
</html>