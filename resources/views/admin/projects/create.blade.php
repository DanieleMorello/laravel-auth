@extends('layouts.admin')


@section('content')
    <h1 class="py-3">Create a new Post</h1>


    @include('partials.validation_errors')

    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                aria-describedby="titleHelper" placeholder="Type your project title here..." value="{{ old('title') }}">
            <small id="titleHelper" class="form-text text-muted">Type the post title max 150 characters - must be
                unique</small>
            @error('title')
                <div class="alert alert-danger" role="alert">
                    <strong>Title, Error: </strong>{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="project_image" class="form-label">Image</label>
            <input type="text" class="form-control @error('project_image') is-invalid @enderror" name="project_image"
                id="project_image" aria-describedby="project_imageHelper" placeholder="Type your project Image URL here..."
                value="{{ old('project_image') }}">
            <small id="project_imageHelper" class="form-text text-muted">Type the post project_image max 255
                characters</small>
            @error('project_image')
                <div class="alert alert-danger" role="alert">
                    <strong>Image, Error: </strong>{{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                rows="3" placeholder="Type your project description here...">{{ old('description') }}</textarea>
            @error('description')
                <div class="alert alert-danger" role="alert">
                    <strong>Description, Error: </strong>{{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="project_live_url" class="form-label">Live url</label>
            <input type="text" class="form-control @error('project_live_url') is-invalid @enderror"
                name="project_live_url" id="project_live_url" aria-describedby="project_live_urlHelper"
                placeholder="http://project.dev" value="{{ old('project_live_url') }}">
            <small id="project_live_urlHelper" class="form-text text-muted">Type the post project_live_url max 255
                characters
            </small>
            @error('project_live_url')
                <div class="alert alert-danger" role="alert">
                    <strong>URL, Error: </strong>{{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="project_source_code" class="form-label">Source Code</label>
            <input type="text" class="form-control @error('project_source_code') is-invalid @enderror"
                name="project_source_code" id="project_source_code" aria-describedby="project_source_codeHelper"
                placeholder="http://project.dev" value="{{ old('project_source_code') }}">
            <small id="project_source_codeHelper" class="form-text text-muted">Type the post project_source_code max 255
                characters</small>
            @error('project_source_code')
                <div class="alert alert-danger" role="alert">
                    <strong>URL, Error: </strong>{{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark">Save</button>

    </form>
@endsection
