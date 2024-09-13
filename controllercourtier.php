<?php
session_start();
    include 'heads.php';
    include 'nav.php';
    include 'connexion_bdd.php';
try{

  $requete = $connexion->query("SELECT * FROM courtier where id=".$_POST['identifiant']);
    $res = $requete->fetchAll(PDO::FETCH_ASSOC);
    $iter=0;
    echo'<div class="contenair text-end" style="width:50%;margin:auto;margin-top:10px;"><a href="recherchercourtier.blade.php" class="btn ms-auto px-2 bd-highligh">Retour</a></div>';
        foreach($res as $enreg){
            echo'<div class="contenair shadow" style="width:50%;margin:auto;margin-top:0px;">
            <div class="border-bottom px-4 bg-light d-flex bd-highligh h5">
            <label for="recipient-name" class="text-center p-2" style="color: #0068B1;">Informations du courtier</label>
            </div>
            <div class="p-4 py-1">
            <table class="table table-sm table-striped">
            <tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">ID courtier </label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["id"].'</label>
                </div>
                </td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Nom</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["nom"].'</label>
                </div>
                </td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Postnom</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["postnom"].'</label>
                </div></td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Prénom</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["prenom"].'</label>
                </div></td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Avenue</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["avenue"].'</label>
                </div></td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Numéro avenue</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["numavenue"].'</label>
                </div></td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Quartier</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["quartier"].'</label>
                </div></td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Commune</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["commune"].'</label>
                </div></td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Ville</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["ville"].'</label>
                </div></td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Province</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["province"].'</label>
                </div></td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Contact</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["contact"].'</label>
                </div></td></tr><tr><td>
                <div class="input-group">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Agence immobilère</label>
                    <label for="recipient-name" class="col-form-label mx-4" style=""> : '.$enreg["idagenceimmo"].'</label>
                </div></td>
                </tr>';
                $iter=1;
            }
    if($iter>0){
        echo '</table>
         </div></div>';   
    }else{
        echo' <div class="contenair shadow p-4" style="width:50%;margin:auto;margin-top:50px;">
        <div class="border-bottom px-4 bg-light h4 text-center">
        <label for="recipient-name" class="text-center p-2" style="color: gray;">Pas d\'informations</label>
        </div>
        </div>';
    }
}catch(PDOException $e) {
    echo'<div class="contenair text-end" style="width:50%;margin:auto;margin-top:10px;"><a href="recherchercourtier.blade.php" class="btn ms-auto px-2 bd-highligh">Retour</a></div>';
    echo' <div class="contenair shadow p-4" style="width:50%;margin:auto;margin-top:50px;">
        <div class="border-bottom px-4 bg-light h4 text-center">
        <label for="recipient-name" class="text-center p-2" style="color: gray;">Pas d\'informations</label>
        </div>
        </div>';
}
    
?>       



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault(); // Empêche le rechargement de la page

        var formData = $(this).serialize(); // Sérialise les données du formulaire

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response) {
                $('#result').html(response); // Affiche la réponse dans la div #result
            },
            error: function() {
                $('#result').html('Une erreur est survenue.');
            }
        });
    });
});


</script>