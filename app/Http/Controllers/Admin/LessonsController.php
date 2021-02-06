<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LessonRequest;
use App\Models\Admin\Lessons;
use App\Traits\ImageProcess;
use App\Traits\StoreUpdateTrait;
use http\Client\Response;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    use ImageProcess, StoreUpdateTrait;
    /**
     * Display a listing of the lessons.
     *
     * @return view
     */
    public function index()
    {
        $lessons = Lessons::all();

        return view('admin.homepage.department.lesson.index', compact('lessons'));
    }
    /**
     * Store a newly created Lesson in storage.
     *
     * @param  LessonRequest  $request
     * @return Response
     */
    public function store(LessonRequest $request)
    {
        $model = new Lessons();

        $this->storeData($request, $model);

        return back()->with('success' , 'Lesson Saved Successfully') ;

    }
    /**
     * Show the form for editing the specified Lesson.
     *
     * @param  $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if ($request->ajax())
        {
            $lesson = Lessons::find($id);

            return response()->json($lesson);
        }

    }

    /**
     * Update the specified lesson in storage.
     *
     * @param  LessonRequest $request
     * @param  Lessons  $lesson
     * @return Response
     */
    public function update(LessonRequest $request, Lessons $lesson)
    {
         $this->updateData($request, $lesson);

        return back()->with('success' , 'Lesson Updated Successfully') ;

    }

    /**
     * Remove the specified Lesson from storage.
     *
     * @param  Lessons  $lesson
     * @return Response
     */
    public function destroy(Lessons $lesson)
    {
         $lesson->delete();
        return back()->with('success' , 'Lesson deleted Successfully') ;
    }
}
