@extends('admin.layouts.panel')

@section('content')
<div class="card">
    <div class="card-header">Add Article</div>

    <div class="card-body">
                @include('flash::message')

        <form action="{{ route('addArticle') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
                <small id="titleHelp" class="form-text text-muted">Choose a title for your portfolio</small>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Choose image</label>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="rank">Rank</label>
                <select class="custom-select" id="rank" name="rank">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label>Keywords</label>
                <input name="meta_keywords" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input name="meta_description" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@if (count($errors))
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@stop
