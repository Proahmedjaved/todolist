@extends('layouts.app')

@section('content')

    <div class="card bg-light todoBody">

        <h3> {{ $todo->title }} <span class="badge badge-danger" style="font-size:0.8rem"> {{ $todo->due }} </span> </h3>

        <hr>
        <h4>{{ $todo->body }}</h4>
        <br><br>
    <a href="{{$todo->id}}/edit" class="btn btn-outline-secondary mt-auto" style="display:inline-table;">Edit</a>



    </div>


    {!! Form::open(['action' => ['TodosController@destroy', $todo->id] , 'class' => 'float-right d-inline' ] ) !!}
        {{ Form::bsDelete('Delete','Delete', ['class'=>'btn btn-danger float-right d-inline'] ) }}
        {{ Form::hidden('_method', 'DELETE')}}
    {!! Form::close() !!}

    <a href="/" class="btn btn-primary">Go back</a>



@endsection


