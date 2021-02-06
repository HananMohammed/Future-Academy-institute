<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\DepartmentRequest;
use App\Models\Admin\Course;
use App\Models\Admin\Department;
use App\Http\Controllers\Controller;
use App\Models\Admin\Lessons;
use App\Traits\ImageProcess;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use ImageProcess, StoreUpdateTrait;
    /**
     * Display a listing of the Departments.
     *
     * @return view
     */
    public function index()
    {
        $departments = Department::all();

        return view('admin.homepage.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new Department.
     *
     * @return view
     */
    public function create()
    {
        $department = new Department();

        $lessons = Course::all();

        return view('admin.homepage.department.create', compact('department', 'lessons'));

    }

    /**
     * Store a newly created Department in storage.
     *
     * @param  DepartmentRequest  $request
     * @return Response
     */
    public function store(DepartmentRequest $request)
    {
        $model = new Department();
        $model->create([
            "title" => ['en' => $request->title[0],'ar' => $request->title[1]],
            "text" => ['en' => $request->text[0],'ar' => $request->text[1]],
            "lessons" => json_encode($request->lessons),
            "image" => $this->upload_image($request->file('image')),
            "created_by" => auth()->user()->id
        ]);
        return redirect(route('admin.departments.index'))->with('success' , 'Department Saved Successfully') ;

    }
    /**
     * Show the form for editing the specified storage.
     *
     * @param  department  $department
     * @return Response
     */
    public function edit(Department $department)
    {
        $lessons = Course::all();

        return view('admin.homepage.department.edit', compact('department', 'lessons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  DepartmentRequest  $request
     * @param  Department  $department
     * @return Response
     */
    public function update(DepartmentRequest $request, Department  $department)
    {
        $department->update([
            "title" => ['en' => $request->title[0],'ar' => $request->title[1]],
            "text" => ['en' => $request->text[0],'ar' => $request->text[1]],
            "lessons" => json_encode($request->lessons),
            "image" => $request->hasFile('image') ? $this->upload_image($request->file('image')) : $department->image,
            "created_by" => auth()->user()->id
        ]);

        return redirect(route('admin.departments.index'))->with('success' , 'Department Updated Successfully') ;
    }

    /**
     * Remove the specified Department from storage.
     *
     * @param  Department  $department
     * @return Response
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return back()->with('success' , 'Department Deleted Successfully') ;

    }
}
