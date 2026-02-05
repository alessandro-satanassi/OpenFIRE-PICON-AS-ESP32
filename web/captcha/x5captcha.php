<?php
include("../res/x5engine.php");
$nameList = array("u3h","7xr","2za","d5s","3mf","zf4","mvu","8k8","akw","5fk");
$charList = array("S","W","K","5","L","7","E","X","F","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
