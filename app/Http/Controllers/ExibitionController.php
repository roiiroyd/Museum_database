<?php

namespace App\Http\Controllers;

use App\Models\participants;
use App\Models\Exibitions;
use App\Models\history;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ExibitionController extends Controller
{
    public function index()
    {
        $posts = Exibitions::all();
        $count = $posts->count();

        return view('exibition', [
          'count' => $count,
          'posts' => $posts
        ]);
    }

    public function indexLogin($reg)
    {
        $posts = Exibitions::all();
        $count = $posts->count();

        return view('exibitionLogin', [
          'count' => $count,
          'posts' => $posts,
          'reg' => $reg
        ]);
    }

    public function delete($id)
    {
        $del = Exibitions::findOrFail($id);
        $del->delete();
        echo "Delete Success!!";
        echo"<form action=\"/exibition\">
        <input type=\"submit\" value=\"Go To home\">
        </form>";
    }

    public function booking($id,$reg)
    {
        $posts = Exibitions::all();

        $history = new history;
        $history->exibitionID=$id;
        $history->regisNo=$reg;
        $history->bookingDate='2018-12-01';
        
        $history->save();

        return view('exibitionLogin', [
            'reg' => $reg,
            'posts' => $posts
          ]);

        // echo "Booking Success!!";
        // echo"<form action=\"/exibitionLogin\">
        // <input type=\"submit\" value=\"Go\">
        // </form>";

        
    }
}