<?php 
session_start();

require_once ('../models/insert.php');

$jour= date('Y-m-d H:i:s');
$libelle= htmlspecialchars($_POST['libelle']);
$quant_mini= htmlspecialchars($_POST['qm']);
$quant_stock= htmlspecialchars($_POST['qs']);

if(!empty($libelle) and !empty($quant_mini) and !empty($quant_stock)){

  
    $req->execute([
        'libelle' => $libelle,
        'qm' => $quant_mini,
        'qs' => $quant_stock,
        'jour'=> $jour

    
    ]); 

    $_SESSION['succes']= 'Produit enregistrez avec succes';

    header('location: ../vue/admin.php');



}else{

    $_SESSION['erreur'] = "Veuillez renseigner tous les champs SVP ";
    header('location: ../vue/admin.php');
}


