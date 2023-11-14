<?php

//haal de ingevulde velden van het formulier op
$calcPrice = false;
$numberFields = 0;
$numberEchtgras = 0;
$numberKunstgras = 0;
$ArrAdditions = [];
$selAdditions = [];
$totalAdditions = 0;
$additionNames = "";
$AmountAdd = [];

//variabelen voor de prijzen
$VeldPriceA = $tblVeld["veld_price_a"];
$VeldPriceC = $tblVeld["veld_price_c"];

//Checken of velden van de form calculate gesubmit zijn en iemand de prijs wil berekenen
//en natuurlijk variabelen de juiste waarde geven
if(isset($_POST["calculate"])){
    $calcPrice = true;
}

if(isset($_POST["numberFields"])){
    $numberFields = $_POST["numberFields"];
}

if(isset($_POST["numberEchtgras"])){
    $numberEchtgras = $_POST["numberEchtgras"];
}

if(isset($_POST["numberKunstgras"])){
    $numberKunstgras = $_POST["numberKunstgras"];
}

if(isset($_POST["additions"])){
    $ArrAdditions = $_POST["additions"];
}


?>
<section>
<div class="container mt-4 mb-4 bg-white border border-white">
    <!-- het formulier vullen met de juiste velden -->
    <form name="calculate" method="post" action="huisjes.php?veldID=<?php echo $veldID;?>">
        <div class="row px-4 py-4">
            <div class="col-12 mb-4">
                <h2>Bereken prijs</h2>
            </div>
            <div class="col">
                    <h5 class="pb-2">Hoeveel vierkante kilometer en soort gras</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Hoeveel m²</span>
                            <input type="number" class="form-control" name="numberFields" id="numberFields" placeholder="Aantal nachten" aria-label="Aantal nachten" value="<?php echo $numberFields; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Echt gras</span>
                            <input type="number" class="form-control" name="numberEchtgras" id="numberEchtgras" placeholder="Aantal volwassenen" aria-label="Aantal volwassenen" value="<?php echo $numberEchtgras; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Kunst gras</span>
                            <input type="number" class="form-control" name="numberKunstgras" id="numberKunstgras" placeholder="Aantal kinderen" aria-label="Aantal kinderen" value="<?php echo $numberKunstgras; ?>">
                        </div>
            </div>
           
        </div>
        <div class="col-12 mb-4">
            <div class="d-grid d-md-flex justify-content-md-end">
                <!--submit het formulier calculate -->
                <button class="btn btn-dark text-light" type="submit" value="calcPrice" name="calculate">Omrekenen</button>
            </div>
        </div>
    </form>
</div>
<section>

<?php 

//berekende prijs laten zien als die is opgevraagd
if($calcPrice == true){

    //gebruiken omdat we bij het laatste item natuurlijk geen komma willen
    $counter = 1;

    foreach($selAdditions as $key => $value){
        $additionNames .= $key . " (x" . $AmountAdd[$key] . ")";
        //komma toevoegen als het niet het laatste item is
        if($counter < count($selAdditions)) {$additionNames .= ", ";}

        //CHECK de totaalprijs van alle additions bij elkaar berekenen, nu maar even alleen een neerzetten nog toevoegen dat hij ze allemaal optelt
        $totalAdditions = $totalAdditions + $value * $AmountAdd[$key];

        $counter++;
    }

   
   //prijzen ophalen $tblVeld is gevuld in huisjes.php dus ik had het ook daar kunnen aanmaken, check of dit handig is
    // $VeldPriceA = $tblVeld["veld_price_a"];
    // $VeldPriceC = $tblVeld["veld_price_c"];

    //prijs voor volwassenen
    $totalPriceA =  ($numberEchtgras * $numberFields) * $VeldPriceA;
    //CHECK prijs voor kinderen, berekening nog maken!
    $totalPriceC =  ($numberKunstgras * $numberFields) * $VeldPriceC;
    //CHECK alle additions * aantal dagen/nachten nog berekenen
    $totalAdditions =  $totalAdditions * $numberFields;

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
                            <!-- CHECK het is eigenlijk wel handig om de prijs goed op te schrijven met een , en twee cijfers achter de komma, ik hebt het hier alvast neergezet maar moet nog wel de functie FormatNumber() afmaken, dit geeft nu natuurlijk een foutmelding... -->
                            <td>Prijs echt gras veld (<?php echo $numberEchtgras ."x &euro;".  number_format($VeldPriceA, 2) ."x". $numberFields; ?>)</td>
                            <td>&euro; <?php echo $totalPriceA ?></td>
                        </tr>
                        <tr>
                            <td>Prijs kunst gras veld (<?php echo $numberKunstgras ."x &euro;".  number_format($VeldPriceC, 2) ."x". $numberFields; ?>)</td>
                            <td>&euro; <?php echo  number_format($totalPriceC, 2); ?></td>
                        </tr>
                      
                    </tbody>
                    <tfoot>
                        <td><strong>Totaal</strong></td>
                        <td><strong>&euro; <?php echo  number_format(($totalPriceA + $totalPriceC + $totalAdditions), 2) ;?></strong></td>
                    </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } //einde if statement ?>