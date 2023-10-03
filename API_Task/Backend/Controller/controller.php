<?php
require_once("Model/model.php");
class controller extends model
{
  function __construct()
  {
    parent::__construct();
    if (isset($_SERVER['PATH_INFO'])) {
      switch ($_SERVER['PATH_INFO']) {

        case '/data':
          $alldata = $this->select("users");

          echo json_encode($alldata);
          break;
        case '/checkemail':
          $checkdatabyemail = $this->select("users", array("email" => $_REQUEST['email']));
          // echo "<pre>";
          // print_r($checkdatabyemail);
          // echo "</pre>";

          echo json_encode($checkdatabyemail);
          break;
        case '/checkpostmethod':

          // echo "<pre>";
          // print_r($_REQUEST);
          // $data = json_decode(file_get_contents('php://input'));
          // print_r($data->username);
          $data = json_decode(file_get_contents('php://input'), true);
          // print_r($data['username']);
          // $data =file_get_contents('php://input');
          // var_dump($data);
          // echo json_encode(["data"=>"checking"]);
          echo json_encode($data);

          break;
        case '/Todoadd':
          $data = json_decode(file_get_contents('php://input'), true);
          // print_r($data);
          $InsertRes = $this->insert('todo',$data);
         
          echo json_encode($InsertRes);

          break;
        case '/showall':
          
          $showall = $this->select('todo');
         
          echo json_encode($showall);

          break;
          
        default:
          # code...
          break;
      }
    }
  }
}


$controller =  new controller;
