<?php
/**
 * User: Sanchyro Eijkemans
 * Date: XX-XX-XXXX
 * Time: XX:XX
 * File: opdrachtX.X.php
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
        //While Loop
        $counter = 0;
        $text = "";
        while($counter<=10){
            $text .= $counter . "<br>";
            $counter++;
        }
        echo $text;

        //For Loop
        for($teller=0;$teller<=10;$teller++){
            echo "wat " . $teller . "<br>";
        }
        ?>
    </main>

<?php
include("../../includes/footer.php");
?>