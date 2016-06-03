<?php
if (!$_POST["login"] || !$_POST["passwd"])
	{
		header('Location: ../create.php');
	}
	else
	{
		if (!file_exists("../private"))
			mkdir("../private");
		if (file_exists("../private/passwd"))
		{
			$file = unserialize(file_get_contents("../private/passwd"));
			for ($i=0; $file[$i]; $i++)
			{
				if ($file[$i]["login"] == $_POST["login"])
				{
 					header('Location: ../create.php');
					exit;
				}
			}
		}
		$file[$_POST["login"]] = array ("login" => $_POST["login"], "passwd" => hash("Whirlpool", $_POST["passwd"]));
		file_put_contents("../private/passwd", serialize($file));
		header('Location: ../login.php');
	}
?>
