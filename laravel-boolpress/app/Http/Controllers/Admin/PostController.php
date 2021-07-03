<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\Session;


use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data = [
            'posts' => Post::all()
        ];
        
        return view("admin.posts.index", $data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.posts.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //creare un nuovo post 
    public function store(Request $request){
        $request->validate([
            "title"=>"required|max:255",
            "content" => "required",
        ]);
        $form_data = $request->all();
        $new_post= new Post();
        $new_post->fill($form_data);

        /*
        //per generare lo slug :url 
        $slug=Str::slug($new_post->title);
        $slug_base=$slug;

        //verifico che lo slug non esista gia nel database 
        $post_presente = Post::where('slug', $slug)->first();
        $contatore=1;

        //fin quando questa variabile ha una valore 
        while($post_presente) {
            $slug=$slug_base . "-" . $contatore;
            $contatore++;
            $post_presente= Post::where('slug', $slug)->first();
        }
        //esco dal while, se lo slug nn lo trova nel db 
        //assegno lo slug al post 
        $new_post->slug= $slug;
        */
        $new_post->save();
        return redirect()->route('admin.posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('admin.posts.show', ['post' =>$post]);
        // return view('posts.show', compact('post'));
        // return view('posts.show', [
        //     'post' => $post
        // ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data=[
            'post' =>$post
        ];
        return view('admin.posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            "title"=>"required|max:255",
            "content" => "required",
        ]);

        $form_data=$request->all();

        $post->update($form_data);
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
