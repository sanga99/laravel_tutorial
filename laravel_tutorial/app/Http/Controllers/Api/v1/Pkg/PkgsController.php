<?php

namespace App\Http\Controllers\Api\v1\Pkg;

use App\Http\Controllers\Controller;
use App\Http\Resources\Pkg\PkgCollection;
use App\Http\Resources\Pkg\PkgResource;
use App\Models\Pkg\Pkg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class PkgsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Pkg::all();
        return new PkgCollection($outs);
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
     * @param  \App\Models\Pkg\Pkg  $pkg
     * @return \Illuminate\Http\Response
     */
    public function show(Pkg $pkg)
    {
        return new PkgResource($pkg);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pkg\Pkg  $pkg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pkg $pkg)
    {
        Log::info(__METHOD__);
        Log::info($request->all());

        $outs = $pkg->update($request->all());

        return response()->json($outs, Response::HTTP_OK,[], JSON_PRETTY_PRINT);
        // return response()->json($outs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pkg\Pkg  $pkg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pkg $pkg)
    {
        //
    }
}
