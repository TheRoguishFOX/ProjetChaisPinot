<?php
$css = '<link rel="stylesheet" type="text/css" href="./public/css/shop.css">';
    $title = "Boutique: Click &amp; Buvette";

ob_start();
?>
<section>
<div id="navBarLeft">
   
   <input type="text"><span> <a href="index.php?action=shop"><i class="fas fa-search"></i></a></span>
   
    <ul>
        <li class="titleli">Catégorie:</li>
                <label><input type="checkbox"> Blanc</label>
                <label><input type="checkbox"> Rouge</label>
                <label><input type="checkbox"> Rosé</label>
        <li class="titleli">Prix:</li>
                <label><input type="checkbox"> 1.99€ à 5.99€</label>
                <label><input type="checkbox"> 5.99€ à 10.99€</label>
                <label><input type="checkbox"> 10.99€ à 20.99€</label>
                <label><input type="checkbox"> 20.99 à plus</label>
        <li class="titleli">Pays:</li>
                <label><input type="checkbox"> France</label>
                <label><input type="checkbox"> Espagne</label>
                <label><input type="checkbox"> Italie</label>
                <label><input type="checkbox"> Allemagne</label>
    </ul>
</div>
<h3>Clik &amp; Buvette !</h3>

<div id="shop_home">
    <div class="cardH">
        <div class="rouge">
            <a href="index.php?action=shop"><h2>Vin rouge</h2></a>
        </div>
    </div>
    <div class="cardH">
        <div class="blanc">
            <a href="index.php?action=shop"><h2>Vin blanc</h2></a>
        </div>
    </div>
    <div class="cardH">
        <div class="rose">
            <h2>Biere</h2>
        </div>
    </div>
    
    <div class="cardH">
        <div class="champagne">
            <h2>Champagne</h2>
        </div>
    </div>
    <div class="cardH">
        <div class="rhum">
            <h2>rhum</h2>
        </div>
    </div>
</div>
</section>

<?php $content = ob_get_clean(); 


require_once("./view/template/template_shop_fr.php");
?>