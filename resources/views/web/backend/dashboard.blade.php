@extends('web.backend.layouts.app')

@section('title', 'Tableau de bord')

@section('main')
    <h1>Tableau de bord</h1>
    <section class="dashboard">
        <div class="dashboard-box">
            <p class="dashboard-box-value">{{$adsCount}}</p>
            <p class="dashboard-box-label">annonce(s) active(s)</p>
            <a class="dashboard-box-button" href="{{route('admin.cars.index')}}" class="btn btn-primary">Voir les annonces</a>
        </div>
        <div class="dashboard-box">
            <p class="dashboard-box-value">{{$holidayCount}}</p>
            <p class="dashboard-box-label">fermeture(s) programmée(s)</p>
            <a class="dashboard-box-button" href="{{route('admin.holidays.index')}}" class="btn btn-primary">Voir les fermetures</a>
        </div>
    </section>
    
@endsection