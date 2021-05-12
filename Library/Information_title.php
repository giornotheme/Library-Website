<?php session_start();?>
<?php include("verif.php");?>
<?php include("already_connected.php");?>
<?php include("menu.php");?>
<?php include("Searchnav_title.php");?>

<?php include("connexion_bdd.php");?>

<?php
$title_name=$_POST['title_name'];

$reponse = $bdd->query("SELECT title, author, synopsis, prix, ISBN
                        FROM information LEFT JOIN author ON author_ID=ID_author
                        WHERE title='$title_name' AND author_ID=ID_author");

$donnees = $reponse->fetch();

if ($donnees==true)
{
?>

<p>
Author : <?php echo $donnees['author'];?><br />
Title : <?php echo $donnees['title'];?><br />
Sysnopsis : <?php echo $donnees['synopsis'];?><br />
Price : <?php echo $donnees['prix'];?><br />
ISBN : <?php echo $donnees['ISBN'];
 ?>
</a> </p>
<?php
}
else{
?>
  <p> <?php echo "The book you are looking for doesn't exist" ?> </p>
<?php

}
//include("tab_title.php");
?>
