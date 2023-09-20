<?php
class model{
    public $connection = "";
        public function __construct()
        {
            $this->connection = new mysqli("localhost", "root", "", "menu");
            // if($this->connection){
            //     echo "suucess";
            // }
            // else{
            //     echo "failed";
            // }
    }
    function insert($tbl,$data){
      
        $clm= implode("','",array_keys($data));
        $vals= implode("','",$data);
        $SQL= "insert into $tbl ($clm) values ('$vals')";
        echo $SQL;
        exit;
        

    }
    function select(){

    }
    

}