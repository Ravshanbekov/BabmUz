<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Interfaces\TalentRepositoryInterface;

class TalentController extends Controller
{
    public $TalentRepo;

    function __construct(TalentRepositoryInterface $TalentRepository)
    {
        $this->TalentRepo=$TalentRepository;
         $this->middleware('permission:talent-list|talent-create|talent-edit|talent-delete', ['only' => ['index','store']]);
         $this->middleware('permission:talent-create', ['only' => ['create','store']]);
         $this->middleware('permission:talent-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:talent-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talents=$this->TalentRepo->all();
        return view('admin.talents.index', compact('talents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.talents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->TalentRepo->store($request);
        return redirect()->route('admin.talents.index')->with('success1', 'Muvaffaqiyatli kritildi');

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
        $talent=$this->TalentRepo->find($id);
        return view('admin.talents.show', compact('talent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $talent=$this->TalentRepo->find($id);
        return view('admin.talents.edit', compact('talent'));
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
        $this->TalentRepo->update($request, $id);
        return redirect()->route('admin.talents.index')->with('success2','Muvaffaqiyatli taxrirlandi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->TalentRepo->find($id)->destroy($id);
        return redirect()->route('admin.talents.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}
