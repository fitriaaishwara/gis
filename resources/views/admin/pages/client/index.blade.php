@extends('admin.layouts.app')
@section('content')
@section('title', 'Client')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Client
                </h1>
                {{-- <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                    Tables transformed with dynamic features.
                </h2> --}}
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Client</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Clients
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <button type="button" class="btn btn-sm btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#modal-add-clients">
        <i class="fa fa-fw fa-plus me-1"></i> Add New Client
    </button>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table id="galleryTable" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="fs-xs text-center" style="width: 5%;">No</th>
                            <th class="fs-xs text-center" style="width: 10%;">Logo</th>
                            <th class="fs-xs text-center" style="width: 20%;">Company Name</th>
                            <th class="fs-xs text-center" style="width: 10%;">Jenis Sertifikasi</th>
                            {{-- <th class="fs-xs text-center" style="width: 10%;">Sertifikasi</th> --}}
                            <th class="fs-xs text-center" style="width: 10%;">Produk</th>
                            <th class="fs-xs text-center" style="width: 10%;">Skema</th>
                            <th class="fs-xs text-center" style="width: 10%;">Status</th>
                            <th class="fs-xs text-center" style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $index => $client)
                        <tr>
                            <td class="fs-xs text-center">{{ ($index+1) }}</td>
                            <td class="fs-sm text-center"><img src="{{ asset('storage/images/clients/' . $client->logo) }}"  alt="" class="img img-fluid" style="max-width: 350px; max-height: 100px;" /></td>
                            <td class="fs-sm ">{{ $client->name }}</td>
                            @switch($client->jenis)
                                @case('3')
                                <td class="fw-sm fs-sm text-center">LSUP</td>
                                    @break
                                @case('4')
                                <td class="fw-sm fs-sm text-center">LSPRO</td>
                                    @break
                                @case('5')
                                <td class="fw-sm fs-sm text-center">ISO</td>
                                    @break
                                @case('14')
                                <td class="fw-sm fs-sm text-center">ISPO</td>
                                    @break
                                @case('15')
                                <td class="fw-sm fs-sm text-center">CHSE</td>
                                    @break
                                @default
                            @endswitch
                            {{-- <td class="fs-sm text-center">{{ $client->sertifikasi }}</td> --}}

                            @if ($client->produk == null)
                            <td class="fs-sm text-center">-</td>
                            @else
                            <td class="fs-sm text-center">{{ $client->produk }}</td>
                            @endif

                            @if ($client->skema == null)
                            <td class="fs-sm text-center">-</td>
                            @else
                            <td class="fs-sm text-center">{{ $client->skema }}</td>
                            @endif
                            <td class="fs-sm" style="width: 10%;">
                                <span class="fs-sm">{{ $client->status == 1 ? 'Active' : 'Inactive'}}</span>
                                <form action="{{url('/')}}/admin/clients/update/toggle/{{$client->id}}" method="get">
                                    <div class="form-check form-switch">
                                        <input onchange="this.form.submit()" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{ $client->status == 1 ? 'checked' : '' }}>
                                    </div>
                                </form>
                            </td>
                            <td class="fs-sm text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" onclick="editDataClient('{{$client->id}}')">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                    <a type="button" data-id="{{ $client->id }}" class="btn btn-sm btn-danger btnDelete">
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

<div class="modal fade" id="modal-add-clients" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Add Client</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block block-rounded">
                    <ul class="nav nav-tabs nav-tabs-block align-items-center" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="btabswob-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabswob-static-home" role="tab" aria-controls="btabswob-static-home" aria-selected="true">LSUP</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btabswob-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswob-static-profile" role="tab" aria-controls="btabswob-static-home" aria-selected="false" tabindex="-1">LSPRO</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btabswob-static-management-tab" data-bs-toggle="tab" data-bs-target="#btabswob-static-management" role="tab" aria-controls="btabswob-static-home" aria-selected="false" tabindex="-1">ISO</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btabswob-static-ispo-tab" data-bs-toggle="tab" data-bs-target="#btabswob-static-ispo" role="tab" aria-controls="btabswob-static-home" aria-selected="false" tabindex="-1">ISPO</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btabswob-static-chse-tab" data-bs-toggle="tab" data-bs-target="#btabswob-static-chse" role="tab" aria-controls="btabswob-static-home" aria-selected="false" tabindex="-1">CHSE</button>
                        </li>
                    </ul>
                    <div class="block-content tab-content">
                        <div class="tab-pane active show" id="btabswob-static-home" role="tabpanel" aria-labelledby="btabswob-static-home-tab" tabindex="0">
                            <form action="{{ url('admin/clients') }}" method="post" id="form-add-client-lsup" enctype="multipart/form-data" >
                                @csrf
                                <input type="text" class="form-control" id="jenis" name="jenis" value="3" required hidden/>
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo" id="logo" required/>
                                </div>
                                <input type="text" class="form-control" id="produk" name="produk" hidden/>
                                <div class="mb-3">
                                    <label class="form-label">Sertifikasi</label>
                                    <input type="text" class="form-control" id="sertifikasi" name="sertifikasi" required />
                                </div>
                                <input type="text" class="form-control" id="skema" name="skema" hidden/>
                            </form>
                            <div class="block-content block-content-full text-end">
                                <button class="btn btn-sm btn-success" form="form-add-client-lsup">
                                    Save
                                </button>
                                <a href="#" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                                    Cancel
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="btabswob-static-profile" role="tabpanel" aria-labelledby="btabswob-static-profile-tab" tabindex="0">
                            <form action="{{ url('admin/clients') }}" method="post" id="form-add-client-lspro" enctype="multipart/form-data" >
                                @csrf
                                <input type="text" class="form-control" id="jenis" name="jenis" value="4" required hidden/>
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo" id="logo" required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Produk</label>
                                    <input type="text" class="form-control" id="produk" name="produk" required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sertifikasi</label>
                                    <input type="text" class="form-control" id="sertifikasi" name="sertifikasi" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Skema</label>
                                    <input type="text" class="form-control" id="skema" name="skema" required/>
                                </div>
                            </form>
                            <div class="block-content block-content-full text-end">
                                <button class="btn btn-sm btn-success" form="form-add-client-lspro">
                                    Save
                                </button>
                                <a href="#" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                                    Cancel
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="btabswob-static-management" role="tabpanel" aria-labelledby="btabswob-static-management-tab" tabindex="0">
                            <form action="{{ url('admin/clients') }}" method="post" id="form-add-client-management" enctype="multipart/form-data" >
                                @csrf
                                <input type="text" class="form-control" id="jenis" name="jenis" value="5" required hidden/>
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo" id="logo" required/>
                                </div>
                                <input type="text" class="form-control" id="produk" name="produk" hidden/>
                                <div class="mb-3">
                                    <label class="form-label">Sertifikasi</label>
                                    <input type="text" class="form-control" id="sertifikasi" name="sertifikasi" required />
                                </div>
                                <input type="text" class="form-control" id="skema" name="skema" hidden/>
                            </form>
                            <div class="block-content block-content-full text-end">
                                <button class="btn btn-sm btn-success" form="form-add-client-management">
                                    Save
                                </button>
                                <a href="#" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                                    Cancel
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="btabswob-static-ispo" role="tabpanel" aria-labelledby="btabswob-static-ispo-tab" tabindex="0">
                            <form action="{{ url('admin/clients') }}" method="post" id="form-add-client-ispo" enctype="multipart/form-data" >
                                @csrf
                                <input type="text" class="form-control" id="jenis" name="jenis" value="14" required hidden/>
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo" id="logo" required/>
                                </div>
                                <input type="text" class="form-control" id="produk" name="produk" hidden/>
                                <div class="mb-3">
                                    <label class="form-label">Sertifikasi</label>
                                    <input type="text" class="form-control" id="sertifikasi" name="sertifikasi" required />
                                </div>
                                <input type="text" class="form-control" id="skema" name="skema" hidden/>
                            </form>
                            <div class="block-content block-content-full text-end">
                                <button class="btn btn-sm btn-success" form="form-add-client-ispo">
                                    Save
                                </button>
                                <a href="#" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                                    Cancel
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="btabswob-static-chse" role="tabpanel" aria-labelledby="btabswob-static-chse-tab" tabindex="0">
                            <form action="{{ url('admin/clients') }}" method="post" id="form-add-client-chse" enctype="multipart/form-data" >
                                @csrf
                                <input type="text" class="form-control" id="jenis" name="jenis" value="15" required hidden/>
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo" id="logo" required/>
                                </div>
                                <input type="text" class="form-control" id="produk" name="produk" hidden/>
                                <div class="mb-3">
                                    <label class="form-label">Sertifikasi</label>
                                    <input type="text" class="form-control" id="sertifikasi" name="sertifikasi" required />
                                </div>
                                <input type="text" class="form-control" id="skema" name="skema" hidden/>
                            </form>
                            <div class="block-content block-content-full text-end">
                                <button class="btn btn-sm btn-success" form="form-add-client-chse">
                                    Save
                                </button>
                                <a href="#" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="block-content block-content-full text-end bg-body">
                    <button class="btn btn-sm btn-success" form="form-add-client">
                        Save
                    </button>
                    <a href="#" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                        Cancel
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit-client" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-modern-darker">
                    <h3 class="block-title">Edit Client</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="" method="post" id="form-edit-client" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="name_edit" name="name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Logo</label>
                            <input type="file" class="form-control" name="logo_edit" id="logo"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="jenis_edit">Jenis</label>
                            <select class="form-select" id="jenis_edit" name="jenis">
                                @foreach (certif() as $key => $item)
                                <option value="{{ $item }}">{{ $key }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sertifikasi</label>
                            <input type="text" class="form-control" id="sertifikasi_edit" name="sertifikasi" required />
                        </div>
                        <div style="display:none;" id="showForm">
                            <div class="mb-3">
                                <label class="form-label">Produk</label>
                                <input type="text" class="form-control" id="produk_edit" name="produk"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Skema</label>
                                <input type="text" class="form-control" id="skema_edit" name="skema"/>
                            </div>
                        </div>
                    </form>
                    <div class="block-content block-content-full text-end">
                        <button class="btn btn-sm btn-success" form="form-edit-client">
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
                let url = "{{ url('admin/clients/delete/:id') }}";
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
    function editDataClient(id){
        $.ajax({
            url: "{{ url('admin/clients') }}/"+ id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function(data){
                // console.log(data);
                $('#modal-edit-client').modal('show');
                $('#modal-edit-client form').attr('action', "{{ url('admin/clients/edit/update/') }}/" + id);
                $('#modal-edit-client #name_edit').val(data.name);
                $('#modal-edit-client #sertifikasi_edit').val(data.sertifikasi);
                $('#modal-edit-client #jenis_edit').select2({
                    dropdownParent: $('#modal-edit-client'),
                    placeholder: 'Choose One',

                }).val(data.jenis).trigger('change');


                if(data.jenis == 4){
                    $('#modal-edit-client #showForm').show();
                    $('#modal-edit-client #produk_edit').val(data.produk);
                    $('#modal-edit-client #skema_edit').val(data.skema);
                }else{
                    $('#modal-edit-client #showForm').hide();
                }
            },
            error: function(){
                alert("Nothing Data");
            }
        });
    }
</script>
@endpush


