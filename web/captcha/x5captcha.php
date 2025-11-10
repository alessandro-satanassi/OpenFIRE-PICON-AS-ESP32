<?php
include("../res/x5engine.php");
$nameList = array("mdn","fha","e77","gf4","84d","623","w4n","t8d","v53","sn4");
$charList = array("N","C","2","K","V","G","6","F","J","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
