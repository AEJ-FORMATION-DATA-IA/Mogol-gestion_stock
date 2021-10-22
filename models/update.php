<?php 
require_once 'db.php';



$req= $conn->prepare("UPDATE produit SET libelle = :lib ,quantite_minimal = :quant_mini , quantite_en_stock = :stock, ddate= :jour WHERE reference =:ref");


?>
