<?php

namespace App\Http\Controllers\Api\v1\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Resources\Vehicle\VehicleCollection;
use App\Http\Resources\Vehicle\VehicleResource;
use App\Models\Vehicle\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Vehicle::all();
        return new VehicleCollection($outs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return new VehicleResource($vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        Log::info(__METHOD__);
        Log::info($request->all());

        $outs = $vehicle->update($request->all());

        return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
        // return response()->json($outs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $outs = $vehicle -> delete();
        return response()-> json($outs, Response::HTTP_OK,[], JSON_PRETTY_PRINT);
    }
}
