<?php

    $bdd = new PDO("mysql:host=localhost;dbname=chaispinot",'ChaisPinot','');
    
    $req = $bdd->prepare("SELECT COUNT(`newMail`) from newsletter WHERE `newMail` = 'mr.carte.florent@gmail.com'");
            
    $req->fetchAll();

    echo "blablabla=" .$req . "!!!";