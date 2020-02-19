<?php
/**
 * User: Sanchyro Eijkemans
 * Date: 05-02-2020
 * Time: 13:45
 * File: opdracht2.1.php
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
    <!-- The code -->
    <h3>Taak 2</h3>
    <?php
        $text1 = "Hallo";
        $text2 = "toch een makkelijke taal";
        $text3 = "wat is";
        $text4 = "PHP";
        $text5 = "nooit gedacht dat";
        $text6 = "de ingewikkelde installatie";
        $text7 = "Fijn toch?";
        $text8 = "ondanks";
        $text9 = "eigenlijk";
        $text10 = "blijkt te zijn"
    ?>
    <?php
        echo "<p>$text1 $text3 $text4 $text2</p>";
        echo "<p>$text3 $text6 $text7</p>";
        echo "<p>$text5 $text4 $text2 $text3</p>";
    ?>
    <h3>Taak 3</h3>
    <?php
        echo "<p>$text1, $text3 $text4, $text8 $text6 $text2?</p>";
        echo "<p>$text7 $text5 $text4 $text9 $text2 $text10!</p>";
    ?>
</main>

<?php
include("../includes/footer.php");
?>
