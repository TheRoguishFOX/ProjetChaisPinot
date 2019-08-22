<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/comments.css">';
$title_page = "Les Commentaires";

ob_start();
?>
<section>


    <div class="commentaires">
        <h2>Voici les Commentaires : </h2>
        <br>
        <nav>
            <ul>
                <li><strong>trier par note :</strong></li>
                <a href="index.php?action=comments&note=1">
                    <li class="note">*</li>
                </a>
                <a href="index.php?action=comments&note=2">
                    <li class="note">**</li>
                </a>
                <a href="index.php?action=comments&note=3">
                    <li class="note">***</li>
                </a>
                <a href="index.php?action=comments&note=4">
                    <li class="note">****</li>
                </a>
                <a href="index.php?action=comments&note=5">
                    <li class="note">*****</li>
                <a href="index.php?action=comments"><li>Annuler filtre</li></a>
                </a>
            </ul>
        </nav>
        <br>
        <div class="containerComs">
            <div class="comments">
                <?php
                    while($com = $coms->fetch()){

                        echo    '<div class="bloc">' . htmlspecialchars($com['pseudo']) . " :" . $com['date_fr'] . 
                            '<br>';
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

                        echo    '<div class="article">
                                    <div id="machine" class="machinebox">' . htmlspecialchars($com['text']) . '</div>
                                </div></div>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('./view/template/template_site_fr.php'); ?>
