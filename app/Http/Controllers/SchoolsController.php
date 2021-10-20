<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateOrCreateSchoolRequest;
use App\Http\Resources\SchoolRsource;
use App\Models\School;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return School::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  updateOrCreateSchoolRequest  $request
     * @return SchoolRsource
     * @noinspection PhpUndefinedMethodInspection
     */
    public function store(updateOrCreateSchoolRequest $request)
    {
        $school = School::updateOrCreate(['id' => $request->id], $request->validated());
        return new SchoolRsource($school);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    School $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();
        return response(['message' => __('school has been deleted successfully')]);
    }
}
