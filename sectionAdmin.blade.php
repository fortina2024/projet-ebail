
<section id="menus">
    <div class="contenair">
    <?php include 'entetes_admin.php'; ?>
        <div class="titreAdmin2 h5"><label for=""></label></div>
        <section class="sectionAdmin my-5 p-5 bg-light">
            <div class="d-flex justify-content-evenly" style="width:90%;margin:auto;">
                <a href="cahierDeBail.blade.php?param=Cahier de Bail / Liste" class="p-2 bd-highlight text-center" style="width:20%;">
                    <div class="card shadow border-0 borderGauche lienMenu">     
                    <div class="card-body">
                        <img src="images/book.png" alt="deal" class="petitesIcones" style="width:70px;height:70px;"/>
                        <h5 class="card-title" >CAHIER DE BAIL</h5>
                    </div>
                    </div>
                </a>
                <a href="contratDeBail.blade.php?param=Contrat de Bail / Liste" class="p-2 bd-highlight text-center" style="width:20%;">
                    <div class="card shadow border-0 borderGauche lienMenu">
                    <div class="card-body">
                        <img src="images/deal.png" alt="deal" class="petitesIcones" style="width:70px;height:70px;"/>
                        <h5 class="card-title">CONTRAT DE BAIL</h5>
                    </div>
                    </div>
                </a>
                <a href="conflitDeBail.blade.php?param=Conflit de Bail / Liste" class="p-2 bd-highlight text-center" style="width:20%;">
                    <div class="card shadow border-0 borderGauche lienMenu">
                    <div class="card-body">
                    <img src="images/conflictS.png" alt="deal" class="petitesIcones" style="width:70px;height:70px;"/>
                        <h5 class="card-title">CONFLIT DE BAIL</h5>
                    </div>
                    </div>
                </a>
                <a href="courtieradmin.blade.php?param=Courtier / Liste" class="p-2 bd-highlight text-center" style="width:20%;">
                    <div class="card shadow border-0 borderGauche lienMenu">
                    <div class="card-body">
                    <img src="images/real-estate-agent.png" alt="deal" class="petitesIcones" style="width:70px;height:70px;"/>
                        <h5 class="card-title">COURTIER</h5>
                    </div>
                    </div>
                </a>
                <a href="AgenceimmoAdmin.blade.php?param=Agence immobilière / Liste" class="p-2 bd-highlight text-center" style="width:20%;">
                    <div class="card shadow border-0 borderGauche lienMenu">
                    <div class="card-body">
                    <img src="images/real-estate-agent.png" alt="deal" class="petitesIcones" style="width:70px;height:70px;"/>
                        <h5 class="card-title">AGENCE IMMO</h5>
                    </div>
                    </div>
                </a>
            </div>
        </section>
    </div>
</section>