<?php

    require_once('./controller/frontend.php');
require_once('./controller/Backend_admin.php');

try{

    if(isset($_GET['action']) || isset($_GET['news'])){ 
        
        
        if(isset($_GET['action'])){
            
            if($_GET['action'] == 'comments'){
                if(isset($_GET['note'])){
                    if($_GET['note']){
                        triComments($_GET['note']);
                    }
                }
                else comments();
            }
            
            if($_GET['action']=='cavebar'){
                cavebar();
                if(isset($_POST['valid'])){
                    if(!empty($_POST['pseudo'] && $_POST['text'] && $_POST['note'])){
                    insert_comment(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['text']), $_POST['note']);
                    }
                }
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
        
        if(isset($_GET['action'])){
            if($_GET['action'] == 'MentionsLegales'){
                MentionsLegales();
            }
        }
        
        if(isset($_GET['news'])){
            if($_GET['news'] == 'inscription'){
                testmail($_POST['news_mail']);
            }
        }
        

    }
    
    
    else home();
    
}
    catch(Exception $e) {
        die("Erreur :" . $e->getMessage());
    }