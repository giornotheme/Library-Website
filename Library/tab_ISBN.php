<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM information ORDER BY ISBN');
  ?>

<div class="tableau" id="tab">
  <table>
    <tr>
      <th id="th">ISBN</th>
    </tr>
  </table>

<?php while ($donnees = $reponse->fetch())
{
  ?>
  <table id="table">
    <tr>
      <td id = "td"><?php echo $donnees['ISBN']; ?></td>
    </tr>
  </table>
 </div>
  <?php
}

$reponse->closeCursor();
?>
