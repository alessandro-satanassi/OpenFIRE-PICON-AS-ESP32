<?php
include("../res/x5engine.php");
$nameList = array("ann","ak7","aet","h8g","luj","pt4","f3x","48w","ygc","ftx");
$charList = array("M","C","X","E","7","G","V","X","6","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
