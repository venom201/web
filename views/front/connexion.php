<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=projetweb', 'root', '');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Sign In :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../../css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../../css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="../../css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/jquery-ui.css"> 
<!-- jQuery -->
<script src="../../js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../../css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="main-wthree">
   <div class="container">
   <div class="sin-w3-agile">
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
           
         <input type="email" name="mailconnect"  id="mailconnect" placeholder="mail"/> 
         <input type="password" name="mdpconnect" id="mdpconnect" placeholder="mot de passe"/>
         <input type="submit" name="formconnect" id="formconnect" value="se connecter"/>
         </form><?php
         session_start();
           
      if(isset($_POST['formconnect']))
      {
         $mailconnect=htmlspecialchars($_POST['mailconnect']);
         $mdpconnect=sha1($_POST['mdpconnect']);
         if( !empty($mailconnect)  AND !empty($mdpconnect))
         {
               $requser = $bdd->prepare("SELECT * FROM membres WHERE mail=? AND motdepasse=?");
               $requser->execute(array($mailconnect,$mdpconnect));
               $userexist = $requser->rowCount();
               if($userexist==1)
               {
                 
                  $userinfo = $requser->fetch();
            $_SESSION['id_membre'] = $userinfo['id_membre'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location:index.php?id=".$_SESSION['id_membre']);
               }

               else
               {
                  $erreur="mauvais mail ou mot de passe";
               }
         }

         else 

         {
            $erreur="tous les champs doivent etre remplis";
         }

      }
       


     
      





         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }

         if(isset($succes))
         {
            echo'<font color="gren">' .$succes."</font>";
         }
         ?>
         <a href="inscription.php">Créer un compte</a>
      </div>
     <div class="footer">
               <p>&copy; 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
   </div>
   </div>
   </div>
</body>
</html>