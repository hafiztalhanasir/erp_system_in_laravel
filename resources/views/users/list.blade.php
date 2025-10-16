@forelse($users as $key => $user)
    <tr>
        <td>{{$key+1}}</td>
        <td class="text-capitalize">{{$user['name']}}</td>
        <td class="text-capitalize">{{$user['email']}}</td>
        <td class="text-capitalize">{{$user['role']}}</td>
        <td>
            <button type="button" class="btn btn-success" onclick="editModule('{{$user['id']}}')"><i class="fa fa-edit"></i> Edit</button>
            <button type="button" class="btn btn-danger" onclick="deleteModule('{{$user['id']}}')"><i class="fa fa-trash"></i> Delete</button>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5" class="text-center">No User Found</td>
    </tr>
@endforelse
