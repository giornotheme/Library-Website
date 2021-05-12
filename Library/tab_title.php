<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM information ORDER BY title');
  ?>

<div class="tableau">
  <table>
    <tr>
      <th>Title</th>
    </tr>
  </table>

<?php while ($donnees = $reponse->fetch())
{
  ?>
  <table>
    <tr>
      <td><?php echo $donnees['title']; ?></td>
    </tr>
  </table>
 </div>
  <?php
}

$reponse->closeCursor();
?>
