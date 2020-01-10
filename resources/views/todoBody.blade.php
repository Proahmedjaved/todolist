@extends('layouts.app')

@section('content')

    <div class="card bg-light todoBody">

        <h3> {{ $todo->title }} <span class="badge badge-danger" style="font-size:0.8rem"> {{ $todo->due }} </span> </h3>

        <hr>
        <h4>{{ $todo->body }}</h4>

    </div>

    <a href="/" class="btn btn-primary">Go back</a>



@endsection


