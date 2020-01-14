<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $todos = Todo::orderBy('created_at', 'desc')->get();

        return view('index')->with('todos', $todos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'due' => 'required',
        ]);

        $todo = new Todo;

        $todo->title = $request->input('title');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');

        $todo->save();

        return redirect('/')->with('success', 'New Todo Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todoBody')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $todo = Todo::find($id);

        return view('edit')->with('todo', $todo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'due' => 'required'
        ]);

        $todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');

        $todo->save();

        return redirect('/')->with('success', 'New Todo Updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todo::destroy($id);

        return redirect('/')->with('success','Todo Deleted');
    }
}
