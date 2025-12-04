<?php
include("../res/x5engine.php");
$nameList = array("ltv","k2w","elp","vdm","xt8","km6","j4s","6wd","zyn","ypl");
$charList = array("Y","C","V","7","H","H","G","G","H","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
