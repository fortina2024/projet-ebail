<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'heads.php';
    ?>
</head>
<body class="bg-light">
<div class="contenair" style="width:25%;margin:auto;margin-top:100px;">
<div class="text-center h3 my-2" style="color:rgba(0,0,0,0.8);"><img class="mx-2" src="images/min_habitat_logo_2.png" style="height:100px;width:100px;" alt="img" />E-Bail Admin</div>
<form action="authentification.php" method="post" class=" shadow-sm p-4" novalidate style="background-color:white;">
    <label for="validationTooltip01" class="form-label py-0 mb-1">Nom</label>
    <div class="input-group mb-3">
        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
        <?php
        if(isset($_GET["user_erreur"])){
          echo '<input type="text" class="form-control" required id="autoSizingInputGroup" name="nom" value="'.$_GET["user_erreur"].'" placeholder="Nom"/>';                
        }else{
          echo '<input type="text" class="form-control" required id="autoSizingInputGroup" name="nom" placeholder="Nom">';                
        }
        ?>
    </div>
    <label for="validationTooltip01" class="form-label mb-1">Password</label>
    <div class="input-group mb-4">
        <div class="input-group-text"><i class="bi bi-eye-fill"></i></div>
        <input type="password" class="form-control" required id="autoSizingInputGroup" name="pwd" placeholder="Mot de passe">
    </div>

  <div class="col-12 text-center">
    <button class="btn btn-secondary" type="submit" style="">Connexion</button>
  </div>
</form>
      <?php
        if(isset($_GET["user_erreur"])){
          echo '<div class="mt-3 alert alert-danger text-center alert-dismissible fade show" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <strong>Erreur de connexion!</strong> Veillez vérifier votre nom et mot de passe.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';                
        }
        ?>
</div>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<script>
    (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>