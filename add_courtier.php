<div class="modal fade" id="courtier" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0068B1;color: #FFF;">
        <h5 class="modal-title" id="exampleModalLabel">Enregistrement courtier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:#FFF;"></button>
      </div>
      <div class="modal-body">
        <form action="insertiondesdonnees.php" method="post">
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Nom</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="nom" placeholder="Nom">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Postnom</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="postnom" placeholder="Postnom">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Prénom </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="prenom" placeholder="Prénom">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Avenue </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="avenue"  placeholder="Avenue">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Num Avenue </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="numavenue" placeholder="Num avenue">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Quartier </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="quartier" placeholder="Quartier">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Commune </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="commune" placeholder="Commune">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Ville </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="ville" placeholder="Ville">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Province </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="province" placeholder="Province">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Contact </label>
                <div class="input-group-text"><i class="bi bi-telephone-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="contact" placeholder="Contact">
            </div>
            <?php
            try {
                $requete = $connexion->prepare("SELECT * FROM agenceimmobiliere");
                $requete->execute();
                
                $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
                $i=1;
                $cum='<option></option>';
                foreach ($resultats as $ligne) {
                    $cum=$cum.'<option>'.$ligne["nom"].'</option>';
                }
            } catch(PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Agence immo</label>
                <div class="input-group-text"><i class="bi bi-building-fill"></i></div>
                <select name="" id="select_agence" class="form-select form-select-sm" ><?php echo $cum; ?></select>
            </div>
            <div class="mb-5">
                <input type="hidden" class="form-control" id="recipient-name" name="idagenceimmo" id="idagenceimmo" value="">
            </div>
            <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success mx-3" data-bs-target="#cahierDeBail" data-bs-toggle="modal">Valider</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmationEnregistrementCahierDeBail" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">
      <div class="modal-header" style="background-color: #0068B1;color: #FFF;">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Confirmation enregistrement courtier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #FFF;"></button>
      </div>
      <div class="modal-body text-center">
        Voulez-vous enregistrer ces données?
      </div>
      <div class="modal-footer">
        <button class="btn  btn-secondary"  data-bs-dismiss="modal">Non</button>
        <button type="button" class="btn" data-bs-target="#courtier"  data-bs-dismiss="modal" style="background-color: #0068B1;color: #FFF;" id="confirmationEnvoiCahierDeBail">Oui</button>
      </div>
    </div>
  </div>
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