<script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
<script>
    $(document).ready(function () {

        var actionButtons = $('#actionButtons');

        actionButtons.on('click', '#btnSubmit', function() {
            event.preventDefault();
            $('label.error').remove();
            var roleId = $('#roleId').val();
            if (roleId > 0) {
                $.ajax({
                    type        : 'POST',
                    url         : '{{ route('permission.store') }}',
                    data        : $("#assignPermissionForm").serialize()+'&role_id='+roleId,
                    processData : false,
                    contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
                    headers     : {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                    success: function (response) {
                        if (response.success === true) {
                            $('#assignPermissionForm').trigger("reset");
                            showToast('Success', response.msg);
                            loadList(roleId);
                        } else {
                            console.log(response);
                            if (response.msg) {
                                showToast('Error', response.msg);
                            } else {
                                var errors = response.errors;
                                $.each(errors, function(key, value) {
                                    $('input[name="'+key+'"]').after('<label class="error">'+value+'</label>');
                                });
                            }
                        }
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            } else {
                $('#roleId').parent().after('<label class="error">Please select role.</label>');
            }
        });

        actionButtons.on('click', '#btnReset', function() {
            $('#roleId').change();
        });

        $('#roleId').on('change', function() {
            $('label.error').remove();
            var roleId = $(this).val();
            if ( roleId > 0 ) {
                loadList(roleId);
                loadActionButtons();
            } else {
                $('#permissionTbody').empty();
                $('#actionButtons').empty();
                $(this).parent().after('<label class="error">Please select role.</label>');
            }
        });

        $('#permissionTbody').on('click', 'input[type="checkbox"]', function() {
            var clickedCheckbox = $(this);
            var id              = clickedCheckbox.attr('id');
            var permissionIds   = clickedCheckbox.closest('tr').find('input[name="permissions[]"]');
            var allCheckbox     = clickedCheckbox.closest('tr').find('input[name="all"]');
            var count           = 0;

            if (id.includes('selectAll')) {
                toggleSelectAll(true);
            } else if (id.includes('-all')) {
                toggleCheckboxes(permissionIds, permissionIds.filter(':checked').length < 5);
            } else {
                permissionIds.each(function(index, input) {
                    var isChecked           = input.checked;
                    var currentId           = $(input).attr('id');
                    var splitedCurrentId    = currentId.split('-');
                    var moduleName          = splitedCurrentId[0];
                    var permissionName      = splitedCurrentId[1];

                    handlePermissionCheckbox(currentId, moduleName, permissionName, isChecked, id, permissionIds);
                });

                count = countCheckedPermissions(permissionIds);

                allCheckbox.prop('checked', count === permissionIds.length);
            }
            toggleSelectAll();
        });

    });

    function loadList(roleId) {
        $.ajax({
            type : 'GET',
            url  : "{{ route('permission.list', ":id") }}".replace(':id', roleId),
            beforeSend: function() {
                $('#permissionTbody').html(`<tr><td colspan="8" class="text-center">Loading...</td></tr>`);
            },
            success: function(list) {
                $('#permissionTbody').html(list);
            }
        });
    }

    function loadActionButtons() {
        var html    = '';
        html        += '<button type="button" id="btnReset" class="btn btn-secondary">Reset</button>';
        html        += '<button type="button" id="btnSubmit" class="btn btn-primary ml-2">Assign Permissions</button>';
        $('#actionButtons').html(html);
    }

    function toggleSelectAll(isSelectAll = false) {
        var isAllChecked = true;
        $('input[type="checkbox"][name="all"]').each(function(index, input) {
            if (!($(input).is(":checked"))) {
                isAllChecked = false;
                $('#selectAllTitle').text('Select All Permissions');
            }
        });
        if (isSelectAll) {
            if (isAllChecked) {
                $('input[type="checkbox"]').each(function(index, input) {
                    $(input).prop('checked', false);
                });
            } else {
                $('input[type="checkbox"]').each(function(index, input) {
                    $(input).prop('checked', true);
                });
            }
        } else {
            if (isAllChecked) {
                $('#selectAll').prop('checked', true);
                $('#selectAllTitle').text('Unselect All Permissions');
            } else {
                $('#selectAll').prop('checked', false);
                $('#selectAllTitle').text('Select All Permissions');
            }
        }
    }

    function toggleCheckboxes(checkboxes, toggleValue) {
        checkboxes.each(function(index, input) {
            $(input).prop('checked', toggleValue);
        });
    }

    function handlePermissionCheckbox(currentId, moduleName, permissionName, isChecked, clickedCheckbox, permissionIds) {
        var permissionCheckbox  = $('#' + currentId);
        var listCheckbox        = $('#' + moduleName + '-list');
        var createCheckbox      = $('#' + moduleName + '-create');
        var editCheckbox        = $('#' + moduleName + '-edit');
        var deleteCheckbox      = $('#' + moduleName + '-delete');

        if (isChecked) {
            if (permissionName.includes('create')) {
                permissionCheckbox.prop('checked', true);
                listCheckbox.prop('checked', true);
            } else if (permissionName.includes('edit')) {
                permissionCheckbox.prop('checked', true);
                listCheckbox.prop('checked', true);
                createCheckbox.prop('checked', true);
            } else if (permissionName.includes('delete')) {
                permissionCheckbox.prop('checked', true);
                listCheckbox.prop('checked', true);
                createCheckbox.prop('checked', true);
                editCheckbox.prop('checked', true);
            } else if (permissionName.includes('detail')) {
                permissionCheckbox.prop('checked', true);
                listCheckbox.prop('checked', true);
            }
        } else {
            if (permissionName.includes('list') && clickedCheckbox.includes('list')) {
                permissionIds.each(function(indexList, inputList) {
                    $(inputList).prop('checked', false);
                });
            } else if (permissionName.includes('create') && clickedCheckbox.includes('create')) {
                permissionCheckbox.prop('checked', false);
                editCheckbox.prop('checked', false);
                deleteCheckbox.prop('checked', false);
            } else if (permissionName.includes('edit') && clickedCheckbox.includes('edit')) {
                permissionCheckbox.prop('checked', false);
                deleteCheckbox.prop('checked', false);
            }
        }
    }

    function countCheckedPermissions(permissionIds) {
        var count = 0;
        permissionIds.each(function(index, input) {
            if (input.checked) {
                count++;
            }
        });
        return count;
    }
    $('.select2').select2();
</script>

