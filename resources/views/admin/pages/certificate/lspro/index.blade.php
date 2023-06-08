@extends('admin.layouts.app')
@section('content')
@section('title', 'LSPRO Certificate')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Certificate
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                    LSPRO (Lembaga Sertifikasi Produk)
                </h2>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Certificate</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        LSPRO
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <a type="button" class="btn btn-sm btn-dark mb-4" href="{{ url('admin/certificates/lspro/add') }}">
        <i class="fa fa-fw fa-plus me-1"></i> Add New Certificate
    </a>
    <div class="block block-rounded">
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    <table id="galleryTable"  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="fs-xs text-center" style="width: 5%">No</th>
                                <th class="fs-xs text-center" style="width: 28%">Detail</th>
                                <th class="fs-xs text-center" style="width: 12%">SNI</th>
                                <th class="fs-xs text-center" style="width: 12%">Status</th>
                                <th class="fs-xs text-center" style="width: 12%">Surveillance</th>
                                <th class="fs-xs text-center" style="width: 12%">Certificate</th>
                                <th class="fs-xs text-center" style="width: 10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($certificateLspro as $index => $item)
                            <tr>
                                <td class="fs-xs text-center">{{ ($index+1) }}</td>
                                <td class="fs-sm">
                                    <span class="fs-sm fw-semibold">Factory Name</span><br>{{ $item->factory_name }}<br>
                                    <span class="fs-sm fw-semibold">Factory Address</span><br>{{ $item->factory_address }}<br>
                                    <span class="fs-sm fw-semibold">Company Name</span><br>{{ $item->company_name }}<br>
                                    <span class="fs-sm fw-semibold">Company Address</span><br>{{ $item->company_address }}<br>
                                </td>
                                <td class="fs-sm">
                                    <span class="fs-sm fw-semibold">SNI Number</span><br>{{ $item->sni_number }}<br>
                                    <span class="fs-sm fw-semibold">Brand</span><br>{{ $item->brand }}<br>
                                    <span class="fs-sm fw-semibold">Type</span><br>{{ $item->type }}<br>
                                    <span class="fs-sm fw-semibold">Result Of Test</span><br>{{ $item->result_of_test }}<br>
                                </td>
                                <td class="fs-sm text-center">
                                    @if ($item->certificate_status == 10)
                                    Valid
                                    @elseif ($item->certificate_status == 11)
                                    Suspend
                                    @elseif ($item->certificate_status == 12)
                                    Withdraw
                                    @elseif ($item->certificate_status == 13)
                                    Expired
                                @endif
                                </td>

                                <td class="fs-sm">
                                    <span class="fs-sm fw-semibold">Surveillance 1</span><br>{{ date('d F Y', strtotime($item->first_surveillance))}}<br>
                                    <span class="fs-sm fw-semibold">Surveillance 2</span><br>{{ date('d F Y', strtotime($item->second_surveillance))}}<br>
                                    <span class="fs-sm fw-semibold">Surveillance 3</span><br>{{ date('d F Y', strtotime($item->third_surveillance))}}<br>
                                    <span class="fs-sm fw-semibold">Re-Sertificate</span><br>{{ date('d F Y', strtotime($item->reSertifikasi))}}<br>
                                </td>
                                <td class="fs-sm">
                                    <span class="fs-sm fw-semibold">Certificate Date</span><br>{{ date('d F Y', strtotime($item->certificate_date))}}<br>
                                    <span class="fs-sm fw-semibold">Expired Date</span><br>{{ date('d F Y', strtotime($item->expired_date))}}<br>
                                </td>
                                <td class="fs-sm text-center">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-primary" href="{{ url('admin/certificates/lspro/edit/' . $item->id) }}">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                        <a type="button" data-id="{{ $item->id }}" class="btn btn-sm btn-danger btnDelete">
                                            <i class="fa fa-fw fa-trash-can"></i>
                                        </a>
                                        <a type="button" class="btn btn-sm btn-success" href="{{ url('admin/certificates/lspro/generateCode/'.$item->id) }}">
                                            <i class="fa fa-fw fa fa-download"></i>
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
                let url = "{{ url('admin/certificates/lspro/delete/:id') }}";
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
@endpush
