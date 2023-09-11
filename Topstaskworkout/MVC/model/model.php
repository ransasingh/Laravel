 <?php
    // error_reporting(0);
    class model
    {
        public $connection = "";
        public function __construct()
        {
            $this->connection = new mysqli("localhost", "root", "", "masterdatabase");
            try {

                // echo "<pre>";
                // print_r($this->connection);
                // echo "</pre>";
            } catch (\Throwable $th) {

                throw $th;
                echo "<pre>";
                print_r($th->getMessage());
                echo "</pre>";
                if (!file_exists("log")) {
                    mkdir("log");
                }

                $ErrorMsg =  PHP_EOL . "Error Msg >>> " . $th->getMessage() . PHP_EOL;
                $ErrorMsg .=  "Error dateTime >>> " . date("d-m-Y H:i:s A") . PHP_EOL;
                $fileName = date('d_m_Y') . "_Error_log.txt";
                file_put_contents("log/" . $fileName, $ErrorMsg, FILE_APPEND);
                echo "<h1>" . $th->getMessage() . "</h1>";
            }
        }


        function login($uname, $pass)
        {
            $SQL = "Select * from users where password='$pass' AND (username='$uname' OR email='$uname'OR phone='$uname') ";
            $SQLEx = $this->connection->query($SQL);
            // echo "<pre>";
            // print_r($SQLEx);
            if ($SQLEx->num_rows > 0) {
                $rows = $SQLEx->fetch_object();
                // print_r( $rows);
                // exit;
                $Res['Code'] = 1;
                $Res['Data'] = $rows;
                $Res['Msg'] = "Success";
            } else {
                $Res['Code'] = 0;
                $Res['Data'] = 0;
                $Res['Msg'] = "Try again";
            }
            return $Res;
        }
        function select($tbl,$where)
        {
            $SQL = "Select * from $tbl ";          
           
            if ($where != "") {
                $SQL .= " WHERE ";
                foreach ($where as $key => $value) {
                    $SQL .= " $key = '$value' AND";
                }
            }
            $SQL = rtrim($SQL,"AND");
            // echo $SQL;
            // exit;
            $SQLEx = $this->connection->query($SQL);

            if ($SQLEx->num_rows > 0) {
                while ($row = $SQLEx->fetch_object()) {
                    $data[] = $row;
                }

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

        function update($tbl,$data,$where)
        {
            $SQL = "update $tbl set  ";
            foreach ($data as $key => $value) {
               $SQL.= "$key = '$value' ,";
            }
            // echo $SQL;
            $SQL = rtrim($SQL,",");
            $SQL .= " WHERE";
            foreach ($where as $key => $value) {
                $SQL.= " $key = '$value ' AND";
            }
            $SQL = rtrim($SQL,"AND");
            // echo $SQL;
            $sqlex = $this->connection->query($SQL);
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
        
        function delete($tbl,$where){
        $SQL = " DELETE FROM $tbl WHERE";
        foreach ($where as $key => $value) {
        $SQL .= " $key = '$value' AND";
        }
        $SQL =rtrim($SQL,"AND");
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx);
        if($SQLEx >0){
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
    




// $modelobj= new model();
// $modelobj->insert("user",array("username"=>"Ranjeet","Password"=>123,"Gender"=>"Male"));