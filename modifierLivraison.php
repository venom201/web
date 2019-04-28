<!DOCTYPE html>
<html lang="en">
<head>
<title>Les Mimosas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="../css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="../js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<script src="connexion.js"></script>
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html">Les Mimosas</a></h1>
				</div> 
				<div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle"> 
						<ul class="toggle-menu">
							<li><a href="index.html"> Home</a></li>
							<li><a href="about.html"> About</a></li> 
							<li><a href="gallery.html"> Gallery</a></li> 
							<li><a href="codes.html"> Short Codes</a></li>
							<li><a href="icons.html"> Web Icons</a></li>
							<li><a href="contact.html" class="active"> Contact Us</a></li>
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
				<h2><a href="index.html"></a>Recevez votre commande à domicile!</h2>   
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- //banner -->   
		<!-- contact -->
	<div class="contact">
		<div class="container">  
			<div class="w3ls-title"> 
				<h3 class="agileits-title">FINALISATION DE LA COMMANDE</h3>
			</div>
			<div class="contact-row agileits-w3layouts new-agileinfo">   
				<div class="col-md-6 col-sm-6 contact-w3lsleft">
					<div class="contact-grid agileits">
						<h4>Entrez vos coordonnées: </h4>
						<?php
include "../entities/Livraison.php";
include "../core/LivraisonC.php";
if (isset($_GET['num_tel'])){
	$livraisonC=new LivraisonC();
    $result=$livraisonC->recupererLivraison($_GET['num_tel']);
	foreach($result as $row){
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$num_tel=$row['num_tel'];
		$adresse=$row['adresse'];
		$codepos=$row['codepos'];
?>
							<form method="POST"> 
							<input type="text" name="nom" placeholder="Nom" required="" value="<?PHP echo $nom ?>">
							<input type="text" name="prenom" placeholder="Prénom" required="" value="<?PHP echo $prenom ?>">
							<input type="number" name="num_tel" min="20000000" max="99999999" placeholder="+216 XX XXX XXX" required="" value="<?PHP echo $num_tel ?>">
							<textarea type="text" name="adresse" placeholder="Entrez votre adresse s'il vous plaît.." required="" value="<?PHP echo $adresse ?>"></textarea>
							<input type="number" name="codepos" min="1000" max="9999" placeholder="Code Postal" required="" value="<?PHP echo $codepos ?>">
							<input type="submit" name="modifier" value="Modifier">
							<div>
							<input type="hidden" name="num_tel_ini" value="<?PHP echo $_GET['num_tel'];?>"></div>
						</form> 
						<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison=new Livraison($_POST['nom'],$_POST['prenom'],$_POST['num_tel'],$_POST['adresse'],$_POST['codepos']);
	$livraisonC->modifierLivraison($livraison,$_POST['num_tel_ini']);
	echo $_POST['num_tel_ini'];
	header('Location: afficherLivraison.php');
}
?>
					</div>
				</div>
				<div class="contact-row agileits-w3layouts new-agileinfo">
				<div class="col-md-6 col-sm-6 contact-w3lsleft">
					<a href="../images/localisation.png" class="sb" title="Localisation">
						<figure>
							<img src="../images/localisation.png" alt=" " class="img-responsive" />
						</figure>
					</a>
				</div></div>
		</div>	

	<div class="clearfix"> </div>
	</div>
	<!-- //contact -->  
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-5 col-sm-5 agileinfo_footer_grid">
				<h3 class="agileits-title">A Propos</h3>
				<p>Les Mimosas est un restaurant familial où on vous invite pour déguster les meilleurs plats purement tunisiens. Et on vous offre aussi des FAST FOOD. </span></p>
			</div>

			<div class="col-md-4 col-sm-4 agileinfo_footer_grid">
				<h3 class="agileits-title">Addresse</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>31, Rue Mimosas, Nouvelle Ariana</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="lesmimosasresto@outlook.com">lesmimosasresto@outlook.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +216 22 181 743</li>
				</ul>
			</div> 
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2019 Les Mimosas. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">VENOM</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img src="images/g2.jpg" class="img-responsive" alt=""/>
					<div class="modal-w3lstext">
						<h4>Les Mimosas</h4>
						<p>Les Mimosas</p>
					</div> 
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about -->    
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script> 
	<!-- //menu-js -->
	<!-- jarallax -->  
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax --> 
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  		
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>