<?php
include("db.php");
//Creation table user
$user = $db->prepare("CREATE TABLE user(
  pseudonyme character varying(340) NOT NULL,
  nom character varying(30) NOT NULL,
  prenom character varying(30),
  email character varying(340) NOT NULL,
  dateofbirth date NOT NULL,
  sex character(1) NOT NULL,
  titre_profil character varying(500) NOT NULL,
  type_profil character varying(10) NOT NULL,
  CONSTRAINT key PRIMARY KEY (pseudonyme))");
$user->execute();

//Creation table Friend
$friend = $db->prepare("");
$friend->execute();

//Creation table DemandeAmi
$DemandeAmi = $db->prepare("");
$DemandeAmi->execute();

//Creation table Pays

$pays = $db->prepare("CREATE TABLE pays(nom character varying(100))");
$pays->execute();

//Creation table Photo
$photo = $db->prepare("");
$photo->execute();

//Creation table Album
$album = $db->prepare("");
$album->execute();

//Creation table Commentaire
$commentaire = $db->prepare("");
$commentaire->execute();

//Creation table Tag

$tag = $db->prepare("");
$tag->execute();

//Creation table Rel_Com_Tag
$Rel_Com_Tag = $db->prepare("");
$Rel_Com_Tag->execute();

//Creation table Likeable_object

$likeable_object = $db->prepare("CREATE TABLE likeable_object(Proprietaire character varying(100))");
$likeable_object->execute();

//Creation table Like
$like = $db->prepare("");
$like->execute();


?>
