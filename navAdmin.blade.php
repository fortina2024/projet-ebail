<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background:white;">
  <div class="container-fluid text-enter" style="width:86%;">
  <a class="navbar-brand fw-bold" href="#" style="font-size:30px;"><img class="mx-2" src="images/min_habitat_logo_2.png" style="height:40px;" alt="img" />E-Bail <span style="font-size:20px;color:gray;" class="">Admin<span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll" style="margin-left:60%;">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="height: 70px;">
      </ul>
      <div class="d-flex">
      <?php
        if(isset($_SESSION["userNameActif"])){
          echo '
          <div class="dropdown">
            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="color:#0068B1;font-size:20px;">
            <i class="bi bi-person-circle iconeUser border rounded-circle mx-2 px-2"></i>'.$_SESSION["userNameActif"].'
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
              <div class="dropdown-item text-center" style="font-size:60px;"><i class="bi bi-person-circle"></i></div>
              <div class="dropdown-item text-center d-flex border-top" >
              <a href="" class="btn btn-sm bg-secondary mx-1" style="color:white;">Setting</a>
              <a href="seconnecterAdmin.php" class="btn btn-sm bg-secondary mx-1" style="color:white;">Logout</a></div>
            </div>
          </div>';                
        }else{
          echo '<button class="btn fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" style="color:#0068B1;"><i class="bi bi-person-circle iconeUser border rounded-circle mx-2 p-2"></i>Administrateur</button>';   }
        ?>

      </div>
    </div>
  </div>
</nav>
<div style="margin-bottom:6.5%;"></div>
<?php
  include 'seconnexion.php';
?>
<script>
  var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
  var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl)
  })
</script>