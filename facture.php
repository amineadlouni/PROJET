<!DOCTYPE HTML>


<html>
	<head>
		<title>TOUAREG 2020</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

	
			<header id="header">
				<a class="logo" href="index.html">Luxious deutsh cars</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>


			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
			</nav>


			<div id="heading" style="background-image:url(./images/vwlogo.jpg)">
				<h1>volkswagen touareg 2020</h1>
			</div>


			<section id="main" class="wrapper" style="background-color: rgb(41, 40, 40);">
				<div class="inner">
					<div class="content" style="background-color: rgb(233, 233, 233);">
	
							<h2 align=center>Facture</h2> 
					
						<?php
						
						if(isset($_POST['submit'])){
	                    
							if($_POST['version']=="confort+")
							{$plus=0;}
	                     	elseif($_POST['version']=="ATMOSPHERE+")
							{$plus=100000;}
							elseif($_POST['version']=="ELEGANCE+")
							{$plus=200000;}
							elseif($_POST['version']=="R-LINE")
							{$plus=300000;}
						}
	
					?>	
					<table border="0" >
						<th colspan="3" width="1000px"></th>
						<tr align="center">
							<td ></td><td><h3>specification</h3></td><td><h3>prix</h3></td>
						</tr>
						<tr align="center">
							<td >version:</td><td><?php echo $_POST['version'];?></td><td><?php echo $plus;?></td>
						</tr>
					</table>
						
						
