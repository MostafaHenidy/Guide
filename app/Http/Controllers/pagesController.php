<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Welome to Home";
        // return view('pages.index')->with('title', $title);
        return response()->json($title);
    }

    public function about()
    {
        $title = "About US";
        // return view('pages.about')->with('title', $title);
        return response()->json(['title' => $title]);
    }

    public function features()
    {
        $data = array(
            'title' => 'Features',
            'features' => ['Available jobs' ,'Education assosiations','Health care services','Cafe and restorants']
        );
        // return view('pages.features')->with($data);
        return response()->json($data);
    }
}
