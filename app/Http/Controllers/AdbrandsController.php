<?php

namespace App\Http\Controllers;

use App\Models\Adbrands;
use Illuminate\Http\Request;

class AdbrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adbrands = Adbrands::all();
        return view('adbrands.index', compact("adbrands"));
        // untuk tampilan api, silahkan di uncomment
        //return Adbrands::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adbrands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adbrands::create($request->all());
        return redirect('/adbrands');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adbrands  $adbrands
     * @return \Illuminate\Http\Response
     */
    public function show(Adbrands $adbrands)
    {
        return view('adbrands.show', compact('adbrands'));
        // untuk tampilan api, silahkan di uncomment
        // return $adbrands;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adbrands  $adbrands
     * @return \Illuminate\Http\Response
     */
    public function edit(Adbrands $adbrands)
    {
        return view('adbrands.edit', compact("adbrands"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adbrands  $adbrands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adbrands $adbrands)
    {
        Adbrands::where('id', $adbrands->id)
                    ->update([
                        'brand_title' => $request->brand_title,
                    ]);
        return redirect('/adbrands');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adbrands  $adbrands
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adbrands $adbrands)
    {
        Adbrands::destroy($adbrands->id);
        return redirect('/adbrands');
        // untuk tampilan api, silahkan di uncomment
        // return $Adbrands;
    }
}
