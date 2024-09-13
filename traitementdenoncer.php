<?php
    function insert_denonciation() {
        $valeur1=$_POST['nom'];
        $valeur2=$_POST['postnom'];
        $valeur3=$_POST['prenom'];
        $valeur4=$_POST['phone'];
        $valeur5=$_POST['mail'];
        $valeur6=$_POST['sexe'];
        $valeur7=$_POST['commune'];
        $valeur8=$_POST['ville'];
        $valeur9=$_POST['province'];
        $valeur10=$_POST['nomaccuse'];
        $valeur11=$_POST['surnomaccuse'];
        $valeur12=$_POST['contactaccuse'];
        $valeur13=$_POST['nature'];
        $valeur14=$_POST['description'];
        $valeur15=$_POST['document'];
        $valeur16=date('Y-m-d H:i:s');

        include 'connexion_bdd.php';
    try {

        $requete = $connexion->prepare("INSERT INTO denonciation
        (nom,postnom,prenom,phone,mail,sexe,commune,ville,province,nomaccuse,surnomaccuse,contactaccuse,nature,description,document,cree_a) 
        VALUES (:nom,:postnom,:prenom,:phone,:mail,:sexe,:commune,:ville,:province,:nomaccuse,
        :surnomaccuse,:contactaccuse,:nature,:description,:document,:cree_a)");

        $requete->bindParam(':nom', $valeur1);
        $requete->bindParam(':postnom', $valeur2);
        $requete->bindParam(':prenom', $valeur3);
        $requete->bindParam(':phone', $valeur4);
        $requete->bindParam(':mail', $valeur5);
        $requete->bindParam(':sexe', $valeur6);
        $requete->bindParam(':commune', $valeur7);
        $requete->bindParam(':ville', $valeur8);
        $requete->bindParam(':province', $valeur9);
        $requete->bindParam(':nomaccuse', $valeur10);
        $requete->bindParam(':surnomaccuse', $valeur11);
        $requete->bindParam(':contactaccuse', $valeur12);
        $requete->bindParam(':nature', $valeur13);
        $requete->bindParam(':description', $valeur14);
        $requete->bindParam(':document', $valeur15);
        $requete->bindParam(':cree_a', $valeur16);
        
        $requete->execute();
        
        header('Location: messagedereussite.blade.php');
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    $connexion = null;
    return;
    }
    insert_denonciation();

?>