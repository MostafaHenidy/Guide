<?php

namespace App\Http\Controllers;

use App\Models\education;
use Illuminate\Http\Request;

class EductaionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edus = education::paginate(5);
        return view("education.index")->with("edus", $edus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("education.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'address' => 'required',
            'info' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        $fileNameToStore = null;
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $fileName = $file->getClientOriginalName();
            $fileNameToStore = time() . '_' . $fileName;
            $file->move('covers', $fileNameToStore);
        } else {
            $fileNameToStore = 'placeholder.jpg';
        }
        $edu = new education();
        $edu->title = $request->title;
        $edu->address = $request->address;
        $edu->info = $request->info;
        $edu->body = $request->body;
        $edu->cover_image = $fileNameToStore;
        $edu->save();
        return redirect('/edu')->with('success', 'Location created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edu = education::findOrfail($id);
        return view("education.show")->with("edu", $edu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edu = education::findOrfail($id);
        return view('education.edit')->with('edu', $edu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edu = education::findOrfail($id);
        $edu->title = $request->title;
        $edu->address = $request->address;
        $edu->info = $request->info;
        $edu->body = $request->body;
        $edu->save();
        return redirect('/edu')->with('success', 'Location updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edu = education::findOrfail($id);
        $edu->delete();
        return redirect('/edu')->with('deleted', 'Location deleted successfully');
    }
}
