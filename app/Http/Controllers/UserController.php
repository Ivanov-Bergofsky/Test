<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function getUser(){
    //     return "Idk";
    // }

    // function getName(){
    //     return "Amogus";
    // }
    //    function Display($name){
    //     return "Hello ".$name;
    // }
     function AddUser(Request $request)
    {
        if ($request->isMethod('post')) {
            // Handle form submission
            $name = $request->input('name');
            // Process the name (e.g., save to database)
            return "User added: " . $name;
        }
        // Display the form
        return view('user-form');
    }
}
?>      