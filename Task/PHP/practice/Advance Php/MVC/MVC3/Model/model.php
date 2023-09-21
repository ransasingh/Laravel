<?php
class model
{
    function __construct(protected $connecttion = null)
    {
        $this->connecttion = new mysqli("Localhost", "root", "", "car");

        //    if($this->connecttion) {
        //     echo "success";
        //    }
        //    else{
        //     echo "failed";
        //    }
    }
}
function register($tbl, $data)
{
    $clm = implode(",", array_keys($data));
    $val = implode("','", $data);
    $sql = "INSERT INTO  $tbl($clm) VALUE('$val')";
    echo $sql;
    exit;
}
function login()
{
}
function select()
{
}
function update()
{
}
