<?php
class model{
    public $connection = "";
    function __construct()
    {
        $this->connection = new mysqli("localhost","root","","masterdatabase");
        // if ( $this->connection) {
        //     echo "suuccess";
        // }
        //     else{
        //         echo "failed";
        //     }
        // }
    }
    function select($tbl){
         $SQL= "select * from $tbl";
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx);
        if ($SQLEx->num_rows>0) {
            while ($row= $SQLEx->fetch_object() ) {
                $data[]=$row;
             }
             $Res['Code'] = 1;
            $Res['Data'] = $data;
            $Res['Msg'] = "Success";
        }
        else{
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "try again";
        }
        return  $Res;
     
    }
}
