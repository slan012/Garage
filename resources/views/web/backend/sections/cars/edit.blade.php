@extends('web.backend.layouts.app')

@section('title', $title)

@section('main')
    <div class="col-sm-10 mx-auto" style="margin-top: 30px">
        <h3 class="text-center">{{$title}}</h3>
        @include('web.backend.sections.cars.form', ['action' => 'update', 'car' => $car])
    </div>
@endsection