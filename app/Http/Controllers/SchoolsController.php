<?php

namespace App\Http\Controllers;

use App\Collections\SchoolsCollection;
use App\Http\Requests\CreateSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Http\Resources\SchoolRsource;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(Request $request) {
        return SchoolRsource::collection(SchoolsCollection::collection($request));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateSchoolRequest  $request
     * @return SchoolRsource
     * @noinspection PhpUndefinedMethodInspection
     */
    public function store(CreateSchoolRequest $request) {
        $school = School::updateOrCreate(['id' => $request->id], $request->validated());
        return new SchoolRsource($school);
    }

    public function update(UpdateSchoolRequest $request, School $school) {
        $school->update($request->validated());
        return new SchoolRsource($school);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    School $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school) {
        $school->delete();
        return response(['message' => __('school has been deleted successfully')]);
    }
}
