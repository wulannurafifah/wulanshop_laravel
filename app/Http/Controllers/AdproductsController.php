<?php

namespace App\Http\Controllers;

use App\Models\Adproducts;
use Illuminate\Http\Request;

class AdproductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adproducts = Adproducts::all();
        return view('adproducts.index', compact("adproducts"));
        // untuk tampilan api, silahkan di uncomment
        //return Adproducts::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adproducts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adproducts::create($request->all());
        return redirect('/adproducts');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adproducts  $adproducts
     * @return \Illuminate\Http\Response
     */
    public function show(Adproducts $adproducts)
    {
        return view('adproducts.show', compact('adproducts'));
        // untuk tampilan api, silahkan di uncomment
        // return $adproducts;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adproducts  $adproducts
     * @return \Illuminate\Http\Response
     */
    public function edit(Adproducts $adproducts)
    {
        return view('adproducts.edit', compact("adproducts"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adproducts  $adproducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adproducts $adproducts)
    {
        Adproducts::where('id', $adproducts->id)
                    ->update([
                        'product_cat' => $request->product_cat,
                        'product_brand' => $request->product_brand,
                        'product_title' => $request->product_title,
                        'product_price' => $request->product_price,
                        'product_image' => $request->product_image,
                        'product_keywords' => $request->product_keywords,
                    ]);
        return redirect('/adproducts');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adproducts  $adproducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adproducts $adproducts)
    {
        Adproducts::destroy($adproducts->id);
        return redirect('/adproducts');
        // untuk tampilan api, silahkan di uncomment
        // return $adproducts;
    }
}
