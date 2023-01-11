<?php

namespace App\Http\Controllers;

use App\Models\Adlogshops;
use Illuminate\Http\Request;

class AdlogshopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adlogshops = Adlogshops::all();
        return view('adlogshops.index', compact("adlogshops"));
        // untuk tampilan api, silahkan di uncomment
        //return Adlogshops::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adlogshops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adlogshops::create($request->all());
        return redirect('/adlogshops');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adlogshops  $adlogshops
     * @return \Illuminate\Http\Response
     */
    public function show(Adlogshops $adlogshops)
    {
        return view('adlogshops.show', compact('adlogshops'));
        // untuk tampilan api, silahkan di uncomment
        // return $adlogshops;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adlogshops  $adlogshops
     * @return \Illuminate\Http\Response
     */
    public function edit(Adlogshops $adlogshops)
    {
        return view('adlogshops.edit', compact("adlogshops"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adlogshops  $adlogshops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adlogshops $adlogshops)
    {
        Adlogshops::where('id', $adlogshops->id)
                    ->update([
                        'user_id' => $request->user_id,
                        'action' => $request->action,
                        'date' => $request->date,
                    ]);
        return redirect('/adlogshops');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adlogshops  $adlogshops
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adlogshops $adlogshops)
    {
        Adlogshops::destroy($adlogshops->id);
        return redirect('/adlogshops');
        // untuk tampilan api, silahkan di uncomment
        // return $adlogshops;
    }
}
