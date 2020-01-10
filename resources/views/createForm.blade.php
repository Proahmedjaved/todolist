@extends('layouts.app')

@section('content')

    <div class="todoBody">


    <h1>This is create Form page</h1>

    {!! Form::open(['action' => 'TodosController@store']) !!}
        {{ Form::bsText('title') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary'] ) }}
    {!! Form::close() !!}


@endsection
