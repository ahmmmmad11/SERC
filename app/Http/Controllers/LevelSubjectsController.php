<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateOrCreateLevelSubjectRequest;
use App\Models\LevelSubject;

class LevelSubjectsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  UpdateOrCreateLevelSubjectRequest  $request
     * @return mixed
     */
    public function store(UpdateOrCreateLevelSubjectRequest $request)
    {
        return LevelSubject::updateOrCreate(['id' => $request->id], $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy(LevelSubject $levelSubject)
    {
        $levelSubject->delete();
        return response(['message' => __('subject has been deleted')]);
    }
}
