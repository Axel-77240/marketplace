<!DOCTYPE html>
<html>

<head>
    <title>Formulaire Client</title>
    <meta charset="utf-8">
</head>

<body>
    <div>
        <div>
            <?php

            // Déclarations des variables du formulaire
            $nomclient = isset($_POST["nomclient"]) ? $_POST["nomclient"] : "";
            $prenomclient = isset($_POST["prenomclient"]) ? $_POST["prenomclient"] : "";
            $email = isset($_POST["email"]) ? $_POST["email"] : "";
            $adresse = isset($_POST["adresse"]) ? $_POST["adresse"] : "";
            $cartecredit = isset($_POST["cartecredit"]) ? $_POST["cartecredit"] : "";
            

            $erreurs = [];
            $prix =[];

            // Vérification champs non vides
            
            if ($nomclient == "") {
                $erreurs[] = "Le champ Nom est vide";
            }
            if ($prenomclient == "") {
                $erreurs[] = "Le champ Prénom est vide";
            }
            if ($email == "") {
                $erreurs[] = "Le champ E-mail est vide";
            }
            if ($adresse == "") {
                $erreurs[] = "Le champ Adresse est vide";
            }
            if ($cartecredit == "") {
                $erreurs[] = "Le champ Carte de Crédit est vide";
            }

            //Affichage formulaire est valide
            if (empty($erreurs)) {
                echo "
                    <h4>Votre formulaire est enregistré !</h4>
                ";
        
            // Affichage des erreurs si le formulaire est invalide
            } else {
                echo '<h4 class="erreur">Votre formulaire contient des erreurs :</h4>';
                echo '<ul class="erreur">';
                foreach ($erreurs as $erreur) {
                    echo "<li>$erreur</li>";
                }
                echo '</ul>';
            }
            ?>
        </div>
    </div>
</body>

</html>