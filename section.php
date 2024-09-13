<section>
    <div class="contenair">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
          <div class="carousel-inner image-container">
              <div class="carousel-item">
              <img src="images/getCroppedImage.jfif" class="d-block w-100 imagesdefilantes" alt="...">
              <div class="carousel-caption d-none d-md-block">
                  <span style="font-size:80px;font-weight:700;">Conflits des baux</span>
                  <p class="h4">Conditions de Reglèmentations des baux et Services.</p>
              </div>
          </div>
        <div class="carousel-item active">
            <img src="images/cite_administrative_bugeaud_003.webp" class="d-block w-100 imagesdefilantes" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <span style="font-size:80px;font-weight:700;">Innovations</span>
                <p class="h4">A propos du Ministère de l'Urbanisme et Habitat.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/wrs-talente-ausgabe-13-2_bild-02.png" class="d-block w-100 imagesdefilantes" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <span style="font-size:80px;font-weight:700;">Reglèmentations des baux</span>
                <p class="h4">Conditions de Reglèmentations des baux et Services.</p>
            </div>
        </div>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <style>

    </style>
    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
        })
    </script>

    <section class="operationsBasiques"  style="width:80%;margin:auto;">
    <div class="row row-cols-1 row-cols-md-2 g-4">
    <a href="recherchercourtier.blade.php">
    <div class="col text-center lienMenu">
      <div class="card shadow border-0">
        <i class="bi bi-card-checklist card-img-top my-0 iconeChoixOperationsBasiques"></i>
        <div class="card-body">
          <h4 class="card-title">Vérifier un courtier</h4>
          <p class="card-text">Liste des courtiers réconnus par M.U.H</p>
        </div>
      </div>
    </div>
    </a>
    <a href="rechercheragenceimmo.blade.php">
  <div class="col text-center lienMenu">
    <div class="card shadow border-0">
      <i class="bi bi-card-checklist card-img-top my-0 iconeChoixOperationsBasiques"></i>
      <div class="card-body">
        <h4 class="card-title">Vérifier une agence immobilière</h4>
        <p class="card-text">Liste des agences immobilières réconnues par M.U.H</p>
      </div>
    </div>
  </div>
  </a>
    <a href="denoncer.blade.php">
  <div class="col text-center lienMenu">
    <div class="card shadow border-0">
      <i class="bi bi-megaphone-fill card-img-top my-0 iconeChoixOperationsBasiques"></i>
      <div class="card-body">
        <h4 class="card-title">Dénoncer</h4>
        <p class="card-text">Avez-vous un problème? </p>
      </div>
    </div>
  </div>
  </a>
    <a href="reglementations.blade.php">
  <div class="col text-center lienMenu">
    <div class="card shadow border-0 ">
      <i class="bi bi-card-list card-img-top my-0 iconeChoixOperationsBasiques"></i>
      <div class="card-body">
        <h4 class="card-title">Reglèmentions des baux et loyer</h4>
        <p class="card-text">Reglèmentions des baux et loyer en R.D.C</p>
      </div>
    </div>
  </div>
</a>
</div>
    </section>
</section>

<section class="my-5 p-5 bg-light">
    <p class="placeholder-glow text-center">
    <span class="placeholder col-12 h2" >Publications et offres</span>
    </p>

<div class="row row-cols-1 row-cols-md-2 g-4" style="width:50%;margin:auto;">
  <div class="col text-center lienMenu">
  <a href="publier.blade.php">
    <div class="card shadow border-0 borderGauche">  
    <span class="position-absolute shadow mx-3 p-3 top-0 start-40 translate-middle badge rounded-pill bg-info">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>   
      <div class="card-body  borderGauche lienMenu" style="color:rgba(0,0,0,0.6)">
        <i class="bi bi-buildings card-img-top my-0 petitesIcones" style="color:#0068B1;"></i>
        <h5 class="card-title">Publier un bien immobilier</h5>
      </div>
    </div>
      </a>
  </div>
  <div class="col text-center lienMenu">
  <a href="offres.blade.php">
    <div class="card shadow border-0 borderGauche">
    <span class="position-absolute shadow mx-3 p-3 top-0 start-40 translate-middle badge rounded-pill bg-info">
    99+
    <span class="visually-hidden">unread messages</span>
    </span> 
      <div class="card-body" style="color:rgba(0,0,0,0.6)">
        <i class="bi bi-search card-img-top my-0 petitesIcones" style="color:#0068B1;"></i>
        <h5 class="card-title">Offres immobilières</h5>
      </div>
    </div>
    </a>
  </div>
</div>
<div class="d-flex flex bd-highlight mt-4" style="width:20%;margin:auto;">
  <div class="p-1 flex-fill bd-highlight" style="background-color:#0068B1;"></div>
  <div class="p-1 flex-fill bd-highlight" style="background-color:#EEC22E;"></div>
  <div class="p-1 flex-fill bd-highlight" style="background-color:#DB3832;"></div>
</div>
</section>

