@extends('layouts.app')
@section('header')
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
    {{-- <script>tinymce.init({selector:'textarea'});</script> --}}
@endsection
@section('content')
<div class="container">
    <form action="/posts" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">Post  Caption</label>
                        <textarea id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus></textarea>
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

            <div class="row pt-4">
                <button type="submite" class="btn btn-primary">Add New Post</button>

            </div>
        </div>

    </div>
</form>




{{-- <textarea>Next, use our Get Started docs to setup Tiny!</textarea> --}}



</div>
@endsection