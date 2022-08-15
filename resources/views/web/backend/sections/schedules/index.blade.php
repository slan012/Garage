@extends('web.backend.layouts.app')

@section('title', 'Modifier les horaires')

@section('main')

<div class="max-w-lg mx-auto px-2">
    <h1 class="text-center text-2xl font-bold my-3">Modifier les horaires</h1>

    {{-- Validation messages --}}
    <div>
        @include('components.message')
    </div>

    {!! Form::open([
        'route' => 'admin.schedules.update',
        'method' => 'post',
        'class' => 'text-center mt-4']) !!}
    @foreach ($days as $day)
        <h2 class="text-lg font-bold text-white bg-sky-800 rounded-md py-1">{{$day->day}}</h2>
        
        <div class="mb-4">
            {{-- Morning opening--}}
            <h3 class="text-base font-bold my-2">Matin :</h3>
            <div class="block">
                {!! Form::label('morningOpenH[' . $day->id .']', 'Ouverture :') !!}
                {!! Form::text('morningOpenH[' . $day->id .']', $day->morningOpenH, ['maxlength' => 2, 'class' => 'w-20 rounded-md text-center mb-1']) !!} H
                {!! Form::text('morningOpenM[' . $day->id .']', $day->morningOpenM, ['maxlength' => 2, 'class' => 'w-20 rounded-md text-center mb-1']) !!}
            </div>
        
            {{-- Morning closing --}}
            <div class="block">
                {!! Form::label('morningCloseH[' . $day->id .']', 'Fermeture :') !!}
                {!! Form::text('morningCloseH[' . $day->id .']', $day->morningCloseH, ['maxlength' => 2, 'class' => 'w-20 rounded-md text-center mb-1']) !!} H
                {!! Form::text('morningCloseM[' . $day->id .']', $day->morningCloseM, ['maxlength' => 2, 'class' => 'w-20 rounded-md text-center mb-1']) !!}
            </div>
            
        
            {{-- Afternoon opening --}}
            <h3 class="text-base font-bold my-2">Après-midi :</h3>
            <div class="block">
                {!! Form::label('afternoonOpenH[' . $day->id .']', 'Ouverture :') !!}
                {!! Form::text('afternoonOpenH[' . $day->id .']', $day->afternoonOpenH, ['maxlength' => 2, 'class' => 'w-20 rounded-md text-center mb-1']) !!} H
                {!! Form::text('afternoonOpenM[' . $day->id .']', $day->afternoonOpenM, ['maxlength' => 2, 'class' => 'w-20 rounded-md text-center mb-1']) !!}
            </div>
        
            {{-- Afternoon closing --}}
            <div class="block">
                {!! Form::label('afternoonCloseH[' . $day->id .']', 'Fermeture :') !!}
                {!! Form::text('afternoonCloseH[' . $day->id .']', $day->afternoonCloseH, ['maxlength' => 2, 'class' => 'w-20 rounded-md text-center mb-1']) !!} H
                {!! Form::text('afternoonCloseM[' . $day->id .']', $day->afternoonCloseM, ['maxlength' => 2, 'class' => 'w-20 rounded-md text-center mb-1']) !!}
            </div>
        
            {{-- Closed period --}}
            <h3 class="text-base font-bold my-2">Fermeture :</h3>
            <div class="ml-[50%] translate-x-[-50%] w-fit">
                <div class="text-left ">
                    {!! Form::checkbox('closedMorning[' . $day->id .']', null, $day->closedMorning, ['id' => 'closedMorning[' . $day->id .']']) !!}
                    {!! Form::label('closedMorning[' . $day->id .']', 'Matin') !!}
                </div>
    
                <div class="text-left ">
                    {!! Form::checkbox('closedAfternoon[' . $day->id .']', null, $day->closedAfternoon, ['id' => 'closedAfternoon[' . $day->id .']']) !!}
                    {!! Form::label('closedAfternoon[' . $day->id .']', 'Après-midi') !!}
                </div>
            </div>
            
        </div>

    @endforeach
                  
    {!! Form::submit('Valider', ['class' => 'mt-3 w-full text-white bg-sky-500 rounded-xl py-2 hover:bg-sky-600 hover:cursor-pointer mb-6'])!!}
    {!! Form::close() !!}
    
</div>
@endsection
