@extends('admin.layouts.app')
@section('content')
@section('title', 'Services - Category - Uji Laboratorium')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Kategori Ruang Lingkup Uji Laboratorium
                </h1>
                {{-- <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                    (Lembaga Sertifikasi Usaha Pariwisata)
                </h2> --}}
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Services</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Category
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Uji Laboratorium
                    </li>
                    {{-- <li class="breadcrumb-item" aria-current="page">
                        LSUP
                    </li> --}}
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <a type="button" class="btn btn-sm btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#modal-add-categories">
        <i class="fa fa-fw fa-plus me-1"></i> Tambah Kategori
    </a>
    <a class="btn btn-sm btn-dark mb-4" href="{{ url('/admin/services/schema/uji-laboratorium')}}">
        <i class="fa fa-fw fa-plus me-1"></i> Tambah Lingkup
    </a>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table id="galleryTable"  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="fs-xs text-center" style="width: 5%">No</th>
                            <th class="fs-xs" style="width: 20%">Category Name</th>
                            <th class="fs-xs" style="width: 40">Description</th>
                            <th class="fs-xs text-center" style="width: 10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($UjiLab as $index => $item)
                        <tr>
                            <td class="text-center fs-sm">{{ ($index+1) }}</td>
                            <td class="fw-semibold fs-sm">{{ $item->category_name }}</td>
                            <td class="d-none d-sm-table-cell fs-sm">
                                {{ $item->category_description }}<span class="text-muted"></span>
                            </td>
                            <td class="fs-sm text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" onclick="editDataCategory('{{$item->id}}')">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                    <a type="button" data-id="{{ $item->id }}" class="btn btn-sm btn-danger btnDelete">
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

<div class="modal fade" id="modal-add-categories" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Add Category</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="{{ url('admin/services/category/uji-laboratorium/') }}" method="post" id="form-add-categories" enctype="multipart/form-data" >
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="category_name" name="category_name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category Description</label>
                            <textarea type="text" class="form-control" id="category_description" name="category_description" rows="4" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button class="btn btn-sm btn-success" form="form-add-categories">
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

<div class="modal fade" id="modal-edit-category" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Edit Category</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="" method="post" id="form-edit-category" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="name_category" name="category_name" value="" required  />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category Description</label>
                            <textarea type="text" class="form-control" id="description_category" name="category_description" rows="4" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button class="btn btn-sm btn-success" form="form-edit-category">
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
                let url = "{{ url('admin/services/category/uji-laboratorium/delete/:id') }}";
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
    function editDataCategory(id){
        $.ajax({
            url: "{{ url('admin/services/category/uji-laboratorium') }}/"+ id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function(data){
                $('#modal-edit-category').modal('show');
                $('#modal-edit-category form').attr('action', "{{ url('/admin/services/category/uji-laboratorium/edit/update/') }}/" + id);
                $('#modal-edit-category #name_category').val(data.category_name);
                $('#modal-edit-category #description_category').val(data.category_description);
            },
            error: function(){
                alert("Nothing Data");
            }
        });
    }
</script>
@endpush


