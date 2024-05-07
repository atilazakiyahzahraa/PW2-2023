<?php
    class Rooms {
        private $conn;
        private $table_name = "rooms";

        public $id;
        public $hotel_id;
        public $room_number;
        public $room_type;
        public $price;
        public $availability;

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
                    (hotel_id, room_number, room_type, price, availability) 
                    VALUES (?, ?, ?, ?, ?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->hote_id, 
                $this->room_number, 
                $this->room_type, 
                $this->price,
                $this->availability

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
                    SET hotel_id=?, room_number=?, room_type=?, price=?, availability=? 
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->hote_id, 
                $this->room_number, 
                $this->room_type, 
                $this->price,
                $this->availability

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