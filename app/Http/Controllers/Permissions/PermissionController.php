<?php

namespace App\Http\Controllers\Permissions;

use App\Http\Controllers\Controller;
use App\Models\PermissionModules\Module;
use App\Models\Roles\CustomRole as Role;
use Illuminate\Http\Request;

class PermissionController extends Controller {

    public function __construct() {
        $this->middleware(['permission:permission-list'],                   ['only' => ['index','list']]);
        $this->middleware(['permission:permission-create|permission-edit'], ['only' => ['store']]);
    }

    public function index() {
        $title      = 'Admin | Permission | '.config('app.name');
        $roles      = Role::where('id', '!=', 1)->get();
        return view('permissions.index', compact('title', 'roles'));
    }

    public function list($id) {
        $role           = Role::whereId($id)->first();
        $modules        = [];
        $isSelectAll    = 0;
        if ($role) {
            $isSelectAll        = 1;
            $rolePermissions    = $role->permissions->pluck('name')->toArray();
            $modules            = Module::all();
            if ($modules) {
                foreach ($modules as $module) {
                    if ($module->permissions) {
                        $i = 0;
                        foreach ($module->permissions as $permission) {
                            if (in_array($permission->name, $rolePermissions)) {
                                $permission['is_exist'] = 1;
                                $i++;
                            } else {
                                $permission['is_exist'] = 0;
                            }
                        }
                        if ($i == 5) {
                            $module['is_all']   = 1;
                        } else {
                            $isSelectAll        = 0;
                            $module['is_all']   = 0;
                        }
                    }
                }

            }
        }
        return view('permissions.list', compact('modules', 'isSelectAll'));
    }

    public function store(Request $request) {
        $request->validate([
            'role_id' => 'required'
        ]);
        if ($request->role_id != 1) {
            $role = Role::whereId($request->role_id)->first();
            $role->syncPermissions($request->permissions);
            $data = [
                'success'   => true,
                'msg'       => 'Permissions assigned successfully.',
            ];
        } else {
            $data = [
                'success'   => false,
                'msg'       => 'Super admin permissions cannot be changed.',
            ];
        }
        return response()->json($data);

    }

}
