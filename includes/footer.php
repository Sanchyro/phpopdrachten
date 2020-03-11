        <footer>
            <?php
            date_default_timezone_set("Europe/Amsterdam");
            $uur = date("H");
            $time = "Goedendag";
            if($uur >= 0 && $uur < 5)
                $time = "Goedennacht";
            elseif($uur >= 5 && $uur < 12)
                $time = "Goedenochtend";
            elseif($uur >= 12 && $uur < 17)
                $time = "Goedenmiddag";
            elseif($uur >= 17 && $uur < 24)
                $time = "Goedenavond";

            echo $time;
            ?>
            bezoeker, &copy;
            <?php
            echo $year;
            ?>
            -
            <?php
            echo $name;
            ?>
        </footer>
    </body>
</html>