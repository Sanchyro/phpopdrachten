<?php
/**
 * User: Sanchyro Eijkemans
 * Date: 11-03-2020
 * Time: 13:55
 * File: opdracht4.3php
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
        include("script.php");
        ?>

        <h3>Taak 2</h3>
        <?php
        echo rtrim($task2, ", ") . "<br>";
        ?>

        <h3>Taak 3</h3>
        <?php
        echo rtrim($task3, ", ") . "<br>";
        ?>

        <h3>Taak 4</h3>
        <?php
        echo $task4;
        ?>

        <h3>Taak 5</h3>
        <?php
        echo $taak5;
        ?>

        <h3>Taak 6-7</h3>
        <?php
        echo $taak6;
        ?>
    </main>

<?php
include("../../includes/footer.php");
?>