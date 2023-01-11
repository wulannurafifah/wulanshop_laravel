<?php

namespace App\Http\Controllers;

use App\Models\Adorderinfos;
use Illuminate\Http\Request;

class AdorderinfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adorderinfos = Adorderinfos::all();
        return view('adorderinfos.index', compact("adorderinfos"));
        // untuk tampilan api, silahkan di uncomment
        //return Adorderinfos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adorderinfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adorderinfos::create($request->all());
        return redirect('/adorderinfos');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adorderinfos  $adorderinfos
     * @return \Illuminate\Http\Response
     */
    public function show(Adorderinfos $adorderinfos)
    {
        return view('adorderinfos.show', compact('adorderinfos'));
        // untuk tampilan api, silahkan di uncomment
        // return $adorderinfos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adorderinfos  $adorderinfos
     * @return \Illuminate\Http\Response
     */
    public function edit(Adorderinfos $adorderinfos)
    {
        return view('adorderinfos.edit', compact("adorderinfos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adorderinfos  $adorderinfos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adorderinfos $adorderinfos)
    {
        Adorderinfos::where('id', $adorderinfos->id)
                    ->update([
                        'id_user' => $request->id_user,
                        'first_name' => $request->first_name,
                        'email' => $request->email,
                        'address' => $request->address,
                        'jumlah_produk' => $request->jumlah_produk,
                        'total_harga' => $request->total_harga,
                    ]);
        return redirect('/adorderinfos');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adorderinfos  $adorderinfos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adorderinfos $adorderinfos)
    {
        Adorderinfos::destroy($adorderinfos->id);
        return redirect('/adorderinfos');
        // untuk tampilan api, silahkan di uncomment
        // return $adorderinfos;
    }
}
