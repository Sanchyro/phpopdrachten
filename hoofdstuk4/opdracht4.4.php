<?php
/**
 * User: Sanchyro Eijkemans
 * Date: 11-03-2020
 * Time: 13:55
 * File: opdracht4.4php
 */
?>

    <!-- Include the sidebar and header -->
<?php
include("../includes/header.php");
include("../includes/variabelen.php");
include("../includes/menu.php");
?>

    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <?php
            for($day = 1;$day<8;$day++){

                $time = strtotime("+" . ($day-1) . " days");
                echo "Dag " . $day . " is " . date("l", $time) . " " . date("d-m-Y", $time) . "<br>";
            }
        ?>
    </main>

<?php
include("../includes/footer.php");
?>