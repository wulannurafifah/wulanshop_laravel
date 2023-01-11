<?php

namespace App\Http\Controllers;

use App\Models\Ademailinfos;
use Illuminate\Http\Request;

class AdemailinfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ademailinfos = Ademailinfos::all();
        return view('ademailinfos.index', compact("ademailinfos"));
        // untuk tampilan api, silahkan di uncomment
        //return Ademailinfos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ademailinfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ademailinfos::create($request->all());
        return redirect('/ademailinfos');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ademailinfos  $ademailinfos
     * @return \Illuminate\Http\Response
     */
    public function show(Ademailinfos $ademailinfos)
    {
        return view('ademailinfos.show', compact('ademailinfos'));
        // untuk tampilan api, silahkan di uncomment
        // return $ademailinfos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ademailinfos  $ademailinfos
     * @return \Illuminate\Http\Response
     */
    public function edit(Ademailinfos $ademailinfos)
    {
        return view('ademailinfos.edit', compact("ademailinfos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ademailinfos  $ademailinfos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ademailinfos $ademailinfos)
    {
        Ademailinfos::where('id', $ademailinfos->id)
                    ->update([
                        'email' => $request->email,
                    ]);
        return redirect('/ademailinfos');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ademailinfos  $ademailinfos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ademailinfos $ademailinfos)
    {
        Ademailinfos::destroy($ademailinfos->id);
        return redirect('/ademailinfos');
        // untuk tampilan api, silahkan di uncomment
        // return $ademailinfos;
    }
}
