<?php

    error_reporting(E_ALL);
    require_once('Db.php');

    class Admin extends Db
    {
        private $dbconn;

        public function __construct()
        {
            $this->dbconn = $this->connect();
        }
       

        public function fetch_party(){
            $sql = "SELECT * FROM party";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll();
            return $record;
        }

        public function fetch_lga(){
            $sql = "SELECT * FROM lga";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll();
            return $record;
        }

        public function fetch_result($id){
            $sql = "SELECT SUM(party_score) FROM polling_unit JOIN lga ON lga.lga_id=polling_unit.lga_id JOIN announced_pu_results ON polling_unit.uniqueid=announced_pu_results.polling_unit_uniqueid WHERE polling_unit.lga_id=?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute(['id']);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            //$record = $record['party_score'];
            return $record;
        }

        public function add_newresult($fname,$pid,$score,$address,$date,$party){
       
            //insert into db
            try{
            $query = "INSERT INTO announced_pu_results(entered_by_user,polling_unit_uniqueid,party_score,user_ip_address,date_entered,party_abbreviation) VALUES(?,?,?,?,?,?)";
            $stmt = $this->dbconn->prepare($query);
            $result = $stmt->execute([$fname,$pid,$score,$address,$date,$party]);
            $_SESSION['feedback']= "$party successfully added";
            return $result;
            }catch(Exception $e){
                $_SESSION['errormsg']=$e->getMessage();
                return 0;
            }
        
        }

      
    }

?>