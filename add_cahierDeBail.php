<div class="modal fade" id="cahierDeBail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0068B1;color: #FFF;">
        <h5 class="modal-title" id="exampleModalLabel">Enregistrement cahier de bail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:#FFF;"></button>
      </div>
      <div class="modal-body">
        <form action="insertiondesdonnees.php" method="post">
          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Nom de l'acheteur</label>
            <input type="text" class="form-control" id="recipient-name" name="nom_acheteur">
          </div>
          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Adresse du bien</label>
            <input type="text" class="form-control" id="recipient-name" name="adresse">
          </div>
          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Type immobilière</label>
            <select class="form-select" id="recipient-name" name="type_immo">
            <option>--Select--</option><option>Résidentiel</option><option>Commercial</option><option>Professionnel</option></select>
          </div>
          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Montant</label>
            <input type="text" class="form-control" id="recipient-name" name="montant">
          </div>
          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Date d'achat</label>
            <input type="date" class="form-control" id="recipient-name" name="date_achat">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Date d'expiration</label>
            <input type="date" class="form-control" id="recipient-name" name="date_expiration">
          </div>
          <button type="submit" class="btn btn-success" data-bs-target="#cahierDeBail" data-bs-toggle="modal">Valider</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmationEnregistrementCahierDeBail" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">
      <div class="modal-header" style="background-color: #0068B1;color: #FFF;">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Confirmation enregistrement cahier de bail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #FFF;"></button>
      </div>
      <div class="modal-body text-center">
        Voulez-vous enregistrer ces données?
      </div>
      <div class="modal-footer">
        <button class="btn  btn-secondary"  data-bs-dismiss="modal">Non</button>
        <button type="button" class="btn" data-bs-target="#cahierDeBail"  data-bs-dismiss="modal" style="background-color: #0068B1;color: #FFF;" id="confirmationEnvoiCahierDeBail">Oui</button>
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