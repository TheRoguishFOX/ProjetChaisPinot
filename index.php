<?php

    require_once('./controller/frontend.php');

try{

    if(isset($_GET['action'])){ 
        
        if($_GET['action']=='contact'){
            contact();
        }
        
    }
    
    else if(isset($_GET['news'])){
        if($_GET['news']=='inscription'){
            newsletter($_POST['news_mail']);
        }
// dans view contact, en cliquant sur valider on récupère news_mail dont l'action est news=inscription'. cette action se transforme en fonction newsletter quon developpe dans frontend du controller   
    }

    else home();
    
    }
    
    catch(Exception $e) {
        die("Erreur :" . $e->getMessage());
    }