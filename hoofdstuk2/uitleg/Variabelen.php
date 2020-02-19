<?php
/**
 * User: Sanchyro Eijkemans
 * Date: 05-02-2020
 * Time: 13:45
 * File: opdracht2.1.php
 */
?>
<?php
/**
 * User: Sanchyro Eijkemans
 * Date: 17-02-2020
 * Time: 15:30
 * File: opdracht3.3.php
 */
?>

    <!-- Include the sidebar and header -->
<?php
include("../../includes/header.php");
include("../../includes/variabelen.php");
include("../../includes/menu.php");
?>

    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <?php
        $profession = "ICTer";                                  //String
        $year = 2019;                                           //Integer
        $percentage = 17.1;                                     //Float
        $subjects = array("Intenet", "Computer", "Software");   //Array
        $skills = false;                                        //Boolean

        //echo $profession;
        //var_dump($profession);

        echo "$profession in jaar {$year}%";
        echo $profession . " in jaar " . $year;
        ?>
    </main>
<?php
include("../../includes/footer.php");
?>

