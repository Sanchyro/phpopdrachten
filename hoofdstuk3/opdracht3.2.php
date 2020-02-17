<?php
/**
 * User: Sanchyro Eijkemans
 * Date: 17-02-2020
 * Time: 15:30
 * File: opdracht3.2.php
 */
?>

<!-- Include the sidebar and header -->
<?php
include("../includes/header.php");
include("../includes/variabelen.php");
?>

<?php

    //Default settings
    $trafficLightColor = "groen";
    $ambulanceComing = false;
    $driveOn = true;

    if($ambulanceComing || $trafficLightColor != "groen"){
        //If there is a ambulance coming, or if the traffic light is NOT green
        $driveOn = false;
    } else {
        //If there is no ambulance coming and the traffic light is green
        $driveOn = true;
    }

    //Echo the message
    echo "<p style='color:" . ($driveOn ? "green" : "red") . "'>U " . ($driveOn ? "mag doorrijden" : "moet stoppen") . "</p>";
?>
<!-- Creating a table -->
    <table>
        <!-- Creating a head -->
        <thead>
            <tr>
                <td></td>
                <td>Groen</td>
                <td>Rood</td>
                <td>Oranje</td>
            </tr>
        </thead
        <!-- Creating a body -->
        <tbody>
            <tr>
                <!-- When a ambulance is comming -->
                <td>true</td>
                <?php
                    $ambulanceComing = true;

                    //Traffic Light is green
                    $trafficLightColor = "groen";

                    //The check
                    if($ambulanceComing || $trafficLightColor != "groen"){
                        $driveOn = false;
                    } else {
                        $driveOn = true;
                    }

                    //Echo the results
                    echo "<td>" . ($driveOn  ? "true" : "false") . "</td>";

                    //Traffic Light is red
                    $trafficLightColor = "red";

                    //The check
                    if($ambulanceComing || $trafficLightColor != "groen"){
                        $driveOn = false;
                    } else {
                        $driveOn = true;
                    }

                    //Echo the results
                    echo "<td>" . ($driveOn  ? "true" : "false") . "</td>";

                    //Traffic Light is orange
                    $trafficLightColor = "oranje";

                    //The check
                    if($ambulanceComing || $trafficLightColor != "groen"){
                        $driveOn = false;
                    } else {
                        $driveOn = true;
                    }

                    //Echo the results
                    echo "<td>" . ($driveOn  ? "true" : "false") . "</td>";
                ?>
            </tr>
            <tr>
                <!-- When there is no ambulance coming -->
                <td>false</td>
                <?php
                    $ambulanceComing = false;

                    //Traffic Light is green
                    $trafficLightColor = "groen";

                    //The check
                    if($ambulanceComing || $trafficLightColor != "groen"){
                        $driveOn = false;
                    } else {
                        $driveOn = true;
                    }

                    //Echo the results
                    echo "<td>" . ($driveOn  ? "true" : "false") . "</td>";

                    //Traffic Light is red
                    $trafficLightColor = "red";

                    //The check
                    if($ambulanceComing || $trafficLightColor != "groen"){
                        $driveOn = false;
                    } else {
                        $driveOn = true;
                    }

                    //Echo the results
                    echo "<td>" . ($driveOn  ? "true" : "false") . "</td>";

                    //Traffic Light is orange
                    $trafficLightColor = "oranje";

                    //The check
                    if($ambulanceComing || $trafficLightColor != "groen"){
                        $driveOn = false;
                    } else {
                        $driveOn = true;
                    }

                    echo "<td>" . ($driveOn  ? "true" : "false") . "</td>";
                ?>
            </tr>
        </tbody>
    </table>
<?php
    include("../includes/footer.php.php");
?>

