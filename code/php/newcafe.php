<?php
require_once('db.php');

$name = $_POST['name'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$inhaber = $_POST['inhaber'];
$adresse = $_POST['adresse'];
$innen = $_POST['innen'];
$aussen = $_POST['aussen'];
$essen = $_POST['essen'];
$getraenke = $_POST['getraenke'];
$cocktails = $_POST['cocktails'];
$hipster = $_POST['hipster'];
$greise = $_POST['greise'];
$business = $_POST['business'];
$joungster = $_POST['joungster'];
$normalo = $_POST['normalo'];
$usersystem_id = $_SESSION['user_id'];


$sql = "INSERT INTO
        kaffee_db (adresse, name, lat, lng, inhaber, innen, aussen, essen, getraenke, cocktails, hipster, greise, business, normalo, joungster, usersystem_id)
        VALUES
        (:adresse, :name, :lat, :lng,  :inhaber, :innen, :aussen, :essen, :getraenke, :cocktails, :hipster, :greise, :business, :normalo, :joungster, :usersystem_id)";


$query = $db->prepare($sql);

$query->execute(
    array(
        'name' => $name,
        'lat' => $lat,
        'lng' => $lng,
        'adresse' => $adresse,
        'inhaber' => $inhaber,
        'innen' => $innen,
        'aussen' => $aussen,
        'essen' => $essen,
        'getraenke' => $getraenke,
        'cocktails' => $cocktails,
        'hipster' => $hipster,
        'greise' => $greise,
        'business' => $business,
        'normalo' => $normalo,
        'joungster' => $joungster,
        'usersystem_id' => $usersystem_id

    )
);

?>


<div data-role="dialog" id="success">
    <div data-role="header">
        <h1>Café eingetragen</h1>
    </div>
    <div data-role="content">
        <h3>Vielen Dank für deinen Eintrag!</h3>


        <a href="index_member.php" data-role="button">Zur Karte</a>
    </div>
</div>







