<?php
function get_panier_huge()
{
	session_start();
	if (empty(unserialize($_SESSION['panier'])))
		echo "<p class='center'>Votre panier est vide</p>";
	else
	{
		$panier = unserialize($_SESSION['panier']);
		$file = unserialize(file_get_contents("shop/content"));
		foreach ($panier as $art)
		{
			$toto = $toto + $file[$art['title']]['price'] * $art['nb'];
			echo "<div class='panier'>";
			echo "<p>".$file[$art['title']]['title']."</p><img class='panpics' src='".$file[$art['title']]['img']."'></img>";
			echo "<p>Prix ".$art['nb']." x ".$file[$art['title']]['price']." = ".$file[$art['title']]['price'] * $art['nb']."€</p>";
			echo "<p>Quatité : <form action='fonction/modif_panier.php' method='post'><input type='hidden' name='title' value='".$art['title']."'><input type='number' min='1' value='".$art['nb']."' name='nb'><input type='submit' name='submit' value='Modifier'></form>";
			echo "<form action='fonction/delete_art.php' method='post'><input type='hidden' name='title' value='".$art['title']."'><input type='submit' name='submit' value='Supprimer'></form>";
			echo "</p>";
			echo "</div>";

		}
		echo "<div class='panier'>";
		echo "<p>Total : ".$toto."€</p>";
		echo "<form action='fonction/checkout.php' method='post'><input type='submit' name='submit' value='Passer la commande'></form>";
		echo "</div>";
	}
}
?>
