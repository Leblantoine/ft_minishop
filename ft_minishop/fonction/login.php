<?php
	include("auth.php");

	session_start();
	if (auth($_POST["login"], $_POST["passwd"]))
	{
		$_SESSION["loggued_on_user"] = $_POST["login"];
		header("Location: ../index.php");
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
		header("Location: ../login.php");
	}
?>
