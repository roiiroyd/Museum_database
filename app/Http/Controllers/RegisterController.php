<?php

namespace App\Http\Controllers;

use App\Models\participants;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function homeLogin($reg){
        return view('homeLogin', [
            'reg' => $reg
          ]);
    }

    public function save(Request $request)
    {   
        
    


        $participants = new participants ;
        $participants->regisNo=$request->input('id');
        $participants->name=$request->input('name'); 
        $participants->lastname=$request->input('lastname');
        $participants->email=$request->input('email');
        $participants->password=$request->input('password');
        $participants->save();
        
       
        if(empty($participants->email)) {
            echo "<br><br><center><h3>Email Cannot be empty!</h3><br>
            Adding Fail!<br>" ; 
        }
        else{

            $participants->save(); 
            echo "<br><br><center>You are member now";
            echo"<form action=\"/login\">
        <input type=\"submit\" value=\"GO TO LOGIN\">
        </form>";
        } 
    }
}
