<?php

namespace App\Http\Controllers;

use App\Models\participants;
use App\Models\Exibitions;
use App\Models\history;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{

    public function index()
    {
        $posts = Exibitions::all();
        $count = $posts->count();

        return view('booking', [
          'count' => $count,
          'posts' => $posts
        ]);
    }

    public function indexLogin($reg)
    {
        $posts = Exibitions::all();
        $count = $posts->count();

        return view('bookingLogin', [
          'count' => $count,
          'posts' => $posts,
          'reg' => $reg
        ]);
    }

    public function booking($id,$reg)
    {
        $posts = Exibitions::all();

        $history = new history;
        $history->exibitionID=$id;
        $history->regisNo=$reg;
        $history->bookingDate='2018-12-01';
        
        $history->save();

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