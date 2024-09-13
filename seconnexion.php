
<style>
.carousel-control-next-icon, .carousel-control-prev-icon {
    background-color: rgba(0, 0, 0, 0.3);
    background-size: 100% 50%;
    border-radius: 50px;
    height: 40px;
    width: 40px;
}
.carousel-control-next-icon {
  background-position-x: 0.2em;
}
/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
  bottom: 3rem;
}
/* Declare heights because of positioning of img element */
.carousel-item {
  height: 25rem;
  background-color: #777;
}

.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 25rem;
}

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

</style>









<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0068B1;color: #FFF;">
        <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #FFF;"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Identifiant</label>
            <input type="text" class="form-control" id="recipient-name" name="ident">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Mot de passe</label>
            <input type="password" class="form-control" id="recipient-name" name="pwd">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn" style="background-color: #0068B1;color: #FFF;">Connexion</button>
      </div>
      <div class="modal-body mb-1 text-center">
        <a herf="" style="text-decoration:none;color: #0068B1;" class="btn btn-link">Mot de passe oublié ?</a>
      </div>
    </div>
  </div>
</div>