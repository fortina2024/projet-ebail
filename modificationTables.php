<?php
    //Appelé par editerCahierDeBail et editerContratDeBail ..
    if(isset($_GET["index"]) && $_GET["description"]="supprimercahierdebail"){
        supprimercahierdebail();
        header('Location: cahierDeBail.blade.php?param=cahier de bail / Liste');
    }

    if(isset($_GET["descriptiontable"]) && $_GET["descriptiontable"]="cahierdebailmod"){
        modifiercahierdebail();
    }else if(isset($_GET["descriptiontable"]) && $_GET["descriptiontable"]="contratdebailmod"){
        modifiercontratdebail();
    }else if(isset($_GET["descriptiontable"]) && $_GET["descriptiontable"]="conflitdebailmod"){
        modifierconflitdebail();
    }else if(isset($_GET["descriptiontable"]) && $_GET["descriptiontable"]="courtieragencedebail"){
        modifiercourtieragencedebail();
    }
    function connexion(){
        include 'connexion_bdd.php';
        return $connexion;
    }
    function supprimercahierdebail(){
        $connexion=connexion();
        $val=$_GET['index'];
        $req=$connexion->prepare("delete from cahierdebail where id=?");
        $req->execute([$val]);
    }
    function modifiercahierdebail(){
        $connexion=connexion();
        $val=$_GET['index'];
        $req=$connexion->prepare("delete from cahierdebail where id=?");
        $req->execute([$val]);
        include 'insertiondesdonnees.php';
        header('Location: cahierDeBail.blade.php?param=Cahier de bail / Liste');
    }
    function modifiercontratdebail(){
        $connexion=connexion();
        $val=$_GET['index'];
        $req=$connexion->prepare("delete from contratdebail where id=?");
        $req->execute([$val]);
        header('Location: contratdebail.blade.php?param=Contrat de bail / Liste');      
    }
    function modifierconflitdebail(){
        $connexion=connexion();
        $val=$_GET['index'];
        $req=$connexion->prepare("delete from conflitdebail where id=?");
        $req->execute([$val]);
        header('Location: conflitdebail.blade.php?param=Conflit de bail / Liste');  
    }
    function modifiercourtieragencedebail(){
        $connexion=connexion();
        $val=$_GET['index'];
        $req=$connexion->prepare("delete from courtieragencedebail where id=?");
        $req->execute([$val]);
        header('Location: courtieragencedebail.blade.php?param=Courtier et agence immo. / Liste');  
    }
?>