<?php session_start();?>
<?php include("verif.php");?>
<?php include("already_connected.php");?>
<?php include("menu.php");?>
<?php include("Searchnav_author.php");?>

<?php include("connexion_bdd.php");?>

<?php
$author_name=$_POST['author_name'];

//$reponse = $bdd->query("SELECT ISBN FROM information WHERE ISBN='$ISBN_num'");
$reponse = $bdd->query("SELECT title, author, synopsis, prix, ISBN
                        FROM information LEFT JOIN author ON author_ID=ID_author
                        WHERE author='$author_name' AND author_ID=ID_author");

while($donnees = $reponse->fetch())
{
if ($donnees==true)
{
?>
<p>
<br />
Author : <?php echo $donnees['author'];?><br />
Title : <?php echo $donnees['title'];?><br />
Sysnopsis : <?php echo $donnees['synopsis'];?><br />
Price : <?php echo $donnees['prix'];?><br />
ISBN : <?php echo $donnees['ISBN'];?><br />
</a> </p>
<?php
}

else{
?>
  <p> <?php echo "The book you are looking for doesn't exist" ?> </p>
<?php
}
}
$reponse->closeCursor();

//include("tab_author.php")
?>
