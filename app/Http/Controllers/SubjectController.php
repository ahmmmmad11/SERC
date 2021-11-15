<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateOrCreateSubjectRequest;
use App\Http\Resources\SubjectResource;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return SubjectResource::collection(Subject::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  updateOrCreateSubjectRequest  $request
     * @return mixed
     */
    public function store(updateOrCreateSubjectRequest $request)
    {
        return Subject::updateOrCreate(['id' => $request->id], $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Subject $subject
     * @return mixed
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return response(['message' => __('subject has been deleted')]);
    }
}
