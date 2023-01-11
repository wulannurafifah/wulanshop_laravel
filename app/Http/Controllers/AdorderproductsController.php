<?php

namespace App\Http\Controllers;

use App\Models\Adorderproducts;
use Illuminate\Http\Request;

class AdorderproductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adorderproducts = Adorderproducts::all();
        return view('adorderproducts.index', compact("adorderproducts"));
        // untuk tampilan api, silahkan di uncomment
        //return Adorderproducts::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adorderproducts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adorderproducts::create($request->all());
        return redirect('/adorderproducts');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adorderproducts  $adorderproducts
     * @return \Illuminate\Http\Response
     */
    public function show(Adorderproducts $adorderproducts)
    {
        return view('adorderproducts.show', compact('adorderproducts'));
        // untuk tampilan api, silahkan di uncomment
        // return $adorderproducts;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adorderproducts  $adorderproducts
     * @return \Illuminate\Http\Response
     */
    public function edit(Adorderproducts $adorderproducts)
    {
        return view('adorderproducts.edit', compact("adorderproducts"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adorderproducts  $adorderproducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adorderproducts $adorderproducts)
    {
        Adorderproducts::where('id', $adorderproducts->id)
                    ->update([
                        'order_pro_id' => $request->order_pro_id,
                        'order_id' => $request->order_id,
                        'product_id' => $request->product_id,
                        'qty' => $request->qty,
                        'jml' => $request->jml,
                    ]);
        return redirect('/adorderproducts');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adorderproducts  $adorderproducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adorderproducts $adorderproducts)
    {
        Adorderproducts::destroy($adorderproducts->id);
        return redirect('/adorderproducts');
        // untuk tampilan api, silahkan di uncomment
        // return $adorderproducts;
    }
}
