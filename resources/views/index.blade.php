@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin: 0 auto;">
<h2 class="text-center mt-3" style="font-family: 'Courier New', Courier, monospace; color:darkgreen; font-weight:bold">FreshDev Crypto</h2>
    <div class="row mt-5">

    @foreach ($response as $currency)
        
    

        <div class="col-lg-3 col-md-4 col-sm-12 text-center mb-3">
            <div class="card" style="width: 18rem; margin: 0 auto">
                <img src="{{ $currency['logo_url'] }}" style="width: 75px; margin:10px auto"/>
                <div class="card-body">
                    <div class="card-title">{{ $currency['currency'] }}</div>
                    <div class="card-text" style="margin:5px"> Price: $ {{ $currency['price'] }}</div>
                    <div class="card-text" style="margin:5px">Circulating supply: {{ $currency['circulating_supply'] }}</div>
                    <div class="card-text" style="margin:5px">Market cap: {{ $currency['market_cap'] }}</div>
                    <div class="card-text" style="margin:5px">Name: {{ $currency['name'] }}</div>

                    @if ($currency['7d']['price_change_pct'] > 0)
                    <div class="card-text" style="margin:5px; color:green; font-weight:bold">Change: {{ $currency['7d']['price_change_pct'] }}</div>
                    @else
                    <div class="card-text" style="margin:5px; color:red; font-weight:bold">Change: {{ $currency['7d']['price_change_pct'] }}</div>  
                    @endif
                </div>
            </div>
        </div>

    @endforeach

    </div>
</div>

@endsection
