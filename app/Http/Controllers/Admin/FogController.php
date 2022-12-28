<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Interfaces\FogRepositoryInterface;

class FogController extends Controller
{
    public $FogRepo;

    function __construct(FogRepositoryInterface $FogRepository)
    {
        $this->FogRepo=$FogRepository;
         $this->middleware('permission:fog-list|fog-create|fog-edit|fog-delete', ['only' => ['index','store']]);
         $this->middleware('permission:fog-create', ['only' => ['create','store']]);
         $this->middleware('permission:fog-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:fog-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fogs=$this->FogRepo->all();
        return view('admin.fogs.index', compact('fogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->FogRepo->store($request);
        return redirect()->route('admin.fogs.index')->with('success1', 'Muvaffaqiyatli kritildi');

    }

    /**
     *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fog=$this->FogRepo->find($id);
        return view('admin.fogs.show', compact('fog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fog=$this->FogRepo->find($id);
        return view('admin.fogs.edit', compact('fog'));
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
        $this->FogRepo->update($request, $id);
        return redirect()->route('admin.fogs.index')->with('success2','Muvaffaqiyatli taxrirlandi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->FogRepo->find($id)->destroy($id);
        return redirect()->route('admin.fogs.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}
