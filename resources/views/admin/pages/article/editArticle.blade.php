@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit Article')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                    Form Edit Article
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
                <li class="breadcrumb-item" aria-current="page">
                    Edit Articles
                </li>
            </ol>
            </nav>
        </div>
    </div>
</div>
<form action="{{ url('admin/articles/edit/update/' . $article->id) }}" method="POST" enctype="multipart/form-data" id="form-edit-articles">
    @csrf
    <div class="content">
        <div class="col-lg-12 mb-4">
            <a class="btn btn-dark" href="{{ url ('admin/articles')}}"><i class="fa fa-arrow-left"></i>  Back</a>
        </div>
        <div class="block block-rounded block-themed">
            <div class="block-header bg-modern-darker">
                <h3 class="block-title">Article Content</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row push">
                    <div class="col-lg-12">
                    {{-- Article DB --}}
                        <div class="mb-4">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Description</label>
                            <textarea class="js-maxlength form-control" name="description" rows="4" maxlength="150" data-always-show="true" data-placement="top">{{ $article->description }}</textarea>
                            <div class="form-text">
                            150 Character Max
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="d-m-Y" data-date-format="d-m-Y" value="{{ $article->date }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Content</label>
                            <textarea name="content" rows="5" cols="40" class="form-control tinymce-editor">{!! $article->content !!}</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Category</label>
                            <select class="js-select2 form-select" id="category_id" name="category_id" style="width: 100%;">
                                <option selected value="{{ $article->category_id }}">{{ $article->categories->name }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded block-themed">
            <div class="block-header bg-modern-darker">
            <h3 class="block-title">Article Keywords</h3>
            </div>
            @php
            $keywords = '';
            foreach ($metaArticle as $key => $value) {
                $keywords .= $value->keyword . ',';
            }
            @endphp
            <div class="block-content block-content-full">
                <div class="row push">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <label class="form-label">Keyword</label>
                            <input id="keyword" name="keyword" value="{{ $keywords }}" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded block-themed">
            <div class="block-header bg-modern-darker">
                <h3 class="block-title">Article Header</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row push">
                    <div class="col-lg-12">
                        {{-- Header DB --}}
                        <div class="mb-4">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="" />
                        </div>

                        <div class="mb-4">
                            <img src="{{ asset('storage/images/header/' . $articleHeader->image) }}"  alt="{{ $articleHeader->alt }}" class="img img-fluid" style="max-width: 350px; max-height: 100px;" /></td>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Alt</label>
                            <input type="text" class="form-control" id="alt" name="alt" value="{{ $articleHeader->alt }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Title</label>
                            <input class="form-control" id="title_header" name="title_header" value="{{ $articleHeader->title_header }}" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-5">
            <button type="input" class="btn btn-success">Save</button>
            <a class="btn btn-danger" href="{{ url ('admin/articles')}}">Cancel</a>
        </div>
    </div>
</form>
@endsection
@push('scripts')
<script type="text/javascript">
    $(function() {
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 100,
            menubar: false,
            plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
        var keyword = document.querySelector('input[name=keyword]');
        // initialize Tagify on the above input node reference
        new Tagify(keyword)
    });
</script>
@endpush
