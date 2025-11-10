<?php
include("../res/x5engine.php");
$nameList = array("mvm","wru","xxx","z33","gg3","zjm","yu7","jlw","2cp","lgh");
$charList = array("L","L","8","R","F","E","3","5","8","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
