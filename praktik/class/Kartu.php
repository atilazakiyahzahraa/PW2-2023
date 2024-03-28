<?php

    class Kartu {
        private $conn;
        private $table_name = "kartu";

        public $id;
        public $kode;
        public $nama;
        public $diskon;
        public $iuran;

        public function __construct($db){
            $this->conn = $db;
        }

        public function index(){
            $query = "SELECT * FROM {$this->table_name}";
            $data = $this->conn->prepare($query);
            $data->execute();
            return $data;
        }

        public function create(){
            header("Location: create.php");
            exit();
        }

        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (kode, nama, diskon, iuran) 
                    VALUES (?, ?, ?, ?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->kode, 
                $this->nama, 
                $this->diskon, 
                $this->iuran, 
            ]);
        
            return $data->rowCount() > 0;
        }

        public function edit(){
            $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
            return $data;
        }

        public function update(){
            $query = "UPDATE {$this->table_name} 
                    SET kode=?, nama=?, diskon=?, iuran=? 
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->kode, 
                $this->nama, 
                $this->diskon, 
                $this->iuran, 
            ]);
        
            return $data->rowCount() > 0;
        }

        public function delete(){
            $query = "DELETE FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
        
            return $data->rowCount() > 0;
        }
    }

?>