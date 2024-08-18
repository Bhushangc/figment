@extends('admin.layout')

@section('title', 'Blog')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


@section('content')
<a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-3">Create Blog</a>
<table id="table" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Islandic Translation</th>
            <th>Polish Translation</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>
                    @if ($blog->islandicBlog)
                        <form action="{{ route('admin.blog.edit.islandic', ['id' => $blog->id]) }}" method="get">
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </form>
                    @else
                        <a href="{{ route('admin.blog.create.islandic', ['id' => $blog->id]) }}" class="btn btn-success btn-sm">Translate</a>
                    @endif
                </td>
                <td>
                    @if ($blog->polishBlog)
                        <form action="{{ route('admin.blog.edit.polish', ['id' => $blog->id]) }}" method="get">
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </form>
                    @else
                        <a href="{{ route('admin.blog.create.polish', ['id' => $blog->id]) }}" class="btn btn-success btn-sm">Translate</a>
                    @endif
                </td>
                <td>
                    <form action="{{ route('admin.blog.delete', ['id' => $blog->id]) }}" method="post" style="display:inline-block;">
                        @csrf
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <form action="{{ route('admin.blog.edit', ['id' => $blog->id]) }}" method="get" style="display:inline-block;">
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            "paging": true,       // Enable pagination
            "pageLength": 10,     // Set the default number of rows per page
            "lengthMenu": [5, 10, 25, 50, 100], // Options for number of rows per page
            "searching": true,    // Enable search functionality
            "ordering": true      // Enable column ordering
        });
    });
</script>

