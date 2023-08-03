<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    function list(){
        return movie::all();
    }
    function listparams($id=null){
        return movie::find($id);
    }
    function add(Request $req){
        $movie = new movie;
        // $movie->id=$req->id ;
        $movie->movie_name =$req -> movie_name ;
        $movie->duration =$req -> duration ;
        $movie->director =$req -> director ;
        $result=$movie->save() ;
        if($result){
            return ["result"=>"has been saved"];
        }else{
            return ["result"=>"error"];
        }
    }
    function del($id=null){
        $movie  = movie :: find ($id) ;
        if(!$movie ){
            return ["result"=>"not found"];
            } else {
                $movie ->delete () ;
                return ["result"=>"has been deleted"];
            }
    }
    function update(Request $req){
        $movie  = movie :: find ($req->id) ;
        $movie->movie_name =$req -> movie_name ;
        $movie->duration =$req -> duration ;
        $movie->director =$req -> director ;
        $result=$movie->save() ;
        if($result){
            return ["result"=>"has been updated"];
        }else{
            return ["result"=>"error"];
        }
    }
}
