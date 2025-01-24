<?php
function ajouter($nom, $email, $objet, $sms) {
    if(require("connexion.php")) {
        $req = $conn->prepare("INSERT INTO contacts(nom, email, objet, sms) VALUES(:nom, :email, :objet, :sms)");

        // Liez les paramètres
        $req->bindParam(':nom', $nom, PDO::PARAM_STR);
        $req->bindParam(':email', $email, PDO::PARAM_STR);
        $req->bindParam(':objet', $objet, PDO::PARAM_STR);
        $req->bindParam(':sms', $sms, PDO::PARAM_STR);

        $req->execute();
        $req->closeCursor();
    }
    else{
        echo "impossible d'inserer !";
    }
}
?>