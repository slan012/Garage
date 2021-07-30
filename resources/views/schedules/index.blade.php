@extends('layouts.app')

@section('title')
    <h2>Gérer les horaires</h2>
@endsection

@section('main')
<div class="row">
    <div class="col-sm-8">
        <table class="text-center table table-striped table-bordered">
            <thead class="thead-inverse">
                <tr>
                    <th>Jour</th>
                    <th colspan="2">Matin</th>
                    <th colspan="2">Après-midi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                        <tr>
                            <td scope="row">{{$schedule->day}}</td>
                            @if (!$schedule->closedMorning == 0)
                                <td colspan="2">Fermé</td>
                            @else
                                <td>{{$schedule->morningOpenH . 'H' . $schedule->morningOpenM}}</td>
                                <td>{{$schedule->morningCloseH . 'H' . $schedule->morningCloseM}}</td>
                            @endif
                            @if (!$schedule->closedMorning == 0)
                                <td colspan="2">Fermé</td>
                            @else
                                <td>{{$schedule->afternoonOpenH . 'H' . $schedule->afternoonOpenM}}</td>
                                <td>{{$schedule->afternoonCloseH . 'H' . $schedule->afternoonCloseM}}</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    
</div>
@endsection

