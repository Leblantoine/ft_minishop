<?php
session_start();
if ($_POST['submit'] == "Supprimer mon panier")
{
	unset($_SESSION['panier']);
}
header("Location: ../index.php");
?>
