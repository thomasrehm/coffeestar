<?php
$thisPage = "addPoint";
include('../php/memberhead.inc.php');
?>

<div data-role="page" <?php echo "id=\"" . $thisPage . "\"" ?> >

    <div data-role="header" data-position="fixed">

        <!--  <a href="../contact.html" data-rel="dialog"data-transition="slidedown">Kontakt</a>-->

        <a href="../php/logout.php" data-icon="minus" class="ui-btn-right" data-transition="slidedown">Logout</a>


        <h1>neues Cafe hinzufügen</h1>
    </div>
    <!-- /header -->

    <div data-role="content">
        <div>
            <p>Es wird deine aktuelle Position als neues Café hinzugefügt</p>

            <form method="post" action="newcafe.php" id="addPointForm">
                <div data-role="fieldcontain">

                    <input type="text" name="name" placeholder="Name des Cafe" required/>


                    <input type="text" name="inhaber" placeholder="Inhaber" required/>

                    <p>Die Adresse an deiner Position ist:</p>
                    <textarea rows="7" cols="70" type="text" name="adresse" placeholder="Adresse des Cafés" required
                              id="geocodedAdress"></textarea>

                </div>


                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <legend>Das gibt es alles</legend>
                        <input type="checkbox" name="innen" id="checkbox-1" class="custom" value="1"/>
                        <label for="checkbox-1">Sitzplätze innen</label>
                        <input type="checkbox" name="aussen" id="checkbox-2" class="custom" value="1"/>
                        <label for="checkbox-2">Sitzplätze außen</label>
                        <input type="checkbox" name="essen" id="checkbox-3" class="custom" value="1"/>
                        <label for="checkbox-3">Essen</label>
                        <input type="checkbox" name="getraenke" id="checkbox-4" class="custom" value="1"/>
                        <label for="checkbox-4">Getränke</label>
                        <input type="checkbox" name="cocktails" id="checkbox-5" class="custom" value="1"/>
                        <label for="checkbox-5">Cocktails</label>
                    </fieldset>
                </div>

                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <legend>Wähle das Klientel aus:</legend>
                        <input type="checkbox" name="hipster" id="checkbox-6" class="custom" value="1"/>
                        <label for="checkbox-6">Hipster</label>
                        <input type="checkbox" name="greise" id="checkbox-7" class="custom" value="1"/>
                        <label for="checkbox-7">Greise</label>
                        <input type="checkbox" name="business" id="checkbox-8" class="custom" value="1"/>
                        <label for="checkbox-8">Business</label>
                        <input type="checkbox" name="normalo" id="checkbox-9" class="custom" value="1"/>
                        <label for="checkbox-9">Normalo</label>
                        <input type="checkbox" name="joungster" id="checkbox-10" class="custom" value="1"/>
                        <label for="checkbox-10">Joungster</label>
                    </fieldset>
                </div>


                <input type="hidden" name="lat" value"">
                <input type="hidden" name="lng" value"">


                <input type="submit" value="Cafe anlegen">


            </form>

        </div>
    </div>

    <?php include('../php/footer.inc.php'); ?>
