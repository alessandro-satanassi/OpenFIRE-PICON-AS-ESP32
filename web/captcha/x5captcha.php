<?php
include("../res/x5engine.php");
$nameList = array("6y7","hrn","6jj","ca5","7u3","ss6","s8f","gsw","gzl","at6");
$charList = array("8","S","2","L","Y","X","V","W","S","Z");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
