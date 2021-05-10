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
							else{$plus="inclue";}
							
							if($_POST['jant']=="19-pousse"){$pluss=+30000;}
							else{$pluss="inclue";}
							
							if($_POST['boite']=="Automatique"){$plus2=30000;}
							else{$plus2="Inclue";}
						}
						
	
					?>	
					<table border="0"  >
						<th colspan="3" width="1000px"></th>
						<tr align="center">
							<th ><h3>Options que vous avez choisies</h3></th><th><h3>specification</h3></th><th><h3>prix d'option</h3></th>
							</tr>
				<tr align="center" height="70">
							<td >Prix Sans Options</td><td>-----------></td><td><?php  echo  $_POST['prix'];?></td>		
							
						</tr>
				<tr align="center">
							<td >Version</td><td><?php echo $_POST['version'];?></td><td><?php  echo $plus;?></td>
		    	</tr>
						<tr align="center">
						<td>Nombre de porte</td><td><?php echo  $_POST['porte'];?></td><td>Inclue</td>
						</tr>
						<tr align="center">
						<td>Jantes</td><td><?php echo $_POST['jant'];?></td><td><?php echo "$pluss";?></td>
						</tr>
							<tr align="center">
						<td>Boite à vitesse</td><td><?php echo $_POST['boite'];?></td><td><?php echo "$plus2";?></td>
						</tr>
						
							<tr align="center">
						<td>Puissance Fiscale</td><td><?php echo $_POST['puiss']?></td><td>Inclue</td>
						</tr>
						<tr align="center">
						<td>Couleur</td><td><?php echo $_POST['coul'];?></td><td>Inclue</td>
						</tr>
						<hr/>
					
						
					</table>
						 
						<?php if($plus=="inclue"){$plus=0;}
						      if($pluss=="inclue"){$pluss=0;}
						      if($plus2=="Inclue"){$plus2=0;}
						$som=470000+$plus+$pluss+$plus2;
						?>
						<hr/>
						<h2 align="right"></h> totale à payer : <?php echo "$som Dh";?></h2>
						