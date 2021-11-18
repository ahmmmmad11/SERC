<?php

/** @noinspection PhpDocSignatureInspection */

namespace App\Http\Controllers;

use App\Collections\TeachersCollection;
use App\Http\Requests\CreateTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(Request $request) {
        return TeacherResource::collection(TeachersCollection::collection($request));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateTeacherRequest  $request
     * @return mixed
     */
    public function store(CreateTeacherRequest $request) {
        return Teacher::updateOrCreate(['id' => $request->id], $request->all());
    }


    public function update(UpdateTeacherRequest $request, Teacher $teacher) {
        $teacher->update($request->validated());
        return new TeacherResource($teacher);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy(Teacher $teacher) {
        $teacher->delete();
        return response(['message' => __('teacher has been deleted')]);
    }
}
