<table class="table table-striped table-hover">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Role Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody class="tbody">
        @forelse($roles as $key => $role)
            <tr>
                <td>{{$key+1}}</td>
                <td class="text-capitalize">{{$role['name']}}</td>
                <td>
                    @if($role['id'] != 1)
                        @can('role-edit')
                            <button type="button" class="btn btn-success" onclick="editRole('{{$role['id']}}')"><i class="fa fa-edit"></i> Edit</button>
                        @endcan
                    @endif
                    @unlessrole($role['name'])
                        @can('role-delete')
                            <button type="button" class="btn btn-danger" onclick="deleteRole('{{$role['id']}}')"><i class="fa fa-trash"></i> Delete</button>
                        @endcan
                    @endunlessrole
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">No Role Found</td>
            </tr>
        @endforelse
    </tbody>
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Role Name</th>
        <th>Action</th>
    </tr>
    </thead>
</table>
{!! $roles->withQueryString()->links('pagination::bootstrap-5') !!}
