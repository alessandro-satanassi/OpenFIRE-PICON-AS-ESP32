<?php
include("../res/x5engine.php");
$nameList = array("8wl","lch","5zy","xk4","dvk","k4w","lrc","g4m","uye","khg");
$charList = array("D","Y","K","6","U","S","Z","U","8","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
