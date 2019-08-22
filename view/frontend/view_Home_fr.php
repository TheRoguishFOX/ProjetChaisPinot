<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/home.css">';
$title_page = "Accueil";

ob_start();
?>
<section>
   
    <article>
    <div id="video">

    <h3 id="florent"> <em> "J'ai créé Le Chais Pinot en 2017 dans ma ville natale, pour partager mes connaissances et ma passion du vin dans un endroit convivial"</em> <br>Florent  </h3>
    </div>
    </article>

<br><br><br><br>
    <article class="deuxiemebloc">
       
         <div class="clickandcollect">
               <div id="bouteilletexte">
                <h2> "Click &amp; Cave"</h2>
                <p> Prenez le temps chez vous de choisir votre vin! <br>Nous vous proposons un service de boutique en ligne. Sélectionner vos produits sur le site et effectuer le retrait et le paiement au magasin.</p></div>
                
            <div class="logobouteille"><a href="#"></a></div>
        </div>
        
        
        
        
        
        <p class="tiret"></p>
        <div class="event">
           <div id="eventtexte">
            <h2> Les actus</h2>
            <p>Pour tout savoir sur l'actualité de votre cave &amp; bar, c'est ici! Dégustations, foires aux vins, concerts, soirée oenologie... il y a forcément quelque chose pour vous!  </p></div>
 
            <button><a href="#"></a><br><img src="./public/images/logo/logo_Chais_Pinot_vitrine_blanc.png">
            </button>
       </div>

    </article>

    <div class="separateur"><i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i>~<i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i></div>

    <div class="troisiemebloc">

       <img src="./public/images/logo/vin%20et%20verre.jpg" width="135">
       
        <article class="commentaires">
           
            <?php
        while($com = $coms->fetch()){

            echo    '<div class="com">' . htmlspecialchars($com['pseudo']). ':' . $com['date_fr'] . 
                '<br>
                    <span><strong>';
                        if(isset($com['note'])){
                            if($com['note'] == 1){
                                echo "&#9733;";}
                            if($com['note'] == 2){
                                echo "&#9733;&#9733";}
                            if($com['note'] == 3){
                                echo "&#9733;&#9733;&#9733";}
                            if($com['note'] == 4){
                                echo "&#9733;&#9733;&#9733;&#9733";}
                            if($com['note'] == 5){
                                echo "&#9733;&#9733;&#9733;&#9733;&#9733;";}
                        }    
                           
            echo    '</strong></span>
                    </div>
            <div class="article">
                <div id="machine" class="machinebox">' . htmlspecialchars($com['text']) . '</div>
            </div><br>';
        }
    ?>


        </article>

<!--
        <article class="photo">

            <img src="./public/images/logo/vin%20et%20verre.jpg" width="135">
            <div id="slider">
                <figure>
                    <img src="./public/images/divers/alcohol-bottles-alcoholic-beverage-bar-2664149.jpg" height="353.63">
                </figure>
                <figure>
                    <img src="./public/images/divers/alcoholic-beverage-bar-beer-1269025.jpg" height="353.63">
                </figure>
                <figure>
                    <img src="./public/images/divers/alcohol-bottles-alcoholic-beverage-bar-2664149.jpg" height="353.63">
                </figure>
                <figure>
                    <img src="./public/images/divers/close-up-corks-glass-36741.jpg" height="353.63">
                </figure>
            </div>
        </article>
-->
    </div>


    <div class="separateur"><i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i>~<i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i></div>


</section>

<?php $content = ob_get_clean();

require('./view/template/template_site_fr.php'); ?>
