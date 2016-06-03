<?php
session_start();
if ($_POST['submit'] == "Supprimer")
{
	$file = unserialize($_SESSION['panier']);
	unset($file[$_POST['title']]);
	$_SESSION['panier'] = serialize($file);
}
header("Location: ../panier.php");
?>
