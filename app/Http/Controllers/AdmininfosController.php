<?php

namespace App\Http\Controllers;

use App\Models\Admininfos;
use Illuminate\Http\Request;

class AdmininfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admininfos = Admininfos::all();
        return view('admininfos.index', compact("admininfos"));
        // untuk tampilan api, silahkan di uncomment
        //return Admininfos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admininfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Admininfos::create($request->all());
        return redirect('/admininfos');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admininfos  $admininfos
     * @return \Illuminate\Http\Response
     */
    public function show(Admininfos $admininfos)
    {
        return view('admininfos.show', compact('admininfos'));
        // untuk tampilan api, silahkan di uncomment
        // return $admininfos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admininfos  $admininfos
     * @return \Illuminate\Http\Response
     */
    public function edit(Admininfos $admininfos)
    {
        return view('admininfos.edit', compact("admininfos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admininfos  $admininfos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admininfos $admininfos)
    {
        Admininfos::where('id', $admininfos->id)
                    ->update([
                        'admin_name' => $request->admin_name,
                        'admin_email' => $request->admin_email,
                        'admin_password' => $request->admin_password,
                    ]);
        return redirect('/admininfos');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admininfos  $admininfos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admininfos $admininfos)
    {
        Admininfos::destroy($admininfos->id);
        return redirect('/admininfos');
        // untuk tampilan api, silahkan di uncomment
        // return $admininfos;
    }
}
