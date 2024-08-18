@extends('admin.layout')

@section('title', 'Edit Polish Blog')

@section('content')
<form method="POST" action="{{ route('admin.blog.polish.store') }}" >
    @csrf
    <input type="text" name="blog_id" value="{{ $id }}" id="" hidden>
    <div>
        <label>Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label>Content</label>
        <textarea id="content" name="content" rows="4" cols="50">

        </textarea>

    </div>
   
    <button type="submit">Submit</button>
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</form>
@endsection