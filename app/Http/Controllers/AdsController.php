<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(10);
        return view('ads.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        $car->load('options');
        return view('ads.show', compact('car'));
    }
}
