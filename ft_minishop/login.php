<?php session_start();?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Login</title>
		<meta charset="UTF-8">
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
				</li>
			</ul>
		</div>
	</head>
	<body>
		<div class="body">
			<h1 class="center">Connectez-vous</h1>
			<form class="center" action="fonction/login.php" method="post">
				<p>Identifiant: <input type="text" name="login"></p>
				<p>Mot de passe: <input type="password" name="passwd"></p>
				<p><input type="submit" name="submit" value="OK"></p>
			</form>
		</div>
	</body>

</html>
