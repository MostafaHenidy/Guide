<?php

namespace App\Http\Controllers;

use App\Models\cafe;
use Illuminate\Http\Request;
use App\Models\Post;

class cafeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cafes = cafe::paginate(5);
        // return view("cafes.index")->with("cafes", $cafes);
        return response()->json(['data' => $cafes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("cafes.create");
        return response()->json(['message' => 'Location created successfully']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'address' => 'required',
        //     'info' => 'required',
        //     'body' => 'required',
        //     'cover_image' => 'image|nullable|max:1999'
        // ]);
        // $fileNameToStore = null;
        // if ($request->hasFile('cover_image')) {
        //     $file = $request->file('cover_image');
        //     $fileName = $file->getClientOriginalName();
        //     $fileNameToStore = time() . '_' . $fileName;
        //     $file->move('covers', $fileNameToStore);
        // } else {
        //     $fileNameToStore = 'placeholder.jpg';
        // }
        // $cafes = new cafe;
        // $cafes->title = $request->title;
        // $cafes->address = $request->address;
        // $cafes->info = $request->info;
        // $cafes->body = $request->body;
        // $cafes->cover_image = $fileNameToStore;
        // $cafes->user_id = auth()->user()->id;
        // $cafes->save();
        // return redirect('/cafe')->with('success', 'Location created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cafes = cafe::findOrfail($id);
        // return view("cafes.show")->with("cafes", $cafes);
        return response()->json(['data' => $cafes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $cafes = cafe::findOrfail($id);
    //     return view('cafes.edit')->with('cafes', $cafes);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cafes = cafe::findOrFail($id);
        $cafes->update($request->all());

        return response()->json(['data' => $cafes]);
        // $cafes = cafe::findOrfail($id);
        // $cafes->title = $request->title;
        // $cafes->address = $request->address;
        // $cafes->info = $request->info;
        // $cafes->body = $request->body;
        // $cafes->save();
        // // return redirect('/cafe')->with('success', 'Location updated successfully');
        // return response()->json(['message' => 'Location updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cafes = cafe::findOrfail($id);
        $cafes->delete();
        // return redirect('/cafe')->with('deleted', 'Location deleted successfully');
        return response()->json(null, 204);
    }
}
