<!--
	Developer: 	George "DevgruSEAL"
	Date:		08/08/2011 3:40a
	Description:
				NMS stands for "News Management System"
				The purpose of this program is to create a central,
				easy-to-manage and lightweight solution for article management.
				
				This is the front-end, publically viewable page.
-->	
<html>			
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>Testing Header</h1>
			</div>
			<div id="menu">
				<strong>Menu</strong><br />
				<a href="index.php">Home<br />
				<a href="?page=news">News</a><br />
			</div>
			
			<div id="content">
				<?php 
					include("includes/content.php");
				?>
			</div>
		</div>
	</body>
</html>

