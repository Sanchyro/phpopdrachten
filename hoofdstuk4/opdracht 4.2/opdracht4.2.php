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
        include("script.php");

        echo "Voor het vak <b>" . $courseName . "</b> heb je <b>" . $teacherName . "</b> als docent."
        ?>
    </main>

<?php
include("../../includes/footer.php");
?>