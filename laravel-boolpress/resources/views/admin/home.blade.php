  
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Benvenuto admin ' . Auth::user()->name . ' !') }}

                    <br>
                    
                    <p>
                        All'interno del blog per ora ci sono
                        <ul>
                            <li>Posts: {{ $postsCount["posts"] }} </li>
                            <li>Categories: {{ $postsCount["categories"] }} </li>

                        </ul>
                    </p>

                    <ul>
                        <li>
                            Name: {{ Auth::user()->name }}
                        </li>
                        <li>  Email: {{  Auth::user()->email }}</li>
                        <li> Indirizzo: {{  Auth::user()->detail->address }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection