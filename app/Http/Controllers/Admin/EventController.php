<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Repository\Interfaces\EventRepositoryInterface;

class EventController extends Controller
{
    public $EventRepo;

    function __construct(EventRepositoryInterface $EventRepository)
    {
        $this->EventRepo=$EventRepository;
         $this->middleware('permission:event-list|event-create|event-edit|event-delete', ['only' => ['index','store']]);
         $this->middleware('permission:event-create', ['only' => ['create','store']]);
         $this->middleware('permission:event-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:event-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $events=$this->EventRepo->all();
        return view('admin.events.index', compact('categories','events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.events.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->EventRepo->store($request);
        return redirect()->route('admin.events.index')->with('success1', 'Muvaffaqiyatli kritildi');

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
        $event=$this->EventRepo->find($id);
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $event=$this->EventRepo->find($id);
        return view('admin.events.edit', compact('event', 'categories'));
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
        $this->EventRepo->update($request, $id);
        return redirect()->route('admin.events.index')->with('success2','Muvaffaqiyatli taxrirlandi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=$this->EventRepo->find($id);
        if(!empty($event->category()))
        {
        $event->delete();
        }
        return redirect()->route('admin.events.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}
