@extends('layouts.customer')
@section('content')
<div class="container">
    <a class="d-flex mb-5" href="{{ url('cart') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-backspace me-2" viewBox="0 0 16 16">
            <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
            <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
        </svg>
        <h1>Back</h1>
    </a>
    <div class="card">
        <div class="card-body">
            <h3>{{ $cost[0]['name'] }}</h3>
            <br>
            <div class="row">
                @foreach ($cost[0]['costs'] as $item)
                <div class="card-body border rounded-3 my-3">
                    <h4 class="mb-3">{{ $item['description'] }}</h4>
                    <h6 class="my-3" style="color: gray">Will be accepted on {{ $item['cost'][0]['etd'] }} day</h6>
                    <div class="row mt-3">
                        <h5 class="col me-10 mt-2">Rp {{ $item['cost'][0]['value'] }}</h5>
                        <button class="col btn btn-primary">CHOSE</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
