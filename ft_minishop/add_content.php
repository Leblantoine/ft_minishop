<?php session_start();?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">
		<title>Créer un article</title>
		<div class="header">
			<p id="logo"><a href="index.php">Notre Boutique :)</a></p>
			<ul id="menu-deroulant">
				<li><a><?php if (!$_SESSION['loggued_on_user'] || $_SESSION['loggued_on_user'] == ""){echo "Profile"; } else {echo $_SESSION['loggued_on_user'];} ?></a>
<ul>
<li><a href="create.php">Créer son compte</a></li>
<li><a href="login.php">Connection</a></li>
<li><a href="modif.php">Modifier son mot de passe</a></li>
<?php
    if ($_SESSION["loggued_on_user"] == "admin")
    echo ('<li><a href="add_content.php">Créer un article</a></li><li><a href="edit_content_big_boss.php">Modifier/supprimer un article</a></li><li><a href="delete_user.php">Supprimer un utilisateur</a></li>');
    ?>
<li><a href="panier.php">Panier</a></li>
                        <li><a href="archives.php">Archives</a></li>
<li><a href="fonction/logout.php">Déconnection</a></li>
</ul>
		</div>
	</head>
	<body>
		<div class="body">
			<h1 class="center">Créez votre article</h1>
			<form class="center" action="fonction/add_content.php" method="post">
				<p>Nom de l'article: <input type="text" name="title"></p>
				<p>Description: <input type="text" name="desc"></p>
				<p>Prix: <input type="text" name="price"></p>
				<p>Url de l'image: <input type="text" name="img"></p>
				<p>Catégorie(s) (cat1 cat2): <input type="text" name="cat"></p>
				<p><input type="submit" name="submit" value="OK"></p>
			</form>
		</div>
	</body>
</html>
