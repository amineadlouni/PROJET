<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }
?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>connexion</title>
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


		<!-- Main -->
        <section id="main" class="wrapper" style="background-color: rgb(41, 40, 40);">
				<div class="inner">
					<div class="content" style="background-color: rgb(233, 233, 233);">				
				
            <div class="container">
            <div class="col-md-12">
          
            <?php 
                       if(isset($_GET['btn']))
                       $_SESSION['nbr']=0;
                       
                       ?> 

                <div class="text-center">
                        <h1 >PROFIL</h1>
                        <h4 align=right>bonjour, <?php echo $_SESSION['pseudo']; ?> ,vous avez <font color=RED> <?php echo $_SESSION['nbr']; ?> </font> commandes actives</h4>
                        <form method="get" align=right ><button type="submit" class="small" onclick="location.href='profil.php'" name="btn" >suprimer les commandes</button></form>
                    
                       
                       <hr />

                        <fieldset>
                            <label> Vos Information</label>
                            <BR>
                           
                            <table>
                                <tr height=50px>
                                    <td width=50px></td><td><b>Pseudo :</b></td><td> <?php echo $_SESSION['pseudo']; ?></td>

                                </tr>
                                <tr height=50px>
                                <td width=50px></td> <td><b>E-mail :</b></td><td> <?php echo $_SESSION['user']; ?></td>
                                </tr>
                                <tr height=100px>
                                <td width=50px></td> <td><b>Inscris le:</b></td><td> <?php echo "&nbsp; &nbsp;". $_SESSION['date']; ?></td>
                                </tr>
                            </table>
                        </fieldset>

                 
                        <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>
                        <br>
                        <table>
                            <TR height=100px>
                               <td><button class="primary  small" onclick="location.href='deconnexion.php'" id="pass">Déconnexion</button></td><td width=20px></td>
                       <form method="post" >
                           
                           <td><button class="small" onclick="location.href='profil.php#pass'" type="submit" name="s1" >Changer le mote de passe</button></td>
                           <tr>
                           </table>
                       </form>
                </div>
                <?php 
            if(isset($_POST['s1'])){
        
?>
<fieldset > 
<div class="modal-body" > 
<form action="layouts/change_password.php" method="POST">
    <label for=\'current_password\'>Mot de passe actuel</label>
    <input type="password" id="current_password" name="current_password" class="form-control" required/>
    <br />
    <label for=\'new_password\'>Nouveau mot de passe</label>
    <input type="password" id="new_password" name="new_password" class="form-control" required/>
    <br />
    <label for=\'new_password_retype\'>Re tapez le nouveau mot de passe</label>
    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
    <br />
    <button type="submit" class="btn btn-success">Sauvegarder</button>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
</div>
</fieldset>
<?php
            }
?>




            
                    </div>
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
<style>
            .login-form {
                width: 440px;
                margin: 10px auto;
                
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
		
