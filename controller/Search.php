<?php require_once '../models/search.php'?>
<?php if($articles->rowCount() > 0) { ?>
    
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

    <?php while($a = $articles->fetch()) { ?>
<p class="bg-success text-light text-center mt-5" id="search">Resultats de la recherche " <?= $_GET['q']?> "</p>
      
       <tbody>
                
            <tr>
                <td><?php echo $a['libelle']?></td>
                <td><?php var_dump($a) ?></td>
                <td><?php echo $a['quantite_en_stock?']?></td>
                <td><a href="?delete=<?php echo $prod->reference?>" onclick="confirmation()">Supprimer</a></td>
                <td><a href="?update=<?php echo $prod->reference?>">Modifier</a></td>


            </tr>

        </table>
     <?php } ?>
        
        <?php } else { ?>
            Aucun résultat pour:    <?= $q ?>...
        <?php } ?>
<?php 

        // Verifie si le parametre delete existe , si OUI on require notre controlleur delete
            if($_GET['delete']){

                require_once '../controller/Delete.php';
            }

            ?>