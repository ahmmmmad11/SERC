<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateResultsRequest;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateResultsRequest  $request
     * @return mixed
     */
    public function store(CreateResultsRequest $request)
    {
        foreach ($request->results as  $result) {
            Result::create([
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
     * @return \Illuminate\Http\Response
     */
    public function update(CreateResultsRequest $request, $id)
    {
        //
    }
}
