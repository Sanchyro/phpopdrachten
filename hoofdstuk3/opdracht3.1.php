<?php
/**
 * User: Sanchyro Eijkemans
 * Date: 14-02-2020
 * Time: 13:49
 * File: opdracht3.1.php
 */
?>

    <!-- Include the sidebar and header -->
<?php
include("../includes/header.php");
include("../includes/variabelen.php");
?>

    <!-- The code -->
<?php
$evenement = "Elfstedentocht";                                  //String
$evenementFries = "Alvestêdetocht";                             //String
$afstandKM = 200;                                               //Integer
$activiteit = "schaatstocht";                                   //String
$ijsType = "natuurijs";                                         //String
$vereniging = "Koninklijke Vereniging De Friesche Elf Steden";  //String
$startPlaats = "Leeuwarden";                                    //String
$startProvincie = "Friesland";                                  //String
$verreden = 15;                                                 //Integer
$eersteJaar = 1909;                                             //Integer
$maxPerJaar = 1;                                                //Integer

$verhaal = "De " . $evenement . "(Fries: " . $evenementFries . ") is een " . $afstandKM . " kilometer lange " . $activiteit . " over " . $ijsType . " die wordt georganiseerd
 door de " . $vereniging . ". " . $startPlaats . ", de hoofdstad van " . $startProvincie . ", is start-en aankomstplaats. 
 De " . $evenement . " is inmiddels " . $verreden . " maal verreden en werdvoor het eerst in " . $eersteJaar . " gereden en wordt maximaal " . $maxPerJaar . " keer per winter gehouden.";

echo $verhaal;
?>

<?php
include("../includes/footer.php");
?>
