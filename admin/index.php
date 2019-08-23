<?php
    require_once('../controller/Backend_admin.php');

try{
    if(isset($_GET['action'])){
        
            if($_GET['action']=='insertVin'){
                homeAdminInsert($_POST['name'], $_POST['text'], $_POST['price'], $_POST['photo'], $_POST['type']);
                
                homeAdmin();
            }
    
            
        
            if($_GET['action']=='adminVin'){
                adminVin();
            }
    
            
        
            if($_GET['action']=='adminClients'){
                adminClients();
            }
        
            
        
            if($_GET['action']=='adminNewsletter'){
                adminNewsletter();
            }
        
            
        
            if($_GET['action']=='adminComments'){
                adminComments();
            }
        
       
    }
    
      else homeAdmin();
    
}
    catch(Exception $e) {
        die("Erreur :" . $e->getMessage());
    }