<div class="modal fade" id="agenceimmo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0068B1;color: #FFF;">
        <h5 class="modal-title" id="exampleModalLabel">Enregistrement agence immobilière</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:#FFF;"></button>
      </div>
      <div class="modal-body">
        <form action="insertiondesdonnees.php" method="post">
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">RCCM</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="rccm" placeholder="RCCM">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">IDNAT</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="idnat" placeholder="IDNAT">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Nom </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="nom" placeholder="Nom">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Adresse </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="adresse"  placeholder="Adresse">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Numéro impot</label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="numimpot" placeholder="Num impot">
            </div>
            <div class="input-group mb-2">
                <label for="recipient-name" class="col-form-label mx-4" style="width:25%;">Contact </label>
                <div class="input-group-text"><i class="bi bi-pencil-fill"></i></div>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="contact" placeholder="Contact">
            </div>
            <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success mx-3" data-bs-target="#agenceimmo" data-bs-toggle="modal">Valider</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmationEnregistrementagenceimmo" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">
      <div class="modal-header" style="background-color: #0068B1;color: #FFF;">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Confirmation enregistrement agence immobilière</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #FFF;"></button>
      </div>
      <div class="modal-body text-center">
        Voulez-vous enregistrer ces données?
      </div>
      <div class="modal-footer">
        <button class="btn  btn-secondary"  data-bs-dismiss="modal">Non</button>
        <button type="button" class="btn" data-bs-target="#agenceimmo"  data-bs-dismiss="modal" style="background-color: #0068B1;color: #FFF;" id="confirmationEnvoiCahierDeBail">Oui</button>
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