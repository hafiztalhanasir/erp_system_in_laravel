<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function __construct() {
    }

    public function index() {
        try {
            $title = 'Admin | User | '.config('app.name');
            return view('users.index', compact('title'));
        } catch (\Exception $e) {
            return response()->view('errors.internal', ['error' => $e->getMessage()], 500);
        }
    }

    public function list() {
        try {
            $users = User::all();
            return view('users.list', compact('users'));
        } catch (\Exception $e) {
            return view('errors.custom_error', ['error' => $e->getMessage()], 500);
        }
    }

    public function create() {
        try {
            $title = 'Admin | User | Create | '.config('app.name');
            return view('users.create', compact('title'));
        } catch (\Exception $e) {
            return response()->view('errors.internal', ['error' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'email' => [
                    'required',
                    'email',
                    function ($attribute, $value, $fail) {
                        $exists = User::where('email', trim(preg_replace('/\s\s+/', ' ',strtolower($value))))
                            ->exists();

                        if ($exists) {
                            $fail("The $attribute has already been taken.");
                        }
                    },
                ],
            ]);
            User::create([
                'name'              => trim(preg_replace('/\s\s+/', ' ',strtolower($request->name))),
                'email'             => trim(preg_replace('/\s\s+/', ' ',strtolower($request->email))),
                'email_verified_at' => $request->email_verified_at,
                'password'          => $request->password,
                'role_id'           => $request->role_id,
            ]);
            $data = [
                'success'   => true,
                'msg'       => 'User created successfully',
            ];
        } catch (\Illuminate\Validation\ValidationException $e) {
            $data = [
                'success'   => false,
                'errors'    => $e->errors(),
            ];
        }
        return response()->json($data);
    }

    public function edit($id) {
        try {
            $user = User::where('id', $id)->first();

            $data = [
                'success'   => true,
                'user'      => $user,
            ];
        } catch (\Exception $e) {
            $data = [
                'success'   => false,
                'msg'       => 'Something went wrong. Please try again.',
            ];
        }

        return response()->json($data);
    }

    public function update(Request $request, $id) {
        try{
            $request->validate([
                'email' => [
                    'required',
                    'email',
                    function ($attribute, $value, $fail) use ($id) {
                        $exists = User::where('email', trim(preg_replace('/\s\s+/', ' ',strtolower($value))))
                            ->where('id', '!=', $id)
                            ->exists();

                        if ($exists) {
                            $fail("The $attribute has already been taken.");
                        }
                    },
                ],
            ]);
            User::where('id', $id)->update([
                    'name'              => trim(preg_replace('/\s\s+/', ' ',strtolower($request->name))),
                    'email'             => trim(preg_replace('/\s\s+/', ' ',strtolower($request->email))),
                    'password'          => $request->password,
                    'role_id'           => $request->role_id,
                ]);
            $data = [
                'success'   => true,
                'msg'       => 'User updated successfully',
            ];
        }catch(\Illuminate\Validation\ValidationException $e){
            $data = [
                'success'   => false,
                'errors'    => $e->errors(),
            ];
        }
        return response()->json($data);
    }

    public function destroy($id) {
        try {
            $idDeleted = User::where('id', $id)->delete();
            if ($idDeleted) {
                $data = [
                    'success'   => true,
                    'msg'       => 'User deleted successfully.'
                ];
            } else {
                $data = [
                    'success'   => false,
                    'msg'       => 'Something went wrong. Please try again.'
                ];
            }
        } catch (\Exception $e) {
            $data = [
                'success'   => false,
                'msg'       => 'Error: ' . $e->getMessage()
            ];
        }
        return response()->json($data);
    }
}
