<script>
    $(document).ready(function () {

        loadList();

    });

    function loadList() {
        $.ajax({
            type:'GET',
            url:'{{route('user.list')}}',
            beforeSend: function() {
                $('#userTbody').html(`<tr><td colspan="5" class="text-center">Loading...</td></tr>`);
            },
            success:function(list) {
                $('#userTbody').html(list);
            }
        });
    }

    function deleteModule(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type:'DELETE',
                    url:'{{ route('module.destroy', ['id' => ':id']) }}'.replace(':id', id),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(response) {
                        if(response.success === true) {
                            showToast('Success', response.msg);
                            loadList();
                        }else{
                            showToast('Error', response.msg);
                        }
                    }
                });
            }
        });
    }

</script>
