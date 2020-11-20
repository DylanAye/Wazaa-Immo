    <body>
        <div class="container">
            <h1><?php echo $liste_produits->an_titre ?></h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/images/annonces/'.$row->an_id."/".$row->an_id."-1.jpg");?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/annonces/'.$row->an_id."/".$row->an_id."-2.jpg");?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/annonces/'.$row->an_id."/".$row->an_id."-3.jpg");?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précedent</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
            

            <!-- <a type="button" class="btn btn-danger" href="<?php echo site_url('form/supprimer/'.$liste_produits->an_id) ?>">
                Supprimer
            </a>
            <a type='button' class='btn btn-secondary' href="<?php echo site_url('form/modifier/'.$liste_produits->an_id) ?>">
                Modifier
            </a> -->
        </div>
    </body>