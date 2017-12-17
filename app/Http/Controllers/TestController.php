<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index(){
        echo"<br> Test Controller.";
    }

    public function testTerminateController(){
        echo"<br> ABC Controller";
    }
}
