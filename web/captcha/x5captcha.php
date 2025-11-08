<?php
include("../res/x5engine.php");
$nameList = array("dw6","j4y","kgf","rhr","8j2","z4e","xc6","ltd","u3n","5dv");
$charList = array("C","4","Z","V","T","C","F","W","R","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
