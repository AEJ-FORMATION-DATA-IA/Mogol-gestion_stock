<?php 

require_once 'db.php';



$req= $conn->prepare("INSERT INTO produit(libelle,quantite_minimal,quantite_en_stock,ddate) values(:libelle,:qm,:qs,:jour)");

