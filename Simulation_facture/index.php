<?php

$client = array(
"Nom"     => "Association ForKids",
"Adresse" => "22/24 Avenue de la tourendelle",
"Ville"   => "75016 Paris",
"Mail"    => "jilbertdarah@forkids.com",
"Tel"     => "06 25 14 58 74"
);

$tab = array(
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Nounours",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 2
),
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Tagada",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 1
),
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Dragibus",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 3.99
),
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Cola Pik",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 6
),
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Croco",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 2.99
),
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Chamallows",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 7
),
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Reglisse",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 4
),
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Reglisse mini",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 2
),
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Carambar",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 5.99
),
array(
"ID"         => mt_rand(100000, 999999),
"NomProduit" => "Banane",
"Quantité"   => mt_rand(1, 10),
"Prix"       => 3
));

function ttc($ht)
{
	$ttc = $ht + ((20 / 100) * $ht);

	return($ttc);
}

$factureref = mt_rand(10000000, 99999999);
$toto = 0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Facture n°<?php echo $factureref; ?></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<div id="gauche">
		<h1>BONBONSHOP</h1>
		<ul>
			<li>56 rue du Baltimus</li>
			<li>75019 Paris</li>
			<li>Fait le <?php echo date("d/m/Y"); ?></li>
		</ul>
	</div>
	<div id="droite">
		<h2><?php echo $client["Nom"]; ?></h2>
		<ul>
			<li><?php echo $client["Adresse"]; ?></li>
			<li><?php echo $client["Ville"]; ?></li>
			<li><?php echo $client["Mail"]; ?></li>
			<li><?php echo $client["Tel"]; ?></li>
		</ul>
	</div>
	<div id="ref">
		<p>Facture ref: <b><?php echo $factureref; ?></b></p>
		<p>Détails de la commande :</p>
	</div>
</header>
<main>
	<table>
		<tr>
			<th>Référence</th>
			<th>Produit</th>
			<th>Quantité</th>
			<th>Prix unitaire HT</th>
			<th>Total HT</th>
		</tr>
		<?php

		for ($i = 0; $i < 6; $i++) //changer ce nombre si l'envie vous prend (ex: passer de 6 à 8)
		{
			echo "<tr>\n" ;
			echo "<td>".$tab[$i]["ID"]."</td>\n";
			echo "<td>".$tab[$i]["NomProduit"]."</td>\n";
			echo "<td>".$tab[$i]["Quantité"]."</td>\n";
			echo "<td>".$tab[$i]["Prix"]." €</td>\n";
			echo "<td id=\"color\">".$tab[$i]["Prix"]*$tab[$i]["Quantité"]." €</td>\n";
			echo "</tr>\n";
			$toto = $toto + $tab[$i]["Prix"]*$tab[$i]["Quantité"];
		}
	?>
	</table>
	<div>
		<div id="reglement">
			<p>Total à régler</p>
			<p><?php echo ttc($toto); ?> € TTC</p>
			<p><?php echo $toto; ?> € HT + <?php echo $toto*0.20 ?> € TVA (20 %)</p>
		</div>
		<div id="imprimer">
		<form>
  			<input id="impression" name="impression" type="button" onclick="imprimer_page()" value="IMPRIMER CETTE PAGE" />
		</form>
		</div>
	</div>
	<p>En cas de retard de paiment, le payeur s'engage à verser une indemnité forfaitaire pour frais de recouvrement due au créancier, conformément à l'article 121-ll de la loi n°2012-387 du 22 mars 2012, fixée au prix de 40€ par le décret n°2012-1115 du 2 octobre 2012.</p>
</main>
<footer>
	<div><a href="#">Statut juridique</a></div>
	<div><a href="#">ID TVA</a></div>
	<div><a href="#">Conditions generals de ventes</a></div>
	<div><a href="#">Politique de confidentialité</a></div>
</footer>

<!-- script pour l'impression -->
<script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>

</body>
</html>
