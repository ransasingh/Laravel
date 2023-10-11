<?php
class model
{
    public $conncetion = "";
    public function __construct()
    {
        $this->conncetion = new mysqli("localhost", "root", "", "masterdatabase");
        // if ( $this->conncetion ) {

        //     echo "success";
        // }
        // else{
        //     echo "failed";
        // }

    }

    //select query using fetch a data from database
    function select($tbl, $where = "")
    {
        $SQL = "Select * from $tbl ";
        // echo $SQL


        if ($where != "") {
            $SQL .= " WHERE ";
            foreach ($where as $key => $value) {
                $SQL .= " $key = '$value' AND";
            }
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        // exit;
        $SQLEx = $this->conncetion->query($SQL);
        print_r($SQLEx);

        if ($SQLEx->num_rows > 0) {
            while ($row = $SQLEx->fetch_object()) {
                $data[] = $row;
            }
            $data[] = $row;

            $Res['Code'] = 1;
            $Res['Data'] = $data;
            $Res['Msg'] = "Success";
        } else {
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "Try again";
        }
        return $Res;
    }

    //insert data /form data insert  into table by insert query 
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

    //edit a data and after a updata a value in database with particular data 
    function update($tbl, $data, $where)
    {
        $SQL = "update $tbl set  ";
        foreach ($data as $key => $value) {
            $SQL .= "$key = '$value' ,";
        }
        // echo $SQL;
        $SQL = rtrim($SQL, ",");
        $SQL .= " WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value ' AND";
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        // exit;
        $sqlex = $this->connection->query($SQL);
        // print_r($sqlex);
        // exit;
        if ($sqlex > 0) {
            $ResponceData['Data'] = "1";
            $ResponceData['Msg'] = "Success";
            $ResponceData['Code'] = "1";
        } else {
            $ResponceData['Data'] = "0";
            $ResponceData['Msg'] = "Try Again";
            $ResponceData['Code'] = "0";
        }
        return $ResponceData;
    }

  //delete a particular data 
    function delete($tbl, $where)
    {
        $SQL = " DELETE FROM $tbl WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND";
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx);
        if ($SQLEx > 0) {
            $ResponceData['Data'] = "1";
            $ResponceData['Msg'] = "Success";

            $ResponceData['Code'] = "1";
        } else {
            $ResponceData['Data'] = "0";
            $ResponceData['Msg'] = "Try Agian";
            $ResponceData['Code'] = "0";
        }
        return $ResponceData;
    }
}
