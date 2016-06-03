<?php
	if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"] || !file_exists("../private/passwd"))
	{
		header("Location: ../modif.php");
	}
	else
	{
		if (file_exists("../private/passwd"))
		{
			$file = unserialize(file_get_contents("../private/passwd"));
			if ($file[$_POST["login"]]["login"] == $_POST["login"] && $file[$_POST["login"]]["passwd"] == hash("Whirlpool", $_POST["oldpw"]))
			{
					$file[$_POST["login"]]["passwd"] = hash("Whirlpool", $_POST["newpw"]);
					file_put_contents("../private/passwd", serialize($file));
					header("Location: ../index.php");
					exit;
			}
		}
	}
	header("Location: ../modif.php");
?>
