<?php
$thisPage = "bla";
include('../php/memberhead.inc.php');


$kaffee_id = $_GET["kaffee_id"];
$sql = "SELECT * FROM `kaffee_db` WHERE kaffee_id = $kaffee_id";
$result = mysql_query($sql);
$cafe = mysql_fetch_array($result);

?>




<div data-role="page" data-theme="b" data-fullscreen="false" <?php echo "id=\"" . $thisPage . "\"" ?> >

    <div data-role="header" data-position="fixed">

        <a data-rel="back" data-icon="arrow-l" class="ui-btn-left" data-transition="slide">Zurück</a>

        <a href="../php/logout.php" data-icon="minus" class="ui-btn-right" data-transition="slide">Logout</a>


        <h1><?php echo $cafe["name"]; ?> bewerten</h1>
    </div>
    <!-- /header -->


    <div data-role="content">

        <div>
            <p><h4>Hiermit bewertest du das Café <strong><?php echo $cafe["name"]; ?></strong></h4>
            (<?php echo $cafe["adresse"]; ?>)</p>


            <form method="post" action="bewertung_save.php" id="rate">
                <?php echo "<input type='hidden' name='kaffee_db_id' value=\"" . $kaffee_id . "\">"; ?>

                <div data-role="fieldcontain">
                    <label for="slider-2">Geschmack/Qualität</label>
                    <input type="range" name="geschmack" id="slider-2" value="3" min="1" max="5" data-highlight="true"/>
                </div>
                <div data-role="fieldcontain">
                    <label for="slider-2">Essen/Getränke</label>
                    <input type="range" name="drinking" id="slider-2" value="3" min="1" max="5" data-highlight="true"/>
                </div>
                <div data-role="fieldcontain">

                    <label for="slider-2">Ambiente/Bedienung</label>
                    <input type="range" name="ambiente" id="slider-2" value="3" min="1" max="5" data-highlight="true"/>
                </div>
                <!--  <textarea rows="7" cols="70"type="text" name="beschreibung" placeholder="du hast 150 Zeichen frei um das Café näher zu beschreiben..."  ></textarea>-->

                <input type="submit" value="Bewertung abgeben">


            </form>


        </div>

        <?php include('../php/footer.inc.php'); ?>
