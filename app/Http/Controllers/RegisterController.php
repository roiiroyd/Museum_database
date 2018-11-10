<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RegisterController extends BaseController
{
    public function save(Request $request)
    {
        $Participant = new Participant;
        $student->name=$request->input('name');
        $student->lastnameex=$request->input('lastname');
        $student->email=$request->input('email');
        $student->password=$request->input('password');
        
        if(empty($student->email)) {
            echo "<br><br><center><h3>Email Cannot be empty!</h3><br>
            Adding Fail!<br>" ;	
        }
        else{
            $student->save(); 
            echo "<br><br><center>Adding Success!";
        }
        // echo"<form action=\"/bk/students/index\">
        // <input type=\"submit\" value=\"Go To Students\">
        // </form>";
    }
}
