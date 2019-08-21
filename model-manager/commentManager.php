<?php
    
require_once("config.php");

    class Comments extends DataConnect
    {
        
        public function listCommentsHome()
        {
            $db = $this->dbConnect();
            $req = $db->query("SELECT `pseudo`, `note`, `text`, DATE_FORMAT(date_crea, ' (le %d/%m/%Y à %H:%i)') as date_fr  from comments ORDER BY ID DESC LIMIT 0, 3");
            
            return $req;
        }
        
        public function listComments()
        {
            $db = $this->dbConnect();
            $req = $db->query("SELECT `pseudo`, `note`, `text`, DATE_FORMAT(date_crea, ' (le %d/%m/%Y à %H:%i)') as date_fr  from comments ORDER BY ID DESC LIMIT 0, 10");
            
            return $req;
        }
        
        public function postComments($pseudo, $text, $note)
        {
            $db = $this->dbConnect();

            $req = $db->prepare('INSERT INTO comments(`pseudo`, `text`, `note`, date_crea) VALUES(?, ?, ?, NOW())');
            
            $newMail = $req->execute(array(htmlspecialchars($pseudo), htmlspecialchars($text), $note));
            return $req;
        }
    }