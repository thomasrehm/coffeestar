<?php

require_once('php/include.php');

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
 
<div data-role="page" id="index">

	<div data-role="header" data-position="fixed">
		<h1>CoffeeStar</h1>
        <a href="contact.html" data-rel="dialog" data-transition="slide">Kontakt</a>

		<a href="php/login.php" data-rel="dialog" data-icon="plus" class="ui-btn-right" data-transition="slide" >Login</a>
	</div><!-- /header -->

	<div data-role="content">

	<div  data-position="fixed" id="map"> </div>
    
    <div data-inset="false"   data-type="horizontal"  data-iconpos="notext" data-position="fixed" class="foot">
       <div class="hinweis"  >
        <p>Kaffeesüchtig?? Willst du mehr als die Standard-Cafés? Dann melde dich an.</p>
       </div>


    <div data-role="collapsible"  data-inset="false"  data-collapsed-icon="arrow-u"  data-expanded-icon="arrow-d"  id="custom-collapsible" class="liste" data-collapsed="true">
        <h2 data-role="list-divider" role="heading" >Cafés in deiner Nähe</h2>

            <form method="POST" action="showCafe_nomember.php">
                <?php
                echo "<ul data-role=\"listview\" id=\"custom-list\" class=\"liste\">";

                $x = 0;
                while ($x < 3)
                {$cafe = mysql_fetch_array($result);

                    $x++; ?>




                    <?php
                    echo "<li>";
                    echo  "<a href=showcafe_nomember.php?kaffee_id=".$cafe["kaffee_id"]." data-transition=\"slide\">".$cafe["name"]."</a>";
                    //echo "<p>".$cafe["name"]."</p>";
                    echo "<p>".$cafe["adresse"]."</p>";

                    echo "<submit type=\"text\" name=\"kaffee_id\" value=".$cafe["kaffee_id"]." />";

                    echo "</li>";

                    if ($x==5) break;
                };

                echo "</ul>";
                ?>
            </form>
    </div><!-- /collapsible -->
    </div>


        <div data-role="footer" data-id="foo1" data-position="fixed">

        </div><!-- /footer -->
</div><!-- /footer -->	
			
	</div><!-- /index -->

</body>
</html>


