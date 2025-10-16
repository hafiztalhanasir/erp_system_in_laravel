<tr>
    <td colspan="2" align="center" style="width: 30%">
        <h3 id="selectAllTitle">{{$isSelectAll == 1 ? 'Unselect All Permissions' : 'Select All Permissions' }}</h3>
    </td>
    <td colspan="6">
        <div class="switch float-left">
            <div class="onoffswitch">
                <input type="checkbox" {{$isSelectAll == 1 ? 'checked' : '' }} class="onoffswitch-checkbox theClass" id="selectAll">
                <label class="onoffswitch-label" for="selectAll">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
        </div>
    </td>
</tr>
@forelse($modules as $key => $module)
    <tr>
        <th>{{$key+1}}</th>
        <td class="text-capitalize">{{$module['name']}}</td>
        <td>
            <div class="switch">
                <div class="onoffswitch">
                    <input type="checkbox" name="all" {{$module['is_all'] == 1 ? 'checked' : '' }} class="onoffswitch-checkbox theClass" id="{{$module['name']}}-all">
                    <label class="onoffswitch-label" for="{{$module['name']}}-all">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
            </div>
        </td>
        @forelse($module['permissions'] as $permission)
            <td>
                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" value="{{$permission['name']}}" name="permissions[]" {{$permission['is_exist'] == 1 ? 'checked' : '' }} class="onoffswitch-checkbox" id="{{$module['module_name'].$permission['name']}}">
                        <label class="onoffswitch-label" for="{{$module['module_name'].$permission['name']}}">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </td>
        @empty
            <td colspan="8" class="text-center">No Permission Found</td>
        @endforelse
    </tr>
@empty
    <tr>
        <td colspan="8" class="text-center">No Permission Found</td>
    </tr>
@endforelse
