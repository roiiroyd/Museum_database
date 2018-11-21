<?php

namespace App\Http\Controllers;

use App\Models\participants;
use App\Models\Exibitions;
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
            $email = $request->input('email'); //fromweb
            $pwd = $request->input('password');
        
                if(participants::where('email','=',$email)->value('password')==$pwd){
                    
                   $status = participants::where('email','=',$email)->first() ;
                   $posts = Exibitions::all();
                   $reg = $status->regisNo;
                   
                   $_SESSION["ses_userid"] = session_id();            //สร้าง session สำหรับเก็บค่า ID
                   $_SESSION["ses_username"] = $email;      //สร้าง session สำหรับเก็บค่า Username
                   $_SESSION["ses_status"] = $status;

                    return view('homeLogin',['title' => 'login', //ต้องreturnไปhomeที่ส่งค่าregไปด้วยย
                    'reg'=>$reg
                    

                    ]);

                //    echo"<form action=\"/home\">
                //    <input type=\"submit\" value=\"Go To Homepage Admin\">
                //    </form>";

                }
                else {
                    echo "Fail";
                    return view('login',['title' => 'login']);
                }
        }
            
        
    

}