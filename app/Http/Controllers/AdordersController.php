<?php

namespace App\Http\Controllers;

use App\Models\Adorders;
use Illuminate\Http\Request;

class AdordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adorders = Adorders::all();
        return view('adorders.index', compact("adorders"));
        // untuk tampilan api, silahkan di uncomment
        //return Adorders::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adorders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adorders::create($request->all());
        return redirect('/adorders');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adorders  $adorders
     * @return \Illuminate\Http\Response
     */
    public function show(Adorders $adorders)
    {
        return view('adorders.show', compact('adorders'));
        // untuk tampilan api, silahkan di uncomment
        // return $adorders;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adorders  $adorders
     * @return \Illuminate\Http\Response
     */
    public function edit(Adorders $adorders)
    {
        return view('adorders.edit', compact("adorders"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adorders  $adorders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adorders $adorders)
    {
        Adorders::where('id', $adorders->id)
                    ->update([
                        'user_id' => $request->user_id,
                        'product_id' => $request->product_id,
                        'qty' => $request->qty,
                        'trx_id' => $request->trx_id,
                        'p_status' => $request->p_status,
                    ]);
        return redirect('/adorders');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adorders  $adorders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adorders $adorders)
    {
        Adorders::destroy($adorders->id);
        return redirect('/adorders');
        // untuk tampilan api, silahkan di uncomment
        // return $adorders;
    }
}
