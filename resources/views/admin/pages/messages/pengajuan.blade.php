@extends('admin.layouts.app')
@section('content')
@section('title', 'Kritik dan Saran')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Kelengkapan Pengajuan
                </h1>
                {{-- <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                    Tables transformed with dynamic features.
                </h2> --}}
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Message</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Kelengkapan Pengajuan
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="fs-xs text-center" style="width: 5%">No</th>
                            <th class="fs-xs text-center" style="width: 10%">Name</th>
                            <th class="fs-xs text-center" style="width: 15%">Email</th>
                            <th class="fs-xs text-center" style="width: 10%">Jenis Pengajuan</th>
                            <th class="fs-xs text-center" style="width: 10%">Subject</th>
                            <th class="fs-xs text-center" style="width: 20%">Message</th>
                            <th class="fs-xs text-center" style="width: 20%">Dikirim Pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $index => $item)
                        <tr>
                            <td class="d-none d-sm-table-cell fs-sm text-center">{{ ($index+1) }}</td>
                            <td class="d-none d-sm-table-cell fs-sm d-none d-sm-table-cell fs-sm">{{ $item->name }}</td>
                            <td class="d-none d-sm-table-cell fs-sm">{{ $item->email }}</td>
                            <td class="d-none d-sm-table-cell fs-sm">{{ $item->type }}</td>
                            <td class="d-none d-sm-table-cell fs-sm">{{ $item->subject }}</td>
                            <td class="d-none d-sm-table-cell fs-sm">{{ $item->message }}</td>
                            <td class="d-none d-sm-table-cell fs-sm text-center">{{ date('l, d F Y (H:i:s a)', strtotime($item->created_at))}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
