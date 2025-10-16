<script>
    $(document).ready(function () {

        loadList();
        validation_errors();

        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            var page = $(this).attr('href');
            loadList(page);
        });

        $('#btnRoleModal').click(function () {
            $('#roleModalHeading').text('Add Role');
            $('#btnSubmit').text('Save');
            $('#roleForm')[0].reset();
            $('#id').val(0);
            $('.error').empty();
            $('#roleModal').modal('show');
        });

        $("#btnSubmit").on("click", function() {
            event.preventDefault();
            if ($("#roleForm").valid()) {
                $('.error').empty();
                let id = $('#id').val();
                var type;
                var url ;
                if (id != 0) {
                    type = 'PUT';
                    url  = '{{ route('role.update', ['id' => ':id']) }}'.replace(':id', id);
                } else {
                    type = 'POST';
                    url  = '{{ route('role.store') }}';
                }
                $.ajax({
                    type        : type,
                    url         : url,
                    data        : $("#roleForm").serialize(),
                    processData : false,
                    contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
                    headers     : {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                    success: function (response) {
                        if (response.success === true) {
                            $('#roleForm')[0].reset();
                            $('#roleModal').modal('hide');
                            showToast('Success', response.msg);
                            loadList();
                        } else {
                            if (response.errors) {
                                var errors = response.errors;
                                $.each(errors, function(key, value) {
                                    $('input[name="'+key+'"]').after('<label class="error">'+value+'</label>');
                                });
                            } else {
                                showToast('Error', response.msg);
                            }
                        }
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            }
        });

        $("#btnReset").on("click", function() {
            $('.error').empty();
        });

    });

    function validation_errors() {
        $("#roleForm").validate({
            onkeyup: false,
            rules: {
                name: "required",
            },
            messages: {
                name: "The name field is required."
            }
        });
    }

    function loadList(page = false) {
        var url = page ? page : '{{route('role.list')}}';
        let search = $('#searchInput').val();
        if(search) {
            if(page) {
                url = url + '&search=' + search
            } else {
                url = url + '?search=' + search
            }
        }
        $.ajax({
            type:'GET',
            url :url,
            beforeSend: function() {
                $('#roleTable').html(`<table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr><td colspan="3" class="text-center">Loading...</td></tr>
                    </tbody>
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>`);
            },
            success: function(list) {
                $('#roleTable').html(list);
            }
        });
    }

    function editRole(id) {
        if (id !== 1) {
            $.ajax({
                type:'GET',
                url :'{{ route('role.edit', ['id' => ':id']) }}'.replace(':id', id),
                success: function(response) {
                    if(response.success === true) {
                        let role = response.role;
                        $('#id').val(role.id);
                        $('#name').val(role.name);
                        $('#roleModalHeading').text('Edit Role');
                        $('#btnSubmit').text('Update');
                        $('.error').empty();
                        $('#roleModal').modal('show');
                    } else {
                        showToast('Error', response.msg);
                    }
                }
            });
        } else {
            showToast('Error', 'Super admin cannot be update.');
        }
    }

    function deleteRole(id) {
        if (id !== 1) {
            isRoleHasPermission(id, function (warningMessage, canDelete) {
                if (canDelete === true) {
                    Swal.fire({
                        title              : "Are you sure?",
                        text               : warningMessage,
                        icon               : "warning",
                        showCancelButton   : true,
                        confirmButtonColor : "#d33",
                        cancelButtonColor  : "#3085d6",
                        confirmButtonText  : "Yes, delete it!",
                        reverseButtons     : true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'DELETE',
                                url: '{{ route('role.destroy', ['id' => ':id']) }}'.replace(':id', id),
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function (response) {
                                    if (response.success === true) {
                                        showToast('Success', response.msg);
                                        loadList();
                                    } else {
                                        showToast('Error', response.msg);
                                    }
                                }
                            });
                        }
                    });
                } else {
                    showToast('Error', warningMessage);
                }
            });
        } else {
            showToast('Error', 'Super admin cannot be delete.');
        }
    }

    function isRoleHasPermission(id, callback) {
        var isPermissions;
        var canDelete;
        $.ajax({
            type:'GET',
            url :'{{ route('role.isRoleHasPermissionsOrUser', ['id' => ':id']) }}'.replace(':id', id),
            success:function(response) {
                if(response.success === true) {
                    isPermissions   = response.msg;
                    canDelete       = true;
                } else{
                    isPermissions   = response.msg;
                    canDelete       = false;
                }
                callback(isPermissions,canDelete);
            }
        });
    }
    var timer;
    $('#searchInput').keyup(function() {
        clearTimeout(timer);
        timer = setTimeout(function() {
            loadList()
        }, 300);
    });

</script>
