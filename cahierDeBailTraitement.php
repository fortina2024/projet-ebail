<?php 
include 'connexion_bdd.php';
try {
    $requete = $connexion->prepare("SELECT * FROM cahierdebail");
    $requete->execute();
    
    $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
    $i=1;
    foreach ($resultats as $ligne) {
        echo '<tr class="w-auto">';
        echo '<th scope="row" class="w-auto">'.$ligne["id"] .'</th><td class="w-auto">' . $ligne["nom_acheteur"] .'
        </td><td class="w-auto">' . $ligne["adresse"] .'</td><td class="w-auto">' . $ligne["type_immo"] .'</td>
        <td class="w-auto">' . $ligne["montant"] .'</td><td class="w-auto">' . $ligne["date_achat"] .'</td>
        <td class="w-auto">' . $ligne["date_expiration"] .'</td><td class="w-auto">' . $ligne["creer_par"] .'</td>
        <td class="w-auto">' . $ligne["creer_a"] .'</td><td class="w-auto">' . $ligne["modifier_par"] .'</td><td class="w-auto">' . $ligne["modifier_a"] .'</td>';
        echo '<td class="w-auto d-flex"><a href="editerCahierDeBail.php?varidentifiant='.$ligne["id"].'"  class="btn px-2 bd-highlight" style="color:rgba(0,0,0,0.4);"><i class="bi bi-pencil-fill"></i></a>
        <a href="" dataset="'.$ligne["id"].'" id="'.$ligne["id"].'" class="supprimerLigne btn px-2 bd-highlight" style="color:rgba(0,0,0,0.4);"><i class="bi bi-trash-fill"></i></a></td></tr>';
    }
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$connexion = null;
?>
<style>
  a :hover{
    color:black;
  }
</style>
<script>
  $(document).ready(function() {
    $(".supprimerLigne").click(function() {
      var row = $(this).closest("tr");
      var id = row.data("id");
      $.ajax({
        url: 'modificationTables.php', // URL du script serveur qui gère la suppression
        type: 'GET',
        data: { index: id },
        success: function(response) {
          if (response == 'success') {
            alert('Suppression reussie');
            row.remove();
          } else {
            alert('Erreur');
          }
        }
      });
    });
  });


</script>