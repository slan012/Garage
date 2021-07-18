@extends('layouts.main')

@section('content')
    @include('components.navbar')
    <div class="row" style="margin-top: 10px">
        <div class="col-sm-2">
            @include('components.navbar-side')
        </div>
        <div class="col-sm-10">
            @yield('title')
            @yield('main')
        </div>
    </div>
@endsection
