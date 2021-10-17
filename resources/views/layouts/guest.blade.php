<link href="{{ asset('css/guest.css') }}" rel="stylesheet" type="text/css" >

@extends('layouts.main')

@section('content')
    <header>
        @include('components.topbar-guest')
    </header>
    <body>
        @yield('main')
    </body>
@endsection

