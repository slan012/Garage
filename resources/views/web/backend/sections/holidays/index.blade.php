@extends('web.backend.layouts.app')

@section('title', 'Fermetures/Vacances')

@section('main')

    <div class="max-w-xl mx-auto px-2 my-2">

        {{-- Validation messages --}}
        @include('components.message')

        <h1 class="text-xl font-bold text-center mt-4">Vacances/Fermeture</h1>

        <div class="bg-slate-300 rounded-md p-2 mt-4">

            <h2 class="text-lg font-semibold text-center">Ajouter une période</h2>

            {!! Form::open([
            'route' => 'admin.holidays.store',
            'method' => 'POST',
            ]) !!}

            {{-- Date début --}}
            <div class="flex justify-start items-center mt-2">
                {!! Form::label('beginDay', 'Date de début :', ['class' => 'w-32 flex-none font-semibold']) !!}
                {!! Form::date('beginDay', null, ['class' => 'w-full text-center rounded-md']) !!}
            </div>

            {{-- Date fin --}}
            <div class="flex justify-start items-center my-2">
                {!! Form::label('endDay', 'Date de fin :', ['class' => 'w-32 flex-none font-semibold']) !!}
                {!! Form::date('endDay', null, ['class' => 'w-full text-center rounded-md']) !!}
            </div>

            {{-- Alerte visteurs --}}
            <div class="mt-6 flex justify-center items-center gap-2">
                {!! Form::checkbox('validated', true, true, ['id' => 'validated']) !!}
                {!! Form::label('validated', 'Activer l\'alerte pour les visiteurs') !!}
            </div>

            {{-- Validation --}}
            <div class="form-group">
                {!! Form::submit('Valider', ['class' => 'w-full mt-4 text-white bg-sky-500 rounded-xl py-2 hover:bg-sky-600
                hover:cursor-pointer']) !!}
            </div>
            {!! Form::close() !!}
        </div>

        <div>

            <h2 class="text-lg font-semibold text-center mt-4">Periodes enregistrées</h2>

            @if (empty($holidays))
            <p class="text-center mt-6 text-slate-700">Aucune période enregistrée</p>
            @else
            @foreach ($holidays as $holiday)

            <div class="border-solid border-2 border-slate-500 mt-6">
                {!! Form::open([
                'route' => ['admin.holidays.update', $holiday],
                'method' => 'PUT',
                'class' => 'mt-4'
                ]) !!}

                <div class="flex text-center">
                    <div class="flex-1">
                        <h3 class="font-semibold">Date début</h3>
                        {!! Form::date('beginDay', $holiday->beginDay, ['class' => 'w-36 m-2 text-center']) !!}
                    </div>

                    <div class="flex-1">
                        <h3 class="font-semibold">Date fin</h3>
                        {!! Form::date('endDay', $holiday->endDay, ['class' => 'w-36 m-2 text-center']) !!}
                    </div>
                </div>
                <div class="holidays-alert mx-6 my-2 py-2 rounded-md flex justify-center items-center gap-2">
                    {!! Form::checkbox('validated', true, $holiday->validated, ['id' => 'holiday' . $holiday->id .'', 'class' => 'holidays-alert-value'] ) !!}
                    {!! Form::label('holiday' . $holiday->id .'', 'Alerte active pour les visiteurs',)
                    !!}
                </div>

                <div class="flex justify-around">
                    {!! Form::submit('Modifier', ['class' => 'py-2 px-2 my-1 bg-sky-500 rounded-md text-white
                    hover:bg-sky-600 cursor-pointer']) !!}
                    <a href="{{route('admin.holidays.destroy', $holiday)}}"
                        class="py-2 px-2 my-1 bg-rose-600 rounded-md text-white hover:bg-rose-700 cursor-pointer"
                        data-method="delete" data-confirm="Voulez vous vraiment supprimer cette période?">Supprimer</a>
                </div>
                {!! Form::close() !!}
            </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection