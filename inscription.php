
<!DOCTYPE HTML>

<html>
	<head>
		<title>Connexion</title>
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
			<section id="main" class="wrapper" style="background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(./images/cta0b.jpg); background-size :100% 100%">
				
				

                <div class="login-form">
                    <?php 
                    $msg=null;
                   
                        if(isset($_GET['reg_err']))
                        {
                            $err = htmlspecialchars($_GET['reg_err']);
        
                            switch($err)
                            {
                                case 'success':
                               $msg=' <strong>Succès</strong> inscription réussie !';
                            
                                break;
        
                                case 'password':
                                $msg='<strong>Erreur</strong> mot de passe différent';
                                break;
        
                                case 'email':
                              $msg= '<strong>Erreur</strong> email non valide';
                                break;
        
                                case 'email_length':
                               $msg=' <strong>Erreur</strong> email trop long';
                                break;
        
                                case 'pseudo_length':
                             $msg=' <strong>Erreur</strong> pseudo trop long';
                                case 'already':
                             $msg=' <strong>Erreur</strong> compte deja existant';
        
                            }
                        }
                        ?>
                    
                    <form action="inscription_traitement.php" method="post" align=center>
                        <h2 class="text-center">Inscription</h2>  
                        <br>     
                        <div class="form-group">
                            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                        </div>
                        <br>  
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                        </div>
                        <br>  
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                        </div>
                        <br>  
                        <div class="form-group">
                            <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                        </div>
                        <br>  
                        <?php if(!empty($msg)) echo $msg."<br/>";?>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">s'inscrire</button>
                        </div>   
                    </form>
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
                margin: 50px auto;
                
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
