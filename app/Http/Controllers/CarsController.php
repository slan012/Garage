<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::select('id', 'brand', 'model', 'mileage', 'created_at', 'price')->paginate(10);
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = new Car();
        return view('cars.create', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request, Guard $auth)
    {
        $data = $request->all();
        $data['user_id'] = $auth->user()->id;
        $data['registration'] = strtoupper($data['registration']);
        Car::create($data);
        return redirect(route('cars.index'))->with('success', 'La voiture a bien été enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $car = Car::findOrFail($car->id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(CarRequest $request, Car $car)
    {
        $car = Car::findOrFail($car->id);
        $car->update($request->all());
        return redirect(route('cars.index'))->with('success', 'L\'annonce a bien été mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car = Car::findOrFail($car->id);
        $car->delete();
        return redirect()->back()->with('success', 'La voiture a bien été supprimée');
    }
}
