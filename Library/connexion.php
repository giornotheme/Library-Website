<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Connexion
    </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <form method = "POST" action ="" name="urmail" class="form">
      <table >
      <p> <a href="inscription.php" class="bouton_Valider" style="text-decoration:none"> Inscription </a><br><br><br>


      Mail : <input name="mail" id="mail" type=" email"  maxlength="100" required ><br>
      Mot de passe: <input name="mdp" id="mdp" type="password"  maxlength="100" required><br>

      <input class= "bouton_Valider" type="submit"name="inscription" value="Valider"/>
      </p>
    </table>
    </form>
    <?php


      if(isset($_SESSION['id'])){
        header("Location: Home page.php");
        exit;
      }

      if(isset($_POST['inscription'])){
        if(!empty($_POST['mail']) AND !empty($_POST['mdp'])){
          include("connexion_bdd.php");
          $mail=htmlspecialchars($_POST['mail']);
          $mdp=sha1($_POST['mdp']);
          $sql = "SELECT * FROM membre WHERE mail ='$mail'";
          $req = $bdd->query($sql) or die ("Erreur sql");
          $data = $req->fetch();
          if (!empty($data['mail'])) {

            if ($data['password'] == $mdp) {
              $_SESSION['mail']=$_POST['mail'];
              $_SESSION['id']=$data['id'];
              $_SESSION['Nickname']=$data['username'];

              header("Location: Home page.php");
            }else{
              ?>
            <p class="mdp_incorrect">Mot de passe incorrect</p><?php
          }
          }else{
            ?>
          <p class="mdp_incorrect">Mail incorrect</p><?php
        }
        }else{
          ?>
          <p class="mdp_incorrect">Il vous manque 1 truc ou 2</p><?php        }

      }
     ?>

      </body>

    </html>
