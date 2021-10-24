<?php

namespace App\Http\Controllers;

use App\Collections\LevelsCollection;
use App\Http\Requests\UpdateOrCreateLevelRequest;
use App\Http\Resources\LevelResource;
use App\Models\Level;

class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return LevelResource::collection(LevelsCollection::collection());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  UpdateOrCreateLevelRequest  $request
     * @return mixed
     */
    public function store(UpdateOrCreateLevelRequest $request)
    {
        return Level::updateOrCreate(['id' => $request->id], $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy(Level $level)
    {
        $level->delete();
        return response(['message' => __('level has been deleted')]);
    }
}
