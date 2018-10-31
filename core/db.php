<?php 

class DB
{
    public $conn = null;
    public function __construct($hostname,$database,$username,$password){
        try{
        $this->conn = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected successfully";
    }
        catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    }

    
    
}
?>