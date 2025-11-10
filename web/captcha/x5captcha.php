<?php
include("../res/x5engine.php");
$nameList = array("26s","vrw","74z","meg","vh5","dsg","j5v","vc7","w2d","zag");
$charList = array("H","7","D","2","A","W","W","8","5","R");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
