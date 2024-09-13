

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dénoncer</title>
    <?php
    include 'heads.php';
    ?>
</head>
<body>
    <?php
    include 'nav.php';
    ?>   


    <style>

    </style>
    <section style="margin-top: 50px;height:100px;" class="mb-4"><div>
    <div class="contenair">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner image-container">
              <div class="carousel-item"  style="height:130px;">
              <img src="images/cite_administrative_bugeaud_003.webp" class="d-block w-100 imagesdefilantes" alt="...">
              <div class="carousel-caption d-none d-md-block">
                  <span style="font-size:50px;" class="fw-bold">Dénonciation</span>
              </div>
          </div>
        <div class="carousel-item active" style="height:130px;">
            <img src="images/getCroppedImage.jfif" class="d-block w-100 imagesdefilantes" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <span style="font-size:50px;" class="fw-bold">Dénonciation</span>
            </div>
        </div>
</section>
<div class="contenair shadow-sm rounded-4 " style="margin:auto; width:70%;">
<form action="traitementdenoncer.php" method="post" class="p-5 pt-2" style="">
<div class="alert alert-info my-5 text-center" style="color:rgba(0,0,0,0.8);" role="alert">
Vous informations que vous soummettez seront confidentilles
</div>  
<div class="row mb-3">
  <div class="col">
    <label for="inputEmail3" class="inputEmail3 mb-1">NOM</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputEmail3" name="nom" placeholder="Nom">
      <i class="input-group-text bi bi-person-fill"></i>
    </div>
  </div>
  <div class="col">
    <label for="inputPassword3" class="inputEmail3 mb-1">POSTNOM</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputPassword3" name="postnom" placeholder="Postnom">
      <i class="input-group-text bi bi-person-fill"></i>
    </div>
  </div>
  </div>
  <div class="row mb-3">
  <div class="col">
    <label for="inputEmail3" class="inputEmail3 mb-1">PRENOM</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputEmail3" name="prenom" placeholder="Prénom">
      <i class="input-group-text bi bi-person-fill"></i>
    </div>
  </div>
  </div>

  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">SEXE</legend>
    <div class="input-group">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexe" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          MASCULIN
        </label>
      </div>
      <div class="form-check mx-3">
        <input class="form-check-input" type="radio" name="sexe" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          FEMININ
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
  <div class="col">
    <label for="inputEmail3" class="inputEmail3 mb-1">TELEHPONE</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputEmail3" name="phone" placeholder="Téléphone">
      <i class="input-group-text bi bi-telephone-fill"></i>
    </div>
  </div>
  <div class="col">
    <label for="inputEmail3" class="inputEmail3 mb-1">MAIL</label>
    <div class="input-group">
      <input type="mail" class="form-control form-control-lg" id="inputEmail3" name="mail"  placeholder="Mail">
      <i class="input-group-text bi bi-envelope-fill"></i>
    </div>
  </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="inputEmail3 mb-1">COMMUNE</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputEmail3" name="commune" placeholder="Commune">
      <i class="input-group-text bi bi-geo-alt-fill"></i>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="inputEmail3 mb-1">VILLE</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputEmail3" name="ville"  placeholder="Ville">
      <i class="input-group-text bi bi-geo-alt-fill"></i>
    </div>
  </div>
  <div class="row mb-5">
    <label for="inputEmail3" class="inputEmail3 mb-1">PROVINCE</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputEmail3" name="province" placeholder="Province">
      <i class="input-group-text bi bi-geo-alt-fill"></i>
    </div>
  </div>
  <div class="row mb-3">
  <div class="col">
    <label for="inputEmail3" class="inputEmail3 mb-1">NOM DE L'ACCUSE</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputEmail3" name="nomaccuse" placeholder="Nom de l'accusé">
      <i class="input-group-text bi bi-person-x"></i>
    </div>
  </div>
  <div class="col">
    <label for="inputEmail3" class="inputEmail3 mb-1">SURNOM DE L'ACCUSE</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputEmail3" name="surnomaccuse" placeholder="Surnom de l'accusé">
      <i class="input-group-text bi bi-person-x"></i>
    </div>
  </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="inputEmail3 mb-1">CONTACT DE L'ACCUSE</label>
    <div class="input-group">
      <input type="text" class="form-control form-control-lg" id="inputEmail3" name="contactaccuse" placeholder="Contact de l'accusé">
      <i class="input-group-text bi bi-telephone-x"></i>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="inputEmail3 mb-1">NATURE</label>
    <div class="input-group">
      <select class="form-select" id="inputEmail3" name="nature"><option value="">- Choisir -</option></select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="inputEmail3 mb-1">DESCRIPTION</label>
    <div class="input-group">
      <textarea  class="form-control form-control-lg" id="inputEmail3" rows=4 name="description"></textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="inputEmail3 mb-1">DOCUMENT</label>
    <div class="input-group">
      <input type="file" class="form-control form-control-lg" id="inputEmail3" name="document">
    </div>
  </div>
  <div class=" text-center mt-5">
  <button type="submit" class="btn p-3 fw-bold envoyer">Envoyer</button>
  </div>
</form>
</div>
<?php
    include 'footer.php';
?> 
<style>
  .bi{
    color:#0068B1;
    font-size: 20px;
  }
  .inputEmail3{
    background-color: white;
    color:#0068B1;
    font-weight: 600;
  }
  .envoyer{
    background-color:#0068B1;
    color:white;
    width: 100%;
  }
  .envoyer:hover{
    color:white;
  }
  legend,.form-check-label{
    color:#0068B1;
    font-weight: 600;
  }
  input{
    color:rgba(0,0,0,0.4);
  }
</style>
<script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
        })
    </script>
</body>
</html>
