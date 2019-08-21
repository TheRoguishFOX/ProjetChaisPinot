<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/cavebar.css">';
$title_page = "La cave et le bar";

ob_start();
?>
<section id="caveetbar">
    <article id="histoireboutique">
        <img src="public/images/divers/77220FC6-33EA-4ED3-A108-5EE0349E54FA.jpeg">
        <div id="pourlapetitehistoire">
            <h2> Pour la petite histoire </h2><br>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, temporibus, nobis laborum architecto necessitatibus expedita. Esse doloremque minus molestiae, itaque quasi ducimus tenetur maiores eligendi repellat, modi, impedit hic. Atque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quo, dolor dignissimos doloribus hic aperiam voluptatem explicabo nobis, autem nesciunt, culpa.
                Consequuntur id modi incidunt veniam sint. Praesentium, aperiam quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti similique tempora cumque fugiat quam. Fugiat, non, eius. Doloribus itaque repudiandae placeat dolorum ratione expedita totam facilis, magni voluptas debitis labore.</p>
        </div>
    </article>
    <br><br>
    <article id="caveproduits">
        <div id="lacave">

            <h2> La cave </h2>
            <p> Nous vous proposons un grand choix de vins, bières, champagnes et spiritueux. Du petit prix au grand cru classé, Florent sera vous conseiller pour faire le meilleur choix en fonction de vos envies et de votre budget.
                <br> Coffret cadeaux, paniers garnis, coffrets vins, nous vous proposons égelement un grand choix de verres et carafes pour faire plaisir ou se faire plaisir.
                <br> Nous pouvons également vous conseiller et vous fournir pour vos mariages, baptêmes, ...
            </p>
            <p><a href="index.php?action=actus"><i class="fas fa-wine-bottle"> Tout savoir sur les actus de la cave</i>
                </a></p><br><br>
            <img src="public/images/divers/alcohol-bottles-alcoholic-beverage-bar-2664149.jpg">
        </div>

        <div id="lebar">

            <h2> Le bar </h2>
            <p> Envie d'un moment entre amis autour d'un verre? <br>Le bar à l'étage et la terrasse extérieure vous accueille pour un moment de détente. L'occasion pour vous de goûter les différents produits disponibles dans le magasin, sur les conseils de Florent. <br>Découvrez toute la richesse du patrimoine viticole français, des différentes bières de nos régions accompagnés d'une planche de charcuterie pour les plus gourmands.<br>Jeux de société, concerts... Plusieurs activités  vous sont proposées tout au long de l'année. </p>
            <p><a href="index.php?action=actus"><i class="fas fa-glass-cheers">Tout savoir sur les actus du bar</i>
           </a></p><br><br>
            <img src="public/images/divers/alcoholic-beverage-bar-beer-1269025.jpg">
        </div>
    </article>
    <br><br>

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
                    <input type="submit" class="button" value="Envoyer"/>
                </div>
            </form>



        </div>

        <!---->



    </article>










</section>
<?php $content = ob_get_clean(); ?>

<?php require('./view/template/template_site_fr.php'); ?>
