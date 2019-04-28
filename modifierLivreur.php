<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Les Mimosas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.html">ADMIN</a></h1>
							</div>
					
						 
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-angle-right"></i> Modification</li>
            </ol>
		<!--grid-->
<?php
include "../entities/Livreur.php";
include "../core/LivreurC.php";
if (isset($_GET['num_tel'])){
	$livreurC=new LivreurC();
    $result=$livreurC->recupererLivreur($_GET['num_tel']);
	foreach($result as $row){
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$num_tel=$row['num_tel'];
		$etat=$row['etat'];
		$charge=$row['charge'];
?>
<form method="POST">
 	<div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">Modifier livreur:</h2>
 
 			<div class="form-group">
    <label for="exampleInputNom">Nom</label>
    <input name="nom" type="text" class="form-control" value="<?PHP echo $nom ?>">
  </div>
  		<div class="form-group">
    <label for="exampleInputPrénom">Prénom</label>
    <input name="prenom" type="text" class="form-control" value="<?PHP echo $prenom ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Numéro de téléphone</label>
    <input required="" name="num_tel" type="number" class="form-control" value="<?PHP echo $num_tel ?>">
  </div>

  <div class="form-group">
									<label class="col-sm-2 control-label">Etat</label>
									<div class="col-sm-8">
										<select name="etat" multiple="" class="form-control1" >
											
											<option value="Disponible">Disponible</option>
											<option value="Indisponible">Indisponible</option>
											<option value="<?PHP echo $etat ?>">Etat précéndant: <?PHP echo $etat ?></option>
										</select>
									</div>
								</div>
								
								
	 <div class="form-group">
    <label for="exampleInput">Charge</label>
    <input name="charge" type="text" class="form-control" value="<?PHP echo $charge ?>">
  </div>
  
 
 <input type="submit" name="modifier" value="modifier">
 <div>
<input type="hidden" name="num_tel_ini" value="<?PHP echo $_GET['num_tel'];?>"></div>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new Livreur($_POST['nom'],$_POST['prenom'],$_POST['num_tel'],$_POST['etat'],$_POST['charge']);
	$livreurC->modifierLivreur($livreur,$_POST['num_tel_ini']);
	echo $_POST['num_tel_ini'];
	header('Location: afficherLivreur.php');
}
?>
</div>
<!----->


<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Acceuil</span><div class="clearfix"></div></a></li>
										
							        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Livreurs</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-boletim" ><a href="ajoutLivreur.html">Ajout</a></li>
											<li id="menu-academico-avaliacoes" ><a href="afficherLivreur.php">Affichage</a></li>
											<li id="menu-academico-avaliacoes" ><a href="modifierLivreur.php">Modification</a></li>
											

										  </ul>
									 </li>
									  <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Livraisons</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-boletim" ><a href="ajoutLivraison.html">Ajout</a></li>
											<li id="menu-academico-avaliacoes" ><a href="afficherLivraison.php">Affichage</a></li>
											<li id="menu-academico-avaliacoes" ><a href="modifierLivraison.php">Modification</a></li>	
									
								  </ul>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="css_js/template_back/js/jquery.nicescroll.js"></script>
<script src="css_js/template_back/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="css_js/template_back/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>