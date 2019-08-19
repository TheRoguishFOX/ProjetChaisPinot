<?php

    require_once('./controller/frontend.php');

try{

    if(isset($_GET['action'])){ 
        
        if($_GET['action']=='contact'){
            contact();
        }
    
//        if($_GET['news']=='inscription'){
//            newsletter($_POST['news_mail']);
//        }
        
        if($_GET['action'] == 'shop_home'){
            shop_home();
        }
        
        if($_GET['action'] == 'shop'){
            shop();
        }
        
    }
// dans view contact, en cliquant sur valider on récupère news_mail dont l'action est news=inscription'. cette action se transforme en fonction newsletter quon developpe dans frontend du controller   
    

    else home();
    
}
    catch(Exception $e) {
        die("Erreur :" . $e->getMessage());
    }