<?php session_start();
include('db.php');

if ($_POST['type']=="like") {
$req=$db->query('SELECT COUNT(*) as nb FROM likes WHERE (pseudo="'.$_SESSION['pseudo'].'" and id_object = "'.$_POST['id_object'].'")');
$res=$req->fetch();
if ($res['nb']>0){
	if ($_POST['like']=="like"){
	 $db->query('INSERT INTO likes VALUES ('.$_POST['id_object']. ','.$_SESSION['pseudo'].',1)');
	}
	if ($_POST['like']=="dislike"){
	 $db->query('INSERT INTO likes VALUES ('.$_POST['id_object']. ','.$_SESSION['pseudo'].',-1)');
	}
}
else if ($res['nb']==0){
	if ($_POST['like']=="like"){
	 $db->query('UPDATE likes SET likes = 1 WHERE (pseudo='.$_SESSION['pseudo'].' and id_object = ' .$_POST['id_object']. ')');
	}
	if ($_POST['like']=="dislike"){
	 $db->query('UPDATE likes SET likes = -1 WHERE (pseudo='.$_SESSION['pseudo'].' and id_object = ' .$_POST['id_object']. ')');}
if ($_POST['like']=="nothing"){
	 $db->query('DELETE FROM likes WHERE (pseudo='.$_SESSION['pseudo'].' and id_object = ' .$_POST['id_object']. ')');
	}
	}     
}
else if ($_POST['type']=="com"){
$db->query('INSERT INTO likable_object (pseudo) VALUES ("'.$_SESSION['pseudo'].'")');
$req=$db->query('SELECT (id_object) FROM likable_object WHERE (id_object = (SELECT (MAX(id_object)) FROM likable_object) and (pseudo = "'.$_SESSION['pseudo'].'"))'); 
$id=$req->fetch();
$db->query('INSERT INTO commentaire  VALUES ('.$id['id_object'].',' .$_POST['id_object']. ','.$_SESSION['pseudo'].','.$_POST['com'].')');
	}  ?>
