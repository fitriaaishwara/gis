@extends('admin.layouts.app')
@section('content')
@section('title', 'Articles')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Article
                </h1>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Article</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Articles
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="content">
    <a type="button" class="btn btn-sm btn-dark mb-4" href="{{ url('admin/articles/add-article') }}">
        <i class="fa fa-fw fa-plus me-1"></i> Add New Article
    </a>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="fs-xs text-center" style="width: 5%">No</th>
                            <th class="fs-xs text-center" style="width: 15%">Title</th>
                            {{-- <th>Slug</th> --}}
                            {{--<th class="fs-xs text-center" style="width: 30%">Content</th> --}}
                            <th class="fs-xs text-center" style="width: 10%">Category</th>
                            <th class="fs-xs text-center" style="width: 10%">Publisher</th>
                            {{-- <th>Status</th> --}}
                            <th class="fs-xs text-center" style="width: 10%">Date</th>
                            <th class="fs-xs text-center" style="width: 10%">Publish Status</th>
                            <th class="fs-xs text-center" style="width: 10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $index => $article)
                        <tr>
                            <td class="fs-xs text-center">{{ ($index+1) }}</td>
                            <td class="fw-semibold fs-sm">{{ $article->title }}</a></td>
                            {{-- <td class="fs-sm">{{ $article->{{ $article->categories->name }}slug }}</em></td> --}}
                            <td class="fs-sm text-center">{{ $article->categories->name }}</td>
                            <td class="fs-sm text-center">{{ $article->user->name ?? 'Unknown' }}</td>
                            <td class="fs-sm text-center">
                                {{ date('d F Y', strtotime($article->date))}}
                            </td>
                            <td class="fs-sm text-center">
                                <form action="{{url('/')}}/admin/articles/update/toggle/{{$article->id}}" method="get">
                                    <div class="form-check form-switch">
                                        <input onchange="this.form.submit()" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{ $article->publish_status == 1 ? 'checked' : '' }}>
                                    </div>
                                </form>
                            </td>
                            <td class="fs-sm text-center">
                                <div class="btn-group">
                                    <a type="button" class="btn btn-sm btn-primary" href="{{ url('admin/articles/edit/'.$article->id) }}">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <a type="button" class="btn btn-sm btn-danger" href="{{ url('admin/articles/delete/'.$article->id) }}">
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
@endsection
