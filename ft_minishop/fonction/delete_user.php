<?php
if (!$_POST["user"] || $_POST["user"] == "admin")
{
	header('Location: ../delete_user.php');
}
else
{
	$file = unserialize(file_get_contents("../private/passwd"));
	unset($file[$_POST["user"]]);
	file_put_contents("../private/passwd", serialize($file));
	header('Location: ../index.php');
}
?>
