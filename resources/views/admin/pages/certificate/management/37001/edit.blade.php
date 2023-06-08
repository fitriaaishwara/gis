@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit Certificate ISO 37001')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Edit Certificate
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                    Lembaga Sertifikasi Sistem Manajemen Anti Penyuapan (ISO 37001)
                </h2>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Certificate</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Management
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        ISO 37001
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Edit Certificate
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Horizontal -->
<div class="content">
    <div class="col-lg-12 mb-4">
        <a class="btn btn-dark" href="{{ url('admin/certificates/37001') }}"><i class="fa fa-arrow-left"></i>  Back</a>
    </div>
    <div class="block block-rounded block-themed">
        <div class="block-header bg-modern-darker">
            <h3 class="block-title">Form Certificate ISO 37001</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-8 space-y-5">
                <!-- Form Horizontal - Default Style -->
                <form class="space-y-4" action="{{ url('admin/certificates/37001/update/'.$certificate37001->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Company Name<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $certificate37001->company_name}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Company Address<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="company_address" name="company_address" value="{{ $certificate37001->company_address }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Scope<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="scope" name="scope" value="{{ $certificate37001->scope }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Restriction<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="restriction" name="restriction" value="{{ $certificate37001->restriction }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">PIC<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pic" name="pic" value="{{ $certificate37001->pic }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Status<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-select" id="certificate_status" name="certificate_status" required>
                                @switch($certificate37001->certificate_status)
                                @case('10')
                                <option selected value="{{ $certificate37001->certificate_status }}">Valid</option>
                                    @break
                                @case('11')
                                <option selected value="{{ $certificate37001->certificate_status }}">Suspend</option>
                                    @break
                                @case('12')
                                <option selected value="{{$certificate37001->certificate_status }}">Withdraw</option>
                                @case('13')
                                <option selected value="{{$certificate37001->certificate_status }}">Expired</option>
                                    @break
                                @default
                                @endswitch
                                @foreach (status() as $key => $item)
                                <option value="{{ $item }}">{{ $key }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Certificate Date<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="certificate_date" name="certificate_date" placeholder="d-m-Y" data-date-format="d-m-Y" value="{{ $certificate37001->certificate_date }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Issue Date<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="issue_date" name="issue_date" placeholder="d-m-Y" data-date-format="d-m-Y" value="{{ $certificate37001->issue_date }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Expired Date<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="expired_date" name="expired_date" placeholder="d-m-Y" data-date-format="d-m-Y" value="{{ $certificate37001->expired_date }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Surveillance 1<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="first_surveillance" name="first_surveillance" value="{{ $certificate37001->first_surveillance }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Surveillance 2<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="second_surveillance" name="second_surveillance" value="{{ $certificate37001->second_surveillance }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Note<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" id="note" name="note" required>{{ $certificate37001->note }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 ms-auto">
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                            <a class="btn btn-sm btn-danger" href="{{ url('admin/certificates/37001') }}">Cancel</a>
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
