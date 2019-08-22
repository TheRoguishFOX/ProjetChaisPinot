<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<?php

$cssSlider = '<link rel="stylesheet" type="text/css" href="./public/css/slider.css"';   
$css = '<link rel="stylesheet" type="text/css" href="./public/css/cavebar.css">';
$title_page = "La cave et le bar";

ob_start();
?>
<script src="./public/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 900;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
<section id="caveetbar">
    <article id="caveproduits">
        <div id="lacave">

            <h2> La cave </h2>
            <p> Nous vous proposons un grand choix de vins, bières, champagnes, pétillants et spiritueux. Du petit prix au grand cru classé, Florent sera vous conseiller pour faire le meilleur choix en fonction de vos envies et de votre budget.
            <br> Coffret cadeaux, paniers garnis, coffrets vins, nous vous proposons également un grand choix de verres et carafes pour faire plaisir ou se faire plaisir.
            <br> Nous pouvons vous conseiller et vous fournir pour vos mariages, baptêmes, ... pour faire de ces festivités des moments inoubliables.
            </p>
            <p><a href="index.php?action=actus"><i class="fas fa-wine-bottle"> Tout savoir sur les actus de la cave</i>
                </a></p><br><br>
        </div>

        <div id="lebar">

            <h2> Le bar </h2>
            <p> Envie d'un moment entre amis autour d'un verre? <br>Le bar à l'étage et la terrasse extérieure vous accueille pour un moment de détente. L'occasion pour vous de goûter les différents produits disponibles dans le magasin, sur les conseils de Florent. Découvrez toute la richesse du patrimoine viticole français, des différentes bières de nos régions accompagnés d'une planche de charcuterie pour les plus gourmands. Jeux de société, concerts... Plusieurs activités vous sont proposées tout au long de l'année. </p>
            <p><a href="index.php?action=actus"><i class="fas fa-glass-cheers">Tout savoir sur les actus du bar</i>
                </a></p><br><br>
        </div>
    </article>
    <br>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:900px;height:450px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:900px;height:450px;overflow:hidden;">
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_150119.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_150219.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_150340.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_150513.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_150616.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_150709.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_150719.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_150733.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_150950.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_151041.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_151058.jpg" />
            </div>
            <div>
                <img data-u="image" src="./public/images/photo/slider/20190821_151802.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <br>

    <article id="confiance">
        <h2> Ils nous font confiance </h2>
        <br><br>
        <div id="containerconfiance">
            <div id="laterrasse">
                <img src="public/images/divers/logo_laterrasse.jpg"> <br>
                <p> La Terrasse <a href="https://www.facebook.com/La-Terrasse-250680215034192/" target="_blank"><i class="fab fa-facebook"></i></a> <br> 2 Rue André Fréville<br> 62140 Hesdin <br> </p>
            </div>

            <div id="laterrasse2">
                <img src="public/images/divers/logo_laterrasse.jpg"> <br>
                <p> La Terrasse <a href="https://www.facebook.com/La-Terrasse-250680215034192/" target="_blank"><i class="fab fa-facebook"></i></a> <br> 2 Rue André Fréville<br> 62140 Hesdin <br> </p>
            </div>

            <div id="laterrasse3">
                <img src="public/images/divers/logo_laterrasse.jpg"> <br>
                <p> La Terrasse <a href="https://www.facebook.com/La-Terrasse-250680215034192/" target="_blank"><i class="fab fa-facebook"></i></a> <br> 2 Rue André Fréville<br> 62140 Hesdin <br> </p>
            </div>

            <div id="laterrasse4">
                <img src="public/images/divers/logo_laterrasse.jpg"> <br>
                <p> La Terrasse <a href="https://www.facebook.com/La-Terrasse-250680215034192/" target="_blank"><i class="fab fa-facebook"></i></a> <br> 2 Rue André Fréville<br> 62140 Hesdin <br> </p>
            </div>

        </div>

    </article>
    <br><br>
    <article id="comments">

        <div id="affichagecomments">
            <div class="commentaires">
                <h2>Ils en parlent mieux que nous </h2>
                <br><br>
                <?php
                while($com = $coms->fetch()){

                    echo    '<div class="com"><span class="white">' . htmlspecialchars($com['pseudo']) . " :" . $com['date_fr'] . 
                        '</span><br>
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
                <p><a href="index.php?action=comments" class="button">En voir plus</a></p>
            </div>
        </div>
        <br>


        <p id="espaceComments"></p>


        <div id="insertionComments">
            <h2> Donnez votre avis !</h2>
            <br><br>
            <form action="index.php?action=cavebar" method="post">
                <div>
                    <label for="pseudo">Pseudo</label><br />
                    <input type="text" id="pseudo" name="pseudo" />

                    <label for="note">Note</label>
                    <select name="note" id="note">
                        <option value="0"></option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>

                    </select>
                </div>
                <div>
                    <label for="text">Commentaire</label><br />
                    <textarea id="text" name="text" rows="10" cols="50"></textarea>
                </div>
                <input type="text" name="valid" value="Envoyer" hidden>
                <br>
                <div>
                    <input type="submit" class="button" value="Envoyer" />
                </div>
            </form>



        </div>

        <!---->



    </article>










</section>

<script type="text/javascript">jssor_1_slider_init();</script>
<?php $content = ob_get_clean(); ?>

<?php require('./view/template/template_site_fr.php'); ?>
