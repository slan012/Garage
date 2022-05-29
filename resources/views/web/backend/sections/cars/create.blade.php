@extends('web.backend.layouts.app')

@section('title', 'Creation annonce')

@section('main')
  @include('web.backend.sections.cars.form', ['action' => 'store', 'car' => $car])
@endsection