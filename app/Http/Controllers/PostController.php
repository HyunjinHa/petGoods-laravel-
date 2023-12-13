<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // 모든 게시물을 보여주는 메소드
    public function index()
    {
        $posts = Post::all();
        // $posts = $this->post->latest()->paginate(10);
        return view('posts.index', ['posts' => $posts]);
    }

    // 게시물 생성 폼을 보여주는 메소드
    public function create()
    {
        return view('posts.create');
    }

    // 새 게시물을 저장하는 메소드
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect('/posts');
    }

    // 게시물을 보여주는 메소드
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }

    // 게시물 편집 폼을 보여주는 메소드
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', ['post' => $post]);
    }

    // 게시물 업데이트를 처리하는 메소드
    public function update(Request $request, Post $post)
    {
        $request = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update($request);
        return redirect('/posts');
    }

    // 게시물 삭제를 처리하는 메소드
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }
}


