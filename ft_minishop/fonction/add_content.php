<?php
if (!$_POST["title"] || !$_POST["desc"] || !$_POST["price"] || !$_POST["img"] || !$_POST["cat"])
{
	header('Location: ../add_content.php');
}
else
{
	if (!file_exists("../shop"))
		mkdir("../shop");
	if (file_exists("../shop/content"))
	{
		$file = unserialize(file_get_contents("../shop/content"));
		if ($file[$_POST["title"]])
		{
			header('Location: ../add_content.php');
			exit;
		}
	}
	$file[$_POST["title"]] = array ("title" => $_POST["title"], "desc" => $_POST["desc"], "price" => $_POST["price"], "img" => $_POST["img"], "cat" => explode(" ", $_POST["cat"]));
	file_put_contents("../shop/content", serialize($file));
	header('Location: ../index.php');
}
?>
