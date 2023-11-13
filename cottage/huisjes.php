<?php
include "includes/database.php";
include "includes/functions.php";
include "header.php";

$veldID = 1;

if ( isset( $_GET["veldID"]) ) {

    $sql="SELECT * from velden where veld_id =".$_GET["veldID"];

    $tblVeld = getData($sql, "fetch");

    $veldID = $_GET["veldID"];
}
?>
    <section>
    <div class="container mt-4">
    <h1><?php echo $tblVeld["veld_name"] ?></h1>
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide pointer-event" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                    <img src=<?php echo "images/".$tblVeld["veld_img"] ?> class="d-block w-100" alt="ijmuiden.jpg"><!--src en alt dynamisch maken -->
                    </div>
                    <div class="carousel-item active">
                    <img src=<?php echo "images/".$tblVeld["veld_img2"] ?> class="d-block w-100" alt="ijmuiden-strand.jpg"><!--src en alt dynamisch maken -->
                    </div>
                    <div class="carousel-item">
                    <img src=<?php echo "images/".$tblVeld["veld_img3"] ?> class="d-block w-100" alt="ijmuiden-hottub.jpg"><!--src en alt dynamisch maken -->
                    </div>
                    <div class="carousel-item">
                    <img src=<?php echo "images/".$tblVeld["veld_img4"] ?> class="d-block w-100" alt="ijmuiden-haard.jpg"><!--src en alt dynamisch maken -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
            <div class="col">
            <h5>Omschrijving</h5>
            <p><?php echo $tblVeld["veld_descr"] ?></p>
            </div>
        </div>
    </div>
</section>

<section>


<?php
 include "calculateprice.php";
 include "footer.php";
 ?>