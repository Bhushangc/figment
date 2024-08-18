@extends('admin.layout')

@section('title', 'Edit Blog')

@section('content')
    <form method="POST" action="{{ route('admin.blog.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="id" value="{{ $blog->id }}" hidden>
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ $blog->title }}">
        </div>
        <div>
            <label>Type</label>
            <select name="type" id="">
                <option value="parents" @if ($blog->type == 'parents') selected @endif>For Parents</option>
                <option value="mental_health" @if ($blog->type == 'mental_health') selected @endif>Mental Health</option>
            </select>
        </div>
        



        <div>
            <label>Content</label>
            <textarea id="content" name="content" rows="4" cols="50">
            {{ $blog->content }}

        </textarea>
        </div>
        <br>
        <button type="button" onclick="addSection('subtitle')">Add Tags</button>
        <br> <br>
        <div id="tags"></div>
        @foreach ($tags as $tag)
            <div class="eachTag" style="display: flex; align-items: center;">
                <label style="margin-right: 10px;">Tag:</label>
                <input type="text" name="tags[]" value='{{ $tag }}' required style="margin-right: 10px;">
                <button type="button" class="remove-button" onclick="removeSection(this)">Remove</button>
            </div>
            <br>
        @endforeach



        <button type="submit">Submit</button>
        <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content');

            function addSection(type) {
                const sectionsContainer = document.getElementById('tags');
                const section = document.createElement('div');
                section.style.display = 'flex'; 
                section.className = 'eachTag';
                sectionContent = '<label>Tag:</label><input type="text" name="tags[]" required>';
                section.innerHTML = `
                ${sectionContent}
                <button type="button" class="remove-button" onclick="removeSection(this)">Remove</button> 
            `;
                sectionsContainer.appendChild(section);
                const lineBreak = document.createElement('br');
                sectionsContainer.appendChild(lineBreak);
            }
           
            function removeSection(button) {
                button.parentElement.remove();
            }
        </script>
    </form>
@endsection
