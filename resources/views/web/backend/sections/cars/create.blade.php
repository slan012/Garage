@extends('web.backend.layouts.app')

@section('title', $title)

@section('main')
@livewire('upload-photos', [
  'title' => $title,
  'car' => $car,
  'options' => $options,
  'action' => 'store'],)
@endsection