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
        include 'nav.php';
    ?>
</head>
<body class="bg-light">
    <?php

  ?>

    <div class="contenair shadow-sm rouded-4 py-4" style="margin:auto;margin-top: 100px; width:40%;background:white;">
        <div class="mb-1 text-center h3">
            <label for="floatingInput">Vérification d'une agence immobilière</label>
        </div>

        <form class="p-4" action="controlleragenceimmo.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control form-control-sm" require id="floatingInput" placeholder="ID courtier" name="identifiant">
                <label for="floatingInput">Entrer ID Agence immobilière</label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3">Rechercher</button>
            </div>
        </form>
    </div>
  </body>
  </html>