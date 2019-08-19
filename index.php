<?php

    require_once('./controller/frontend.php');

try{

    if(isset($_GET['action']) || isset($_GET['news'])){ 
        
        
        if(isset($_GET['action'])){
            if($_GET['action']=='cavebar'){
                cavebar();
            }
        }
        
        if(isset($_GET['action'])){
            if($_GET['action']=='actus'){
                actus();
            }
        }
        
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
        
        if(isset($_GET['action'])){
            if($_GET['action'] == 'ConditionsGnrales'){
                ConditionsGnrales();
            }
        }
        
        if(isset($_GET['news'])){
            if($_GET['news'] == 'inscription'){
                newsletter($_POST['news_mail']);
            }
        }
        
        
    }
    
    
    else home();
    
}
    catch(Exception $e) {
        die("Erreur :" . $e->getMessage());
    }