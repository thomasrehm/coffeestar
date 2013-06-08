<?php
include('memberhead.inc.php');

$thisPage = "show";


?>




<div data-role="page" <?php echo "id=\"" . $thisPage . "\"" ?>>

    <div data-role="header" data-position="fixed">

        <!--        <a href="../contact.html" data-rel="dialog"data-transition="slidedown">Kontakt</a>-->
        <a data-rel="back" data-icon="arrow-l" class="ui-btn-left" data-transition="slide">Zurück</a>
        <a href="logout.php" data-icon="minus" class="ui-btn-right" data-transition="slide">Logout</a>

        <h1>Café ansehen</h1>
    </div>
    <!-- /header -->


    <div data-role="content">

        <?php




        $check = "<li  style='background: none; background-color: lightgreen !important;' data-icon='check' data-iconpos='right'><a href='#check' data-icon='check' data-iconpos='left' data-rel='popup' data-position-to='window' data-transition='pop'>";
        $delete = "<li style='background: none; background-color: lightsalmon !important;' data-icon='delete' data-iconpos='right'><a href='#uncheck' data-icon='check' data-iconpos='left' data-rel='popup' data-position-to='window' data-transition='pop'>";
        $check_leute = "<li style='background: none; background-color: lightgreen !important;' data-icon='check' data-iconpos='right'><a href='#check_leute' data-icon='check' data-iconpos='left' data-rel='popup' data-position-to='window' data-transition='pop'>";
        $delete_leute = "<li style='background: none; background-color: lightsalmon !important;' data-icon='delete' data-iconpos='right'><a href='#uncheck_leute' data-icon='check' data-iconpos='left' data-rel='popup' data-position-to='window' data-transition='pop'>";


        // ((AVG(geschmack)+ AVG(drinking)+ AVG(ambiente))/COUNT(geschmack)
        $kaffee_id = $_GET["kaffee_id"];

        $sql1 = "SELECT * FROM `kaffee_db` WHERE kaffee_id = $kaffee_id";
        $sql2 = "SELECT AVG(geschmack), AVG(drinking), AVG(ambiente)  FROM bewertung WHERE kaffee_db_id = $kaffee_id";
        $result1 = mysql_query($sql1);
        $cafe = mysql_fetch_array($result1);

        $result2 = mysql_query($sql2);
        $rate = mysql_fetch_array($result2);
        echo "<h2>" . $cafe["name"] . "</h2>";
        echo "<p> Hier findest du uns: <strong>" . $cafe["adresse"] . "</strong></p>";
        echo "<p> Mir gehört der Laden: <strong>" . $cafe["inhaber"] . "</strong></p>";
        echo "<a href='bewertung.php?kaffee_id=" . $cafe["kaffee_id"] . "' data-role='button'  data-transition='slide'>Jetzt bewerten!</a>";

        echo "<p><strong>Bisherige Bewertungen von Besuchern:</strong></p> ";
        echo "<p>Geschmack/Qualität: " . $rate['AVG(geschmack)'] . "</p> ";
        echo "<p>Essen/Getränke: " . $rate['AVG(drinking)'] . "</p> ";
        echo "<p>Ambiente/Bedienung: " . $rate['AVG(ambiente)'] . "</p> ";

        echo "<ul data-role=\"listview\" data-inset='true'>";

        echo "</ul>";

        echo "<p><strong>Diese Sachen gibts bei uns:</strong></p>";

        echo "<ul data-role=\"listview\" data-inset='true'>";

        if ($cafe["innen"] == 1) {
            echo $check;
        } else {
            echo $delete;
        };
        echo "Sitzplätze innen</a></li>";


        if ($cafe["aussen"] == 1) {
            echo $check;
        } else {
            echo $delete;
        };
        echo "Sitzplätze aussen</a></li>";

        if ($cafe["essen"] == 1) {
            echo $check;
        } else {
            echo $delete;
        };
        echo "Essen</a></li>";

        if ($cafe["getraenke"] == 1) {
            echo $check;
        } else {
            echo $delete;
        };
        echo "Getränke (außer Kaffee)</a></li>";

        if ($cafe["cocktails"] == 1) {
            echo $check;
        } else {
            echo $delete;
        };
        echo "Cocktails/Longdrinks</a></li>";
        echo "</ul>";

        echo "<strong>Diese Typen triffst du hier öfter:</strong>";

        echo "<ul data-role=\"listview\" data-inset='true'>";

        if ($cafe["hipster"] == 1) {
            echo $check_leute;
        } else {
            echo $delete_leute;
        };
        echo "Hipster</a></li>";


        if ($cafe["greise"] == 1) {
            echo $check_leute;
        } else {
            echo $delete_leute;
        };
        echo "Greise</a></li>";

        if ($cafe["business"] == 1) {
            echo $check_leute;
        } else {
            echo $delete_leute;
        };
        echo "Business</a></li>";

        if ($cafe["normalo"] == 1) {
            echo $check_leute;
        } else {
            echo $delete_leute;
        };
        echo "Normalo</a></li>";

        if ($cafe["joungster"] == 1) {
            echo $check_leute;
        } else {
            echo $delete_leute;
        };
        echo "joungster</a></li>";
        echo "</ul>";
        ?>


    </div>
    <div data-role="popup" id="check" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
        <h3>Yeah.</h3>

        <p>In unserem Café haben wir davon reichlich.</p>

        <a data-role="button" data-rel="back" data-inline="true" data-mini="true">zurück</a>
    </div>
    <div data-role="popup" id="uncheck" data-theme="d" data-overlay-theme="b" class="ui-content"
         style="max-width:340px;">
        <h3>Sorry...</h3>

        <p>Das können wir dir leider nicht anbieten.</p>

        <a data-role="button" data-rel="back" data-inline="true" data-mini="true">zurück</a>
    </div>

    <div data-role="popup" id="check_leute" data-theme="d" data-overlay-theme="b" class="ui-content"
         style="max-width:340px;">
        <h3>Yeah.</h3>

        <p>In unserem Café sieht man diese Typen oft.</p>

        <a data-role="button" data-rel="back" data-inline="true" data-mini="true">zurück</a>
    </div>
    <div data-role="popup" id="uncheck_leute" data-theme="d" data-overlay-theme="b" class="ui-content"
         style="max-width:340px;">
        <h3>Sorry...</h3>

        <p>Diese Typen triffst du hier eher selten.</p>

        <a data-role="button" data-rel="back" data-inline="true" data-mini="true">zurück</a>
    </div>

    <?php include('footer.inc.php'); ?>


