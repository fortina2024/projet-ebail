
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahier de Bail</title>
    <?php
    session_start();
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
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-id" placeholder="Filtrer ID"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-nom" placeholder="Filtrer Nom"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-adr" placeholder="Filtrer Adresse"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-tp" placeholder="Filtrer Type immo"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-mont" placeholder="Filtrer Montant"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-da" placeholder="Filtrer Date achat"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-de" placeholder="Filtrer Date expiration"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-cp" placeholder="Filtrer Créer par"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-ca" placeholder="Filtrer Créer à"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-mp" placeholder="Filtrer Modifier par"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-md" placeholder="Filtrer Modifier à"></th>
            <th scope="col"><input type="text" class="form-control form-control-sm" id="filter-act" placeholder=""></th>
        </tr>
        <tr class="border-0" style="color:rgba(0,0,0,0.8);">
        <td scope="col" class="w-auto">ID</td>
        <td scope="col" class="w-auto">Nom acheteur</td>
        <td scope="col" class="w-auto">Adresse du bien</td>
        <td scope="col" class="w-auto">Type Immo</td>
        <td scope="col" class="w-auto">Montant</td>
        <td scope="col" class="w-auto">Date achat</td>
        <td scope="col" class="w-auto">Date expiration</td>
        <td scope="col" class="w-auto">Créé par</td>
        <td scope="col" class="w-auto">Créé à</td>
        <td scope="col" class="w-auto">Modifié par</td>
        <td scope="col" class="w-auto">Modifié à</td>
        <td scope="col" class="w-auto">Actions</td>
        </tr>
    </thead>
    <tbody>';
    include 'cahierDeBailTraitement.php';
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
                'filter-act': 11,
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
