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
        <h2>Uitwerkingen</h2>g
        <form action="form_data.php" method="get">
            <label for="company">Bedrijfsnaam:</label> <input type="text" name="company" id="company"><br>
            <label for="firstname">Voornaam:</label> <input type="text" name="firstname" id="firstname"><br>
            <label for="lastname">Achternaam:</label> <input type="text" name="lastname" id="lastname"><br>
            <label for="phone">Telefoonnummer:</label> <input type="number" name="phone" id="phone"><br>
            <label for="email">E-mail:</label> <input type="email" name="email" id="email"><br>
            <label for="message">Bericht</label> <textarea type="text" name="message" id="message"></textarea><br>
            <input type="submit" value="Versturen">
        </form>
    </main>

<?php
include("../../includes/footer.php");
?>