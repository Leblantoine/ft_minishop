<?php
	function auth($login, $passwd)
	{
		if (file_exists("../private/passwd"))
		{
			$file = unserialize(file_get_contents("../private/passwd"));
			if ($file[$login]["login"] == $login && $file[$login]["passwd"] == hash("Whirlpool" ,$passwd))
				return (true);
		}
		return (false);
	}
?>
