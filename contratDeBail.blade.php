
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahier de Bail</title>
    <?php
        session_start();
        include 'connexion_bdd.php';
        include 'heads.php';
        include 'navAdmin.blade.php';
    ?>
</head>
<body class="bg-light">
<?php
    include 'entetes_admin.php';
    include 'add_cahierDeBail.php';
    ?>
  <div class="principal p-4 shadow-sm" style="width:82%;margin:auto;background:white;">
    <div class="contenair d-flex  bg-light">
            <div class="p-2 bd-highlight"><button class="btn btn-sm bg-success" data-bs-toggle="modal" data-bs-target="#cahierDeBail" data-bs-whatever="@fat" style="color:white;"><i class="bi bi-plus-lg"></i> New</button></div>
            <div class="p-2 bd-highlight"><button class="btn btn-sm bg-secondary" id="filtre" style="color:white;"><i class="bi bi-funnel-fill"></i> Filtre</button></div>
    </div>
<div class="overflow-auto table-responsive" style="height:500px;">
<?php
    echo '<table class="table table-hover table-borderless" style="color:gray;">
    <thead class="shadow-sm border-0">
            <tr class="" id="mesfiltres" style="display:none;">
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-id" placeholder="ID"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-nom" placeholder="Bailleur"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-adr" placeholder="Locataire"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-tp" placeholder="Adresse du bien"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-mont" placeholder="Montant"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-da" placeholder="NbreMoisGarantie"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-de" placeholder="Durée de bail"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-cp" placeholder="Début Contrat"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-ca" placeholder="Fin Contrat"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-mp" placeholder="IdCourtier"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-md" placeholder="NomCourtierSID"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-f1" placeholder="ContactCSID"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-f2" placeholder="IDCahierDeBail"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-f3" placeholder="IDUSer"></th>
        </tr>
        <tr class="border-0" style="color:rgba(0,0,0,0.8);">
        <td scope="col" class="w-auto">ID</td>
        <td scope="col" class="w-auto">NomBailleur</td>
        <td scope="col" class="w-auto">NomLocataire</td>
        <td scope="col" class="w-auto">AdresseDuBien</td>
        <td scope="col" class="w-auto">MontantLoyer</td>
        <td scope="col" class="w-auto">NbreMoisGarantie</td>
        <td scope="col" class="w-auto">DuréeDeBailt</td>
        <td scope="col" class="w-auto">DateDébutContrat</td>
        <td scope="col" class="w-auto">DateFinContrat</td>
        <td scope="col" class="w-auto">IdCourtier</td>
        <td scope="col" class="w-auto">NomCourtierSansID</td>
        <td scope="col" class="w-auto">ContactCourtierSansID</td>
        <td scope="col" class="w-auto">IDCahierDeBail</td>
        <td scope="col" class="w-auto">IDUSer</td>
        <td scope="col" class="w-auto">Actions</td>
        </tr>
    </thead>
    <tbody>';
    try {
        $requete = $connexion->prepare("SELECT * FROM contratdebail");
        $requete->execute();
        
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $i=1;
        foreach ($resultats as $ligne) {
            echo '<tr class="w-auto">';
            echo '<th scope="row" class="w-auto">'.$ligne["id"] .'</th><td class="w-auto">' . $ligne["nombailleur"] .'
            </td><td class="w-auto">' . $ligne["nomlocataire"] .'</td><td class="w-auto">' . $ligne["adressedubien"] .'</td>
            <td class="w-auto">' . $ligne["montantloyer"] .'</td><td class="w-auto">' . $ligne["nbredemoisdegarantie"] .'</td>
            <td class="w-auto">' . $ligne["dureedebail"] .'</td><td class="w-auto">' . $ligne["datedebutcontrat"] .'</td>
            <td class="w-auto">' . $ligne["datefincontrat"] .'</td><td class="w-auto">' . $ligne["idcourtier"] .'</td>
            <td class="w-auto">' . $ligne["nomcourtiersansid"] .'</td><td class="w-auto">' . $ligne["contactcourtiersansid"] .'</td>
            <td class="w-auto">' . $ligne["idcahierdebail"] .'</td><td class="w-auto">' . $ligne["iduser"] .'</td>';
            echo '<td class="w-auto d-flex"><a href="editerContratDeBail.php?param=Contrat de bail / Modication&varidentifiant='.$ligne["id"].'"  class="btn px-2 bd-highlight" style="color:rgba(0,0,0,0.4);"><i class="bi bi-pencil-fill"></i></a>
            <a href="" dataset="'.$ligne["id"].'" id="'.$ligne["id"].'" class="supprimerLigne btn px-2 bd-highlight" style="color:rgba(0,0,0,0.4);"><i class="bi bi-trash-fill"></i></a></td></tr>';
        }
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    echo '</tbody>
    </table>';

?>
</div>
</div>  

<?php
    include 'footerAdmin.blade.php';
    ?>
    <style>
        table.table>thead>tr>th {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 2;
            background-color: white;
        }
        table.table>thead>tr>td {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 2;
            background-color: white;
        }
        .table th, .table td {
            white-space: nowrap;
        }
        .table-bordered-bottom tbody tr {
            border-bottom: 2px solid #dee2e6; /* Couleur et épaisseur de la bordure */
        }
        .table thead {
            border-bottom:none;/* Couleur et épaisseur de la bordure */
        }
        .table thead td:last-child,
        .table tbody td:last-child {
            position: sticky;
            right: 0;
            background-color: #fff; /* Couleur de fond pour la colonne fixe */
            z-index: 2; /* Assure que la colonne reste au-dessus des autres éléments */
        }
        
    </style>

    <div class="loader">
        <h1>Chargement en cours...</h1>
    </div>
    <script>
        $(document).ready(function() {
            $(".loader").fadeOut(3000);
        });
    </script>
    <style>
    .loader{
        background: url('images/charge.gif') 50% 50% no-repeat rgba(255, 255, 255, 1);
        cursor: wait;
        height: 100%;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 9999;
    }
	.loader h1{
		background: none;
		border: none;
		color: #458976;
		font-size: 22px;
		font-family: "Open Sans",sans-serif;
		font-weight: 700;
		height: 700px;
		line-height: 700px;
		margin: 0 0 10px;
		padding: 0;
		text-align: center;
	}
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filters = {
                'filter-id': 0,
                'filter-nom': 1,
                'filter-adr': 2,
                'filter-tp': 3,
                'filter-mont': 4,
                'filter-da': 5,
                'filter-de': 6,
                'filter-cp': 7,
                'filter-ca': 8,
                'filter-mp': 9,
                'filter-ma': 10,
                'filter-f1': 11,
                'filter-f2': 12,
                'filter-f3': 13,
            };

            Object.keys(filters).forEach(function(filterId) {
                document.getElementById(filterId).addEventListener('keyup', function() {
                    const filterValue = this.value.toLowerCase();
                    const columnIndex = filters[filterId];
                    const rows = document.querySelectorAll('tbody tr');

                    rows.forEach(function(row) {
                        const cell = row.cells[columnIndex];
                        if (cell) {
                            const cellText = cell.textContent.toLowerCase();
                            row.style.display = cellText.includes(filterValue) ? '' : 'none';
                        }
                    });
                });
            });
        });

        $(document).ready(function(){     
            $("#filtre").click(function(){
                $("#mesfiltres").toggle();
            });           
        });    
    </script>
</body>
</html>
