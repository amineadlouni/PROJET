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
    <title>DCF VENTES DE VOITURES MAROC</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Header -->
    <header id="header" style="background-color: rgb(46, 46, 46);">
       <span><button class="small" onclick="location.href='index2.php'">Deutsch Cars FES </button></span> 
				        <a class="logo" href="landing.php"><font color=red>MON PROFIL : </font><?php echo strtolower($_SESSION['user']); ?></a>

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
        </ul>
    </nav>

    <!-- Banner -->
    <section id="banner" style="background-color: rgb(46, 46, 46);">
        <br/>
<br/>     
		<div class="inner">
       
 <h3 style="color: rgb(200, 200, 200);text-shadow: rgb(185, 36, 36);"><?php include('date.php');?> ,MONSIEUR <?php echo strtoupper($_SESSION['pseudo']); echo "   BIENVENU DANS"?></h3>
 

            <h1 style="font-size:102px; COLOR: rgb(184, 48, 48);font-weight: 1000;background-image: -moz-linear-gradient(rgb(80, 46, 46),rgb(129, 46, 46),rgb(170, 26, 26));">D.C.F</h1>
            <p>Fondé par <a href="https://www.linkedin.com/in/amine-el-adlouni-7a9060197/" target="_blank">Amine El adlouni</a> et<a href="https://www.linkedin.com/in/aimane-el-ismaili-ab179a157/" > Aimane El ismaili </a> au but du mini-projet
               de Monsieur Kaghat</p>
                
          <br/>
          
           <br/>
        </div>

        <video autoplay loop muted playsinline src="images/vwlogo.jpg"></video>
    </section>
    <section style="background-color: rgb(46, 46, 46);background-image: -moz-linear-gradien(grey);">
<BR>
<BR>
    </section>
    <!-- CTA -->
    <section id="cta" class="wrapper" style="background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(./images/cta01.jpg);">
        <div class="inner">
            <h2>INNOVATION AU MARCHé D'AUTOMOBILE</h2>
            <p>Premier site 100% marocain de vente des voitures allemands de lux au prix tres concurant!!</p>
        </div>
    </section>
    <!-- Highlights -->
    <section class="wrapper" style="background-color: rgb(46, 46, 46);">
        <div class="inner">
            <header id="ID1" class="special">
                <br/>
                <br>
                <br>
                <h2 style="font-size:5	52px;font-weight: 500;color: red;">Nos voitures</h2>
                <p style="font-size: 20px;color: rgb(202, 202, 202);">On dispose des voitures volkswagen et porsche toutes options</p>
            </header>
            <div class="highlights">
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g1.php">
                                <img src="images/touarg_trans.jpg" height="190px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255); text-decoration: none ">VOLKSWAGEN TOUAREG  </h3>
                                       <p  style="color: orangE; font-family: Arial; font-weight: bold
"> PRIX : 470.000 - 830.000 DH </p>
                        </a>
     </header> 

                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g2.php">
                                <img src="images/golf_8_transver.jpg" height="190px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">volkswagen GOLF 8 </h3>
                        </header>
                        </a>
                        <p  style="color: orangE; font-family: Arial; font-weight: bold
"> PRIX : 300.000 - 390.000 DH </p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g3.php">
                                <img src="images/tiguan_transv.jpg" height="190px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">volkswagen TIGUAN  </h3>
                        </header>
                        </a>
                       <p style="color: orangE; font-family: Arial; font-weight: bold
"> PRIX : 470.000 - 830.000 DH </p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g4.php">
                                <img src="images/vo.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">volkswagen ARTEON </h3>
                            </a>
                        </header>
                        <p  style="color: orangE; font-family: Arial; font-weight: bold
"> PRIX : 380.000 - 470.000 DH </p>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g5.php">
                                <img src="images/images.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">VOLKSWAGEN PASSAT </h3>
                        </header>
                        </a>
                        <p style="color: orangE; font-family: Arial; font-weight: bold
								   "> PRIX : 300.000 - 390.000 DH </p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g6.php">
                                <img src="images/20.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">VOLKSWAGEN JETTA </h3>
                        </header>
                        </a>
                        <p  style="color: orangE; font-family: Arial; font-weight: bold
								   "> PRIX : 300.000 - 390.000 DH </p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g7.php">
                                <img src="images/1611860012059.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">PORsCHE CAYENNE GTS </h3>
                            </a>
                        </header>
                       <p style="color: orangE; font-family: Arial; font-weight: bold
								  "> PRIX : 890.000 - 1.280.000 DH </p>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g8.php">
                                <img src="images/1611860189063.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">PORsCHE 911 </h3>
                        </header>
                        </a>
                         <p  style="color: orangE; font-family: Arial; font-weight: bold
								  "> PRIX : 1.200.000 - 1.520.000 DH  </p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g9.php">
                                <img src="images/1611860367690.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">porsche taycan </h3>
                        </header>
                        </a>
                         <p  style="color: orangE; font-family: Arial; font-weight: bold
								  "> PRIX : 1.000.000 - 1.520.000 DH  </p>
                    </div>
                </section>
                </div>
                </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper" style="background-image: linear-gradient(rgba(192, 27, 38, 0.527), rgba(20, 44, 179, 0.514)), url(./images/FST.jpg)" ;>
        <div class="inner">
            <h2>ISSUE DE LA FACULTE DES SCIENCES ET TECHNIQUES FES</h2>
            <p>Etudiant en 1er année master génie industriel a la FST de FES, On était cencé de créer un site web E-COMMERCE  suite au mini-projet demandé par Monsieur Fahd Kaghat, on est partis sur la création de ce site qui est fait
                pour les ventes des voitures notamment les marques internationales VOLKSWAGEN et PORSCHE Et leurs derniers modèles. Biensur avec une platforme de conexion et d'inscription si il s'agit d'un nouveau client. tout cela est enregistré dans une base de donnée.</p>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="wrapper" style="background-color: rgb(46, 46, 46);">
        <div class="inner">
            <header class="special">
                <h2 style="color: red;">createurs</h2>
            </header>
            <div class="testimonials">
                <section>
                    <div class="content">
                        <blockquote>
                            <p>Developement web (front-end/back-end)</p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/amine.jpg" alt="" />
                            </div>
                            <p class="credit">- <strong>Amine E Ladlouni</strong> <span> Etudiant en master Genie industriel FST FES</span></p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p> Conception de site et création base de donnée    </p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/aimane.jpg" alt="" />
                            </div>
                            <p class="credit">- <strong>Aimane EL Ismaili</strong> <span> Etudiant en master Genie industriel FST FES</span></p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p>Coordinateur et encadrant du projet</p>
                            
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/fahdkaghat.jpg" alt="" />
                            </div>
                            <p class="credit">- <strong> Fahd Kaghat</strong> <span>Enseignant chercheur departement Genie industriel FST FES </span></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <div class="content">
                <section>
                    <h3></h3>
                    <p>Toutes les voitures ou marques declarées dans ce site sont mises au droits de leur société mère et ne reviennent pas aux createurs de ce site. </p>
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
                &copy; copyrighted content
                <a></a>.
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