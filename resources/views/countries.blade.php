@extends('welcome')
@section('countries')
<h1  style="text-align: center">Countries List</h1>
<ul class="countries-list d-flex flex-row flex-wrap col-12 p-3">
    @foreach($data as $datas)
    <li class="country-item card col-3 m-5 p-0">
        <div class="card-header">
            <h3 class="country-name">{{ $datas['name'] }}</h3>
        </div>
        <div class="card-img">
            <img src="{{ $datas['flag'] }}" alt="country flag" style="width: 100%">
        </div>
        <div class="card-body">
            <p class="country-region">Region : {{ $datas['region'] }}</p>
            <p class="country-subregion">Subregion : {{ $datas['subregion'] }}</p>
            <p class="country-capital">Capital : {{ $datas['capital'] }}</p>
            <p class="population">Population : {{ $datas['population'] }}</p>
        </div>
    </li>
    @endforeach
</ul>
@endsection