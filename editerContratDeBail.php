<?php
session_start();
    include 'heads.php';
    include 'navAdmin.blade.php';
    include 'entetes_admin.php';
    include 'connexion_bdd.php';
    if(isset($_GET['varidentifiant'])){
        $requete = $connexion->query("SELECT * FROM contratdebail where id=".$_GET['varidentifiant']);
        $res = $requete->fetchAll(PDO::FETCH_ASSOC);        
    }else{
        header('Location:seconnecterAdmin.php');
    }
    $iter=0;
    foreach($res as $enreg){
        echo '<div class="contenair shadow" style="width:50%;margin:auto;margin-top:20px;">
        <div class="border-bottom mb-3 px-4 bg-light d-flex bd-highligh"><div class="px-2 bd-highligh"><label for="recipient-name" class="text-center" style="color: #0068B1;">Modification du contrat de bail</label></div>
        <a href="ContratDeBail.blade.php?varidentifiant=1&param=Contrat de bail /Liste"  class="btn ms-auto px-2 bd-highligh"><i class="bi bi-list"></i> Liste</a></div>
        <form action="modificationTables.php?descriptiontable=contratdebailmod&index='.$_GET["varidentifiant"].'" method="post" class=" p-4">
            <div class="input-group mb-2">
                    <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">ID </label>
                    <div class="input-group-text"></div>
                    <input type="text" class="form-control" id="autoSizingInputGroup" readonly name="ident" value="'.$_GET["varidentifiant"].'"/>
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Nom bailleur</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="nom_acheteur" value="'.$enreg["nombailleur"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Nom locataire</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["nomlocataire"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Adresse du bien </label>
                <div class="input-group-text"><i class="bi bi-house-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["adressedubien"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Montant loyer</label>
                <div class="input-group-text"><i class="bi bi-currency-dollar"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["montantloyer"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Nombre de mois de garantie</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["nbredemoisdegarantie"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Montant global de Garantie</label>
                <div class="input-group-text"><i class="bi bi-currency-dollar"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["montantglobaldegarantie"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Durée de bail</label>
                <div class="input-group-text"><i class="bi bi-clock-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["dureedebail"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Date début contrat</label>
                <div class="input-group-text"><i class="bi bi-calendar2-minus"></i></div>
                <input type="date" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["datedebutcontrat"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Date fin contrat</label>
                <div class="input-group-text"><i class="bi bi-calendar2-minus"></i></div>
                <input type="date" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["datefincontrat"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">ID courtier </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["idcourtier"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Nom courtier sans ID</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["nomcourtiersansid"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Contact courtier sans ID</label>
                <div class="input-group-text"><i class="bi bi-telephone-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["contactcourtiersansid"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Id Cahier de bail</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse" value="'.$enreg["idcahierdebail"].'">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:30%;">Id user</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="date_achat" value="'.$enreg["iduser"].'">
            ';
            }
        ?>                     
            </div>
                <div class="modal-footer mb-1">
                <a href="contratDeBail.blade.php?param=Contrat de bail / Liste"  class="btn btn-secondary" data-bs-dismiss="modal">Quitter</a>
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