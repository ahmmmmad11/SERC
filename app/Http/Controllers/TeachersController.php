<?php /** @noinspection PhpDocSignatureInspection */

namespace App\Http\Controllers;

use App\Collections\TeachersCollection;
use App\Http\Requests\updateOrCreateTeacherRequest;
use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        return TeacherResource::collection(TeachersCollection::collection($request));
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

    public function show(Teacher $teacher){
        return $teacher;
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
