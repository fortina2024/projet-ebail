<?php
    function insert_cahierdebail() {
        $valeur1=$_POST['nom_acheteur'];
        $valeur2=$_POST['adresse'];
        $valeur3=$_POST['type_immo'];
        $valeur4=$_POST['montant'];
        $valeur5=$_POST['date_achat'];
        $valeur6=$_POST['date_expiration'];
        $valeur7=1;
        $valeur8=date('Y-m-d H:i:s');
        $valeur9=1;
        $valeur10=date('Y-m-d H:i:s');
        include 'connexion_bdd.php';
    try {

        $requete = $connexion->prepare("INSERT INTO cahierdebail
        (nom_acheteur,adresse,type_immo,montant,date_achat,date_expiration,creer_par,creer_a,modifier_par,modifier_a) 
        VALUES (:nom_acheteur,:adresse,:type_immo,:montant,:date_achat,:date_expiration,:creer_par,:crer_a,:modifier_par,:modifier_a)");

        $requete->bindParam(':nom_acheteur', $valeur1);
        $requete->bindParam(':adresse', $valeur2);
        $requete->bindParam(':type_immo', $valeur3);
        $requete->bindParam(':montant', $valeur4);
        $requete->bindParam(':date_achat', $valeur5);
        $requete->bindParam(':date_expiration', $valeur6);
        $requete->bindParam(':creer_par', $valeur7);
        $requete->bindParam(':crer_a', $valeur8);
        $requete->bindParam(':modifier_par', $valeur9);
        $requete->bindParam(':modifier_a', $valeur10);
        
        $requete->execute();
        
        header('Location: cahierDeBail.blade.php');
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    $connexion = null;
    return;
    }
    insert_cahierdebail();

?>