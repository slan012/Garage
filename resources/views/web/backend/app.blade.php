@extends('layouts.main')

@section('content')
    @include('layouts.header')
        <main>
            @yield('main')
        </main>
    @include('layouts.footer')
@endsection


