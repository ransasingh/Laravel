<?php
class model {
    function __construct(protected $connecttion = null)
    {
        $this->connecttion = new  mysqli("localhost", "root", "", "masterdatabase");
        // if($this->connecttion){
        //     echo "connection success";
        // }
        // else{
        //     echo "conncetion failed";
        // }
       
    }
    function register($tbl,$data){
        $clm= implode(",", array_keys($data));
        $val= implode("','",$data);
        $sql= "INSERT INTO  $tbl($clm) VALUE('$val')";
        // echo $sql;
        $sqlex=$this->connecttion->query($sql);
    
    if($sqlex>0){
        $Responsedata['data']= "1";
        $Responsedata['Msg']= "success";
        $Responsedata['code']= "1";
    }
    else{
        
        $Responsedata['data']= "0";
        $Responsedata['msg']= "try again";
        $Responsedata['code']= "0";
    }
    return $Responsedata;
    }
}


    


?>