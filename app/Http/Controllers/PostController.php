<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Post $post)
    {
        return view('home.detail', [
            'post' => $post
        ]);
    }
    
    
     public function add()
    {
        return view('post.tambah');
    }


    public function index()
    {
        $post = Post::latest();
        return view ('home.index', [
            'post' => $post->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->validate([
            'judul' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required'
        ]);
        Post::create($post);
        return redirect('/dashboard')->with('succes','Data berhasli ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Post::latest()->paginate(5);
        return view ('post.dashboard', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Post::findOrFail($id);
        return view ('post.edit', [
            'data' => $data
        ]);
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
        $data = Post::findOrFail($id);
        $post = $request->validate([
            'judul' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required'
        ]);
        $data->update($post);
        return redirect('/dashboard')->with('succes','Data berhasil diupdate!');
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
        return redirect('/dashboard')->with('delete','Data berhasil dihapus!');
    }
}
