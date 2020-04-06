<?php
/**
 * User: Sanchyro Eijkemans
 * Date: 06-04-2020
 * Time: 15:15
 * File: opdracht5.4.php
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
        <!-- Code -->
        <form action="opdracht5.4.php" method="post">
            <table>
                <tr>
                    <th>Komt er een ambulance aan?</th>
                    <td>
                        <input type="radio" name="ambulance" value="ja">Ja
                        <input type="radio" name="ambulance" value="nee">Nee
                    </td>
                </tr>
                <tr>
                    <th>Stoplicht kleur?</th>
                    <td>
                        <input type="radio" name="trafficLightColor" value="rood">Rood
                        <input type="radio" name="trafficLightColor" value="groen">Groen
                        <input type="radio" name="trafficLightColor" value="oranje">Oranje
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Verzend"></td>
                </tr>
            </table>
        </form>

        <?php
        //de action is hetzelfde script als het formulier, eerst testen of het formulier
        //verzonden is
        if (isset($_POST['submit'])) {
            echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
        }
        //Een van de of beide radiobuttons is/zijnniet aangevinkt
        if (!isset($_POST['trafficLightColor']) || !isset($_POST['ambulance'])) {
            echo "Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt.";
        }else {
            $trafficLightColor = $_POST['trafficLightColor'];
            $ambulanceComing = $_POST['ambulance'];
            echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een ambulance aan.";

            //Bepalen of je wel of niet mag doorrijden
            if ($trafficLightColor == "groen" && $ambulanceComing == 'nee'){
                echo "<div class='???'>U mag doorrijden</div>";
            } else {
                echo " <div class='???'>U moet stoppen</div>";
            }
        }
        echo "</div>";
        ?>
    </main>

<?php
include("../includes/footer.php");
?>