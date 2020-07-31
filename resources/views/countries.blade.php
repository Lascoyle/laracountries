@extends('welcome')
@section('countries')
<h1  style="text-align: center">Countries List</h1>
<ul class="countries-list d-flex flex-row flex-wrap col-12 p-3">
    @foreach($data as $datas)
    <li class="country-item card col-3 m-5 p-0" style="background-color: #16191a; color: #ffffff; border:none" data-aos="fade-up" data-aos-duration="1000">
        <div class="card-header">
            <h3 class="country-name" style="text-align: center">{{ $datas['name'] }}</h3>
        </div>
        <div class="card-img">
            <img src="{{ $datas['flag'] }}" alt="country flag" class="img-fluid">
        </div>
        <div class="card-body p-0" style="background-color:#16191a; color: #ffffff" >
            <div class="card-text p-4 pt-5" style="background-color: #ffffff; color: #16191a; font-size: 1.3em">
                <p class="country-region">Region : {{ $datas['region'] }}</p>
                <p class="country-subregion">Subregion : {{ $datas['subregion'] }}</p>
            </div>
            <ul class="list-group list-group-flush p-0">
                <li class="list-group-item country-capital" style="background-color: #1e2224">Capital : {{ $datas['capital'] }}</li>
                <li class="list-group-item country-area" style="background-color: #1e2224"> Area : {{ $datas['area'] }} km²</li>
                <li class="list-group-item country-population" style="background-color: #1e2224">Population : {{ $datas['population'] }} inhabitants</li>
            </ul>
        </div>
    </li>
    @endforeach
</ul>
@endsection