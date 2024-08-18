@extends('admin.layout')

@section('title', 'Create Blog')

@section('content')
    <form method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Type</label>
            <select name="type" id="">
                <option value="parents">For Parents</option>
                <option value="mental_health">Mental Health</option>
            </select>
        </div>


        <div>
            <label>Content</label>
            <textarea id="content" name="content" rows="10" cols="50">

            </textarea>

        </div>
        <br>
        <button type="button" onclick="addSection('subtitle')">Add Tags</button>
        <br> <br>
        <div id="tags">

        </div>

        <br>
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
