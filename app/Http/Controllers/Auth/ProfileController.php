<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\updateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function show($id)
    {
        return User::where('id', $id)->with('userable')->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  updateProfileRequest  $request
     * @param  int  $id
     * @return mixed
     */
    public function update(updateProfileRequest $request, $id)
    {
        $user = User::find($id);
        return $user->update($request->validated());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePasswordRequest  $request
     * @return mixed
     */
    public function updatePassword (UpdatePasswordRequest $request) {
        if (Hash::check($request->old_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->new_password)]);
            return response(['message' => __('password has been updated successfully')]);
        }
        response(['message' => __('old password is wrong')], 422);
    }

}
