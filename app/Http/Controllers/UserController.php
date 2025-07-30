<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
<<<<<<< HEAD
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
=======
    // function getName($name){
    //         $name=['A','B','C'];
    //     return view('user',['name' => $name],);
    // }

    // function Adminlogin(){
    //    if(View::exists('admin.login'))
    //     {
    //     return view('admin.login');
    //    }
    //    else
    //     {
    //     echo "No View Found";
    //    }
    // }
   

    // To check if view exists or not


    function getHome(){
        return view('home');
    }
      function getAbout(){
        return view('about');
    }

    function AddUser(){
        echo "User has been successfully added";
>>>>>>> 176ad1c (Form action get and post)
    }

    
}
?>      