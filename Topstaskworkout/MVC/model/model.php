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
        function select($tbl)
        {
            $SQL = "Select * from $tbl ";
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

        function update()
        {
            $SQL = "";
        }
        function delete()
        {
            $SQL = "";
        }
    }
    




// $modelobj= new model();
// $modelobj->insert("user",array("username"=>"Ranjeet","Password"=>123,"Gender"=>"Male"));