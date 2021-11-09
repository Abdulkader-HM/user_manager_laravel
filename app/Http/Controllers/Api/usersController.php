<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\users;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function index()
    {
        $test = new BaseController;
        $users = User::get();
        return $test->sendResponse($users, 200);
    }

    public function show($id)
    {
        $test = new BaseController;
        $user = new users(User::find($id));
        if (!empty($user)) {
            return $test->sendResponse($user, 200);
        } else {
            return $test->sendError($user, ['data not found ', '404']);
        }
    }

    public function store(Request $request)
    {
        $test = new BaseController;
        $user = User::create($request->all());
        return $test->sendResponse('done', 200);
    }

    public function update(Request $request, $id)
    {
        $test = new BaseController;
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return $test->sendResponse('done', 200);
    }

    public function delete($id)
    {
        $test = new BaseController;
        $user = User::where('id', $id);
        $user->delete();
        return $test->sendResponse('done', 200);
    }
}
