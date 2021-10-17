<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Holiday;
use Illuminate\Http\Request;

class PagesController extends Controller
{    
    /**
     * Display the guest homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('guest.home');
    }

    /**
     * Display the admin dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $adsCount = Car::all()->count();
        $holidayCount = Holiday::all()->count();
        return view('users.dashboard', compact('adsCount', 'holidayCount'));
    }
}
