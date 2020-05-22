<?php

namespace App\Http\Controllers\Api\v1\Prod;

use App\Http\Controllers\Controller;
use App\Http\Resources\Prod\ProdCollection;
use App\Http\Resources\Prod\ProdResource;
use App\Models\Prod\Prod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class ProdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Prod::all();
        return new ProdCollection($outs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $outs = Prod::created([
        //     'title' => $request->input('title'),
        // ]);

        // return new ProdResource($outs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prod\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function show(Prod $prod)
    {
        return new ProdResource($prod);
        // return json_encode($prod);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prod\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prod $prod)
    {
        Log::info(__METHOD__);
        Log::info($request->all());

        $outs = $prod->update($request->all());
        //dd('test' . $outs);

        return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
        // return response()->json($outs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prod\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prod $prod)
    {
        //
    }
}
