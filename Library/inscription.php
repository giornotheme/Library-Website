<!DOCTYPE html>
<html>
  <head>
    <title>
      Page d'accueil
    </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
  </head>

  <body>
    <form method = "POST" action ="" name="urmail" class="form">
      <table >
        <br>
      <p> <a href="connexion.php" class="bouton_Valider" style="text-decoration:none"> Connexion </a><br><br><br>
      Nickname : <input name="Nickname" id="nickname" type="text"  onkeyup="remplir()" maxlength="100" required ><br>
      Mail :<input name="mail" id="mail" type="mail" size="50" pattern=".+@+.+.net" placeholder="adresse@gmail.net" onkeyup="remplir()" maxlength="100" required><br>
      Password: <input name="mdp" id="mdp" type="password" onkeyup="remplir()"  maxlength="100" required><br>
      Repeat your password: <input name="cmdp" id="cmdp" onkeyup="remplir()" type="password"  maxlength="100" required><br><br>
      <input class= "bouton_Valider" type="submit"name="inscription" value="Valider"/></p>
    </table>

    </form>
        <?php
        if(isset($_POST["inscription"]))
        {
          if(!empty($_POST["mail"]) AND !empty($_POST['mdp']) AND  $_POST['mdp']  == $_POST['cmdp'] AND !empty($_POST['cmdp']) AND !empty($_POST['Nickname']) )
          {

            $mdp = sha1($_POST['mdp']);
            $nickname = htmlspecialchars($_POST['Nickname']);
            $mail = htmlspecialchars($_POST['mail']);

            include("connexion_bdd.php");
            $req = $bdd->prepare('INSERT INTO membre ( username, mail, password) VALUES(:nickname, :mail, :password)');
            $req->bindValue(':nickname', $nickname, PDO::PARAM_STR);
            $req->bindValue(':password', $mdp, PDO::PARAM_STR);
            $req->bindValue(':mail', $mail, PDO::PARAM_STR);
            //printf($prenom);
            $req->execute();
            //header('Location: connexion.php');

          }
          else {
            echo "Vous avez oublié un truc ou deux";
          }

        }

         ?>

  </body>
    </html>
