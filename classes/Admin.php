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

        public function fetch_ward(){
            $sql = "SELECT * FROM ward";
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
            $sql = "SELECT SUM(party_score) FROM polling_unit JOIN lga ON lga.lga_id=polling_unit.lga_id JOIN announced_pu_results ON polling_unit.uniqueid=announced_pu_results.polling_unit_uniqueid WHERE lga.uniqueid = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$id]);
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //$record = $record['party_score'];
            return $record;
        }

       

        public function add_newresult($fname,$pname,$lga,$ward,$pid,$score,$address,$date,$party){
            $query = "INSERT INTO polling_unit(polling_unit_name,lga_id,ward_id) VALUES(?,?,?)";
            $stmt = $this->dbconn->prepare($query);
            $stmt->execute([$pname,$lga,$ward]);
            $id = $this->dbconn->lastInsertId();
            //insert into db
            try{
            $query2 = "INSERT INTO announced_pu_results(polling_unit_uniqueid,party_abbreviation,party_score,entered_by_user,date_entered,user_ip_address) VALUES(?,?,?,?,?,?)";
            $stmt2 = $this->dbconn->prepare($query2);
            $result = $stmt2->execute([$pid,$party,$score,$fname,$date,$address]);
            $_SESSION['feedback']= "$party result successfully added";
            return $result;
            }catch(Exception $e){
                $_SESSION['errormsg']=$e->getMessage();
                return 0;
            }
        
        }

      
    }

?>