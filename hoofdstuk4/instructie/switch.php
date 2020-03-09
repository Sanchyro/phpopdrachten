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
            $day = date("l");
            switch($day){
                case "Monday":
                    echo "Het is maandag";
                    break;
                case "Thuesday":
                    echo "Het is dinsdag";
                    break;
                case "Wednesday":
                    echo "Het is Woensdag";
                    break;
                case "Thursday":
                    echo "Het is donderdag";
                    break;
                case "Friday":
                    echo "Het is vrijdag";
                    break;
                case "Saturday":
                    echo "Het is zaterdag";
                    break;
                case "Sunday":
                    echo "Het is zondag";
                    break;
                default:
                    echo "De dag is niet succesvol opgehaald";
                    break;
            }
        ?>
    </main>

<?php
include("../../includes/footer.php");
?>