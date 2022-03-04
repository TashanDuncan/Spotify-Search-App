<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spotify;

class SpotifySearchController extends Controller
{

    function search(Request $request)
    {
        if($request->isMethod('post'))
        {
            $queryType = $request->get('query');

            
                $name = $request->get('name');
                $amount = $request->get('resultsRange');
                if($queryType === 'track'){
                    $result = Spotify::searchTracks($name)->limit($amount)->get();
                    return view('results/trackresult',['result'=>$result]);
                }
                if($queryType === 'artist'){
                    $result = Spotify::searchArtists($name)->limit($amount)->get();
                    //return $result;
                    return view('results/artistresult',['result'=>$result]);
                }

            

            abort(404);

        }

        
    }

    function query(Request $request)
    {
        if($request->isMethod('post'))
        {
            $lookup = $request->get('lookup');

            switch($lookup){
                case "track":
                    return view('search',['lookup'=>$lookup]);
                    break;
                case "artist":
                    return view('search',['lookup'=>$lookup]);
                    break;
                case "album":
                    return view('search',['lookup'=>$lookup]);
                    break;
                case "playlist":
                    return view('search',['lookup'=>$lookup]);
                    break;
            }
        }
    }
}

