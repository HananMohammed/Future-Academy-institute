<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ActivitiesRequest;
use App\Models\Admin\Activities;
use App\Traits\StoreUpdateTrait;

class ActivitiesController extends Controller
{
    use StoreUpdateTrait;
    /**
     * Show the form for editing the specified Activity.
     *
     * @return Response
     */
    public function edit()
    {
        $activity = Activities::first() ;

        if ($activity === null)
            $activity = new Activities();

        return view('admin.activity.edit', compact('activity'));
    }

    /**
     * Update the specified Activity in storage.
     *
     * @param  ActivitiesRequest  $request
     * @return Response
     */
    public function update(ActivitiesRequest $request)
    {
        $activity = Activities::first() ;

        if ($activity === null)
        {
            $activity = new Activities();

            $this->storeData($request, $activity);

            return back()->with(["success" => "Activity Stored Successfully"]);
        }
        else
        {
            $this->updateData($request, $activity);

            return back()->with(["success" => "Activity Updated Successfully"]);

        }
    }
}
