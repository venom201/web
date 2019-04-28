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
<link href="../views/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../views/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../views/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="../views/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../views/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../views/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="../views/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="../views/css/basictable.css" />
<script type="text/javascript" src="../views/js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->


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
                <li class="breadcrumb-item"><i class="fa fa-angle-right"></i> Affichage</li>
            </ol>
		<!--grid-->
		
 		<?PHP
include "C:\wamp64\www\Livraison\core\LivraisonC.php";
$livraison1C=new LivraisonC();
$listelivraisons=$livraison1C->afficherLivraisons();

//var_dump($listeLivreurs->fetchAll());
?>

					<div class="w3l-table-info">
 	
 		<h2>Affichage des Livraisons:</h2>
<table id="table">
<thead>
<tr>
<th>Nom</th>
<th >Prénom</th>
<th >Numéro de téléphone</th>
<th >Adresse</th>
<th >Code Postal</th>
<th >Supprimer</th>
<th >Modifier</th>
</tr>
<thead>
</div>
<?PHP
foreach($listelivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['num_tel']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['codepos']; ?></td>
	<td><form method="POST" action="supprimerLivraison.php">
	<input type="submit" name="Supprimer" value="SUPPRIMER">
	<input type="hidden" value="<?PHP echo $row['num_tel']; ?>" name="num_tel">
	</form>
	</td>
	<td><a href="modifierLivraison.php?num_tel=<?PHP echo $row['num_tel']; ?>">MODIFIER</a></td>
	</tr>
	<?PHP
}
?>
</table>
 
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">VENOM</a> </p>
</div>	
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
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>