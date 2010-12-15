<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"/>
		<title>webprosjekt gruppe 14</title>
		<link href="layout.css" rel="stylesheet" type="text/css">
	</head>	
	<body>
		<div id="xinner">
			<div id="header">
			</div>
			<!--<div id ="menu">
			
				<a href="?navId=1">Hjem</a>+|+
				<a href="?navId=2">Biografie</a>|
				<a href="?navId=3">WETA</a>|
				<a href="?navId=4">Filmliste</a>
			</div>-->
				
			<?php
				echo "<div id =\"menu\">";
				$navigation = array ( 
					'1' => 'Hjem',
					'2' => 'Biografi',
					'3' => 'WETA' ,
					'4' => 'Filmliste');
				$index = 1;	
					while( list ( $key, $val ) = each ( $navigation ) )
					{
						if($_GET["navId"] == $key)
							echo "<a href=\"?navId=".$key."\" class=\"activePage\">".$val."</a>";
						else
							echo "<a href=\"?navId=".$key."\">".$val."</a>";
						if($index++ < count($navigation))
							echo "|";
					}
				echo "</div>";
				
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
		</div>
	</body>
</html>