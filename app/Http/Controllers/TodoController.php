<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $todos = Todo::all();
        return view('welcome', compact('todos'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Todo::create([
            'name' => $request->name,
        ]);

        return redirect()->back();
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('edit', compact('todo'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $todo = Todo::findOrFail($id);
        $todo->update([
            'name' => $request->name,
        ]);

        return redirect('/');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect('/');
    }
}
