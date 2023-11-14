<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/Logo1.png" width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="service.php">Service</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="over_ons.php">Over ons</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="registreren.php">Word lid</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="login.php">login</a></li>


                <li class="nav-item dropdown">
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        //haal alle velden op uit de database, gebruik hiervoor de functie getData() geef aan getData de juiste argumenten mee
                        //1. de sql statement ("SELECT * FROM `velden`") en 2 of je alle rijen (fetchAll) of maar een rij als resultaat terug wil zien.
                        //In dit geval is het al juist voor je ingevuld
                        $tblVeld = getData("SELECT * FROM `velden`", "fetchAll");

                    

                        //maak hieronder een forach loop om door de array $tblVeld te lopen
                        //zet hier de juiste code neer voor de foreach loop
                        foreach ($tblVeld as $veld)  {
                        ?>
                            <li><a class="dropdown-item" href="veld.php?veldID=<?php echo $veld["veld_id"];?>"><?php echo $veld["veld_name"];?></a></li>
                            <!--gebruik jij niet de naam $veld in je foreach loop pas de code op regel 22 dan aan! -->
                        <?php
                        } //end foreachloop alvast voor je neergezet ?>
                        </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

