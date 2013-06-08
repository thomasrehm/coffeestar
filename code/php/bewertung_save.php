<?php

require_once('db.php');

$geschmack = $_POST['geschmack'];
$drinking = $_POST['drinking'];
$ambiente = $_POST['ambiente'];
$beschreibung = $_POST['beschreibung'];
$kaffee_db_id = $_POST['kaffee_db_id'];
$usersystem_id = $_SESSION['user_id'];


$sql = "INSERT INTO
        bewertung (geschmack, drinking, ambiente, beschreibung, kaffee_db_id, usersystem_id)
        VALUES
        (:geschmack, :drinking, :ambiente, :beschreibung, :kaffee_db_id, :usersystem_id)";


$query = $db->prepare($sql);

$query->execute(
    array(
        'geschmack' => $geschmack,
        'drinking' => $drinking,
        'ambiente' => $ambiente,
        'beschreibung' => $beschreibung,
        'kaffee_db_id' => $kaffee_db_id,
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

        <a href="showCafe.php?kaffee_id=<?php echo $kaffee_db_id; ?>" data-icon='arrow-l' class="ui-btn-left"
           data-transition="slide" data-role="button">zurück</a>

    </div>
</div>
