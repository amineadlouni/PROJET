
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
				<a class="logo" href="index2.php">Luxurious deutsh cars</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index2.php">Home</a></li>
					<li><a href="landing.php">profil</a></li>
					<li><a href="#ID1">voitures</a></li>
					<li><a href="#footer">contactez nous</a></li>
					<li><button class="primary  small" onclick="location.href='deconnexion.php'" >Déconnexion</button></li>
			</nav>

		<!-- Heading -->
			<div id="heading" style="background-image:url(./images/to1.jpg)">
				<h1>volkswagen touareg 2020</h1>
			</div>

		<!-- Main -->
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

							if($_POST['jant']=="14-pousse"){$pluss=+30000;}
							else{$pluss="inclue";}
							
							if($_POST['jant']=="19-pousse"){$pluss=+30000;}
							else{$pluss="inclue";}
							
							if($_POST['boite']=="Automatique"){$plus2=30000;}
							else{$plus2="Inclue";}
						}
						
	
					?>	
					<div class="main" style="background-color: white;">
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
					<br>
					<br>
					<hr>
					</div>
					<br>
						 
						<?php if($plus=="inclue"){$plus=0;}
						      if($pluss=="inclue"){$pluss=0;}
						      if($plus2=="Inclue"){$plus2=0;}
						$som=470000+$plus+$pluss+$plus2;
						?>
							
						<h2 align="right"></h> totale à payer : <?php echo "$som Dh";?></h2>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" align=right>
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="amine.adlouni29@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax_rate" value="3.000">
<input type="hidden" name="shipping" value="250.00">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>





			</section>
				
	
<!-- Footer -->
<footer id="footer">
	<div class="inner">
		<div class="content">
			<section>
				<h3></h3>
				<p>Toutes les voitures ou marques declarées dans ce site sont mises au droits de leur société mère et ne reviennent pas aux createurs de ce site.	</p>
			</section>
			<section>
				<h4>Nos emails :</h4>
				<ul class="alt">
					<li><a href="#">amine.eladlouni@usmba.ac.ma</a></li>
					<li><a href="#">aimane.elismaili@usmba.ac.ma</a></li>
					<li><a href="#">Fahd.kaghat@usmba.ac.ma</a></li>
					
				</ul>
			</section>
			<section>
				<h4>contectez nous!</h4>
				<ul class="plain">
					<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
					<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
					<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
				
				</ul>
			</section>
		</div>
		<div class="copyright">
			&copy; copyrighted  content <a ></a>.
		</div>
	</div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
		
