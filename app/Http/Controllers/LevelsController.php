<?php

namespace App\Http\Controllers;

use App\Collections\LevelsCollection;
use App\Http\Requests\CreateLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Http\Resources\LevelResource;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(Request $request) {
        return LevelResource::collection(LevelsCollection::collection($request));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateLevelRequest  $request
     * @return mixed
     */
    public function store(CreateLevelRequest $request) {
        return Level::updateOrCreate(['id' => $request->id], $request->validated());
    }

    public function update(UpdateLevelRequest $request, Level $level) {
        $level->update($request->validated());
        return new LevelResource($level);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy(Level $level) {
        $level->delete();
        return response(['message' => __('level has been deleted')]);
    }
}
