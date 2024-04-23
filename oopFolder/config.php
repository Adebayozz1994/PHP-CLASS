<?php
class config{
    protected $connect;
    public $result;
    public function __construct()
    {
        $this->connect = new mysqli('localhost','root','','mysql_db');
        if($this->connect->connect_error){
            echo 'error';
        }else{
            echo 'connected';
        }
    }
    public function create($query,$binder){
        
        $stmt = $this->connect->prepare($query);
        $stmt-> bind_param(...$binder);
        $execute = $stmt->execute();
        if($execute){
            $this->result =true;
        }else{
            $this->result =false;
        }
        return $this->result;
    }


    public function checkIfExist($query, $binder){
        $stmt = $this->connect->prepare($query);
        $stmt->bind_param(...$binder);
        $stmt->execute();
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result)>0){
            return true;
        }else {
            return false;
        }
     }
}
?>