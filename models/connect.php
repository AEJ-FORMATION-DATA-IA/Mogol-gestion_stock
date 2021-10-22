<?php 

require_once 'db.php';
          //permet a ladministrateur de ce connecter


               $requete= $conn->prepare("SELECT * FROM users where identifiant=:id and mdp=:mdp");
                $requete->execute(array(
                   'id' => $_POST['identifiant'],
                   'mdp' => $_POST['mdp']
               ));
            
?>           

            