<?php
session_start();
    include 'heads.php';
    include 'navAdmin.blade.php';
    include 'entetes_admin.php';
    include 'connexion_bdd.php';
    $requete = $connexion->query("SELECT * FROM cahierdebail where id=".$_GET['varidentifiant']);
    $res = $requete->fetchAll(PDO::FETCH_ASSOC);
    $iter=0;
    foreach($res as $enreg){
        echo '<div class="contenair shadow" style="width:50%;margin:auto;margin-top:50px;">
        <div class="border-bottom mb-3 px-4 bg-light d-flex bd-highligh"><div class="px-2 bd-highligh"><label for="recipient-name" class="text-center" style="color: #0068B1;">Modification du cahier de bail</label></div>
        <a href="CahierDeBail.blade.php?varidentifiant=1param=Cahier de bail / Liste"  class="btn ms-auto px-2 bd-highligh"><i class="bi bi-list"></i> Liste</a></div>
        <form action="modificationTables.php?descriptiontable=cahierdebailmod&index='.$_GET["varidentifiant"].'" method="post" class=" p-4">
        <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">ID </label>
                <div class="input-group-text"></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" readonly name="ident" value="'.$_GET["varidentifiant"].'"/>
         </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Nom de l\'acheteur </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="nom_acheteur" value="'.$enreg["nom_acheteur"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Adresse du bien </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["adresse"].'">
            </div>
            <div class="input-group mb-2">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Type immobilière </label>
                    <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                    <select class="form-select" id="recipient-name" name="type_immo">
                    <option>'.$enreg["type_immo"].'</option><option>Résidentiel</option><option>Commercial</option><option>Professionnel</option></select>
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Montant </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="montant" value="'.$enreg["montant"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Date d\'achat </label>
                <div class="input-group-text"><i class="bi bi-calendar2-minus"></i></div>
                <input type="date" class="form-control" id="autoSizingInputGroup" name="date_achat" value="'.$enreg["date_achat"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Date d\'expiration </label>
                <div class="input-group-text"><i class="bi bi-calendar2-minus"></i></div>
                <input type="date" class="form-control" id="autoSizingInputGroup" name="date_expiration" value="'.$enreg["date_expiration"].'">';
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