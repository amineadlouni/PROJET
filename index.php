<!--DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Connexion</title>
        </head>
        <body>
        
        
        
        </body>
</html>-->




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


		<!-- Main -->
			<section id="main" class="wrapper" style="background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(./images/cta01.jpg); background-size :100% 150%">
				
				


						
                    <div class="login-form">
             <?php 
             $msg=null;
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);
                    
                    switch($err)
                    {
                        case 'password':
                       $msg='<strong>ERROR:</strong> mot de passe incorrect</br>';
                        break;

                        case 'email':
                            $msg='<strong>ERROR:</strong> email incorrect</br>';
                        break;

                        case 'already':
                            $msg='<strong>ERROR:</strong> compte non existant, veuillez creer un compte</br>';
                        break;
                    }
                }
                if(isset($_GET['reg_err'])){
                    $msg="<strong>REUSSI:<STRONG> veuillez acceder a votre nouveau compte</br>";
                }
                ?> 
            
            <form action="connexion.php" method="post" align=center >
                <h2 class="text-center">Connexion</h2>    
                <br>
                <br>   
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" value="<?php if(!empty($_POST['email']))echo $_POST['email']; ?>">
                </div>
                </br> 
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" value="<?php if(!empty($_POST['password']))echo $_POST['password']; ?>">
                </div>
            </br> </br>
            <?php
            if($msg!=null)
            echo $msg;
            ?>
            </br>   
                <div class="form-group">
                  
                           <input type="submit" name="submit" value="connexion"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <button onclick="location.href='inscription.php'">Inscription</button>
                    
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
					<li><a href="#">a.ennadi@usmba.ac.ma</a></li>
					
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
		
