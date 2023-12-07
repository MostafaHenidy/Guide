<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use Illuminate\Http\Request;
use App\Models\Post;

class jobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jobs = jobs::paginate(5);
        // return view("jobs.index")->with("jobs", $jobs);
        $jobs = jobs::all();
        return response()->json(['data' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return view("jobs.create");
        $job = jobs::create($request->all());

        return response()->json(['data' => $job], 201);
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
        // $jobs = new jobs;
        // $jobs->title = $request->title;
        // $jobs->address = $request->address;
        // $jobs->info = $request->info;
        // $jobs->body = $request->body;
        // $jobs->cover_image = $fileNameToStore;
        // $jobs->user_id = auth()->user()->id;
        // $jobs->save();
        // return redirect('/job')->with('success', 'Location created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = jobs::findOrfail($id);
        return response()->json(['data' => $jobs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $jobs = jobs::findOrfail($id);
        // return view('jobs.edit')->with('jobs', $jobs);
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
        $job = jobs::findOrFail($id);
        $job->update($request->all());

        return response()->json(['data' => $job]);
        // $jobs = jobs::findOrfail($id);
        // $jobs->title = $request->title;
        // $jobs->address = $request->address;
        // $jobs->info = $request->info;
        // $jobs->body = $request->body;
        // $jobs->save();
        // return redirect('/jobs')->with('success', 'Location updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = jobs::findOrFail($id);
        $job->delete();

        return response()->json(null, 204);
        // $jobs = jobs::findOrfail($id);
        // $jobs->delete();
        // return redirect('/jobs')->with('deleted', 'Location deleted successfully');
    }
}
