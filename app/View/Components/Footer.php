<?php

namespace App\View\Components;

use Exception;
use App\Models\Contact;
use App\Models\Schedule;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function footerInformations()
    {
        // Retrieving and rendering schedules to display them in footer guest page
        try {
            $schedules_data = Schedule::whereIn('day', ['Lundi', 'Samedi', 'Dimanche'])->get();
        
        
            // Create the week schedule string based on Monday schedule, hiding the minutes if equal to 00.
            $week_schedule_morning = $schedules_data[0]->morningOpenH . 'h';
            $week_schedule_morning .=  ($schedules_data[0]->morningOpenM == '00' ? '' :  $schedules_data[0]->morningOpenM) . '-';
            $week_schedule_morning .=  $schedules_data[0]->morningCloseH . 'h';
            $week_schedule_morning .= $schedules_data[0]->morningCloseM == '00' ? '' :  $schedules_data[0]->morningCloseM;
            $week_schedule_afternoon = $schedules_data[0]->afternoonOpenH . 'h';
            $week_schedule_afternoon .=  ($schedules_data[0]->afternoonOpenM == '00' ? '' :  $schedules_data[0]->afternoonOpenM) . '-';
            $week_schedule_afternoon .=  $schedules_data[0]->afternoonCloseH . 'h';
            $week_schedule_afternoon .= $schedules_data[0]->afternoonCloseM == '00' ? '' :  $schedules_data[0]->afternoonCloseM;

            if ($schedules_data[0]->closedMorning && $schedules_data[0]->closedAfternoon) {
                $week_schedule = 'Fermé';
            } elseif ($schedules_data[0]->closedMorning == 0 && $schedules_data[0]->closedAfternoon) {
                $week_schedule = $week_schedule_morning;
            } elseif ($schedules_data[0]->closedMorning && $schedules_data[0]->closedAfternoon == 0) {
                $week_schedule = $week_schedule_afternoon;
            } else {
                $week_schedule = $week_schedule_morning . ' / ' . $week_schedule_afternoon;
            }
            
            // Create the Saturday schedule string, hiding the minutes if equal to 00.
            $saturday_schedule_morning = $schedules_data[1]->morningOpenH . 'h';
            $saturday_schedule_morning .=  ($schedules_data[1]->morningOpenM == '00' ? '' :  $schedules_data[0]->morningOpenM) . '-';
            $saturday_schedule_morning .=  $schedules_data[1]->morningCloseH . 'h';
            $saturday_schedule_morning .= $schedules_data[1]->morningCloseM == '00' ? '' :  $schedules_data[0]->morningCloseM;
            $saturday_schedule_afternoon = $schedules_data[1]->afternoonOpenH . 'h';
            $saturday_schedule_afternoon .=  ($schedules_data[1]->afternoonOpenM == '00' ? '' :  $schedules_data[0]->afternoonOpenM) . '-';
            $saturday_schedule_afternoon .=  $schedules_data[1]->afternoonCloseH . 'h';
            $saturday_schedule_afternoon .= $schedules_data[1]->afternoonCloseM == '00' ? '' :  $schedules_data[0]->afternoonCloseM;
            
            if ($schedules_data[1]->closedMorning && $schedules_data[1]->closedAfternoon) {
                $saturday_schedule = 'Fermé';
            } elseif ($schedules_data[1]->closedMorning == 0 && $schedules_data[1]->closedAfternoon) {
                $saturday_schedule = $saturday_schedule_morning;
            } elseif ($schedules_data[1]->closedMorning && $schedules_data[1]->closedAfternoon == 0) {
                $saturday_schedule = $saturday_schedule_afternoon;
            } else {
                $saturday_schedule = $saturday_schedule_morning . ' / ' . $saturday_schedule_afternoon;
            }
            
            // Create the Sunday schedule string, hiding the minutes if equal to 00 and set value to 'Closed' if needeed
            $sunday_schedule_morning = $schedules_data[2]->morningOpenH . 'h';
            $sunday_schedule_morning .=  ($schedules_data[2]->morningOpenM == '00' ? '' :  $schedules_data[0]->morningOpenM) . '-';
            $sunday_schedule_morning .=  $schedules_data[2]->morningCloseH . 'h';
            $sunday_schedule_morning .= $schedules_data[2]->morningCloseM == '00' ? '' :  $schedules_data[0]->morningCloseM;
            $sunday_schedule_afternoon = $schedules_data[2]->afternoonOpenH . 'h';
            $sunday_schedule_afternoon .=  ($schedules_data[2]->afternoonOpenM == '00' ? '' :  $schedules_data[0]->afternoonOpenM) . '-';
            $sunday_schedule_afternoon .=  $schedules_data[2]->afternoonCloseH . 'h';
            $sunday_schedule_afternoon .= $schedules_data[2]->afternoonCloseM == '00' ? '' :  $schedules_data[0]->afternoonCloseM;
            
            if ($schedules_data[2]->closedMorning && $schedules_data[2]->closedAfternoon) {
                $sunday_schedule = 'Fermé';
            } elseif ($schedules_data[2]->closedMorning == 0 && $schedules_data[2]->closedAfternoon) {
                $sunday_schedule = $sunday_schedule_morning;
            } elseif ($schedules_data[2]->closedMorning && $schedules_data[2]->closedAfternoon == 0) {
                $sunday_schedule = $sunday_schedule_afternoon;
            } else {
                $sunday_schedule = $sunday_schedule_morning . $sunday_schedule_afternoon;
            }

            //Retrieving contact informations
            $contact_information = Contact::first();

        } catch (Exception $e) {
            return [
                'dataBaseError' => "Oups! Une erreur est survenue... Vous vouvez nous contacter au : 05 65 46 93 52"
            ];
        }

        return [
            'week_schedule' => $week_schedule,
            'saturday_schedule' => $saturday_schedule,
            'sunday_schedule' => $sunday_schedule,
            'contact_information' => $contact_information,
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer', $this->footerInformations());
    }
}
