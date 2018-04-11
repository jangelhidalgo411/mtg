<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lexico extends Controller
{
    public function show_def()
    {
        $definition = DB::table('definitions')->orderBy('title', 'desc')->get();

        return view('lexico')->with('definition',$definition);
    }

}
