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

    public function showIndexPaint()
    {
        $postPaints = ArtObject::where('type',1)->get();
        $count = $postPaints->count();

        return view('artworkPaint', [
            'count' => $count,
            'posts' => $postPaints
        ]);
    }

    public function showIndexPaintLogin($reg)
    {
        $postPaints = ArtObject::where('type',1)->get();
        $count = $postPaints->count();

        return view('artworkPaintLogin', [
            'count' => $count,
            'posts' => $postPaints,
            'reg' => $reg
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

    public function showIndexSculptureLogin($reg)
    {
        $postSculps = ArtObject::where('type',2)->get();
        $count = $postSculps->count();

        return view('artworkSculptureLogin', [
            'count' => $count,
            'posts' => $postSculps,
            'reg' => $reg
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

    public function showIndexStatueLogin($reg)
    {
        $postStatue = ArtObject::where('type',3)->get();
        $count = $postStatue->count();

        return view('artworkStatueLogin', [
            'count' => $count,
            'posts' => $postStatue,
            'reg' => $reg
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

    public function showIndexOtherLogin($reg)
    {
        $postOther = ArtObject::where('type',4)->get();
        $count = $postOther->count();

        return view('artworkOtherLogin', [
            'count' => $count,
            'posts' => $postOther,
            'reg' => $reg
        ]);
    }





}