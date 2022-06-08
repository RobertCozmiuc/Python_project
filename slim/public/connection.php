<?php 
class Database{   

    private $host = "localhost";  
    private $user = "root";  
    private $password = 'pass';  
    private $db_name = "goodfoods";  
    private $con;
    
    public function connect()
    {
        $this->con = null;
        try {
            $this->con= new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->user, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->con;
    }
   
}
?>  