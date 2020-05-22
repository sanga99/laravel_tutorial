<?php

namespace App\Http\Controllers\Api\v1\VehicleCat;

use App\Http\Controllers\Controller;
use App\Http\Resources\VehicleCat\VehicleCatCollection;
use App\Http\Resources\VehicleCat\VehicleCatResource;
use App\Models\VehicleCat\VehicleCat;
use Illuminate\Http\Request;

class VehicleCatsContorller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = VehicleCat::all();
        return new VehicleCatCollection($outs);
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
     * @param  \App\Models\VehicleCat\VehicleCat  $vehicleCat
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleCat $vehicleCat)
    {
        return new VehicleCatResource($vehicleCat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleCat\VehicleCat  $vehicleCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleCat $vehicleCat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleCat\VehicleCat  $vehicleCat
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleCat $vehicleCat)
    {
        //
    }
}
