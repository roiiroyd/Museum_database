<?php

namespace App\Http\Controllers;

use App\Models\participants;
use App\Models\Exhibitions;
use App\Models\history;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ExhibitionController extends Controller
{
    public function index()
    {
        $posts = Exhibitions::all();
        $count = $posts->count();

        return view('exhibition', [
          'count' => $count,
          'posts' => $posts
        ]);
    }

    public function indexLogin($reg)
    {
        $posts = Exhibitions::all();
        $count = $posts->count();

        return view('exhibitionLogin', [
          'count' => $count,
          'posts' => $posts,
          'reg' => $reg
        ]);
    }

    public function delete($id)
    {
        $del = Exhibitions::findOrFail($id);
        $del->delete();
        echo "Delete Success!!";
        echo"<form action=\"/exhibition\">
        <input type=\"submit\" value=\"Go To home\">
        </form>";
    }

    public function view($id)
    {
        $ex = Exhibitions::where('exhibitionID','=',$id)->first();
        $names = $ex->name;
        $detail = $ex->detail;
        $exID = $ex->exhibitionID;

        return view('exhibitionDetail', [
            'name' => $names,
            'detail' => $detail,
            'exID' => $exID,
            'id' => $id
          ]);
        
    }

    public function booking($id,$reg)
    {
        $posts = Exhibitions::all();
        $history = new history;
        
        $history->exhibitionID=$id;
        $history->regisNo=$reg;
        $history->bookingDate='2018-12-01';
        
        $history->save();

        return view('exhibitionLogin', [
            'reg' => $reg,
            'posts' => $posts
          ]);

    }
}