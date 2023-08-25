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
    function login($uname, $pass){
  $SQL= "select * from bank where password='$pass' AND (username='$uname' OR email='$uname' OR phone= '$uname')";
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx);
        if ($SQLEx->num_rows > 0) {
            $fetchData=$SQLEx->fetch_object();
            $ResponceData['Code'] = "1";
            $ResponceData['Mag'] = "Success";
            $ResponceData['Data'] = $fetchData;
        } else {
            $ResponceData['Code'] = "0";
            $ResponceData['Mag'] = "Try Again";
            $ResponceData['Data'] = "0";
        }
        return $ResponceData;

    }
    function insert($tbl,$data){

        $clm = implode(",", array_keys($data));
        $val = implode("','", $data);
         $SQL = " INSERT INTO $tbl ($clm) VALUES ('$val') ";
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx);
        if ($SQLEx > 0) {
            $ResponceData['Code'] = "1";
            $ResponceData['Mag'] = "Success";
            $ResponceData['Data'] = "1";
        } else {
            $ResponceData['Code'] = "0";
            $ResponceData['Mag'] = "Try Again";
            $ResponceData['Data'] = "0";
        }
        return $ResponceData;
    }
    function select($tbl,$where=null){


        $SQL= "select * from $tbl";

        if($where != "" || $where != null){
            $SQL .= " WHERE";
            foreach ($where as $key => $value) {
            $SQL.= " $key = '$value' AND";
            }
        }
        $SQL = rtrim($SQL,"AND");
      
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($data = $SQLEx->fetch_object()) {
                $fetchData[] = $data;
            }
            $ResponceData['Code'] = "1";
            $ResponceData['Mag'] = "Success";
            $ResponceData['Data'] = $fetchData;
        } else {
            $ResponceData['Code'] = "0";
            $ResponceData['Mag'] = "Try Again";
            $ResponceData['Data'] = "0";
        }
        return $ResponceData;
   
    }

    

}




?>