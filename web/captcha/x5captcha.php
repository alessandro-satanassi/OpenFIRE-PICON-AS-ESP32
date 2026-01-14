<?php
include("../res/x5engine.php");
$nameList = array("pzc","lte","kp2","pjc","jx6","jwg","pm6","8f3","z5y","mrg");
$charList = array("E","4","K","Y","C","8","2","P","G","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
