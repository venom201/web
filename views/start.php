<?PHP
include "../entities/promotion.php";
include "../core/promotionC.php";
$promotion=new Promotion(75757575,'BEN Ahmed',12,30,20,20,100);
$promotionrC=new PromotionC();
$promotionrC->afficherPromotion($promotion);
echo "****************";
echo "<br>";
echo "id:".$promotion->getId();
echo "<br>";
echo "nom:".$promotion->getNom();
echo "<br>";
echo "debut:".$promotion->getDebut();
echo "<br>";
echo "fin:".$promotion->getFin();
echo "<br>";
echo "pourcentage:".$promotion->getPourcentage();
echo "<br>";
echo "prix:".$promotion->getPrix();
echo "<br>";
echo "le salaire est : ";
$promotionrC->calculerSolde($promotion); 
echo "<br>";


?>