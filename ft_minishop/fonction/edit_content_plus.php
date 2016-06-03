<?php
	function get_desc($title)
	{
		$file = unserialize(file_get_contents("shop/content"));
		echo ($file[$title]["desc"]);
	}
	function get_price($title)
	{
		$file = unserialize(file_get_contents("shop/content"));
		echo ($file[$title]["price"]);
	}
	function get_img($title)
	{
		$file = unserialize(file_get_contents("shop/content"));
		echo ($file[$title]["img"]);
	}
	function get_cat($title)
	{
		$file = unserialize(file_get_contents("shop/content"));
		echo (implode(" ", $file[$title]["cat"]));
	}
?>
