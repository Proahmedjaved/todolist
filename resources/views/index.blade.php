@extends('layouts.app')


@section('content')

    <h1>Todo List</h1>



            <div class="card ">

                <ul class="list-group list-group-flush ">
                    @if (count($todos)>0)
                    @foreach ($todos as $todo)
                    <li class="list-group-item bg-light">
                        <h3>
                        <a href="todo/{{ $todo->id }}"> {{ $todo->title }} </a>
                            <span class="badge badge-danger" style="font-size:0.8rem">{{ $todo->due }}</span>
                        </h3>

                        @yield('collapse')

                    </li>
                    @endforeach
                    @endif
                </ul>



            </div>





@endsection
