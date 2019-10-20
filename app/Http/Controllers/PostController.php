<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        $input = $request->all();
        // dd($input);
        if($file = $request->file('fileName')){
            $name = $file->getClientOriginalName();
            $file->move('images', $name);

            $input['path'] = $name;
            
        }
        // dd($input);
        Post::create($input);
        return redirect('posts');
        // return $request->title;
        // $this->validate($request, [
        //     'title' => 'required|max:4',
        //     'content' => 'required'
        // ]);
        //نضع نفس الاسم الموجود على الوسم من النوع ملف
       //$file = $request->file('fileName');
        //echo "<br>";
       // echo $file->getClientOriginalName();
        //echo "<br>";
        //echo $file->getClientSize();
       // echo "<br>";
        
       
       // Post::create($request->all());
        //return redirect('/posts');

        // $input = $request->all();
        // input['title'] = $request->title;
        // Post::create($request->all());

        // $post = new Post;
        // $post->title = $request->title;
        // $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // return $request->all(); للتجريب الملل 
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $post = Post::findOrFail($id);
        // $post->delete();
        
        $post= Post::where('id', '=', $id)->delete();
        return redirect('/posts');
    }
}
