<?php 
require_once 'config.php';


for($i=1;$i<=3;$i++){
$check = $bdd->prepare('SELECT nom, prix, image FROM voitures WHERE ID = ?');
    $check->execute(array($i));
    $data = $check->fetch();

  echo'
  <section>
    <div class="content" style="background-color: rgb(83, 83, 83);">
        <header>
            <a href="g.php?ID='.$i.'">
                <img src="images/'. $data['image'] .'" height="150px" width="260px" alt="" />
                <h3 style="color: rgb(255, 255, 255);">' . $data['nom'] .'</h3>
            </a>
        </header>
       <p style="color: orangE; font-family: Arial; font-weight: bold
  "> PRIX :' . $data['prix'] . 'DH </p>
</section>';

}   

?>
