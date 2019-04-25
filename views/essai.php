<?PHP
include "../entities/promotion.php";
include "../core/promotionC.php";

$promotion1C=new PromotionC();
$listePromotions=$promotion1C->afficherPromotions();



//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Nom</td>
<td>date debut</td>
<td>date fin</td>
<td>pourcentage</td>
<td>prix</td>
<td>Solde</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listePromotions as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['debut']; ?></td>
	<td><?PHP echo $row['fin']; ?></td>
	<td><?PHP echo $row['pourcentage']; ?></td>
	<td><?PHP echo $row['prix'];  ?></td>
	<td><?PHP  
	 $promotion1C->calculerSolde($promotionC);   
	echo 'solde';          ?></td>
	<td><?PHP echo $row['solde'];?></td>
	
	<td><form method="POST" action="supprimerPromotion.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">

	</form>
	</td>
	<td><a href="modifierpromotion.php?id=<?PHP echo $row['id']; ?>">
		<input type="submit" name="modifier" value="modifier"></a></td>
	
	</tr>
	<?PHP
	
}
?>

</table>
