<?php
class model{
    public $conncetion= "";
   public function __construct()
    {
        $this->conncetion = new mysqli("localhost", "root","","masterdatabase");
        // if ( $this->conncetion ) {

        //     echo "success";
        // }
        // else{
        //     echo "failed";
        // }

    }
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
    function insert(){
        

    }
    function update(){

    }
    function delete(){

    }
}
