<?php

namespace App\Http\Controllers;

use App\Models\participants;
use App\Models\Exhibitions;
use App\Models\history;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{

    public function index()
    {
        $posts = Exhibitions::all();
        $count = $posts->count();

        return view('booking', [
          'count' => $count,
          'posts' => $posts
        ]);
    }

    public function indexLogin($reg)
    {
        $posts = Exhibitions::all();
        $count = $posts->count();

        return view('bookingLogin', [
          'count' => $count,
          'posts' => $posts,
          'reg' => $reg
        ]);
    }

    public function booking($id,$reg)
    {
        $posts = Exhibitions::All();
        $ex = Exhibitions::where('exhibitionID','=',$id)->first();
        $limitAtten = $ex->limitOfAttend;
        $numberAtten = $ex->numberOfAttend;
        $dateEx = $ex->startDate;

        if($numberAtten < $limitAtten){
            $ex->numberOfAttend = $numberAtten + 1;
            
            $history = new history;
            $history->exhibitionID=$id;
            $history->regisNo=$reg;
            $history->bookingDate=$dateEx;
            $history->save();
            $ex->save();
            
            $message = "booking success";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
            $message = "booking failed full of attendance";
            echo "<form action=\"/bookingLogin\">
            <script type='text/javascript'>alert('$message');</script>
            </form>";
        }

        return view('bookingLogin', [
            
            'reg' => $reg,
            'posts' => $posts
          ]);

        // echo "Booking Success!!";
        // echo"<form action=\"/exibitionLogin\">
        // <input type=\"submit\" value=\"Go\">
        // </form>";
    }


    

}