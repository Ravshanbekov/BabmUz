<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    
     function __construct()
    {
         $this->middleware('permission:course-list|course-create|course-edit|course-delete', ['only' => ['index','store']]);
         $this->middleware('permission:course-create', ['only' => ['create','store']]);
         $this->middleware('permission:course-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:course-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses= Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        
        if($request->file('image'))
        {
          $file=$request->file('image');
          $image_name=time().$file->getClientOriginalName();
          $file->move('admin2/courses/', $image_name);
          $data['image']="https://babm.afeme.uz/admin2/courses/".$image_name;
        }
        Course::create($data);
        return redirect()->route('admin.courses.index')->with('success1', 'Muvaffaqiyatli kiritildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course=Course::find($id);
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=Course::find($id);
        return view('admin.courses.edit', compact('course'));
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
          $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin2/courses/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/courses/".$image_name;
        }

        $course=Course::find($id);
        $course->update($data);
        return redirect()->route('admin.courses.index')->with('success2', 'Muvaffaqiyatli taxrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    Course::destroy($id);
         return redirect()->route('admin.courses.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}
