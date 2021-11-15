<?php

namespace App\Http\Controllers;

use App\Collections\ExchangesCollection;
use App\Http\Requests\ExchangeRequest;
use App\Http\Resources\ExchangeResource;
use App\Http\Services\ExchangesServices;
use App\Http\Services\StudentsServices;
use App\Models\Exchange;
use Illuminate\Http\Request;

class ExchangesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        return ExchangeResource::collection(ExchangesCollection::collection($request));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return ExchangeResource
     */
    public function store(ExchangeRequest $request)
    {
        $old_school_id = StudentsServices::studentSchool($request->student_id)->id;
        $scope = ExchangesServices::scope($request->new_school_id, $old_school_id);

        $exchange = Exchange::create(
            array_merge($request->validated(), ['old_school_id' => $old_school_id, 'scope' => $scope])
        );

        return new ExchangeResource($exchange);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return ExchangeResource
     */
    public function update(Request $request, Exchange $exchange)
    {
        ExchangesServices::exchange($exchange);
        $exchange->update(['confirmed_at' => now()]);
        return new ExchangeResource($exchange);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exchange $exchange)
    {
        $exchange->delete();
        return response(['message' => __('exchange request has been deleted')]);
    }
}
