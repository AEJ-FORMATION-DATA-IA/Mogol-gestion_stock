<?php
session_start();
require_once ('../models/connect.php');

$nbre=$requete->rowcount();
if($nbre==1){
            
     
      header('location: ../vue/admin.php');

     echo 'Admin connecter';


}else{

 $_SESSION['erreur']= "Espace reservé au administrateur ";
     header('location: ../index.php');
}

?>