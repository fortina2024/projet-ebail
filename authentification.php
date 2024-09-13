<?php
session_start();
include 'connexion_bdd.php';

    $requete = $connexion->query("SELECT * FROM user where name='".$_POST['nom']."' and password='".$_POST['pwd']."'");
    $res = $requete->fetchAll(PDO::FETCH_ASSOC);
    if(count($res)==0){
        header('Location:seconnecterAdmin.php?user_erreur='.$_POST["nom"]);
    }else{
        $_SESSION['userNameActif']=$_POST["nom"];
        header('Location:admin.blade.php');
    }

?>