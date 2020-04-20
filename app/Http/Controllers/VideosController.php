<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class VideosController extends Controller
{
    public function index()
    {
            $videos_ar = DB::select('select * from VerbosLSM_palabras where verbos like "%ar" order by RAND() desc limit 5');
            $videos_er = DB::select('select * from VerbosLSM_palabras where verbos like "%er" order by RAND() desc limit 5');
            $videos_ir = DB::select('select * from VerbosLSM_palabras where verbos like "%ir" order by RAND() desc limit 5');
            return view('index', ['videos_ar' => $videos_ar,
                                            'videos_er' => $videos_er,
                                            'videos_ir' => $videos_ir]);
    }


    public function search(Request $request)
    {
        $verbo = $request->verbo;


        $condicion = DB::table('VerbosLSM_palabras')
                    ->where('verbos','=',"{$verbo}")
                    ->exists();

                        $videos = DB::table('VerbosLSM_palabras')
                                    ->where('verbos','=',"{$verbo}")-> get();
                    




        return view('search',['condicion' => $condicion,
                 'videos' => $videos,   
                 'verbo' => $verbo]);
    }


}
