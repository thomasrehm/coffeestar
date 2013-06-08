<?php
//session_start();
include('memberhead.inc.php')



?>


<?php

$thisPage = "index";

?>



<div data-role="page" <?php echo "id=\"" . $thisPage . "\"" ?>>

    <div data-role="header" data-position="fixed">

        <!--        <a href="../contact.html" data-rel="dialog"data-transition="slidedown">Kontakt</a>-->

        <a href="logout.php" data-icon="minus" class="ui-btn-right" data-transition="slidedown">Logout</a>

        <h1>CoffeeStar</h1>
    </div>
    <!-- /header -->


    <div data-role="content">

        <div data-position="fixed" id="map"></div>

        <?php
        $sql = "SELECT * FROM `kaffee_db`";




        ?>
        <!--<script>

            var startlat = position.coords.latitude;
            var startlng = position.coords.longitude;
        </script>
        -->


        <div data-inset="false" data-type="horizontal" data-iconpos="notext" data-position="fixed">
            <div data-role="collapsible" data-inset="false" data-collapsed-icon="arrow-u" data-expanded-icon="arrow-d"
                 id="custom-collapsible" class="Caffeeliste" data-collapsed="true">
                <h2 data-role="list-divider" role="heading">Cafés in deiner Nähe</h2>

                <form method="POST" action="showCafe.php">


                    <?php
                    /*


                        $sql ="SELECT * SQRT(
                        POW(69.1 * (lat - [startlat]), 2) +
                        POW(69.1 * ([startlng] - lng) * COS(latitude / 57.3), 2)) AS distance
                    FROM 'kaffee_db' HAVING distance < 25 ORDER BY distance";*/

                    $result = mysql_query($sql);


                    echo "<ul data-role=\"listview\" id=\"custom-list\" class=\"caffeeliste\">";

                    $x = 0;
                    while ($x < 3) {
                        $cafe = mysql_fetch_array($result);

                        $x++;
                        echo "<li>";
                        echo "<a href=showcafe.php?kaffee_id=" . $cafe["kaffee_id"] . " data-transition=\"slide\">" . $cafe["name"] . "</a>";
                        //echo "<p>".$cafe["name"]."</p>";
                        echo "<p>" . $cafe["adresse"] . "</p>";

                        echo "<submit type=\"text\" name=\"kaffee_id\" value=" . $cafe["kaffee_id"] . " />";

                        echo "</li>";

                        if ($x == 5) break;
                    };

                    echo "</ul>";
                    ?>
                </form>

            </div>
            <!-- /collapsible -->
        </div>



        <?php include('footer.inc.php'); ?>





