<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Repository\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{
    public $PostRepo;

    function __construct(PostRepositoryInterface $PostRepository)
    {
         $this->PostRepo=$PostRepository;
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','store']]);
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $posts=$this->PostRepo->all();
        return view('admin.posts.index', compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->PostRepo->store($request);
        return redirect()->route('admin.posts.index')->with('success1','Muvaffaqiyatli kritildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=$this->PostRepo->find($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=$this->PostRepo->find($id);
        $categories=Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
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
        $this->PostRepo->update($request, $id);
        return redirect()->route('admin.posts.index')->with('success2','Muvaffaqiyatli tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post=$this->PostRepo->find($id);
       if(!empty($post->category()))
       {
       $post->delete();
       }
       return redirect()->route('admin.posts.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}
