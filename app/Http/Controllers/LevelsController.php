<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateOrCreateLevelRequest;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelsController extends Controller
{
    public function __construct() {
        // Middleware only applied to these methods
        $this->middleware('school-api', [
            'only' => [
                'index' // Could add bunch of more methods too
            ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
       return Level::with('subjects.subject')->where('grade',$request->school->grade)->get();
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
