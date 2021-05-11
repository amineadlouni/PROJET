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
    <title>LCF VENTES DE VOITURES MAROC</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Header -->
    <header id="header" style="background-color: rgb(46, 46, 46);">
       <span><button class="small" onclick="location.href='index2.php'">Deutsch cars FES </button></span> 
				        <a class="logo" href="landing.php"><font color=red>PROFIL : </font><?php echo strtolower($_SESSION['user']); ?></a>

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
       
 <H3 style="color: rgb(200, 200, 200);text-shadow: rgb(185, 36, 36);"><?php include('date.php');?> ,MONSIEUR <?php echo strtoupper($_SESSION['pseudo']); ?></H3>
 

            <h1 style="font-size:102px; COLOR: rgb(184, 48, 48);font-weight: 1000;background-image: -moz-linear-gradient(rgb(80, 46, 46),rgb(129, 46, 46),rgb(170, 26, 26));">D.C.F</h1>
            <p>Fondée par <a href="https://www.linkedin.com/in/amine-el-adlouni-7a9060197/" target="_blank">Amine El adlouni</a> et<a href="https://www.linkedin.com/in/aimane-el-ismaili-ab179a157/" > Aimane El ismaili </a> au but du projet
               de Monsieur Kaghat</p>
                
          <br/>
          
           <br/>
        </div>

        <video autoplay loop muted playsinline src="images/banner.mp4"></video>
    </section>
    <section style="background-color: rgb(46, 46, 46);background-image: -moz-linear-gradien(grey);">
<BR>
<BR>
    </section>
    <!-- CTA -->
    <section id="cta" class="wrapper" style="background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(./images/cta01.jpg);">
        <div class="inner">
            <h2>INNOVATION AU MARCHé D'AUTOMOBILE</h2>
            <p>premier site 100% marocain de vente des voitures allemands de lux au prix tres concurant!!</p>
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
                            <a href="g1.html">
                                <img src="images/touarg_trans.jpg" height="190px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255); text-decoration: none ">VOLKSWAGEN TOUAREG 2020 </h3>
                                       <p  style="color: WHITE; font-family: Sansita,Georgia,Arial; font-weight: bold
"> PRIX : 470.000 - 830.000 dh TTC</p>
                        </a>
     </header> 

                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g2.html">
                                <img src="images/golf_8_transver.jpg" height="190px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">volkswagen GOLF 8 2020</h3>
                        </header>
                        </a>
                        <p style="color: rgb(255, 255, 255);">PRIX:370.000 dh TTC</p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g3.html">
                                <img src="images/tiguan_transv.jpg" height="190px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">volkswagen TIGUAN 2020 </h3>
                        </header>
                        </a>
                        <p style="color: rgb(255, 255, 255);">PRIX:408.000 dh TTC</p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g4.html">
                                <img src="images/areteon_transs.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">volkswagen ARTEON 2020</h3>
                            </a>
                        </header>
                        <p style="color: rgb(255, 255, 255);">PRIX:470.000 dh TTC</p>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g5.html">
                                <img src="images/1611858276902.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">VOLKSWAGEN PASSAT 2020</h3>
                        </header>
                        </a>
                        <p style="color: rgb(255, 255, 255);">PRIX:400.000 dh TTC</p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g6.html">
                                <img src="images/1611859058078.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">VOLKSWAGEN JETTA 2020</h3>
                        </header>
                        </a>
                        <p style="color: rgb(255, 255, 255);">PRIX:290.000 dh TTC</p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g7.html">
                                <img src="images/1611860012059.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">PORsCHE CAYENNE GTS 2020</h3>
                            </a>
                        </header>
                        <p style="color: rgb(255, 255, 255);">PRIX:670.000 dh TTC</p>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g8.html">
                                <img src="images/1611860189063.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">PORsCHE 911 2020</h3>
                        </header>
                        </a>
                        <p style="color: rgb(255, 255, 255);">PRIX:2.400.000 dh TTC</p>
                    </div>
                </section>
                <section>
                    <div class="content" style="background-color: rgb(83, 83, 83);">
                        <header>
                            <a href="g9.html">
                                <img src="images/1611860367690.jpg" height="150px" width="260px" alt="" />
                                <h3 style="color: rgb(255, 255, 255);">porsche taycan 2020</h3>
                        </header>
                        </a>
                        <p style="color: rgb(255, 255, 255);">PRIX:1.590.000 dh TTC</p>
                    </div>
                </section>
                </div>
                </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper" style="background-image: linear-gradient(rgba(192, 27, 38, 0.527), rgba(20, 44, 179, 0.514)), url(./images/FST.jpg)" ;>
        <div class="inner">
            <h2>ISSUE DE LA FACULTE DES SCIENCES ET TECHNIQUES FES</h2>
            <p>Etudiant en 1er année master génie industriel a la FST de FES, et suite à la demande de monsieur Ennadi, soit de créer une application web, ou un site web partant d’une base de donné, On a choisit de partir sur une création d’un site web spécialisé
                dans les ventes des voitures notamment les marques internationales VOLKSWAGEN et PORSCHE Et leurs derniers modèles.</p>
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
                            <p>developement web (front-end/back-end)</p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/amine.jpg" alt="" />
                            </div>
                            <p class="credit">- <strong>Amine ELadlouni</strong> <span>etudiant genie industriel</span></p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p>creation de base de donnees et conception de site</p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/aimane.jpg" alt="" />
                            </div>
                            <p class="credit">- <strong>aimane ELismaili</strong> <span>etudiant genie industriel</span></p>
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
                            <p class="credit">- <strong> Fahd KaghatI</strong> <span>Enseignant chercheur departement G.indus. FST FES </span></p>
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