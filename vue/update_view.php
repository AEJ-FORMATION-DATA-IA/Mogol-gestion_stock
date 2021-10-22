<?php require_once  'header.php'?>

<form action="#" method="POST">
<div class="container">

<div class="container mt-5">
<div class="alert alert-success" role="alert"
    style="text-align: center; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px">
    


    <div class="mb-3 mt-5">
<p class="bg-secondary text-light text-center mt-5">Enregistrez un nouveau Produits</p>

        <label for="exampleFormControlTextarea1" class="form-label">Libellé</label>
        <textarea class="form-control" name="u_libelle" id="exampleFormControlTextarea1" rows="3" autocomplete="off"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantité minimale</label>
        <input type="number" class="form-control" name="u_qm" id="exampleFormControlInput1" placeholder="quantité minimal"autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantité en Stock</label>
        <input type="number" class="form-control" name="u_qs" id="exampleFormControlInput1" placeholder="quantité en stock" autocomplete="off">
    </div>
    <div class="text-center mt-5">

       <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
</div>
    
</div>
</form>

<?php //recuperer le parametre en get 

$_SESSION['update']= $_GET['update'];



?>

<?php require_once '../controller/Update.php'?>

<?php require_once  'footer.php'?>

