<?php

    class Hotels {
        private $conn;
        private $table_name = "hotels";

        public $id;
        public $name;
        public $address;
        public $city;
        public $country;

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
                    (name, address, city, country) 
                    VALUES (?, ?, ?, ?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->name, 
                $this->address, 
                $this->city, 
                $this->country, 
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
                    SET name=?, address=?, city=?, country=? 
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->name, 
                $this->address, 
                $this->city, 
                $this->country, 
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