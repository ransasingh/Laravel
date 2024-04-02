<?php
class model
{
    public $connection = "";
    public function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "testmvc");
        //  if ($this->connection) {
        //    echo "success";
        //  }
        //  else{
        //     echo "failed";
        //  }
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

    function Select($tbl, $where = Null)
    {

        $SQL = " SELECT * FROM $tbl";

        if ($where != null && $where != "") {
            $SQL .= " WHERE";
            foreach ($where as $key => $value) {
                $SQL .= " $key = '$value' AND";
            }
            $SQL = rtrim($SQL, "AND");
        }
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($data = $SQLEx->fetch_object()) {
                $FetchData[] = $data;
            }
            $Responce['Code'] = "1";
            $Responce['Msg'] = "Success";
            $Responce['Data'] = $FetchData;
        } else {
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
            $Responce['Data'] = "0";
        }
        return $Responce;
    }

    function Update($tbl, $data, $where)
    {

        $SQL = "UPDATE $tbl SET";

        foreach ($data as $key => $value) {
            $SQL .= " $key = '$value' ,";
        }
        $SQL = rtrim($SQL, ",");

        $SQL .= " WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND";
        }
        $SQL = rtrim($SQL, "AND");

        // echo $SQL;
        // exit;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {

            $Responce['Code'] = "1";
            $Responce['Msg'] = "Success";
            $Responce['Data'] = "1";
        } else {
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
            $Responce['Data'] = "0";
        }
        return $Responce;
    }

    function Delete($tbl, $where)
    {

        $SQL = "DELETE FROM $tbl WHERE";

        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND";
        }
        $SQL = rtrim($SQL, "AND");

        // echo $SQL;
        // exit;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {

            $Responce['Code'] = "1";
            $Responce['Msg'] = "Success";
            $Responce['Data'] = "1";
        } else {
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
            $Responce['Data'] = "0";
        }
        return $Responce;
    }
}
