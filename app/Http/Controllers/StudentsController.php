<?php

namespace App\Http\Controllers;

use App\Collections\StudentsCollection;
use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(Request $request) {
        return StudentResource::collection(StudentsCollection::collection($request));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateStudentRequest  $request
     * @return StudentResource
     */
    public function store(CreateStudentRequest $request) {
        $student = Student::create($request->validated());
        return new StudentResource($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return StudentResource
     */
    public function update(UpdateStudentRequest $request, Student $student) {
        $student->update($request->validated());
        return new StudentResource($student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student) {
        $student->delete();
        return response(['message' => __('student has been deleted')]);
    }
}
