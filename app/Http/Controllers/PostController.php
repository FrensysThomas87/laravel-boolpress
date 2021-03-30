<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Author;
use App\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.posts-view', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $tags = Tag::all();




        return view('posts.create', compact('authors', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $post = new Post();
        $post->fill($data);
        $post->save();



        //Nella porzione di codice sottostante prendo associo un tag ad un post semplicemente scrivendolo nel corpo del testo



        // Prima prendo tutti i tag
        $allTags = Tag::all();

        //Ora creo l'array che si riempirà se trova un'occorrenza nel testo
        $finalArrayTag = $data['tags'];

        //Ora ciclo tutti i tags, poi dico che se nel testo è presente uno dei tag lo devo inserire nell'array $finalArrayTag
        foreach($allTags as $tag){
            if(stripos($data['text'], $tag->tag_name)!== false){
                $finalArrayTag[] = $tag->id;
            }
        }

        //Infine associo i tag al post
        $post->tags()->attach($finalArrayTag);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $authors = Author::all();
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'authors','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();

        $post->update($data);

        $post->tags()->sync($data['tags']);

        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
