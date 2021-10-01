<?php /** @noinspection PhpDocSignatureInspection */

namespace App\Http\Controllers;

use App\Http\Requests\updateOrCreateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
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
     * @param  updateOrCreateTeacherRequest  $request
     * @return mixed
     */
    public function store(updateOrCreateTeacherRequest $request)
    {
        return Teacher::updateOrCreate(['id' => $request->id], $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return response(['message' => __('teacher has been deleted')]);
    }
}
