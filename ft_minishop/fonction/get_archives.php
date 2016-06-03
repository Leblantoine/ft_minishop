<?php
function get_archives()
{
	session_start();
	if (file_exists('shop/archive'))
	{
		$file = unserialize(file_get_contents("shop/archive"));
		$content = unserialize(file_get_contents("shop/content"));
		$user = $file[$_SESSION['loggued_on_user']];
		$i = 0;
		foreach ($user as $commande)
		{
			$i = $i + 1;
			echo "<h2>Commade ".$i."</h2>";
			foreach ($commande as $art)
			{
				echo "<div class='panier'>";
				echo "<p>".$art['title']." x ".$art['nb']."</p><img class='panpics' src='".$content[$art['title']]['img']."'></img>";
				echo "</p>";
				echo "</div>";
			}
		}
	}
	else
	{
		echo "<h2 class='center'>Vous n'avez passé aucune commande</h2>";
	}
}
?>
