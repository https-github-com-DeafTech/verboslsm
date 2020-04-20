<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AutocompleteController extends Controller
{
    function fetch(Request $request)
    {
        if($request -> get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('VerbosLSM_palabras')
                    ->select('verbos')
                    ->where('verbos','like',"{$query}%")
                    ->groupBy('verbos')
                    ->orderBy('verbos','asc')
                    ->limit(5)
                    ->get();

            $output = '';

            if(count($data)>0)
            {
                $output = '<ul class="dropdown-menu text-dark col-12" style="display:block;position:absolute; cursor:default;">';
                foreach($data as $row)
                {
                    $output .= '<li  id="texto_autocomplete"><a class="dropdown-item" href="/search?verbo='.$row->verbos.'">'.$row->verbos.'</a></li>';

                }
                $output .= '</ul>';


            } else {
                $output .= '<ul class="dropdown-menu text-dark" style="display:block;position:absolute"><li class="dropdown-item">'.'No existe esa palabra'.'</li></ul>';
            }

            echo $output;

        }
    }
}
