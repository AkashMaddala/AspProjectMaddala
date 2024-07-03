<?php



//dataclass file

class DatabasevisionClass {
    
    protected static $connection;
    public function connect(){
        if(!isset(self::$connection)){
            
            include("inc_dbConfig.php");
            
            self::$connection = new mysqli($host, $username, $password, $dbname);
  
        }
        
        if(self::$connection === false){
            
            return false;
            
        }
         
        return self::$connection;
        
    }//end connect()
    
    
    
    
    
    public function Select($query){
        
        $connection = $this->connect();
        
        
        
        $result = $connection->query($query);
        
        $this->CloseConnection();
        
        if(!$result){
            
            return $connection->error;
            
        }else{
            
            return $result;
            
        }
        
    }
    
    
    
    public function error(){
        
        $connection = $this->connect();
        
        return $connection->error;
        
    }
    
    
    
    public function CloseConnection(){
        
        self::$connection->close();
        
    }
    
}

?>