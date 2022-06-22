<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Photo;
use App\Models\Option;
use App\Http\Requests\CarRequest;
use Illuminate\Contracts\Auth\Guard;

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
        $cars->load('photos');
        return view('web.backend.sections.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = new Car();
        $options = Option::pluck('name', 'id');
        $title = "Création d'annonce";
        return view('web.backend.sections.cars.create', compact('car', 'options', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request, Guard $auth)
    {
        $data = $request->except('options_id');
        $data['user_id'] = $auth->user()->id;
        $data['registration'] = strtoupper($data['registration']);
        $car = Car::create($data);
        $car->options()->sync($request->get('options_id'));
        return redirect(route('admin.cars.index'))->with('success', 'La voiture a bien été enregistrée');
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
        $options = Option::pluck('name', 'id');
        $title = "Modification de l'annonce";
        return view('web.backend.sections.cars.edit', compact('car', 'options', 'title'));
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
        $car->options()->sync($request->get('options_id'));
        return redirect(route('admin.cars.index'))->with('success', 'L\'annonce a bien été mise à jour.');
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
