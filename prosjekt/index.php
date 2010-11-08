<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"/>
		<title>web-prosjekt gruppe 14</title>
		<link href="layout.css" rel="stylesheet" type="text/css">
	</head>	
	<body>
		<div id="xinner">
			<div id="header">
			</div>
			<div id ="menu">
				<a href="?navId=1">Home</a>|
				<a href="?navId=2">Biografie</a>|
				<a href="?navId=3">WETA</a>|
				<a href="?navId=4">Filmliste</a>
				</div>
			<?php
				switch($_GET["navId"]) 
				{
				case 1:
					include("home.html");
					break;	
				case 2:
					include("biografie.html");
					break;
				case 3:
					include("weta.html");
					break;
				case 4:
					include("filmer.html");
					break;
				case 5:
					include("kilder.html");
					break;	
				case 6:
					include("sitemap.html");
					break;	
				case 7:
					include("validator.html");
					break;
					
				default:
					include("home.html");
					break;
				}
			?>	
			<div id="footer">
				<a href="http://www.stud.hio.no/~s163468/Gruppe14/index.html"target="_blank">Prosjektsiden</a>|
				<a href="?navId=5">Kilder</a>|
				<a href="?navId=6">Site-map</a>|
				<a href="?navId=7">Validator</a>|
				<a href="mailto:blackbondi@msn.com">Kontakt</a>
			</div>		
		</div><br>
		<img src="images/html5.jpg" alt="Valid HTML 5">
		<img src="images/css.jpg" alt="Valid CSS 2.1">
	</body>
</html>