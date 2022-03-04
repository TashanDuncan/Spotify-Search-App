<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spotify;

class SpotifySearchController extends Controller
{
    function index()
    {
        $collection = Spotify::searchTracks('Closed on Sunday')->get();
        return view('bytrackname',['collection'=>$collection]);
    }

    function searchByTrack(Request $request)
    {
        if($request->isMethod('post'))
        {
            $name = $request->get('name');
            $amount = $request->get('resultsRange');
            $result = Spotify::searchTracks($name)->limit($amount)->get();
        }

        return view('result',['result'=>$result]);
    }
}

