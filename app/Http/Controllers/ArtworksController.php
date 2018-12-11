<?php

namespace App\Http\Controllers;

use App\Models\participants;
use App\Models\ArtObject;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ArtworksController extends Controller
{
    public function show($reg)
    {
        return view('artworksLogin', [
          'reg' => $reg
        ]);
    }

    public function showIndex()
    {
        
        $posts = ArtObject::All();
        $postPaints = ArtObject::where('type',1)->get();
        $postSculps = ArtObject::where('type',2)->get();
        $postStatues = ArtObject::where('type',3)->get();
        $postOthers = ArtObject::where('type',4)->get();

        $count = $posts->count();

        // $title = $posts->title;
        // $year = $posts->year;
        // $paintType = $posts->paintType;

        return view('artworks', [
            'count' => $count,
            'postPs' => $postPaints,
            'postSCs' => $postSculps,
            'postSs' => $postStatues,
            'postOs' => $postOthers
            // 'title' => $title,
            // 'year' => $year,
            // 'paintType' => $paintType
        ]);

    }


    public function showIndexPaint()
    {
        $postPaints = ArtObject::where('type',1)->get();
        $count = $postPaints->count();

        return view('artworkPaint', [
            'count' => $count,
            'posts' => $postPaints
        ]);
    }

    public function showIndexSculpture()
    {
        $postSculps = ArtObject::where('type',2)->get();
        $count = $postSculps->count();

        return view('artworkSculpture', [
            'count' => $count,
            'posts' => $postSculps
        ]);
    }

    public function showIndexStatue()
    {
        $postStatue = ArtObject::where('type',3)->get();
        $count = $postStatue->count();

        return view('artworkStatue', [
            'count' => $count,
            'posts' => $postStatue
        ]);
    }

    public function showIndexOther()
    {
        $postOther = ArtObject::where('type',4)->get();
        $count = $postOther->count();

        return view('artworkOther', [
            'count' => $count,
            'posts' => $postOther
        ]);
    }




}