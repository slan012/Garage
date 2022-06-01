@extends('web.backend.layouts.app')

@section('title')
    <h2>Gérer les horaires</h2>
@endsection

@section('main')

<div class="row">
    <div class="col-sm-8">
        <p class="text-right">
            <a class="btn btn-info" href="{{route('admin.schedules.edit')}}">Modifier les horaires</a>
        </p>
        @include('components.message')
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
                            @if ($schedule->closedMorning == true)
                                <td colspan="2">Fermé</td>
                            @else
                                <td>{{$schedule->morningOpenH . 'H' . sprintf("%02d", $schedule->morningOpenM)}}</td> 
                                <td>{{$schedule->morningCloseH . 'H' . sprintf("%02d", $schedule->morningCloseM)}}</td>
                            @endif
                            @if ($schedule->closedAfternoon == true)
                                <td colspan="2">Fermé</td>
                            @else
                                <td>{{$schedule->afternoonOpenH . 'H' . sprintf("%02d\n", $schedule->afternoonOpenM)}}</td>
                                <td>{{$schedule->afternoonCloseH . 'H' . sprintf("%02d\n", $schedule->afternoonCloseM)}}</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    
</div>
@endsection

