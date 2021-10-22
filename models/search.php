<?php 

require_once '../models/db.php';
$articles = $conn->query('SELECT libelle FROM produit ORDER BY reference DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $articles = $conn->query('SELECT libelle FROM produit WHERE libelle LIKE "%'.$q.'%" ORDER BY reference DESC');
   if($articles->rowCount() == 0) {
      $articles = $conn->query('SELECT libelle FROM produit WHERE CONCAT(libelle, quantite_en_stock) LIKE "%'.$q.'%" ORDER BY reference DESC');
   }
}