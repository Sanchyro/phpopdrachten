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
    include("../includes/menu.php");
?>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
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
        $countryName= "nederland";
        $currentAge = 17;

        echo "<p>Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.</p>";

        //Belgie
        $belgieLaag = 16;
        $belgieHoog = 18;

        //Bulgarije
        $bulgarijeLaag = 18;
        $bulgarijeHoog = 18;

        //Cyprus
        $cyprusLaag = 17;
        $cyprusHoog = 17;

        //Nederland
        $nederlandLaag = 18;
        $nederlandHoog = 18;

        //Zweden
        $zwedenLaag = 18;
        $zwedenHoog = 20;

        if($countryName == "belgie"){
            //Als je in belgie woont
            if($currentAge < $belgieLaag)
                echo "Je mag hier geen drank drinken.";
            if($currentAge >= $belgieLaag && $currentAge < $belgieHoog)
                echo "Je mag hier zwak drank drinken.";
            if($currentAge >= $belgieHoog)
                echo "Je mag hier alle drank drinken.";

        } elseif($countryName == "bulgarije"){
            //Als je in bulgarije woont
            if($currentAge < $bulgarijeLaag)
                echo "Je mag hier geen drank drinken.";
            if($currentAge >= $bulgarijeLaag && $currentAge < $bulgarijeHoog)
                echo "Je mag hier zwak drank drinken.";
            if($currentAge >= $bulgarijeHoog)
                echo "Je mag hier alle drank drinken.";

        } elseif($countryName == "cyprus"){
            //Als je in cyprus woont
            if($currentAge < $cyprusLaag)
                echo "Je mag hier geen drank drinken.";
            if($currentAge >= $cyprusLaag && $currentAge < $cyprusHoog)
                echo "Je mag hier zwak drank drinken.";
            if($currentAge >= $cyprusHoog)
                echo "Je mag hier alle drank drinken.";

        } elseif($countryName == "nederland"){
            //Als je in nederland woont
            if($currentAge < $nederlandLaag)
                echo "Je mag hier geen drank drinken.";
            if($currentAge >= $nederlandLaag && $currentAge < $nederlandHoog)
                echo "Je mag hier zwak drank drinken.";
            if($currentAge >= $nederlandHoog)
                echo "Je mag hier alle drank drinken.";

        } elseif($countryName == "zweden"){
            //Als je in zweden woont
            if($currentAge < $zwedenLaag)
                echo "Je mag hier geen drank drinken.";
            if($currentAge >= $zwedenLaag && $currentAge < $zwedenHoog)
                echo "Je mag hier zwak drank drinken.";
            if($currentAge >= $zwedenHoog)
                echo "Je mag hier alle drank drinken.";
        }
    ?>
</main>

<?php
    include("../includes/footer.php");
?>

