<?php

namespace App\Http\Controllers\Api\v1\Subsc;

use App\Http\Controllers\Controller;
use App\Http\Resources\Subsc\SubscCollection;
use App\Http\Resources\Subsc\SubscResource;
use App\Models\Subsc\Subsc;
use Illuminate\Http\Request;

class SubscsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Subsc::all();
        return new SubscCollection($outs);
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
     * @param  \App\Models\Subsc\Subsc  $subsc
     * @return \Illuminate\Http\Response
     */
    public function show(Subsc $subsc)
    {
        return new SubscResource($subsc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subsc\Subsc  $subsc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subsc $subsc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subsc\Subsc  $subsc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subsc $subsc)
    {
        //
    }
}
