<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();
        return view('web.backend.sections.schedules.index', compact('schedules'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $schedules = Schedule::all();
        return view('web.backend.sections.schedules.edit', compact('schedules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $week = [];
        $data = $request->except('_token');

        foreach ($data as $event => $valuesArray) {
            for ($day = 1; $day < 8; $day++) {
                if (key_exists($day, $valuesArray)) {
                    $week[$day][$event] = $valuesArray[$day];
                }
            }
        };

        foreach ($week as $day => $eventArray) {
            if (!isset($eventArray['closedMorning'])) {
                $eventArray['closedMorning'] = false;
            } else {
                $eventArray['closedMorning'] = true;
            }

            if (!isset($eventArray['closedAfternoon'])) {
                $eventArray['closedAfternoon'] = false;
            } else {
                $eventArray['closedAfternoon'] = true;
            }

            Schedule::where('id', $day)->update($eventArray);
        }
        return redirect()->route('web.backend.sections.schedules.index')->with('success', 'Les horaires ont bien été mis à jour.');
    }

}
