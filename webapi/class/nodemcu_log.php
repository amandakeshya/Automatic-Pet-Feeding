<?php
    class Nodemcu_log{

        // Connection
        private $conn;

        // Table
        private $db_table = "station1";

        // Columns
        public $id;
        public $isi_makanan;
        public $deteksi;
        public $created_at;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // CREATE
        public function createLogData(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        isi_makanan = :isi_makanan, 
                        deteksi = :deteksi";
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->isi_makanan=htmlspecialchars(strip_tags($this->isi_makanan));
            $this->deteksi=htmlspecialchars(strip_tags($this->deteksi));
        
            // bind data
            $stmt->bindParam(":deteksi", $this->deteksi);
            $stmt->bindParam(":isi_makanan", $this->isi_makanan);
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
?>