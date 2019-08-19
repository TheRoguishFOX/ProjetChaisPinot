<?php
        
    $db = new PDO("mysql:host=localhost;dbname=chaispinot",'ChaisPinot','');

    $req = $db->prepare("SELECT COUNT(`newsMail`) as verif, `newsMail` from newsletter WHERE `newsMail` = ?");
    $mail = $req->execute(array('mr.carte.florent@gmail.com'));

    $data = $req->fetch();

    echo $data['verif'];

    echo "<br><br>" . $data['newsMail'];