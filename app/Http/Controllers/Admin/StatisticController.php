<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Interfaces\StatisticRepositoryInterface;

class StatisticController extends Controller
{
    public $StatisticRepo;

    function __construct(StatisticRepositoryInterface $StatisticRepository)
    {
        $this->StatisticRepo=$StatisticRepository;
         $this->middleware('permission:statistic-list|statistic-create|statistic-edit|statistic-delete', ['only' => ['index','store']]);
         $this->middleware('permission:statistic-create', ['only' => ['create','store']]);
         $this->middleware('permission:statistic-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:statistic-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistics=$this->StatisticRepo->all();
        return view('admin.statistics.index', compact('statistics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->StatisticRepo->store($request);
        return redirect()->route('admin.statistics.index')->with('success1', 'Muvaffaqiyatli kritildi'); 
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
        $statistic=$this->StatisticRepo->find($id);
        return view('admin.statistics.show', compact('statistic'));
    }     

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statistic=$this->StatisticRepo->find($id);
        return view('admin.statistics.edit', compact('statistic'));
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
        $this->StatisticRepo->update($request,$id);
        return redirect()->route('admin.statistics.index')->with('success2', 'Muvaffaqiyatli taxrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->StatisticRepo->find($id)->destroy($id);
        return redirect()->route('admin.statistics.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}
