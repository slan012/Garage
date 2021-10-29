@extends('layouts.app')

@section('title')
    <h2>Modifier les horaires</h2>
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
                    <th colspan="2">Fermeture</th>
                </tr>
                <tr>
                    <td></td>
                    <td>Ouverture</td>
                    <td>Fermeture</td>
                    <td>Ouverture</td>
                    <td>Fermeture</td>
                    <td>Matin</td>
                    <td>Après-midi</td>
                </tr>
                </thead>
                <tbody>
                    {!! Form::open(['route' => 'schedules.update', 'method' => 'post']) !!}
                    @foreach ($schedules as $schedule)
                        <tr>
                            <td scope="row">{{$schedule->day}}</td>
                            <td>
                                {!! Form::text('morningOpenH[' . $schedule->id .']', $schedule->morningOpenH, ['maxlength' => 2, 'style' => 'max-width: 50px']) !!}H
                                {!! Form::text('morningOpenM[' . $schedule->id .']', $schedule->morningOpenM, ['maxlength' => 2, 'style' => 'max-width: 50px']) !!}
                            </td>
                            <td>
                                {!! Form::text('morningCloseH[' . $schedule->id .']', $schedule->morningCloseH, ['maxlength' => 2, 'style' => 'max-width: 50px']) !!}H
                                {!! Form::text('morningCloseM[' . $schedule->id .']', $schedule->morningCloseM, ['maxlength' => 2, 'style' => 'max-width: 50px']) !!}
                            </td>
                            <td>
                                {!! Form::text('afternoonOpenH[' . $schedule->id .']', $schedule->afternoonOpenH, ['maxlength' => 2, 'style' => 'max-width: 50px']) !!}H
                                {!! Form::text('afternoonOpenM[' . $schedule->id .']', $schedule->afternoonOpenM, ['maxlength' => 2, 'style' => 'max-width: 50px']) !!}
                            </td>
                            <td>
                                {!! Form::text('afternoonCloseH[' . $schedule->id .']', $schedule->afternoonCloseH, ['maxlength' => 2, 'style' => 'max-width: 50px']) !!}H
                                {!! Form::text('afternoonCloseM[' . $schedule->id .']', $schedule->afternoonCloseM, ['maxlength' => 2, 'style' => 'max-width: 50px']) !!}
                            </td>
                            <td>{!! Form::checkbox('closedMorning[' . $schedule->id .']', null, $schedule->closedMorning) !!}</td>
                            <td>{!! Form::checkbox('closedAfternoon[' . $schedule->id .']', null, $schedule->closedAfternoon) !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! Form::submit('Valider', ['class' => 'btn btn-primary'])!!}
            {!! Form::close() !!}
    </div>
    
</div>
@endsection
