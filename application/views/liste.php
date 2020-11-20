    <body>
        <div class="container">
            <h1>Bienvenue sur Wazaa Immo</h1>
            <div class="row row-cols-1 row-cols-md-3">
            <?php
                foreach ($liste_produits as $row)
                {?>
                    <div class="col mb-4">
                        <div class="card">
                        <h2 class="card-title"><a href="<?php echo site_url('produits/product/'.$row->an_id) ?>"><?php echo $row->an_titre; ?></a></h2>
                        <img src="<?php echo base_url('assets/images/annonces/'.$row->an_id."/".$row->an_id."-1.jpg");?>" class="card-img-top" alt="Aperçu">
                        <div class="card-body">
                            <p class="card-text"><?php echo $row->an_description; ?></p>
                            <a href="<?php echo site_url('produits/product/'.$row->an_id) ?>" class="btn btn-primary">Consulter l'annonce</a>
                        </div>
                        </div>
                    </div>
                <?php } 
            ?>
        </div>
    </body>