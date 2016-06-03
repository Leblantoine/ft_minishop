<?php
session_start();
if ($_SESSION['loggued_on_user'] && $_SESSION['loggued_on_user'] != "")
{
	if (!file_exists("../shop"))
		mkdir("../shop");
	if (file_exists("../shop/archive"))
		$file = unserialize(file_get_contents("../shop/archive"));
	$file[$_SESSION['loggued_on_user']][] = unserialize($_SESSION['panier']);
	file_put_contents('../shop/archive', serialize($file));
	unset($_SESSION['panier']);
	header('Location: ../archives.php');
}
else
{
	header('Location: ../login.php');
}
?>
