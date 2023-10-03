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
    function select($tbl,$where=""){
         $SQL= "select * from $tbl";
         if ($where!="") {
            $SQL.=" where ";
            foreach ($where as $key => $value) {
                $SQL.= " $key='$value' AND";
            }
            $SQL= rtrim($SQL,"AND");
         }
        //  echo $SQL;
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
    function insert($tbl, $data)
            {
                // echo "<pre>";
                // print_r($data);
                // $clm= array_keys( $data);
                // print_r($clm);
                $clm = implode(",", array_keys($data));
                $vals = implode("','", $data);

                $SQL = "INSERT INTO $tbl ($clm) VALUES ('$vals')";
                // echo $SQL;
                $SQLEx = $this->connection->query($SQL);
                // echo "<pre>";
                if ($SQLEx > 0) {
                    $Res['Code'] = 1;
                    $Res['Data'] = 1;
                    $Res['Msg'] = "Success";
                } else {
                    $Res['Code'] = 0;
                    $Res['Data'] = 0;
                    $Res['Msg'] = "Try again";
                }
                return $Res;
            }
}
