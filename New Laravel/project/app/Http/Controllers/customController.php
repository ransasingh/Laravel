<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customController extends Controller
{
    function dispData() {
        $username = "Test";
        // $data = array("username"=>"Data","password"=>"test");
        // return view("viewdatafromcontroller");
        // return view("viewdatafromcontroller",compact('data'));
        return view("viewdatafromcontroller")->with(array('username'=>$username));
    }
}
