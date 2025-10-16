<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use App\Models\Users\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles\CustomRole as Role;

class RoleController extends Controller
{
    public function __construct() {
        $this->middleware(['permission:role-list'],     ['only' => ['index','list']]);
        $this->middleware(['permission:role-create'],   ['only' => ['store']]);
        $this->middleware(['permission:role-edit'],     ['only' => ['edit', 'update']]);
        $this->middleware(['permission:role-delete'],   ['only' => ['destroy', 'isRoleHasPermissionsOrUser']]);
    }

    public function index() {
        try {
            $title = 'Admin | Role | '.config('app.name');
            return view('roles.index', compact('title'));
        } catch (\Exception $e) {
            return response()->view('errors.internal', ['error' => $e->getMessage()], 500);
        }
    }

    public function list(Request $request) {
        try {
            $role       = Auth::user()->roles()->first();
            $query = Role::query();
            if($request->search) {
                $query->where('name', 'LIKE', "%$request->search%");
            }
            if ($role->id == 1) {
                $roles  = $query->paginate(10);
            } else {
                $roles  = $query->where('id', '!=', 1)->paginate(10);
            }
            return view('roles.list', compact('roles'));
        } catch (\Exception $e) {
            return view('errors.custom_error', ['error' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'name' => [
                    'required',
                    'string',
                    function ($attribute, $value, $fail) {
                        $exists = Role::where('name', trim(preg_replace('/\s\s+/', ' ',strtolower($value))))->exists();

                        if ($exists) {
                            $fail("The $attribute has already been taken.");
                        }
                    },
                ],
            ]);
            Role::create([
                'name'          => trim(preg_replace('/\s\s+/', ' ',strtolower($request->name))),
                'guard_name'    => 'web',
            ]);
            $data = [
                'success'   => true,
                'msg'       => 'Role created successfully',
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
            if ($id != 1) {
                $role = Role::find($id);
                $data = [
                    'success'   => true,
                    'role'      => $role,
                ];
            } else {
                $data = [
                    'success'   => false,
                    'msg'      => 'Super admin cannot be update.',
                ];
            }
        } catch (\Exception $e) {
            $data = [
                'success'   => false,
                'msg'       => 'Something went wrong. Please try again.',
            ];
        }

        return response()->json($data);
    }

    public function update(Request $request, $id) {
        try {
            if ($id != 1) {
                $request->validate([
                    'name' => [
                        'required',
                        'string',
                        function ($attribute, $value, $fail) use ($id) {
                            $exists = Role::where('name', trim(preg_replace('/\s\s+/', ' ', strtolower($value))))
                                ->where('id', '!=', $id)
                                ->exists();

                            if ($exists) {
                                $fail("The $attribute has already been taken.");
                            }
                        },
                    ],
                ]);

                Role::where('id', $id)->first()?->update(['name' => trim(preg_replace('/\s\s+/', ' ', strtolower($request->name)))]);
                $data = [
                    'success' => true,
                    'msg' => 'Role updated successfully',
                ];
            } else {
                $data = [
                    'success'   => false,
                    'msg'      => 'Super admin cannot be update.',
                ];
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            $data = [
                'success'   => false,
                'errors'    => $e->errors(),
            ];
        }
        return response()->json($data);
    }

    public function isRoleHasPermissionsOrUser($id) {
        $userRole = Auth::user()->roles()->first();
        $isPermissions  = false;
        $isAssigned     = false;
        $role = Role::whereId($id)->first();
        if ($role->permissions->count() > 0) {
            $isPermissions = true;
        }
        if (Role::findById($id)->users()->count()) {
            $isAssigned = true;
        }
        if ($userRole->id != 1) {
            if ($isPermissions || $isAssigned) {
                $data = [
                    'success'   => false,
                    'msg'       => 'This role cannot be deleted as it is currently assigned to a user or has active permissions.'
                ];
            } else{
                $data = [
                    'success'   => true,
                    'msg'       => "You won't be able to revert this."
                ];
            }
        } else {
            if ($isPermissions || $isAssigned) {
                $data = [
                    'success'   => true,
                    'msg'       => "Deleting this role will also remove associated permissions and users, and you won't be able to revert this once deleted."
                ];
            } else{
                $data = [
                    'success'   => true,
                    'msg'       => "You won't be able to revert this role once deleted."
                ];
            }
        }
        return response()->json($data);
    }

    public function destroy($id) {
        try {
            if ($id != 1) {
                $role = Role::whereId($id)->first();
                if ($role->permissions->count() > 0) {
                    $role->revokePermissionTo($role->permissions);
                }
                if (Role::findById($id)->users()->count()) {
                    Role::findById($id)->users()->delete();
                }
                $idDeleted = Role::destroy($id);
                if ($idDeleted) {
                    $data = [
                        'success'   => true,
                        'msg'       => 'Role deleted successfully.'
                    ];
                } else {
                    $data = [
                        'success'   => false,
                        'msg'       => 'Something went wrong. Please try again.'
                    ];
                }
            } else {
                $data = [
                    'success'   => false,
                    'msg'       => 'Super admin cannot be delete.',
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
