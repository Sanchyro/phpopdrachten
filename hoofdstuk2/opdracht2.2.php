<?php
/**
 * User: Sanchyro Eijkemans
 * Date: 05-02-2020
 * Time: 13:45
 * File: opdracht2.1.php
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Opdrachten</title>
        <link href="../css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
        </header>
        <aside>
            <h2>Menu</h2>
            <ul>
                <li>
                    Hoofdstuk 2
                    <ul>
                        <li>
                            <a href="../hoofdstuk2/opdracht2.1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk2/opdracht2.2.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    Hoofdstuk 3
                    <ul>
                        <li>
                            <a href="../hoofdstuk3/opdracht3.1.php">Opdracht 3.1</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk3/opdracht3.2.php">Opdracht 3.2</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk3/opdracht3.3.php">Opdracht 3.3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    Hoofdstuk 4
                    <ul>
                        <li>
                            <a href="../hoofdstuk4/opdracht4.1.php">Opdracht 4.1</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk4/opdracht4.2.php">Opdracht 4.2</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk4/opdracht4.3.php">Opdracht 4.3</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk4/opdracht4.4.php">Opdracht 4.4</a>
                        </li>
                    </ul>
                </li>
                <li>Hoofdstuk 5
                    <ul>
                        <li>
                            <a href="../hoofdstuk5/opdracht5.1.php">Opdracht 5.1</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk5/opdracht5.2.php">Opdracht 5.2</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk5/opdracht5.3.php">Opdracht 5.3</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk5/opdracht5.4.php">Opdracht 5.4</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
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
    </body>
</html>