

<!DOCTYPE html>
<html>
<head>
	<title>Dine a Hotels and Restaurants Category Bootstrap Responsive website Template | Gallery :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" /> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<style>
	.formu{
		position: absolute;
		left: 500px;
		top: 500px;
	}
</style>
<body >
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.php">Mimosas</a></h1>
				</div> 
				<div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle"> 
						<ul class="toggle-menu">
							<li><a href="index.html"> Home</a></li>
							<li><a href="about.html"> About</a></li> 
							<li><a href="gallery.html" class="active"> Gallery</a></li> 
							<li><a href="codes.html"> Short Codes</a></li>
							<li><a href="icons.html"> Web Icons</a></li>
							<li><a href="contact.html"> Contact Us</a></li>
						</ul>
					</div> 
				</div>   
				<div class="social-w3licon">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //header --> 
		<!-- banner-text -->
		<div class="banner-text w3labout-bnr"> 
			<div class="container">  
				<h2><a href="index.php">Accueil</a> / Menu</h2>   
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<td></td>
	<!-- //banner -->   
	<!-- gallery -->
	
					 <div class="stp" style="width: 20%;height: 10%" style="float : left">

							<a href="C:\Users\HPC.ALEXANDRE-REOUN\Desktop\front office\gallery.html" title="Dessert au chocolat" class="sb" ><img src="images/g1.jpg" alt=" " class="img-responsive" /></a>
								<p></p>  

		
	</div>
					
	
					 <div class="formu">
<form >
	<?PHP

include "../../core/promotionC.php";

$promotion1C=new PromotionC();
$listePromotions=$promotion1C->afficherPromotions();

?>
					    <table id="table">
						
						  <tr>
							<td>Pourcentage</td>
							<td>Prix</td>
							<td>Solde</td>
							
						  </tr>
						
<?PHP
foreach($listePromotions as $row){
	$prix=$row['prix'];
	$pourcentage=$row['pourcentage'];
	$solde=$prix-($prix*$pourcentage/100);


	 echo"<td>".$row['pourcentage']."</td>";
	 echo"<td>".$row['prix']."</td>";
	 echo "<td>".$solde."</td>";
	

?>
	<?PHP
	
}
?>
<table>
<h1>Ajouter Ligne</h1>

<tr></tr>
<tr>
<td>QUANTITE</td>
<td><input type="number" name="quantite" id="quantite" style="border-radius: 12px" required></td>
<td><span id="missquantite"></span></td>

</tr>
<tr>
<td></td>
<td><div class="date_btn">
	<input type="submit" name="ajouter" value="ajouter" id="bouton" style="border-radius: 12px"></div></td>
</tr>

</table>
</form>
</div>
<script >
	
	var formValid = document.getElementById('bouton');
            var id = document.getElementById('id');
            var missid = document.getElementById('missid');
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (id.validity.valueMissing){
                    event.preventDefault();
                    missid.textContent = 'ID manquant';
                    missid.style.color = 'red';
                //Si le format de données est incorrect
                }else {
                   
                    missid.textContent = 'Format incorrect';
                    missid.style.color = 'orange';
                }
            }
            
            var formValid = document.getElementById('bouton');
            var quantite = document.getElementById('quantite');
            var missquantite = document.getElementById('missquantite');
            
            formValid.addEventListener('click', validation2);
            
            function validation2(event){
                //Si le champ est vide
                if (quantite.validity.valueMissing){
                    event.preventDefault();
                    missquantite.textContent = 'quantite manquant';
                    missquantite.style.color = 'red';
                //Si le format de données est incorrect
                }else {
                    
                    missquantite.textContent = 'Format incorrect';
                    missquantite.style.color = 'orange';
                }
            }
</script>

</body>

</html>