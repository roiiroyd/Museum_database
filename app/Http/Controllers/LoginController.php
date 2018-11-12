<?php

namespace App\Http\Controllers;

use App\Models\participants;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function setlogin()
		{		
			return view('login',['title' => 'login']);	
        }

        public function loginresult(Request $request)
		{	
            session_start();
            $email = $request->input('email');
            $pwd = $request->input('pwd');
                if(participants::where('email','=',$email)->value('password')==$pwd){
                echo "success" ;
                   $status = participants::where('email','=',$email)->first() ;
                   $_SESSION["ses_userid"] = session_id();            //สร้าง session สำหรับเก็บค่า ID
                   $_SESSION["ses_username"] = $email;      //สร้าง session สำหรับเก็บค่า Username
                   $_SESSION["ses_status"] = $status;
                   echo"<form action=\"/home\">
                   <input type=\"submit\" value=\"Go To Homepage Admin\">
                   </form>";
                }
                else {
                    echo "Fail";
                    return view('posts/login',['title' => 'login']);
                }
        }
            
        
    

}