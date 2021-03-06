@extends('layouts.app')

@section('content')

    <h1 class="text-center my-3">Vacation Packages</h1>

    <section class="flights">
        <div class="container py-3">

            @foreach ($flights as $flight)
                <div class="vacation_wrapper d-flex justify-content-between text-center py-2">
                    <h3 class="col-2">{{ $flight->name }}</h3>
                    <div class="col-2">
                        <h4>Airline:</h4>
                        <p>
                            {{ $flight->airline }} Airlines
                        </p>
                    </div>

                    <div class="col-2">
                        <h4>Departure:</h4>
                        <p>{{ $flight->departure }}</p>
                    </div>
                    <div class="col-2">
                        <h4>Arrival:</h4>
                        <p>{{ $flight->arrival }}</p>
                    </div>
                    <div class="col-2">
                        <h4>Price:</h4>
                        <p>{{ $flight->price }} $</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
