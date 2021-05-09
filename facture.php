<!DOCTYPE HTML>
<!--
-->
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

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">Luxious deutsh cars</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" style="background-image:url(./images/vwlogo.jpg)">
				<h1>volkswagen touareg 2020</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper" style="background-color: rgb(41, 40, 40);">
				<div class="inner">
					<div class="content" style="background-color: rgb(233, 233, 233);">
						<header align="center"  >
							<h2>Facture</h2>
						</header>
						<?php if(isset($_POST['submit'])){
	                    if($_POST['version']=="confort+"){$plus=0;}
	                     elseif($_POST['version']=="ATMOSPHERE+"){$plus=100000;}
	elseif($_POST['version']=="ELEGANCE+"){$plus=200000;}
		elseif($_POST['version']=="R-LINE"){$plus=300000;}
		
		
						echo "<table><tr>";
							echo "<td> version </td><td>".$_POST['version']."</td><td>+".$plus."</td>";
						 echo "</tr>";
						}
						
						
					?>	
						
						
						
						
						
						
						"