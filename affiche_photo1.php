<?php session_start();
include('db.php');
$_SESSION['pseudo']="aposteur";
$_GET['photo']="1";
/*$req1 = $db->query('SELECT (likes) FROM likes WHERE (pseudo="' . $_SESSION['pseudo'] . '" and id_object="' . $_GET['photo'] . '")');
$like_photo=$req1->fetch();*/
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<center><table ><tr><td> <img src="https://media.koreus.com/201405/91-insolite-13.jpg" style="max-width: 15em;" alt=""></td></tr>
<tr><td><!--<form method="post" action="t_photo.php">
<input type="hidden" value="like" name="type">
<input name="like" type="radio" value="like" checked="<?php if($like_photo['likes']==1) echo 'checked';?>"  >Like
  <input name="like" type="radio" value="dislike" checked="<?php if($like_photo['likes']==-1) echo 'checked';?>">Dislike
 <input name="like" type="radio" value="nothing" >Nothing
   <input type="hidden" value="<?php echo $_GET['photo']; ?>" name="id_object">
<input type="submit" value="Valider">
</form>!--></td></tr>
<tr><td><textarea name="com" form="commentaire"></textarea></td><td><form method="post" action="t_photo.php" id="commentaire">
<input type="hidden" value="com" name="type">
   <input type="submit" value="Ajouter un commentaire"><input type="hidden" value="<?php echo $_GET['photo']; ?>" name="id_object"></form>
</td></tr><tr><td><h2>Commentaires</h2></td></tr>
<?php $req = $db->query('SELECT (pseudo,contenu) FROM commentaire where (id_photo="'.$_GET['photo'].'")'); 

while($com= $req->fetch())
{	echo ' <tr><td> ';
	echo $com['pseudo'];
	echo '<br>';
	 echo $com['contenu'];
	echo '</td></tr>';
}
?></table></center>
</body>
</html>
