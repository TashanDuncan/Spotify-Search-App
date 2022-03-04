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
            $queryType = $request->get('query');

            
                $name = $request->get('name');
                $amount = $request->get('resultsRange');
                if($queryType === 'track'){
                    $result = Spotify::searchTracks($name)->limit($amount)->get();
                    return view('trackresult',['result'=>$result]);
                }
                if($queryType === 'artist'){
                    $result = Spotify::searchArtists($name)->limit($amount)->get();
                    //return $result;
                    return view('artistresult',['result'=>$result]);
                }

            

            abort(404);

        }

        
    }
}

