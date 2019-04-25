<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=projetweb', 'root', '');

if(isset($_POST['forminscription']) )
{
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
   {

      $pseudo=htmlspecialchars($_POST['pseudo']);
      $mail=htmlspecialchars($_POST['mail']);
      $mail2=htmlspecialchars($_POST['mail2']);
      $mdp=sha1($_POST['mdp']);
      $mdp2=sha1($_POST['mdp2']);


      if($mail==$mail2)
      {  
           if(filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist==0)
                {


                      if($mdp==$mdp2)


                      {
                        
                             $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                             $insertmbr->execute(array($pseudo, $mail, $mdp));
                            $succes="votre compte a été bien crée"  ;
                      }

                        else 

                        {
                           $erreur="les mots de passe ne correspondent pas";
                        }


                  }
                  else 
                  {
                     $erreur="mail déja utilisé";
                  }
            }

            else { $erreur="erreur syntax mail";}

         }

           else 

      {
         $erreur="les mails ne correspondent pas";
      }

 
        
      
    




   }

   else 

   {


      $erreur="veuillez remplir tous les champs";
   }
}

?> 
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Sign Up :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="../css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="../js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="main-wthree">
   <div class="container">
   <div class="sin-w3-agile">
      <div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="pseudo">Nom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" value="<?php if(isset($mdp)) { echo $mdp; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" value="<?php if(isset($mdp2)) { echo $mdp2; } ?>" />
                  </td>
               </tr>
               <div class="password-agileits">
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" class="login" value="je m'inscris" />
                  </td>
               </tr>
            </div>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }

         if(isset($succes))
         {
            echo'<font color="gren">' .$succes."</font>";
         }
         ?>
      </div>
     <div class="footer">
               <p>&copy; 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
   </div>
   </div>
   </div>
</body>
</html>