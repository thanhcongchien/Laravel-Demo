@extends('pages.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <form action="{{route('formpost.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Title" class="form-control"/>
                  @error('title')
                        <small class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keywords">keywords</label>
                    <input type="text" name="keywords" placeholder="Keywords" class="form-control"/>
                    @error('keywords')
                        <small class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" placeholder="Description" class="form-control"/>
                    @error('description')
                        <small class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image"/>
                    @error('image')
                        <small class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" cols="30" rows="10" class="form-control">
                     
                    </textarea>
                    @error('body')
                        <small class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit" />
                    <input type="reset" class="btn btn-primary" value="Reset" />
                </div>
 
            </form>
        </div>
    </div>
</div>
@endsection
