
<?php require_once '../models/update.php';

$upd = (int) htmlspecialchars($_SESSION['update']);
$u_libelle = htmlspecialchars($_POST['u_libelle']);
$u_qm = htmlspecialchars($_POST['u_qm']);
$u_qs = htmlspecialchars($_POST['u_qs']);
$jour= date('Y-m-d H:i:s');

$resultat =$req->execute([
    'lib' => $u_libelle,
    'quant_mini' => $u_qm,
    'stock' => $u_qs,
    'jour' => $jour,
    'ref'=>$upd 
]);

echo " Le produit a été mis a jour  ";



