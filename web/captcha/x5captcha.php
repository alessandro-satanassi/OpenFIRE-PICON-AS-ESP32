<?php
include("../res/x5engine.php");
$nameList = array("kn3","3t6","vrz","z7d","hd4","anw","l6y","47r","fy4","c74");
$charList = array("X","K","L","2","N","2","W","X","W","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
