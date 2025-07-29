<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "Idk";
    }

    function getName(){
        return "Amogus";
    }
       function Display($name){
        return "Hello ".$name;
    }
}

