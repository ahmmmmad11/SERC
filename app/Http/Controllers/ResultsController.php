<?php

namespace App\Http\Controllers;

use App\Collections\ResultsCollection;
use App\Http\Requests\CreateResultsRequest;
use App\Http\Requests\updateResultRequest;
use App\Http\Resources\ResultResource;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(Request $request) {
        return ResultResource::collection(ResultsCollection::collection($request));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateResultsRequest  $request
     * @return mixed
     */
    public function store(CreateResultsRequest $request) {
        $school = auth('school')->user();
        foreach ($request->results as  $result) {
            Result::create([
                'school_id'     => $school->id,
                'teacher_id'    => $request->teacher_id,
                'subject_id'    => $request->subject_id,
                'level_id'      => $request->level_id,
                'academic_year' => $request->academic_year,
                'term'          => $request->term,
                'mark'          => $result['mark'],
                'student_id'    => $result['student_id'],
            ]);
        }
        return true;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return mixed
     */
    public function update(updateResultRequest $request, Result $result) {
        $result->update($request->validated());
        return  new ResultResource($result);
    }
}
