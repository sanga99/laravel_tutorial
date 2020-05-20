<?php

namespace App\Http\Controllers\Api\v1\Pkg;

use App\Http\Controllers\Controller;
use App\Models\Pkg\Pkg;
use Illuminate\Http\Request;

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
        //
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
