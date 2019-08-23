<?php
       
require_once('../model-manager/config.php');

class viewtest extends DataConnect{
    
    public function pamplemousse()
        {
            $db = $this->dbConnect();
            $req = $db->query("SELECT `name`, `text`, `price`, `photo` from vin_rouge");
            
            return $req;
        }
    
    public function insertPD($name, $text, $price, $photo, $type){
        
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO vin_rouge(`name`, `text`, `price`, `photo`, `type`) VALUES (?,?,?,?,?)");
        $insertion = $req->execute(array($name, $text, $price, $photo, $type));
        
        return $req;
    }
}