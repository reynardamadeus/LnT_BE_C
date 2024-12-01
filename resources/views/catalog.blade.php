@extends('layout.app')

@section('title', 'Catalog')

@section('content')
    <br><br>
    <div class="container">
        <div class="row row-cols-auto gap-4 justify-content-center">
            @include('include.card')
            @include('include.card')
            @include('include.card')
            @include('include.card')
            @include('include.card')
            @include('include.card')
        </div>

    </div>
@endsection
