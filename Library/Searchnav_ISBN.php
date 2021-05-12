<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<script type="text/javascript" src="script.js"></script>
	<title>Search</title>
</head>

<h1 class="titre_page">SEARCH BY...</h1>

<div class="conteneur_search">
<div class="search_by">
  <button class="choix" onclick="window.location.href='Search_author.php';" type="button" id="bout_author"> Author </button>
  <button class="choix" onclick="window.location.href='Search_Title.php';" type="button" id="bout_title"> Title </button>
  <button class="choix" onclick="window.location.href='Search_ISBN.php';" type="button" id="bout_ISBN"> ISBN </button>
</div>

<div id="search_ISBN">
  <form method="post" action="Information_ISBN.php">
  <p>
      <label>ISBN</label> : <input type="text" name="ISBN_num" /><br /><input type="submit" value="Confirm"/>
  </p>
  </form>
</div>

</div>
