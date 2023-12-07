<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        // return view("posts.index")->with("posts", $posts);
        return response()->json(['data' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return view("posts.create");
        $post = Post::create($request->all());

        return response()->json(['data' => $post], 201);
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
        $post = new Post;
        $post->title = $request->title;
        $post->address = $request->address;
        $post->info = $request->info;
        $post->body = $request->body;
        $post->cover_image = $fileNameToStore;
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/posts')->with('success', 'Location created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json(['data' => $post]);
        // $post = Post::findOrfail($id);
        // return view("posts.show")->with("post", $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrfail($id);
        return view('posts.edit')->with('post', $post);
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
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return response()->json(['data' => $post]);
        // $post = Post::findOrfail($id);
        // $post->title = $request->title;
        // $post->address = $request->address;
        // $post->info = $request->info;
        // $post->body = $request->body;
        // $post->save();
        // return redirect('/posts')->with('success', 'Location updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json(null, 204);

        // $post = Post::findOrfail($id);
        // $post->delete();
        // return redirect('/posts')->with('deleted', 'Location deleted successfully');
    }
}
