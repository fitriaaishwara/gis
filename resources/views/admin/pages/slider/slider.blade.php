@extends('admin.layouts.app')
@section('content')
@section('title', 'Sliders')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Sliders
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
                        Sliders
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <button type="button" class="btn btn-sm btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#modal-add-slider">
        <i class="fa fa-fw fa-plus me-1"></i> Add New Slider
    </button>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table id="galleryTable" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="fs-xs text-center" style="width: 5%;">No</th>
                            <th class="fs-xs text-center" style="width: 20%;">Image</th>
                            <th class="fs-xs text-center" style="width: 45%;">Title</th>
                            <th class="fs-xs text-center" style="width: 10%;">0rder By</th>
                            <th class="fs-xs text-center" style="width: 10%;">Status</th>
                            <th class="fs-xs text-center" style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $index => $slider)
                        <tr>
                            <td class="text-center fs-xs">{{ ($index+1) }}</td>
                            <td><img src="{{asset('storage/images/slider/' . $slider->image)}}"  alt="" class="img img-fluid" style="max-width: 350px; max-height: 350px;" /></td>
                            <td class="fs-sm">{{ $slider->title }}</td>
                            <td class="fs-sm text-center">{{ $slider->order_by }}</td>
                            <td class="fs-sm text-center">
                                <form action="{{url('/')}}/admin/slider/update/toggle/{{$slider->id}}" method="get">
                                    <center>
                                    <div class="form-check form-switch">
                                        <input onchange="this.form.submit()" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{ $slider->status == 1 ? 'checked' : '' }}>
                                    </div>
                                    </center>
                                </form>
                            </td>
                            <td class="fs-sm text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" onclick="editData('{{$slider->id}}')">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                    <a type="button" data-id="{{ $slider->id }}" class="btn btn-sm btn-danger btnDelete">
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

<div class="modal fade" id="modal-add-slider" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Add Slider</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="{{ url('admin/slider') }}" method="POST" id="form-add-slider" enctype="multipart/form-data" >
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Order By</label>
                            <input type="number" class="form-control" name="order_by" min="1" max="5" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Show Button Slider?</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="button_status" name="button_status" value="1">
                            </div>
                        </div>
                        <div style="display:none;" id="showForm">
                            <div class="mb-3">
                                <label class="form-label">Button Text</label>
                                <input type="text" class="form-control" name="button_text" id="button_text"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Button Link</label>
                                <input type="text" class="form-control" name="button_link" id="button_link"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button class="btn btn-sm btn-success ms-auto" form="form-add-slider">
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
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Edit Slider</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="" method="post" id="form-edit-slider" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image" value=""/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="titleEdit" value="" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Order By</label>
                            <input type="number" class="form-control" name="order_by" id="order_byEdit" min="1" max="5" value="" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Show Button Slider?</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="button_status" name="button_status" value="1">
                            </div>
                        </div>
                        <div style="display:none;" id="showFormEdit">
                            <div class="mb-3">
                                <label class="form-label">Button Text</label>
                                <input type="text" class="form-control" name="button_text" id="button_textEdit" value="" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Button Link</label>
                                <input type="text" class="form-control" name="button_link" id="button_linkEdit" value=""/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button class="btn btn-sm btn-success ms-auto" form="form-edit-slider">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
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
                let url = "{{ url('admin/slider/delete/:id') }}";
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
    function editData(id) {
        $.ajax({
            url: "{{ url('admin/slider') }}/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#modal-edit').modal('show');
                $('#modal-edit form').attr('action', "{{ url('/admin/slider/edit/update/') }}/" + id);
                $('#modal-edit #titleEdit').val(data.title);
                $('#modal-edit #order_byEdit').val(data.order_by);
                if (data.button_status == 1)
                {
                    $('#modal-edit #button_status').attr('checked', data.button_status);
                    $('#modal-edit #button_textEdit').val(data.button_text);
                    $('#modal-edit #button_linkEdit').val(data.button_link);
                    $("#showFormEdit").show();
                }
                else
                {
                    $("#showFormEdit").hide();
                }
            },
            error: function() {
                alert("Nothing Data");
            }
        });
    }
    $(document).ready(function(){
        $('#button_status').on('change', function() {
            console.log($(this).is(':checked'));
            if ($(this).is(':checked') == 1)
            {
                $("#showForm").show();
            }
            else
            {
                $("#showForm").hide();
            }
        });
    });
</script>
@endpush

