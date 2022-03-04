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

                switch($queryType){
                    case 'track':
                        $result = Spotify::searchTracks($name)->limit($amount)->get();
                        return view('results/trackresult',['result'=>$result]);
                        break;

                    case 'artist':
                        $result = Spotify::searchArtists($name)->limit($amount)->get();
                        return view('results/artistresult',['result'=>$result]);
                        break;
            
                    case 'album':
                        $result = Spotify::searchAlbums($name)->limit($amount)->get();
                        return view('results/albumresult',['result'=>$result]);
                        break;

                    case 'playlist':
                        $result = Spotify::searchPlaylists($name)->limit($amount)->get();
                        return view('results/playlistresult',['result'=>$result]);
                        break;
    
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

