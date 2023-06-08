@extends('admin.layouts.app')
@section('content')
@section('title', 'Dashboard')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Gallery
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
                        Gallery
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <button id="btnCreate" type="button" class="btn btn-sm btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#modal-add-images">
        <i class="fa fa-fw fa-plus me-1"></i> Add New Image
    </button>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table id="galleryTable"  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="fs-xs text-center" style="width: 5%">No</th>
                            <th class="fs-xs text-center" style="width: 10%;">Image</th>
                            <th class="fs-xs" style="width: 20%">Title</th>
                            <th class="fs-xs" style="width: 20%">Description</th>
                            <th class="fs-xs" style="width: 10%">Category</th>
                            <th class="fs-xs text-center" style="width: 10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gallery as $index => $value)
                        <tr>
                            <td class="text-center fs-sm">{{ ($index+1) }}</td>
                            <td class="fs-sm text-center"><img src="{{ asset('storage/images/gallery/' . $value->image) }}"  alt="" class="img img-fluid" style="max-width: 350px; max-height: 100px;" /></td>
                            <td class="fw-semibold fs-sm">{{ $value->title }}</td>
                            <td class="d-none d-sm-table-cell fs-sm">
                                {{ $value->description }}<span class="text-muted"></span>
                            </td>
                            @switch($value->category)
                                @case('6')
                                <td class="fw-sm fs-sm">Team</td>
                                    @break
                                @case('7')
                                <td class="fw-sm fs-sm">Client</td>
                                    @break
                                @case('8')
                                <td class="fw-sm fs-sm">Event</td>
                                    @break
                                @case('9')
                                <td class="fw-sm fs-sm">Lainnya</td>
                                    @break
                                @default
                            @endswitch

                            <td class="fs-sm text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" onclick="editDataGallery('{{$value->id}}')">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                    <a type="button" data-id="{{ $value->id }}" class="btn btn-sm btn-danger btnDelete">
                                        <i class="fa fa-fw fa-trash-can"></i>
                                    </a>
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

<div class="modal fade" id="modal-add-images" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Add Image</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="{{ url('admin/gallery') }}" method="post" id="form-add-images" enctype="multipart/form-data" >
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="category">Category</label>
                            <select class="form-select" id="category" name="category" required>
                                <option selected disabled>Choose One</option>
                                @foreach (gallery() as $key => $item)
                                <option value="{{ $item }}">{{ $key }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control" id="description" name="description" rows="4" required></textarea>
                        </div>

                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button class="btn btn-sm btn-success" form="form-add-images">
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

<div class="modal fade" id="modal-edit-images" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Edit Image</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="" method="post" id="form-edit-images" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="category">Category</label>
                            <select class="form-select" id="category" name="category">
                                @foreach (gallery() as $key => $item)
                                <option value="{{ $item }}">{{ $key }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control" id="description" name="description" rows="4" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button class="btn btn-sm btn-success" form="form-edit-images">
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

@push('js')
<script type="text/javascript">
    $(function() {
        $(modal-add-images).select2({
            dropdownParent: $('#modal-add-images'),
            placeholder: 'Choose Category',
        });
    });

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
                let url = "{{ url('admin/gallery/delete/:id') }}";
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
    $('#btnCreate').on('click', function(){
    $('#modal-add-images #image').val('');
    $('#modal-add-images #title').val('');
    $('#modal-add-images #category').select2({
        dropdownParent: $('#modal-add-images'),
        placeholder: 'Choose Category',
    }).val(null).trigger('change');
    $('#modal-add-images #description').val('');
    });

    function editDataGallery(id){
        $.ajax({
            url: "{{ url('admin/gallery') }}/"+ id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function(data){
                $('#modal-edit-images').modal('show');
                $('#modal-edit-images form').attr('action', "{{ url('/admin/gallery/edit/update/') }}/" + id);
                $('#modal-edit-images #title').val(data.title);
                $('#modal-edit-images #category').select2({
                    dropdownParent: $('#modal-edit-images'),
                    placeholder: 'Choose One',

                }).val(data.category).trigger('change');

                $('#modal-edit-images #description').val(data.description);
            },
            error: function(){
                alert("Nothing Data");
            }

        });

    }
</script>
@endpush


