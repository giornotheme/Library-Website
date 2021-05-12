<?php session_start();?>

<?php include("verif.php");?>
<?php include("already_connected.php");?>
<?php include("menu.php");?>
<?php include("connexion_bdd.php");?>
<?php include("function_Basket.php") ?>

<?php

$reponse = $bdd->query("SELECT *
                        FROM information LEFT JOIN author ON author_ID=ID_author
                        WHERE author_ID=ID_author");
?>

<table>
  <div class="tableau">
  <tr>
    <td>AUTHOR</td>
    <td>TITLE</td>
    <td>SYNOPSIS</td>
    <td>PRICE</td>
    <td>ISBN</td>
    <td>QUANTITY</td>
  </tr>
<?php

while($donnees = $reponse->fetch())
{
  if ($donnees==true)
  {
    ?>

        <tr>
          <td><?php echo $donnees['author'];?></td>
          <td><?php echo $donnees['title'];?></td>
          <td><?php echo  $donnees['synopsis'];?></td>
          <td><?php echo  $donnees['prix'];?></td>
          <td><?php echo  $donnees['ISBN'];?></td>
          <td>
          <form method="post">
          <input name="quant" type="number">
          <input type="hidden" name="ISBN" value="<?php echo $donnees['ISBN'] ?>">
          <input name="submit" type="submit" value="ADD">
          </form>
          </td>
        </tr>

    <?php
  }

  else{
    ?>
    <p> <?php echo "The book you are looking for doesn't exist" ?> </p>
    <?php
  }
}
?>

</div>
</table>

<?php
$reponse->closeCursor();

//include("tab_author.php")
?>
<?php
  if(isset($_POST['submit'])){



    $rep = $bdd->query('SELECT * FROM information WHERE ISBN="'.$_POST['ISBN'].'"');
    $data = $rep->fetch();
    AddBook($data['title'],$_POST['quant'],$data['prix']);



  }
 ?>
</body>
