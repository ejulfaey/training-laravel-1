<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

use Validator;

class ApiController extends Controller
{
    public function todoList()
    {
        $todos = Todo::latest()
            ->get();

        $result = [];

        foreach ($todos as $todo) {
            array_push($result, [
                'id' => $todo->id,
                'title' => $todo->title,
                'description' => $todo->description,
                'status' => $todo->status,
                'date' => date('d M Y', strtotime($todo->created_at)),
            ]);
        }

        return response()->json($result, 200);
    }

    public function createTodo(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            $status = 500;
            $msg = $validator->messages()->first();
        } else {
            $todo = new Todo;
            $todo->username = $request->username;
            $todo->title = $request->title;
            $todo->description = $request->description;
            $todo->save();

            $status = 200;
            $msg = 'Todo has been added';
        }

        return response()->json([
            'msg' => $msg,
        ], $status);
    }
}
