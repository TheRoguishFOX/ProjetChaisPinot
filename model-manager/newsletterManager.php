<?php

function insert_newsletter($news_mail){

    try{
        $base= new PDO("mysql:host=localhost;dbname=chaispinot",'ChaisPinot','');
        }
    catch(Exception $e) {
    die("Erreur :" . $e->getMessage());
    }


    $req = $base->prepare('INSERT INTO newsletter(newsMail) VALUES(?)');

    $req->execute(array($news_mail));

        }


?>
