@extends('layouts.app')

@section('title')
    <h1 class="text-center">Ajouter une option</h1>
@endsection

@section('main')
    <div class="col-sm-10 mx-auto">
        @include('options.form', ['action' => 'store', 'option' => $option])
    </div>
@endsection