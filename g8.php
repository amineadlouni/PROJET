<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }
?>
<!DOCTYPE HTML>
<!--
-->
<html>
	<head>
		<title>PORSCHE 911 </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<span><button class="small" onclick="location.href='index2.php'">Deutsch Cars FES </button></span> 
				        <a class="logo" href="profil.php"><font color="red"> MON PROFIL : </font> <?php echo strtolower($_SESSION['user']); ?></a>

				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index2.php">Home</a></li>
					<li><a href="profil.php">profil</a></li>
					<li><a href="index2.php#ID1">voitures</a></li>
					<li><a href="#footer">contactez nous</a></li>
					<li><button class="primary  small" onclick="location.href='deconnexion.php'" >Déconnexion</button></li>
				</ul>
			</nav>

		<!-- Heading -->
		<div id="heading" style="background-image:url(./images/logoP.jpg)">
				<h1>PORSCHE 911 </h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper" style="background-color: rgb(41, 40, 40);">
				<div class="inner">
					<div class="content" style="background-color: rgb(233, 233, 233);">
						<header align="center" >
							<h2>Fiche technique :</h2>
						</header>
						<section>
							<table ><tr>
								<td colspan="2"><img src="images/912.jpg" width="100%" height="500px" alt="" /></td>
								</tr>
								<tr >
								<td width="50%"><img src="images/913.jpg" width="100%" height="350"   alt="" /></td>
								<td width="50%"><img src="images/P4.jpg" width="100%" height="350"  alt="" /></td>
								</tr>
								</table>
						</section>
						<form  action="facture.php" method="post">	
<input type="hidden" name="prix" value="1200000">
<input type="hidden" name="car" value="8">
	<br/>
<h3 align="center"> <b>Le prix est relatif aux options choisies !</b></h3><h4 align="center">à partir de <b>1.200.000 dh</b> , jusqu'à <b>1.520.000  dh</b></h4> 
 <hr/>

<table >	
	
	<tr height="100px">
			<td><b>Version:</b></td>
			<td >	<select name="version" >
							<option value="Carrera Coupé"> Carrera Coupé</option>
							<option value="Carrera S Cabriolet">Carrera S Cabriolet  &nbsp &nbsp (280 000 DH de plus) </option>
							
							</select>  
			</td>
	
	</tr>

	<tr height="100px">
	
		<td width="50%"><b>Nombre de porte:</b></td>
		<td width="50%"><input type="radio" id="3" name="porte" value="3" checked> <label for="3">3 portes</label>
		</td>
	</tr>
						
						
	<tr height="60px">
			<td> <b>Jantes:</b> 
		   </td>
		<td> <input type="radio" id="jant1" name="jant" value="15-Pouces" checked> <label for="jant1">15 Pouces  </label>
					<input type="radio" id="jant2" name="jant" value="18-Pouces"><label for="jant2">18 Pouces &nbsp &nbsp  (10 000 DH DE PLUS) </label>
		</td>	
	</tr>  <br/><br/><br/>

	<tr height="60px"	>
			<td> <b>Boite Vitesse:</b>
		    </td> <td>
		                   
	                    	<input type="radio" id="Automatique" name="boite" value="-Automatique" checked> <label for="Automatique">Automatique</label>
	              </td>
	</tr>
			
	<tr height="130px">
				   <td><b>Puissance Fiscale Disponible :</b></td>
		           <td><input type="radio" id="puiss" name="puiss" value="24-cv" checked> <label for="puiss"> 24 Cv </label>
				   
		           <input type="radio" id="puiss2" name="puiss" value="29-cv" > <label for="puiss2"> 29 Cv &nbsp &nbsp  (20 000 DH DE PLUS) </label>
					   
					    <input type="radio" id="puiss3" name="puiss" value="42-cv" > <label for="puiss3"> 42 Cv &nbsp &nbsp  (30 000 DH DE PLUS) </label>
	</td>
    </tr>

						
	<tr height="180px"><td><b>Couleurs Disponibles :</b></td>
						
								<td>
									<input type="radio" id="radio-beta" name="coul" value="Grise" checked >
												<label for="radio-beta">Gris</label><br>
									<input type="radio" id="radio-gamma" name="coul" value="Blan">
												<label for="radio-gamma">Blache</label><br>
				
									<input type="radio" id="radio-gamm" name="coul" value="Rouge">
												<label for="radio-gamm">Rouge</label></td>
	</tr>
									<tr >
										<td></td>
										<td><input type="submit" name="submit" value="Envoyer la commande" >&nbsp &nbsp <input type="reset" name="reset" value="Annuler" ></td>
										
									</tr>
					</table>
						
				  
						
					
				
</form>
					</div>
				</div>
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
					<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
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