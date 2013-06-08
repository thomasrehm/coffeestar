<?php
include('php/include.php');

$thisPage="show";


?>

<?php



// is the one accessing this page logged in or not?

if ( !isset($_SESSION['logged-in']) !== true) {

// not logged in, move to login page

    header('Location: php/index_member.php');

    exit;

}

?>
<?php
$sql = "SELECT * FROM `kaffee_db`";



$result = mysql_query($sql);
?>


<!DOCTYPE html>
<html>
<head>
    <title>CoffeeStar</title>
    <meta charset="utf-8">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="themes/gogo.min.css" />



    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/script_index.js"></script>

    <script type='text/javascript' charset='utf-8'>
        // Hides mobile browser's address bar when page is done loading.
        window.addEventListener('load', function(e) {
            setTimeout(function() { window.scrollTo(0, 1); }, 1);
        }, false);
    </script>
    <?php if (preg_match('/iphone|ipod|android/',strtolower($_SERVER['HTTP_USER_AGENT']))) ?>

</head>
<body>


<div data-role="page" <?php echo "id=\"".$thisPage."\""?>>

    <div data-role="header" data-position="fixed">

        <!--        <a href="../contact.html" data-rel="dialog"data-transition="slidedown">Kontakt</a>-->
        <a   data-rel="back" data-icon="arrow-l" class="ui-btn-left" data-transition="slide" >Zurück</a>
        <a href="php/login.php" data-rel="dialog" data-icon="plus" class="ui-btn-right" data-transition="slide" >Login</a>
        <h1>Café ansehen</h1>
    </div><!-- /header -->



    <div data-role="content" >

        <?php

     


        $check = "<li  style='background: none; background-color: lightgreen !important;' data-icon='check' data-iconpos='right'><a href='#check' data-icon='check' data-iconpos='left' data-rel='popup' data-position-to='window' data-transition='pop'>";
        $delete = "<li style='background: none; background-color: lightsalmon !important;' data-icon='delete' data-iconpos='right'><a href='#uncheck' data-icon='check' data-iconpos='left' data-rel='popup' data-position-to='window' data-transition='pop'>";
        $check_leute = "<li style='background: none; background-color: lightgreen !important;' data-icon='check' data-iconpos='right'><a href='#check_leute' data-icon='check' data-iconpos='left' data-rel='popup' data-position-to='window' data-transition='pop'>";
        $delete_leute = "<li style='background: none; background-color: lightsalmon !important;' data-icon='delete' data-iconpos='right'><a href='#uncheck_leute' data-icon='check' data-iconpos='left' data-rel='popup' data-position-to='window' data-transition='pop'>";



        $kaffee_id = $_GET["kaffee_id"];

            $sql = "SELECT * FROM `kaffee_db` WHERE kaffee_id = $kaffee_id";
            $result = mysql_query($sql);
            // echo $kaffee_id;

            $cafe = mysql_fetch_array($result);
        echo "<h2>".$cafe["name"]."</h2>";
        echo "<p> Hier findest du uns: <strong>".$cafe["adresse"]."</strong></p>";
        echo "<p> Mir gehört der Laden: <strong>".$cafe["inhaber"]."</strong></p>";
       // echo "<p>".$cafe["innen"]."</p>";

        echo "<p><strong>Diese Sachen gibts bei uns:</strong></p>";

        echo  "<ul data-role=\"listview\" data-inset='true'>";

        if ($cafe["innen"]==1) {echo $check;} else {echo $delete;};
        echo "Sitzplätze innen</a></li>";


        if ($cafe["aussen"]==1) {echo $check;} else {echo $delete;};
        echo "Sitzplätze aussen</a></li>";

        if ($cafe["essen"]==1) {echo $check;} else {echo $delete;};
        echo "Essen</a></li>";

        if ($cafe["getraenke"]==1) {echo $check;} else {echo $delete;};
        echo "Getränke (außer Kaffee)</a></li>";

        if ($cafe["cocktails"]==1) {echo $check;} else {echo $delete;};
        echo "Cocktails/Longdrinks</a></li>";
       echo "</ul>";

        echo "<strong>Diese Typen triffst du hier öfter:</strong>";

         echo  "<ul data-role=\"listview\" data-inset='true'>";

        if ($cafe["hipster"]==1) {echo $check_leute;} else {echo $delete_leute;};
        echo "Hipster</a></li>";


        if ($cafe["greise"]==1) {echo $check_leute;} else {echo $delete_leute;};
        echo "Greise</a></li>";

        if ($cafe["business"]==1) {echo $check_leute;} else {echo $delete_leute;};
        echo "Business</a></li>";

        if ($cafe["normalo"]==1) {echo $check_leute;} else {echo $delete_leute;};
        echo "Normalo</a></li>";

        if ($cafe["joungster"]==1) {echo $check_leute;} else {echo $delete_leute;};
        echo "joungster</a></li>";
       echo "</ul>";
        ?>




    </div>
    <div data-role="popup" id="check" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
        <h3>Yeah.</h3>
        <p>In unserem Café haben wir davon reichlich.</p>

        <a  data-role="button" data-rel="back" data-inline="true" data-mini="true">zurück</a>
    </div>
    <div data-role="popup" id="uncheck" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
        <h3>Sorry...</h3>
        <p>Das können wir dir leider nicht anbieten.</p>

        <a  data-role="button" data-rel="back" data-inline="true" data-mini="true">zurück</a>
    </div>

    <div data-role="popup" id="check_leute" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
        <h3>Yeah.</h3>
        <p>In unserem Café sieht man diese Typen oft.</p>

        <a  data-role="button" data-rel="back" data-inline="true" data-mini="true">zurück</a>
    </div>
    <div data-role="popup" id="uncheck_leute" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
        <h3>Sorry...</h3>
        <p>Diese Typen triffst du hier eher selten.</p>

        <a  data-role="button" data-rel="back" data-inline="true" data-mini="true">zurück</a>
    </div>


</div><!--  -->

</body>
</html>

