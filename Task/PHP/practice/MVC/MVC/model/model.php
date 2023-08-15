<?php
class model{
    function __construct(protected $connection=null){
        $this->connection= new  mysqli("localhost","root","", "masterdatabase");
        if($this->connection){
            echo "connection success";
        }
        else{
            echo "connection failed";
        }

    }
   
}


?>