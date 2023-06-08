@extends('admin.layouts.app')
@section('content')
@section('title', 'Add Certificate LSPRO')

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
                    <li class="breadcrumb-item" aria-current="page">
                        Add Certificate
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Horizontal -->
<div class="content">
    <div class="col-lg-12 mb-4">
        <a class="btn btn-dark" href="{{ url('admin/certificates/lspro') }}"><i class="fa fa-arrow-left"></i>  Back</a>
    </div>
    <div class="block block-rounded block-themed">
        <div class="block-header bg-modern-darker">
            <h3 class="block-title">Form Certificate LSPRO</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-8 space-y-5">
                    <!-- Form Horizontal - Default Style -->
                    <form class="space-y-4" action="{{ url('admin/certificates/lspro/create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Factory Name<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="factory_name" name="factory_name" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Factory Address<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="factory_address" name="factory_address" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Company Name<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company_name" name="company_name" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Company Address<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company_address" name="company_address" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">PIC<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pic" name="pic">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">SNI Number<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="sni_number" name="sni_number" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Brand<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="brand" name="brand" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Type<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="type" name="type" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Result of Test<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="result_of_test" name="result_of_test" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Status<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="form-select" id="certificate_status" name="certificate_status" required>
                                    {{-- <option selected disabled>Select Status</option> --}}
                                    @foreach (status() as $key => $item)
                                    <option value="{{ $item }}">{{ $key }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Certificate Date<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="certificate_date" name="certificate_date" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Expired Date<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="expired_date" name="expired_date" placeholder="d-m-Y" data-date-format="d-m-Y" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Surveillance 1<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="first_surveillance" name="first_surveillance" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Surveillance 2<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="second_surveillance" name="second_surveillance" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Surveillance 3<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="third_surveillance" name="third_surveillance" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Re-Sertificate<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="reSertifikasi" name="reSertifikasi" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Note<span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <textarea type="text" class="form-control" id="note" name="note" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 ms-auto">
                                <button type="submit" class="btn btn-sm btn-success">Save</button>
                                <a class="btn btn-sm btn-danger" href="{{ url('admin/certificates/lspro') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                    <!-- END Form Horizontal - Default Style -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Horizontal -->
@endsection
