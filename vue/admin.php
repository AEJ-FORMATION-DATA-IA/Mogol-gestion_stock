<?php require_once 'header.php'; ?>
<?php require_once '../models/listing.php'; ?>

<form action="/controller/New_prod.php" method="POST">
<div class="container">

<?php if(isset($_SESSION['succes'])){ ?>

<div class="container mt-5">
<div class="alert alert-success" role="alert"
    style="text-align: center; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px">
    
    <?php echo $_SESSION['succes'];?>

</div>

<a href="#list" class="primary">Consultez la liste des produis </a>

</div>
<?php }else{  unset($_SESSION['succes']);  session_destroy(); }?>

    <div class="mb-3 mt-5">
<p class="bg-secondary text-light text-center mt-5">Enregistrez un nouveau Produits</p>

        <label for="exampleFormControlTextarea1" class="form-label">Libellé</label>
        <textarea class="form-control" name="libelle" id="exampleFormControlTextarea1" rows="3" autocomplete="off"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantité minimale</label>
        <input type="number" class="form-control" name="qm" id="exampleFormControlInput1" placeholder="quantité minimal"autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantité en Stock</label>
        <input type="number" class="form-control" name="qs" id="exampleFormControlInput1" placeholder="quantité en stock" autocomplete="off">
    </div>
    <div class="text-center mt-5">

       <button type="submit" name="submit" class="btn btn-primary">Enregistrez Nouveau Produit</button>
</div>
    
</div>
</form>
<p class="bg-secondary text-light text-center mt-5" id="list">La liste des Produits</p>

<div class="container-fluid">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Libellé</th>
                <th scope="col">Quantite Minimal</th>
                <th scope="col">Quantite en Stock</th>
                <th scope="col"></th>
                <th scope="col"></th>



            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $prod){ ?>

                
                
            <tr>
                <td><?php echo $prod->libelle ?></td>
                <td><?php echo $prod->quantite_minimal?></td>
                <td><?php echo $prod->quantite_en_stock?></td>
                <td><a href="update_view.php?update=<?php echo $prod->reference?>">Modifier</a></td>
                <td><a href="?delete=<?php echo $prod->reference?>" onclick="confirmation()">Supprimer</a></td>


            </tr>

            <?php };
            // Verifie si le parametre delete existe , si OUI on require notre controlleur delete
            if($_GET['delete']){

                require_once '../controller/Delete.php';
            }elseif($_GET['q']){
            // Verifie si le parametre dq existe , si OUI on require notre controller search

                require_once '../controller/Search.php';
            }
            
            ?>
    </table>
            
</div>
<?php   require_once 'footer.php'; ?>
