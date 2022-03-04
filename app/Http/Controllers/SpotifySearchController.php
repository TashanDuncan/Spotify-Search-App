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

    function search(Request $request)
    {
        if($request->isMethod('post'))
        {
            $name = $request->get('name');
            $result = Spotify::searchTracks($name)->get();
        }

        //return $result;
        return view('result',['result'=>$result]);
    }
}

