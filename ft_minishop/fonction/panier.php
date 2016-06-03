<?php
session_start();
if ($_SESSION['panier'])
{
	$panier = unserialize($_SESSION['panier']);
}
$panier[$_POST['title']] = array ("title" => $_POST['title'], "nb" => $panier[$_POST['title']]['nb'] + $_POST['nb']);
$_SESSION['panier'] = serialize($panier);
header('Location: ../index.php');
?>
