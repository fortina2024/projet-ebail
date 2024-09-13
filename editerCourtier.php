<?php
session_start();
    include 'heads.php';
    include 'navAdmin.blade.php';
    include 'entetes_admin.php';
    include 'connexion_bdd.php';
    $requete = $connexion->query("SELECT * FROM courtier where id=".$_GET['varidentifiant']);
    $res = $requete->fetchAll(PDO::FETCH_ASSOC);
    $iter=0;
    foreach($res as $enreg){
        echo '<div class="contenair shadow" style="width:50%;margin:auto;margin-top:30px;">
        <div class="border-bottom  px-4 bg-light d-flex bd-highligh"><div class="px-2 bd-highligh"><label for="recipient-name" class="text-center" style="color: #0068B1;">Modification du courtier</label></div>
        <a href="Courtieradmin.blade.php?varidentifiant=1&param=Courtier / Liste"  class="btn ms-auto px-2 bd-highligh"><i class="bi bi-list"></i> Liste</a></div>
        <form action="modificationTables.php?descriptiontable=courtiermod&&index='.$_GET["varidentifiant"].'" method="post" class=" p-4">
        <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">ID </label>
                <div class="input-group-text"></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" readonly name="ident" value="'.$enreg["id"].'"/>
         </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Nom</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="nom_acheteur" value="'.$enreg["nom"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Prénom </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["prenom"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Avenue </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["avenue"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Num Avenue </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["numavenue"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Quartier </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="montant" value="'.$enreg["quartier"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Commune </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="date_achat" value="'.$enreg["commune"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Ville </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="date_achat" value="'.$enreg["ville"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Province </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="date_achat" value="'.$enreg["province"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Contact </label>
                <div class="input-group-text"><i class="bi bi-telephone-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="date_achat" value="'.$enreg["contact"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Agence immobilière</label>
                <div class="input-group-text"><i class="bi bi-building-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="date_expiration" value="'.$enreg["idagenceimmo"].'">';
    }
?>
        
        
            </div>
                <div class="modal-footer mb-1">
                <a href="cahierdebail.blade.php"  class="btn btn-secondary" data-bs-dismiss="modal">Quitter</a>
                <button type="submit" class="btn" data-bs-target="#cahierDeBail" data-bs-toggle="modal" style="background-color:  #0068B1;color:white;">Valider</button>
            </div>
         
        </form>
        </div>


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