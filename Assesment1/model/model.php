<?php
class model  {
    function __construct(public $connection = null)
    {
        $this->connection = new mysqli("localhost", "root", "", "bankassessment1");
        // if($this->connection){
        //     echo "connection successfully";
        // }
        // else{
        //     echo "connection failed";
        // }
    }
    function login(){


    }
    function insert($tbl,$data){

        $clm = implode(",", array_keys($data));
        $val = implode("','", $data);
        echo $SQL = " INSERT INTO $tbl ($clm) VALUES ('$val') ";
        // echo $SQL;
    //     $SQLEx = $this->connection->query($SQL);
    //     // print_r($SQLEx);
    //     if ($SQLEx > 0) {
    //         $ResponceData['Code'] = "1";
    //         $ResponceData['Mag'] = "Success";
    //         $ResponceData['Data'] = "1";
    //     } else {
    //         $ResponceData['Code'] = "0";
    //         $ResponceData['Mag'] = "Try Again";
    //         $ResponceData['Data'] = "0";
    //     }
    //     return $ResponceData;
    }

    

}




?>