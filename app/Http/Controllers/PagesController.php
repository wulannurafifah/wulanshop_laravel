<?php
 
namespace App\Http\Controllers;
 
use App\Models\Pages;
 
class PagesController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('index');
    }

    public function menu()
    {
        return view('menu');
    }

    public function about()
    {
        return view('about');
    }

    public function product1()
    {
        return view('product1');
    }

    public function checkout()
    {
        return view('checkout');
    }


    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}