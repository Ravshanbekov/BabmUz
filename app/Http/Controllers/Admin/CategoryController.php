<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    public $CategoryRepo;

    function __construct(CategoryRepositoryInterface $CategoryRepository)
    {   
        $this->CategoryRepo=$CategoryRepository;
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','store']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= $this->CategoryRepo->all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CategoryRepo->store($request);
        return redirect()->route('admin.categories.index')->with('success1', 'Muvaffaqiyatli kritildi');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= $this->CategoryRepo->find($id);
        return view('admin.categories.edit', compact('category'));
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
        $this->CategoryRepo->update($request, $id);
        return redirect()->route('admin.categories.index')->with('success2', 'Muvaffaqiyatli tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= $this->CategoryRepo->find($id);
        $category->post()->delete();
        $category->event()->delete();
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}
