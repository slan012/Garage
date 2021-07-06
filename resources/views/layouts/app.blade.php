@extends('layouts.main')

@section('content')
    @include('components.navbar')
    <div class="row" style="margin-top: 10px">
        <div class="col-sm-12">
            @yield('title')
        </div>
        <div class="col-sm-12">
            @yield('main')
        </div>
    </div>
@endsection
