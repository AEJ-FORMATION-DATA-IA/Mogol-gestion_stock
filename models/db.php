<?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'Y@ungmind14';
            
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=$servername;dbname=GeekShop", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              die("Erreur : " . $e->getMessage());
            }

?>