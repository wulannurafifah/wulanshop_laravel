<?php

namespace App\Http\Controllers;

use App\Models\Adcategories;
use Illuminate\Http\Request;

class AdcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adcategories = Adcategories::all();
        return view('adcategories.index', compact("adcategories"));
        // untuk tampilan api, silahkan di uncomment
        //return Adcategories::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adcategories::create($request->all());
        return redirect('/adcategories');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adcategories  $adcategories
     * @return \Illuminate\Http\Response
     */
    public function show(Adcategories $adcategories)
    {
        return view('adcategories.show', compact('adcategories'));
        // untuk tampilan api, silahkan di uncomment
        // return $adcategories;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adcategories  $adcategories
     * @return \Illuminate\Http\Response
     */
    public function edit(Adcategories $adcategories)
    {
        return view('adcategories.edit', compact("adcategories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adcategories  $adcategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adcategories $adcategories)
    {
        Adcategories::where('id', $adcategories->id)
                    ->update([
                        'cat_title' => $request->cat_title,
                    ]);
        return redirect('/adcategories');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adcategories  $adcategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adcategories $adcategories)
    {
        Adcategories::destroy($adcategories->id);
        return redirect('/adcategories');
        // untuk tampilan api, silahkan di uncomment
        // return $Adcategories;
    }
}
