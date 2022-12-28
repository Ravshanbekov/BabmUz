<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Interfaces\TeamRepositoryInterface;

class TeamController extends Controller
{
    public $TeamRepo;
    function __construct(TeamRepositoryInterface $TeamRepository)
    {
        $this->TeamRepo=$TeamRepository;
         $this->middleware('permission:team-list|team-create|team-edit|team-delete', ['only' => ['index','store']]);
         $this->middleware('permission:team-create', ['only' => ['create','store']]);
         $this->middleware('permission:team-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:team-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams= $this->TeamRepo->all();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->TeamRepo->store($request);
        return redirect()->route('admin.teams.index')->with('success1', 'Muvaffaqiyatli kiritildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team=$this->TeamRepo->find($id);
        return view('admin.teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team=$this->TeamRepo->find($id);
        return view('admin.teams.edit', compact('team'));
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
        $this->TeamRepo->update($request,$id);
        return redirect()->route('admin.teams.index')->with('success2', 'Muvaffaqiyatli taxrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->TeamRepo->find($id)->destroy($id);
        return redirect()->route('admin.teams.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}
