
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
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-nom" placeholder="Date"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-adr" placeholder="Div Hab."></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-tp" placeholder="ID contrat"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-mont" placeholder="Description"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-da" placeholder="Resolution"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-de" placeholder="Redacteur"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-cp" placeholder="Décideur"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-ca" placeholder="TypeDedecision"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-mp" placeholder="Date decision"></th>
        </tr>
        <tr class="border-0" style="color:rgba(0,0,0,0.8);">
        <td scope="col" class="w-auto">ID</td>
        <td scope="col" class="w-auto">DateDuConflit</td>
        <td scope="col" class="w-auto">DivisionHabitat</td>
        <td scope="col" class="w-auto">IDContratDeBail</td>
        <td scope="col" class="w-auto">Description</td>
        <td scope="col" class="w-auto">Resolution</td>
        <td scope="col" class="w-auto">Redacteur</td>
        <td scope="col" class="w-auto">Décideur</td>
        <td scope="col" class="w-auto">TypeDedecision</td>
        <td scope="col" class="w-auto">DateDeDecision</td>
        <td scope="col" class="w-auto">Actions</td>
        </tr>
    </thead>
    <tbody>';
    try {
        $requete = $connexion->prepare("SELECT * FROM conflitdebail");
        $requete->execute();
        
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $i=1;
        foreach ($resultats as $ligne) {
            echo '<tr class="w-auto">';
            echo '<th scope="row" class="w-auto">'.$ligne["id"] .'</th><td class="w-auto">' . $ligne["dateduconflit"] .'
            </td><td class="w-auto">' . $ligne["divisionhabitat"] .'</td><td class="w-auto">' . $ligne["idcontratdebail"] .'</td>
            <td class="w-auto">' . $ligne["description"] .'</td><td class="w-auto">' . $ligne["resolution"] .'</td>
            <td class="w-auto">' . $ligne["redacteur"] .'</td><td class="w-auto">' . $ligne["decideur"] .'</td>
            <td class="w-auto">' . $ligne["typededecision"] .'</td><td class="w-auto">' . $ligne["datedeladecision"] .'</td>';
            echo '<td class="w-auto d-flex"><a href="editerConflitDeBail.php?param=Conflit de bail / Modication&varidentifiant='.$ligne["id"].'"  class="btn px-2 bd-highlight" style="color:rgba(0,0,0,0.4);"><i class="bi bi-pencil-fill"></i></a>
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
