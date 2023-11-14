<?php
//de include om connectie te maken met de database
include 'includes/database.php';
include 'includes/functions.php';
//functions.php

//de header van je HTML pagina
include "header.php"; 
// include "includes/filter.php";
//filter.php
?>

<section>
    <div class="container mt-4">
        <div class="row">
            
            <!-- als er wel resultaat is of als er niet gefiltert is de velden laten zien -->
                <?php foreach( $tblVeld as $veld ) { ?>
                <div class="col-12 col-md-4 mb-4 d-flex align-self-stretch">
                    <div class="card">
                        <img class="card-img-top" src=<?php echo "images/".$veld["veld_img"]?> alt="veld_name"><!-- maak image en naam dynamisch -->
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $veld['veld_name']; ?></h5> <!-- maak naam dynamisch -->
                            <p class="card-text"><?php echo $veld['veld_descr']; ?></p>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">€<?php echo $veld ['veld_price_a']; ?> Grasveld</li><!-- maak prijs volwassenen dynamisch -->
                                    <li class="list-group-item">€<?php echo $veld ['veld_price_c']; ?> Kunstgrasveld</li><!-- maak prijs kinderen dynamisch -->
                                </ul>
                                <a href="veld.php?veldID=<?php echo $veld["veld_id"]; ?>" class="btn btn-dark text-light">Meer informatie...</a><!-- maak href dynamisch -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php   ?>
        </div>
    </div>
</section>

<?php 
include "footer.php";

?>