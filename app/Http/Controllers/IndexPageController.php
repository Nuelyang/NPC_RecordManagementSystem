<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;

class IndexPageController extends Controller
{
    public function index()
    {
        $citizens = Citizen::all();
        return view('welcome')->with('citizens', $citizens);
    }


    public function showRecord($id)
    {        
        $data = ([
            'citizen' => Citizen::where('id', $id)->get(),

        ]);
        return view('showRecord')->with($data);
    }
}
