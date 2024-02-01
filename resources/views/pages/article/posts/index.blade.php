@extends('layouts.app')

@section('title', 'My Posts')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/prismjs/themes/prism.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>My Posts</h1>
            </div>

            @if (session()->has('success'))
                <div class="alert alert-success col-lg-6" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card p-3">
                <div class="section-body">
                    <div class="table-responsive">
                        <a href="{{ route('article.create') }}" class="btn btn-primary mb-3">Create new post</a>
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>
                                            <a href="{{ route('article.show', ['slug' => $post->slug]) }}"
                                                class="badge bg-info">
                                                <i class="fas fa-eye text-white"></i> <span class="text-white">View</span>
                                            </a>
                                            <a href="article/{{ $post->slug }}/edit" class="badge bg-warning">
                                                <i class="fas fa-edit text-white"></i> <span class="text-white">Edit</span>
                                            </a>
                                            <form action="{{ route('article.destroy', $post->slug) }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0"
                                                    onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-times-circle text-white"></i> <span
                                                        class="text-white">Delete</span>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
@endpush
