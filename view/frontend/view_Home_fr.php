<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/home.css">';
$title_page = "Accueil";

ob_start();
?>
<section>
    <article class="video">
        <img src="./public/images/divers/alcohol-bottles-9.jpg">
    </article>
    <br><br><br>
    <article id="quisommesnous">
        <div id="center">
            <h3> Une cave, un bar</h3>
        </div>

        <div class="quisommesnous">
            <a href="#"><img src="./public/images/logo/logo_Chais_Pinot_vitrine_blanc.png"></a>
            <div class="text">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure totam minima nam illo non commodi fugiat rerum mollitia numquam, dolorem modi doloribus aperiam quam corporis at voluptas, reprehenderit, ducimus sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id maiores totam aliquam rerum accusantium repellat atque iste minus dolorem, dolores molestiae obcaecati voluptas, quidem at assumenda omnis libero error hic.<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, quia, excepturi quibusdam voluptate ad itaque deleniti delectus necessitatibus amet accusantium labore quae non mollitia dolore! Nisi natus mollitia animi atque!</p>
            </div>
        </div>
    </article>

    <div class="separateur"><i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i>~<i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i></div>

    <article class="deuxiemebloc">
        <div class="clickandcollect">
            <div class="texte2">
                <h3> La boutique en ligne</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores corporis,<br> debitis aspernatur odit ex repellat accusantium repellendus similique maiores provident deleniti possimus at est modi consequuntur <br>blanditiis quaerat obcaecati labore.</p>
            </div>
            <div class="logobouteille"><a href="#"></a></div>
        </div>
        <p class="tiret"></p>
        <div class="event">
            <h3> Les actus</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Dolores corporis, debitis aspernatur odit ex repellat accusantium repellendus similique maiores provident deleniti <br> possimus at est modi consequuntur blanditiis quaerat obcaecati labore.</p>

            <p><img src="public/images/divers/alcoholic-beverage-bar-beer-1269025.jpg"></p>
            <button><a href="#"> En savoir plus</a></button>
        </div>

    </article>

    <div class="separateur"><i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i>~<i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i></div>

    <div class="troisiemebloc">
        <article class="commentaires">
            <div class="com">Jean michel (12/12/2012):
                <br>
                <strong>&#9733;&#9733;&#9733;&#9733;&#9733;&#9733;</strong></div>
            <div class="article">
                <div id="machine" class="machinebox">Très bon moment, très belle boutique... </div>
            </div>
            <br>
            <div class="com">Jean michel (12/12/2012):
                <br>
                <strong>&#9733;&#9733;&#9733;&#9733;</strong></div>
            <div class="article">
                <div id="machine" class="machinebox">Très beau cadre, magnifique moment<br> mais mauvais temps </div>
            </div>
            <div class="article">
                <br>
                <div class="com">Jean michel (12/12/2012):
                    <br>
                    <strong>&#9733;&#9733;&#9733;&#9733;&#9733;</strong></div>
                <div id="machine" class="machinebox">très belle boutique... bon produit... </div>
            </div>


        </article>

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
                    <img src="./public/images/divers/bottle-macro-shadow-121191.jpg" height="353.63">
                </figure>
                <figure>
                    <img src="./public/images/divers/close-up-corks-glass-36741.jpg" height="353.63">
                </figure>
            </div>
        </article>
    </div>


    <div class="separateur"><i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i> ~ <i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i>~<i class="fas fa-wine-bottle"><i class="fas fa-wine-glass-alt"></i></i></div>


</section>

<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template_site_fr.php'); ?>
