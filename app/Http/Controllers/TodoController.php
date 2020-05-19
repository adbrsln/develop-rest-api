<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoCollection;
use Illuminate\Http\Request;
use App\Todo;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Resources\TodoResource;

class TodoController extends Controller
{
    public function index()
    {
        $todos = new TodoCollection(Todo::all());
        return response($todos, 200);
    }

    public function show($id)
    {
        try {
            $todo = Todo::findorfail($id);
            return response(new TodoResource($todo), 200);
        } catch (ModelNotFoundException $e) {
            return response()->json('Record does not exists', 404);
        }
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->save();
        return response(new TodoResource($todo), 203);
    }

    public function update($id, Request $request)
    {
        try {
            $todo = Todo::findorfail($id);
            $todo->title = $request->title;
            $todo->body = $request->body;
            $todo->save();
            return response(new TodoResource($todo), 200);
        } catch (ModelNotFoundException $e) {
            return response()->json('Record does not exists', 404);
        }
    }

    public function destroy($id)
    {
        try {
            $todo = Todo::findorfail($id);
            $todo->delete();
            return response()->json('todo deleted', 200);
        } catch (ModelNotFoundException $e) {
            return response()->json('Record does not exists', 404);
        }
    }
}
