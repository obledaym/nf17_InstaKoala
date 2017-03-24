<?php

  try{
      $db= new PDO ("pgsql:dbname='Base NF17;host='tuxa.sme.utc", "nf17p109", "0cPTGNfw") or die(print_r($db->errorInfo()));
      $db->exec("SET NAMES utf8");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
     
   catch(Exeption $e){
      die("Erreur!".$e->getMessage());
   }
?>
 
