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
		<title>Facture </title>
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
				        <a class="logo" href="profil.php"><font color=red>MON PROFIL : </font><?php echo strtolower($_SESSION['user']); ?></a>


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
			</nav>

		<!-- Heading -->
			<div id="heading" style="background-image:url(./images/<?php 
			
			$a=array("0","to1","gf81","ti1","art3","pst2","jt2","ca2","912","ty2" ,"gt3");
			$b=array("0","volkswagen touareg","volkswagen golf 8","volkswagen tiguan","volkswagen arteon","volkswagen passat","volkswagen jetta","porsche cayenne","porsche 911","porsche tycan" , "porsche gt3");
			for($i=1;$i<=12;$i++){
				if ($i==$_POST['car'])	
				{echo $a[$i];
				$c=$b[$i];
				}

			}

			?>.jpg)">

		
				<h1><?php echo $c;?> </h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper" style="background-color: rgb(41, 40, 40);">
				<div class="inner">
					<div class="content" style="background-color: rgb(233, 233, 233);">

							<h2 align=center>Facture</h2> <h4 align=right>le <?php echo date('d M Y H:y:s');?></h4>
					
						<?php
						
						if(isset($_POST['submit'])){
							$_SESSION['nbr']+=1;
	                    
							if($_POST['version']=="ATMOSPHERE+")
							{$plus=100000;}
							elseif($_POST['version']=="ELEGANCE+")
							{$plus=200000;}
							elseif($_POST['version']=="R-LINE")
							{$plus=300000;}
						
							
							elseif($_POST['version']=="1.5 eTSI 150 DSG7 Life 1st")
							{$plus=10000;}
							elseif($_POST['version']=="2.0L TDI 150 DSG7 Life 1st")
							{$plus=20000;}
							elseif($_POST['version']=="2.0L TDI 150 DSG7 Style 1st")
							{$plus=30000;}
							
							elseif($_POST['version']=="2.0 TDI ADVANCE")
							{$plus=20000;}
							elseif($_POST['version']=="2.0 TDI ELEGANCE")
							{$plus=30000;}
							
							elseif($_POST['version']=="Diesel Platinium Edition ")
							{$plus=100000;}
							elseif($_POST['version']=="S")
							{$plus=200000;}
							elseif($_POST['version']=="GTS")
							{$plus=320000;}
							
							elseif($_POST['version']=="Carrera S Cabriolet")
							{$plus=280000;}
							
							elseif($_POST['version']=="Taycan Turbo")
							{$plus=460000;}
							else{$plus="inclue";}
							
							if($_POST['boite']=="Automatique"){$plus2=30000;}
							else{$plus2="inclue";}
							if($_POST['jant']=="19-pouces"){$pluss=30000;}
							elseif($_POST['jant']=="18-Pouces"){$pluss=10000;}
							else{$pluss="inclue";}
							
							if($_POST['puiss']=="12-ch"){$plus3=20000;}
	     					elseif($_POST['puiss']=="27-cv"){$plus3=20000;}
							elseif($_POST['puiss']=="30-cv"){$plus3=30000;}
                            elseif($_POST['puiss']=="29-cv"){$plus3=20000;}
							elseif($_POST['puiss']=="42-cv"){$plus3=30000;}
							else{$plus3="inclue";}
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
						<td>Modèle</td><td>2020</td><td>Inclue</td>
						</tr>
						<tr align="center">
						<td>Jantes</td><td><?php echo $_POST['jant'];?></td><td><?php echo "$pluss";?></td>
						</tr>
							<tr align="center">
						<td>Boite à vitesse</td><td><?php echo $_POST['boite'];?></td><td><?php echo "$plus2";?></td>
						</tr>
						
							<tr align="center">
						<td>Puissance Fiscale</td><td><?php echo $_POST['puiss']?></td><td><?php echo "$plus3";?></td>
						</tr>
						<tr align="center">
						<td>Couleur</td><td><?php echo $_POST['coul'];?></td><td>Inclue</td>
						</tr>
						
						<hr/>
					
					<div align=left>
					</table>
					<br>
					<br>
					</div>
					<br>
						 
						<?php 
						 if($plus=="inclue"){$plus=0;}
						      if($pluss=="inclue"){$pluss=0;}
						        if($plus2=="inclue"){$plus2=0;} 
					        	if($plus3=="inclue"){$plus3=0;};
						$som=$_POST['prix']+$plus+$pluss+$plus2+$plus3;
						
						?>
						<hr/>

						<h2 align="right">totale à payer : <p style="color: orangE; font-family: Arial; font-weight: bold"> <?php echo number_format($som, 2, ',', ' ')." Dh TTC";?></h2></p>
						<div align=right>
						<table float=none >
						
					<tr  >
						
		

                   <td valign=bottom >
					<?php
                    
						IF($_POST['car']==1 || $_POST['car']==2 || $_POST['car']==3 || $_POST['car']==4 || $_POST['car']==5 || $_POST['car']==6 ){
						?>
						<img style="float: left;" src="./images/logovv.ico" >
							<?php
						}
						else{	
							?>
						<img style="float: left;margin-top:50px" src="./images/logopp.ico" >
							<?php
						}
						?>
						
				
	
					</td>
<td width=1000px> 
					<!-- paypal -->
					<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'buynow',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":561.03,"breakdown":{"item_total":{"currency_code":"USD","value":1},"shipping":{"currency_code":"USD","value":560},"tax_total":{"currency_code":"USD","value":0.03}}}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>	
	<!-- end paypal-->
</td></tr>
</table>	
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
		
