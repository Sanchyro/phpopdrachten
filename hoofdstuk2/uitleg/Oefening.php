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
        <!-- Code -->
        <?php
            //String
            $car = "Audi";

            //Boolean
            $license = true;

            /*
             * Commentaar
             */

            //Integer
            $age = 24;

            //Float
            $price = 20000.99;

            echo $car . " heeft een prijs van " . $price;
        ?>
    </main>
<?php
    include("../../includes/footer.php");
?>
