@extends('admin.layouts.app')
@section('content')
@section('title', 'Pop Up')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Pop Up
                </h1>
                {{-- <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                    Tables transformed with dynamic features.
                </h2> --}}
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Configuration</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Pop Up
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

    <div class="content">
        <button type="button" class="btn btn-sm btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#modal-add-popup">
            <i class="fa fa-fw fa-plus me-1"></i> Add New Pop Up
        </button>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Pop Up</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    <table id="popupTable"  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                            <th class="fs-xs text-center" style="width: 5%">No</th>
                            <th class="fs-xs text-center" style="width: 40%">Image</th>
                            <th class="fs-xs text-center" style="width: 40%">Time</th>
                            <th class="fs-xs text-center" style="width: 10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($popups as $key => $value)
                            <tr>
                                <td class="text-center fs-xs">{{ $key + 1 }}</td>
                                <td class="fs-sm text-center"><img src="{{ asset('storage/images/popup/' . $value->image) }}" alt="" class="img img-fluid" style="max-width: 350px; max-height: 350px;" /></td>
                                <td class="fs-sm text-center">{{ $value->time }} seconds</td>
                                <td class="fs-sm text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary" onclick="editDataPopup('{{$value->id}}')">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" data-id="{{ $value->id }}" class="btn btn-sm btn-danger btnDelete">
                                            <i class="fa fa-fw fa-trash-can"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-add-popup" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-rounded block-themed block-transparent mb-0">
                        <div class="block-header bg-modern-darker">
                            <h3 class="block-title">Add Data</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content fs-sm">
                            <form action="{{ url('admin/pop-up/create') }}" method="post" id="form-add-popup" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image" required />
                                <i style="font-size:9pt"><span class="text-danger font-italic">* </span>Rekomensasi image size minimal 970x569</i>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Url</label>
                                <input type="text" class="form-control" id="url" name="url" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Time (seconds)</label>
                                <input type="number" class="form-control" id="time" name="time" required />
                            </div>
                            </form>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button class="btn btn-sm btn-success" form="form-add-popup">
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
        <div class="modal fade" id="modal-edit-popup" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-rounded block-themed block-transparent mb-0">
                        <div class="block-header bg-modern-darker">
                            <h3 class="block-title">Edit Data</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content fs-sm">
                            <form action="" method="post" id="form-edit-popup" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image"/>
                                    <i style="font-size:9pt"><span class="text-danger font-italic">* </span>Rekomensasi image size minimal 970x569</i>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Url</label>
                                    <input type="text" class="form-control" id="url" name="url" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Time (seconds)</label>
                                    <input type="number" class="form-control" id="time" name="time" />
                                </div>
                            </form>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button class="btn btn-sm btn-success ms-auto" form="form-edit-popup">
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
        @endsection
        @push('scripts')
        <script type="text/javascript">
            $(function() {
                $('#popupTable').on("click", ".btnDelete", function() {
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
                        let url = "{{ url('admin/pop-up/delete/:id') }}";
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
                });
            });
        </script>
        <script>
            function editDataPopup(id){
                $.ajax({
                    url: "{{ url('admin/pop-up') }}/"+ id + "/edit",
                    type: "GET",
                    dataType: "JSON",
                    success: function(data){
                        $('#modal-edit-popup').modal('show');
                        $('#modal-edit-popup form').attr('action', "{{ url('/admin/pop-up/edit/update/') }}/" + id);
                        $('#modal-edit-popup #url').val(data.url);
                        $('#modal-edit-popup #time').val(data.time);
                    },
                    error: function(){
                        alert("Nothing Data");
                    }
                });

            console.log(data);
            }
        </script>
        @endpush
