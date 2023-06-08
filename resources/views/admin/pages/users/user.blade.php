@extends('admin.layouts.app')
@section('content')
@section('title', 'User')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Management Users
                </h1>
                {{-- <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                    Tables transformed with dynamic features.
                </h2> --}}
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Settings</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Users
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-6 col-lg-4">
            <a class="block block-rounded block-link-shadow text-center">
                <div class="block-content block-content-full">
                    <div class="fs-2 fw-semibold text-dark">{{$superadmin}}</div>
                </div>
                <div class="block-content py-2 bg-modern-darker">
                    <p class="fw-medium fs-sm text-white mb-0">
                        Super Admin
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-4">
            <a class="block block-rounded block-link-shadow text-center">
                <div class="block-content block-content-full">
                    <div class="fs-2 fw-semibold text-dark">{{$admin}}</div>
                </div>
                <div class="block-content py-2 bg-modern-darker">
                    <p class="fw-medium fs-sm text-white mb-0">
                        Admin
                    </p>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a class="block block-rounded block-themed block-link-shadow text-center">
                <div class="block-content block-content-full">
                    <div class="fs-2 fw-semibold text-dark">{{$author}}</div>
                </div>
                <div class="block-content py-2 bg-modern-darker">
                <p class="fw-medium fs-sm text-white mb-0">
                        Author
                    </p>
                </div>
            </a>
        </div>
    </div>
    <button id="btnCreate" type="button" class="btn btn-sm btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#modal-add-user">
        <i class="fa fa-fw fa-plus me-1"></i> Add New User
    </button>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table id="galleryTable" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="fs-xs text-center" style="width: 5%">No</th>
                            <th class="fs-xs text-center" style="width: 10%">Photo Profile</th>
                            <th class="fs-xs text-center" style="width: 10%">Name</th>
                            <th class="fs-xs text-center" style="width: 10%">Email</th>
                            <th class="fs-xs text-center" style="width: 10%">Username</th>
                            <th class="fs-xs text-center" style="width: 10%">Role</th>
                            <th class="fs-xs text-center" style="width: 10%">Status</th>
                            <th class="fs-xs text-center" style="width: 10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="d-none d-sm-table-cell fs-sm text-center">{{ $loop->iteration }}</td>
                            <td class="fs-sm text-center">
                                <img src="{{ $user->photo != '' ? asset('storage/images/profile/' . $user->photo) : asset('assets/admin/media/avatars/avatar0.jpg') }}" alt="" width="100px">
                            </td>
                            <td class="d-none d-sm-table-cell fs-sm d-none d-sm-table-cell fs-sm text-center">{{ $user->name }}</td>
                            <td class="d-none d-sm-table-cell fs-sm text-center">{{ $user->email }}</td>
                            <td class="d-none d-sm-table-cell fs-sm text-center">{{ $user->username }}</td>
                            @switch($user->role)
                                @case('0')
                                    <td class="d-none d-sm-table-cell fs-sm text-center"><span class="text-muted">Super Admin</span></td>
                                    @break
                                @case('1')
                                    <td class="d-none d-sm-table-cell fs-sm text-center"><span class="text-muted">Admin</span></td>
                                    @break
                                @case('2')
                                <td class="d-none d-sm-table-cell fs-sm text-center"><span class="text-muted">Author</span></td>
                                    @break
                                @default
                            @endswitch
                            <td class="fs-sm">
                                <form action="{{url('/')}}/admin/users/update/toggle/{{ $user->id }}" method="get">
                                    <span class="fs-sm">{{ $user->status_user == 1 ? 'Active' : 'Non Active'}}</span>
                                    <div class="form-check form-switch">
                                        <input onchange="this.form.submit()" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{ $user->status_user == 1 ? 'checked' : '' }}>
                                    </div>
                                </form>
                            </td>
                            <td class="fs-sm text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"  onclick="editDataUser('{{$user->id}}')">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                    @if ($user->role == 0)
                                    @else
                                        <a type="button" data-id="{{ $user->id }}" class="btn btn-sm btn-danger btnDelete">
                                            <i class="fa fa-fw fa-trash-can"></i>
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Add User</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="{{ url('admin/users') }}" method="POST" id="form-add-user" enctype="multipart/form-data" >
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="username" class="form-control" id="username" name="username" required aria-autocomplete="off"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required aria-autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="role">Role</label>
                            <select class="form-select" id="role" name="role">
                                @foreach (roles() as $key => $item)
                                <option value="{{ $item }}">{{ $key }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required aria-autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password Confirmation</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required aria-autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo Profile</label>
                            <input type="file" class="form-control" id="photo" name="photo"/>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button class="btn btn-sm btn-success" form="form-add-user">
                        Save
                    </button>
                    <a href="#" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Edit User</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="" method="post" id="form-edit-user" enctype="multipart/form-data" >
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value= "" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="username" class="form-control" id="username" value= "" name="username" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value= "" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="role">Role</label>
                            <select class="form-select" id="role" name="role">
                                @switch($user->role)
                                    @case('0')
                                    <option selected value="{{ $user->role }}">Super Admin</option>
                                        @break
                                    @case('1')
                                    <option selected value="{{ $user->role }}">Admin</option>
                                        @break
                                    @case('2')
                                    <option selected value="{{ $user->role }}">Author</option>
                                        @break
                                    @default
                                @endswitch
                                @foreach (roles() as $key => $item)
                                <option value="{{ $item }}">{{ $key }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value= ""/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password Confirmation</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value= ""/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo Profile</label>
                            <input type="file" class="form-control" id="photo" name="photo" value= ""/>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button class="btn btn-sm btn-success" form="form-edit-user">
                        Update
                    </button>
                    <a href="#" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script type="text/javascript">
    $(function() {
        $("#modal-add-user role").select2({
            dropdownParent: $('#modal-add-user'),
            placeholder: 'Choose Role',
        });
    })

    $('#galleryTable').on("click", ".btnDelete", function() {
            let id = $(this).attr('data-id');
            Swal.fire({
            title: 'Confirmation',
            text: "You will delete this data. Are you sure you want to continue?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Yes, I'm sure",
            cancelButtonText: 'No'
            }).then(function(result) {
            if (result.value) {
                let url = "{{ url('admin/users/delete/:id') }}";
                url = url.replace(':id', id);
                $.ajax({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                },
                url: url,
                type: "POST",
                success: function(data) {
                    Swal.fire(
                    (data.status) ? 'Success' : 'Error',
                    data.message,
                    (data.status) ? 'success' : 'error'
                    )
                    location.reload();
                },
                error: function(response) {
                    Swal.fire(
                    'Error',
                    'A system error has occurred. please try again later.',
                    'error'
                    )
                }
                });
            }
            })
            console.log(id);
        });
</script>
<script>
    $('btnCreate').on('click', function() {
        $('#modal-add-user #name').val('');
        $('#modal-add-user #username').val('');
        $('#modal-add-user #email').val('');
        $('#modal-add-user #role').select2({
            dropdownParent: $('#modal-add-user'),
            placeholder: 'Choose Role',
        }).val(null).trigger('change');
    });

    function editDataUser(id){
        $.ajax({
            url: "{{ url('admin/users') }}/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#modal-edit-user').modal('show');
                $('#modal-edit-user form').attr('action', "{{ url('/admin/users/edit/update/') }}/" + id);
                $('#modal-edit-user #name').val(data.name);
                $('#modal-edit-user #username').val(data.username);
                $('#modal-edit-user #email').val(data.email);
                $('#modal-edit-user #role').select2({
                    dropdownParent: $('#modal-edit-user'),
                    placeholder: 'Choose Role',
                }).val(data.role).trigger('change');

                $('#modal-edit-user #password').val(data.password);
                $('#modal-edit-user #password_confirmation').val(data.password_confirmation);

            },
            error: function() {
                alert("Nothing Data");
            }

        });

    }
</script>
@endpush
@endsection


