<?php

namespace App\Http\Controllers;

use App\Http\Requests\HolidayRequest;
use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidays = Holiday::all();
        return view('admin.holidays.index', compact('holidays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HolidayRequest $request)
    {
        $data = $request->except('_token');
        Holiday::create($data);
        return redirect()->back()->with('success', 'La période de fermeture a été correctement enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function show(Holiday $holiday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function edit(Holiday $holiday)
    {
        $holiday = Holiday::findOrFail($holiday->id);
        return view('admin.holidays.edit', compact('holiday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function update(HolidayRequest $request, Holiday $holiday)
    {
        $data = $request->except('_token', '_method');
        $data['validated'] = isset($data['validated']) ? true : false;
        $holiday->update($data);
        return redirect(route('web.backend.sections.holidays.index'))->with('success', 'La période de fermeture a été mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holiday $holiday)
    {
        $holiday->delete();
        return redirect(route('web.backend.sections.holidays.index'))->with('success', 'La période de fermeture a été supprimée');
    }
}
