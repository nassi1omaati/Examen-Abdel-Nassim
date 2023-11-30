<?php
$calcPrice = false;
$sizeFields = 0;
$numberEchtgras = 0;
$numberKunstgras = 0;

if(isset($_POST["calculate"])){
    $calcPrice = true;
}

if(isset($_POST["sizeFields"])){
    $sizeFields = $_POST["sizeFields"];
}

if(isset($_POST["numberEchtgras"])){
    $numberEchtgras = $_POST["numberEchtgras"];
}

if(isset($_POST["numberKunstgras"])){
    $numberKunstgras = $_POST["numberKunstgras"];
}
?>
<section>
    <div class="container mt-4 mb-4 bg-white border border-white">
        <form name="calculate" method="post" action="veld.php?veldID=<?php echo $veldID;?>">
            <div class="row px-4 py-4">
                <div class="col-12 mb-4">
                    <h2>Bereken prijs</h2>
                </div>
                <div class="col">
                    <h5 class="pb-2">Hoeveel vierkante meter en soort gras</h5>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Hoeveel m²</span>
                        <input type="number" class="form-control" name="sizeFields" id="sizeFields" value="<?php echo $sizeFields; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Echt gras velden</span>
                        <input type="number" class="form-control" name="numberEchtgras" value="<?php echo $numberEchtgras; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Kunst gras velden</span>
                        <input type="number" class="form-control" name="numberKunstgras" id="numberKunstgras" value="<?php echo $numberKunstgras; ?>">
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="d-grid d-md-flex justify-content-md-end">
                    <button class="btn btn-dark text-light" type="submit" value="calcPrice" name="calculate">Omrekenen</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php 
if($calcPrice == true){
    $totalPriceA =  ($numberEchtgras * $sizeFields) * $tblVeld["veld_price_a"];
    $totalPriceC =  ($numberKunstgras * $sizeFields) * $tblVeld["veld_price_c"];
    ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="alert alert-white" role="alert">
                        <h5>Berekende prijs</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Informatie</th>
                                    <th scope="col">Prijs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Prijs echt gras veld (<?php echo $numberEchtgras ."x &euro;".  number_format($tblVeld["veld_price_a"], 2) ."x". $sizeFields; ?>)</td>
                                    <td>&euro; <?php echo $totalPriceA ?></td>
                                </tr>
                                <tr>
                                    <td>Prijs kunst gras veld (<?php echo $numberKunstgras ."x &euro;".  number_format($tblVeld["veld_price_c"], 2) ."x". $sizeFields; ?>)</td>
                                    <td>&euro; <?php echo  number_format($totalPriceC, 2); ?></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td><strong>Totaal</strong></td>
                                <td><strong>&euro; <?php echo  number_format(($totalPriceA + $totalPriceC), 2) ;?></strong></td>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } //einde if statement ?>
