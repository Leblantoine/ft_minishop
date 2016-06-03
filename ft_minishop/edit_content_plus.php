<?php session_start();?>
<?php include("fonction/edit_content_plus.php"); ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">
		<title>Editez un article</title>
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
			<h1 class="center">Editez votre article</h1>
			<form class="center" action="fonction/edit_content_plus_plus.php" method="post">
			<p>Ancien nom de l'article: <input type="text" name="oldtitle" value="<?php echo ($_GET["title"]); ?>" readonly></p>
			<p>Nom de l'article: <input type="text" name="title" value="<?php echo ($_GET["title"]); ?>"></p>
			<p>Description: <input type="text" name="desc" value="<?php get_desc($_GET["title"]) ?>"></p>
			<p>Prix: <input type="text" name="price" value="<?php get_price($_GET["title"]) ?>"></p>
			<p>Url de l'image: <input type="text" name="img" value="<?php get_img($_GET["title"]) ?>"></p>
			<p>Catégorie(s) (cat1 cat2): <input type="text" name="cat" value="<?php get_cat($_GET["title"]) ?>"></p>
				<p><input type="submit" name="submit" value="OK"></p>
			</form>
		</div>
	</body>
</html>
