#!/usr/bin/php
<?php
	if (!file_exists("shop"))
		mkdir("shop");
	if (!file_exists("shop/content"))
	{
		file_put_contents("shop/content", 'a:10:{s:5:"Jchen";a:5:{s:5:"title";s:5:"Jchen";s:4:"desc";s:24:"Jean-Christophe niveau 5";s:5:"price";s:4:"0,80";s:3:"img";s:44:"https://cdn.intra.42.fr/userprofil/jchen.jpg";s:3:"cat";a:3:{i:0;s:2:"e1";i:1;s:5:"homme";i:2;s:9:"asiatique";}}s:7:"Cdrouet";a:5:{s:5:"title";s:7:"Cdrouet";s:4:"desc";s:15:"Corentin Drouet";s:5:"price";s:3:"120";s:3:"img";s:46:"https://cdn.intra.42.fr/userprofil/cdrouet.jpg";s:3:"cat";a:3:{i:0;s:2:"e3";i:1;s:5:"homme";i:2;s:9:"caucasien";}}s:8:"Aleblanc";a:5:{s:5:"title";s:8:"Aleblanc";s:4:"desc";s:15:"Antoine Leblanc";s:5:"price";s:7:"9000000";s:3:"img";s:47:"https://cdn.intra.42.fr/userprofil/aleblanc.jpg";s:3:"cat";a:4:{i:0;s:2:"e3";i:1;s:5:"homme";i:2;s:9:"caucasien";i:3;s:2:"BG";}}s:6:"Cbaldy";a:5:{s:5:"title";s:6:"Cbaldy";s:4:"desc";s:16:"Christophe Baldy";s:5:"price";s:3:"700";s:3:"img";s:45:"https://cdn.intra.42.fr/userprofil/cbaldy.jpg";s:3:"cat";a:3:{i:0;s:2:"e3";i:1;s:5:"homme";i:2;s:9:"caucasien";}}s:8:"Udelorme";a:5:{s:5:"title";s:8:"Udelorme";s:4:"desc";s:11:"Ugo Delorme";s:5:"price";s:3:"500";s:3:"img";s:47:"https://cdn.intra.42.fr/userprofil/udelorme.jpg";s:3:"cat";a:3:{i:0;s:2:"e3";i:1;s:5:"homme";i:2;s:9:"caucasien";}}s:6:"Rluder";a:5:{s:5:"title";s:6:"Rluder";s:4:"desc";s:25:"Remi Luder Personne agée";s:5:"price";s:4:"1,30";s:3:"img";s:45:"https://cdn.intra.42.fr/userprofil/rluder.jpg";s:3:"cat";a:4:{i:0;s:2:"e1";i:1;s:5:"homme";i:2;s:9:"caucasien";i:3;s:5:"vieux";}}s:6:"Dboudy";a:5:{s:5:"title";s:6:"Dboudy";s:4:"desc";s:11:"Diana Boudy";s:5:"price";s:4:"5000";s:3:"img";s:45:"https://cdn.intra.42.fr/userprofil/dboudy.jpg";s:3:"cat";a:3:{i:0;s:2:"e3";i:1;s:5:"femme";i:2;s:9:"caucasien";}}s:8:"Fpasquer";a:5:{s:5:"title";s:8:"Fpasquer";s:4:"desc";s:19:"Florian Pasquerreau";s:5:"price";s:5:"19,99";s:3:"img";s:47:"https://cdn.intra.42.fr/userprofil/fpasquer.jpg";s:3:"cat";a:2:{i:0;s:2:"e1";i:1;s:5:"homme";}}s:6:"Laurie";a:5:{s:5:"title";s:6:"Laurie";s:4:"desc";s:12:"Laurie STAFF";s:5:"price";s:4:"1001";s:3:"img";s:45:"https://cdn.intra.42.fr/userprofil/laurie.jpg";s:3:"cat";a:3:{i:0;s:5:"bocal";i:1;s:5:"femme";i:2;s:9:"caucasien";}}s:8:"Amaindro";a:5:{s:5:"title";s:8:"Amaindro";s:4:"desc";s:15:"Arnaud Maindron";s:5:"price";s:14:"99999999999999";s:3:"img";s:47:"https://cdn.intra.42.fr/userprofil/amaindro.jpg";s:3:"cat";a:4:{i:0;s:2:"e1";i:1;s:11:"homme-viril";i:2;s:8:"prophete";i:3;s:9:"caucasien";}}}');
	}
	if (!file_exists("private"))
		mkdir("private");
	if (!file_exists("private/passwd"))
	{
		file_put_contents("private/passwd", 'a:2:{s:5:"admin";a:2:{s:5:"login";s:5:"admin";s:6:"passwd";s:128:"6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94";}s:7:"antoine";a:2:{s:5:"login";s:7:"antoine";s:6:"passwd";s:128:"0551539a10837302f19a57160fe1fe2d6e259cb1ed1ea05b06b9ecd7e2185854e42c6047a85a2248c21f18ae9e20e0a73c1c23d0b0e33427088b2ba5dbdad053";}}');
	}
?>