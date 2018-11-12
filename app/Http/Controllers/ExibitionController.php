<?php

namespace App\Http\Controllers;

use App\Models\participants;
use App\Models\Exibitions;
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


}