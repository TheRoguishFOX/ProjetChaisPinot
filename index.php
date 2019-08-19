<?php

    require_once('./controller/frontend.php');

try{

    if(isset($_GET['action']) || isset($_GET['news'])){ 
        
        if(isset($_GET['action'])){
            if($_GET['action']=='contact'){
                contact();
            }
        }
        if(isset($_GET['action'])){
            if($_GET['action'] == 'shop_home'){
                shop_home();
            }
        }
        if(isset($_GET['action'])){
            if($_GET['action'] == 'shop'){
                shop();
            }
        }
        if(isset($_GET['news'])){
            if($_GET['news']=='inscription'){
//                if(isset($_POST['news_mail'])){
//                   verifMail($_POST['news_mail']);
//                }
//                if($row = 0){
                newsletter($_POST['news_mail']);
            }
        }
    }
    
    
    else home();
    
}
    catch(Exception $e) {
        die("Erreur :" . $e->getMessage());
    }