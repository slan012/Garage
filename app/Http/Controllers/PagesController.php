<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Contact;
use App\Models\Holiday;
use App\Models\Schedule;
use Illuminate\Http\Request;

class PagesController extends Controller
{    

    /**
    * * Get footer informations in all frontend pages in Views/Components/Footer
    */
    
    /**
     * Display the admin dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $adsCount = Car::all()->count();
        $holidayCount = Holiday::all()->count();
        return view('web.backend.dashboard', compact('adsCount', 'holidayCount'));
    }
}
