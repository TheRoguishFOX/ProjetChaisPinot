<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/home.css">';
$title_page = "Accueil";

ob_start();
?>
<section>
   <h3> <em> "J'ai créé Le Chais Pinot en 2017 dans ma ville natale, pour partager mes connaissances et ma pasion du vin dans un endroit convivial"</em> <br>Florent  </h3>
    <article class="video">
        <img src="./public/images/divers/alcohol-bottles-9.jpg">
    </article>
    <br><br><br>

<!--
    <article id="quisommesnous">
        <div class="quisommesnous">
            <a href="#"><img src="./public/images/logo/logo_Chais_Pinot_vitrine_blanc.png"></a>
            <div class="text">
                <h2>Pour la petite histoire</h2>
                <p><em> "J'ai créé cet endroit convivial en 2017 dans ma ville natale, pour partager mes connaissances et ma pasion du vin"</em> <br>Florent </p>
            </div>
        </div>
    </article>
-->

    <div class="separateur">
        <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i>~<i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i></div>

    <article class="deuxiemebloc">
        <div class="clickandcollect">
            <div class="texte2">
                <h2> La boutique en ligne</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores corporis,<br> debitis aspernatur odit ex repellat accusantium repellendus similique maiores provident deleniti possimus at est modi consequuntur <br>blanditiis quaerat obcaecati labore.</p>
            </div>
            <div class="logobouteille"><a href="#"></a></div>
        </div>
        <p class="tiret"></p>
        <div class="event">
            <h2> Les actus</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Dolores corporis, debitis aspernatur odit ex repellat accusantium repellendus similique maiores provident deleniti <br> possimus at est modi consequuntur blanditiis quaerat obcaecati labore.</p>

            <p><img src="./public/images/logo/logo_Chais_Pinot_vitrine_blanc.png"></p>
            <button><a href="#">En savoir plus</a></button>
        </div>

    </article>

    <div class="separateur"><i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i>~<i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i></div>

    <div class="troisiemebloc">
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
