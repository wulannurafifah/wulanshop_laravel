<?php

namespace App\Http\Controllers;

use App\Models\Aduserinfos;
use Illuminate\Http\Request;

class AduserinfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aduserinfos = Aduserinfos::all();
        return view('aduserinfos.index', compact("aduserinfos"));
        // untuk tampilan api, silahkan di uncomment
        //return Aduserinfos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aduserinfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aduserinfos::create($request->all());
        return redirect('/aduserinfos');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aduserinfos  $aduserinfos
     * @return \Illuminate\Http\Response
     */
    public function show(Aduserinfos $aduserinfos)
    {
        return view('aduserinfos.show', compact('aduserinfos'));
        // untuk tampilan api, silahkan di uncomment
        // return $aduserinfos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aduserinfos  $aduserinfos
     * @return \Illuminate\Http\Response
     */
    public function edit(Aduserinfos $aduserinfos)
    {
        return view('aduserinfos.edit', compact("aduserinfos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aduserinfos  $aduserinfos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aduserinfos $aduserinfos)
    {
        Aduserinfos::where('id', $aduserinfos->id)
                    ->update([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                        'password' => $request->password,
                        'mobile' => $request->mobile,
                        'address1' => $request->address1,
                        'address2' => $request->address2,
                    ]);
        return redirect('aduserinfos');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aduserinfos  $aduserinfos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aduserinfos $aduserinfos)
    {
        Aduserinfos::destroy($aduserinfos->id);
        return redirect('/aduserinfos');
        // untuk tampilan api, silahkan di uncomment
        // return $aduserinfos;
    }
}
