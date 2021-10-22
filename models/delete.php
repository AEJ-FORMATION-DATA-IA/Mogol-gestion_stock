<?php 

require_once 'db.php';

$del = $conn->prepare("DELETE FROM produit WHERE reference= :ref");

