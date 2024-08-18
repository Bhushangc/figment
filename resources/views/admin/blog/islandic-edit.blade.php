@extends('admin.layout')

@section('title', 'Edit Islandic Blog')

@section('content')
<form method="POST" action="{{ route('admin.blog.update.islandic') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="id" value="{{ $blog->id }}" hidden>
    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{ $blog->title }}">
    </div>
    <div>
        <label>Content</label>
        <textarea id="content" name="content" rows="4" cols="50" >
            {{ $blog->content }}

        </textarea>

    </div>

    <button type="submit">Submit</button>
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</form>
@endsection