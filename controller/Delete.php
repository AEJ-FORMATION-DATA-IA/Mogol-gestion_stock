<?php 

require_once '../models/delete.php';

$del_ref= $_GET['delete'];


 $req= $del->execute([

    'ref' => $del_ref
]);