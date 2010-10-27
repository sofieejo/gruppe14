<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"/>
		<title>web-prosjekt</title>
		<link href="layout.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div id="xinner">
			<div id="header">
				<br>
				<a href="?navId=1">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="?navId=2">Biografie</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="?navId=3">WETA</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a class="popup" href="">Filmliste</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<div class="popup">
						<ul>
							<li><a href="?navId=4">The Hobbit: Part 1</a></li>
							<li><a href="?navId=5">The Hobbit: Part 2</a></li>
							<li><a href="?navId=6">The Lovely Bones</a></li>
							<li><a href="?navId=7">Crossin the Line</a></li>
							<li><a href="?navId=8"></a>King Kong</li>
							<li><a href="?navId=9"></a>The Lost Spider Pit Sequence</li>
							<li><a href="?navId=10"></a>The Lord of the Rings Trilogy</li>
							<li><a href="?navId=11">The Frighteners</a></li>
							<li><a href="?navId=12">Forgotten Silver</a></li>
							<li><a href="?navId=13">Heavently Creatures</a></li>
							<li><a href="?navId=14">Braindead</a></li>
							<li><a href="?navId=15">Meet the Feebles</a></li>
							<li><a href="?navId=16">Bad Taste</a></li>
							<li><a href="?navId=17">The Valley</a></li>
							<li><a href="?navId="></a></li>
						</ul>
					</div>
				<a href="mailto:blackbondi@msn.com">Kontakt</a>
			</div>
			<h1>blablabla</h1>
			<br/>
			
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
				default:
					include("home.html");
					break;
				}
			?>
			
			<br/><br/>	
			<div id="footer">
				<a href="">Prosjektsiden</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="">Om oss</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="">Site-map</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="">Validator</a>
			</div>		
		</div>

	</body>
</html>