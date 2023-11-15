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
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = "Welome to About";
        return view('pages.about')->with('title', $title);
    }

    public function features()
    {
        $data = array(
            'title' => 'Features',
            'features' => ['Create Post' ,'Upload Media']
        );
        return view('pages.features')->with($data);
    }
}
