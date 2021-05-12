<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM author ORDER BY author');
  ?>

<div class="tableau">
  <table>
    <tr>
      <th>Author</th>
    </tr>
  </table>

<?php while ($donnees = $reponse->fetch())
{
  ?>
  <table>
    <tr>
      <td><?php echo $donnees['author']; ?></td>
    </tr>
  </table>
 </div>
  <?php
}

$reponse->closeCursor();
?>
