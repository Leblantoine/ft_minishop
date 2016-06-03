<?php

function check_cat($get, $file)
{
	foreach($file as $art)
	{
		foreach ($art['cat'] as $cat)
		{
			if ($cat == $get['cat'])
				return TRUE;
		}
	}
	return FALSE;
}

function get_vitrine($get)
{

if (file_exists("shop/content"))
{
	$file = unserialize(file_get_contents("shop/content"));
}
if (!empty($file))
{
	if (!$get['cat'] || !check_cat($get, $file))
	{
		foreach($file as $art)
		{
			echo "<div class='art'>";
			echo "<h2>".$art['title']."</h2><img class='pics' src='".$art['img']."'></img>";
			echo "<p>".$art['desc']."</p>";
			echo "<p>Prix ".$art['price']."€</p>";
			echo "<p>Quatité : <form action='fonction/panier.php' method='post'><input type='hidden' name='title' value='".$art['title']."'><input type='number' min='1' max='10' value='1' name='nb'><input type='submit' name='submit' value='Ajouter au panier'></form></p>";
			echo "<p>Categorie :";
			foreach($art['cat'] as $cat)
			{
				echo "<a href=index.php?cat=".$cat.">".$cat."</a> ";
			}
			echo "</p>";
			echo "</div>";
		}
	}
	else
	{
		foreach($file as $art)
		{
			foreach ($art['cat'] as $cat)
			{
				if ($cat == $get['cat'])
				{
					echo "<div class='art'>";
					echo "<h2>".$art['title']."</h2><img class='pics' src='".$art['img']."'></img>";
					echo "<p>".$art['desc']."</p>";
					echo "<p>Prix ".$art['price']."€</p>";
					echo "<p>Quatité : <form action='fonction/panier.php' method='post'><input type='hidden' name='title' value='".$art['title']."'><input type='number' min='1' max='10' value='1' name='nb'><input type='submit' name='submit' value='Ajouter au panier'></form></p>";
					echo "<p>Categorie :";
					foreach($art['cat'] as $cat)
					{
						echo "<a href=index.php?cat=".$cat.">".$cat."</a> ";
					}
					echo "</p>";
					echo "</div>";
				}
			}
		}
	}
}
else
	echo "<h1 class='center'>La boutique est vide</h1>";
}
?>
