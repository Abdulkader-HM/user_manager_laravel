<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class usersController extends Controller
{
    public function index()
    {
        $test = new BaseController;
        $users = users::collection(User::get());
        return $test->sendResponse($users, 466);
    }

    public function show($id)
    {
        $test = new BaseController;
        $user = User::find($id);
        if ($user) {
            return $test->sendResponse(new users($user), 200);
        } else {
            return $test->sendError($user, 404);
        }
    }

    public function store(Request $request)
    {
        $test = new BaseController;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            // return $test->sendError('failed', ['data not found ', '404']);
            return $test->sendError('failed', 406);
        }
        $user = User::create($request->all());
        return $test->sendResponse($user, 201);
    }

    public function update(Request $request, $id)
    {
        $test = new BaseController;
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            return $test->sendResponse('done', 200);
        }
        return $test->sendError($user, 406);
    }

    public function delete($id)
    {
        $test = new BaseController;
        $user = User::where('id', $id);
        $user->delete();
        return $test->sendResponse('DELETED', 200);
    }
}
