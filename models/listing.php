<?php 

require_once 'db.php';

$query = $conn->query("SELECT * FROM produit ORDER BY reference DESC");

$list = $query->fetchAll(PDO:: FETCH_OBJ);


?>