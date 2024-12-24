@extends('layout.navigation.master')

@section('title', 'Blog App')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Tags</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">tags</h3>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-tools d-flex">
                    <a href="{{ route('tags.create') }}" class="btn btn-primary mr-3">
                        <i class="fas fa-plus"></i> Add
                    </a>
                </div>
            </div>

            <!-- Table -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tags</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tags as $index => $tag)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>
                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                </table>
            </div>
            <!-- Pagination -->
            <div class="card-footer">
                {{ $tags->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
