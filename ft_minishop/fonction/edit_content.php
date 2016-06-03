<?php
if (!$_POST["title"] || !file_exists("../shop/content"))
{
	header("Location: ../edit_content_big_boss.php");
}
else
{
	$file = unserialize(file_get_contents("../shop/content"));
	if ($file[$_POST["title"]])
	{
		$title = $_POST["title"];
		if ($_POST["submit"] == "modifier")
			header("Location: ../edit_content_plus.php?title=$title");
		else if ($_POST["submit"] == "supprimer")
		{
			unset($file[$_POST["title"]]);
			file_put_contents("../shop/content", serialize($file));
			header("Location: ../index.php");
		}
	}
	else
		header("Location: ../edit_content_big_boss.php");
}
?>
