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
            
            <!-- als er wel resultaat is of als er niet gefiltert is de huisjes laten zien -->
                <?php foreach( $tblCottages as $cottage ) { ?>
                <div class="col-12 col-md-4 mb-4 d-flex align-self-stretch">
                    <div class="card">
                        <img class="card-img-top" src=<?php echo "images/".$cottage["cottage_img"]?> alt="cottage_name"><!-- maak image en naam dynamisch -->
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $cottage['cottage_name']; ?></h5> <!-- maak naam dynamisch -->
                            <p class="card-text"><?php echo $cottage['cottage_descr']; ?></p>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">€<?php echo $cottage ['cottage_price_a']; ?> per persoon</li><!-- maak prijs volwassenen dynamisch -->
                                    <li class="list-group-item">€<?php echo $cottage ['cottage_price_c']; ?> per kind</li><!-- maak prijs kinderen dynamisch -->
                                </ul>
                                <a href="huisjes.php?cottageID=<?php echo $cottage["cottage_id"]; ?>" class="btn btn-secondary mt-2">Lees meer...</a><!-- maak href dynamisch -->
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