<!DOCTYPE html>
<html>
<head>
<title><?php 
if(isset($_GET['p'])) $p=$_GET['p'];
	else $p="";
	if	($p=="") 		$cim="Kezdolap"									;else
	if 	($p=="szolga") 	$cim="Szolgáltatásaink" 									;else
	if 	($p=="eler") 	$cim="Elérhetőségek"							;else
	if 	($p=="gyik") 	$cim="Gyakori Kérdések" 					;else
	if 	($p=="rol") 	$cim="Rólunk" 								;else
	if 	($p=="ar") 		$cim="Áraink"								;else
	if 	($p=="kar") 	$cim="Karrier"								;else
	print $cim;
?></title>
</head>
<body>
<div name="fejlec">
Menus Weboldal
</div>



<div name="menu">
<a href="./"	>Kezdőlap</a>
<a href="./?p=szolga"	>Szolgáltatásaink</a>
<a href="./?p=gyik"		>GYIK</a>
<a href="./?p=rol"		>Rólunk</a>
<a href="./?p=eler"		>Elérhetőségek</a>
<a href="./?p=ar"		>Áraink</a>
<a href="./?p=kar"		>Karrier</a>
</div>

<div name="tartalom">
<?php
	if(isset($_GET['p'])) $p=$_GET['p'];
	else $p="";
	if	($p=="") 		include("kezdolap.php")									;else
	if 	($p=="szolga") 	include("szolga.php") 									;else
	if 	($p=="eler") 	include("elerhetosegek.php")							;else
	if 	($p=="gyik") 	print 	"<h1>Gyakori Kérdések</h1>" 					;else
	if 	($p=="rol") 	print 	"<h1>Rólunk</h1>" 								;else
	if 	($p=="ar") 		print 	"<h1>Áraink</h1>"								;else
	if 	($p=="kar") 	print 	"<h1>Karrier</h1>"								;else
	print ("Error");
?>
</div>

</body>
</html>