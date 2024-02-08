@extends('landing_pages.layouts.main')

@section('title', 'Berita Kelautan Di Indonesia')

@push('style')
    <!-- CSS Libraries -->
@endpush


@section('main')

    <main class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <section class="page-header">
                        <h1>Blog Profile</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb foi-breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Blog Profile</li>
                            </ol>
                        </nav>
                    </section>
                    <section>
                        <h1 class="mb-3 text-center">{{ $title }}</h1>

                        <div class="row justify-content-center mb-3">
                            <div class="col-md-6">
                                <form action="/blog">
                                    @if (request('category'))
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                    @endif
                                    @if (request('author'))
                                        <input type="hidden" name="author" value="{{ request('author') }}">
                                    @endif
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search.." name="search"
                                            value="{{ request('search') }}">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @if ($posts->count())
                            <div class="card mb-3">
                                @if ($posts[0]->image)
                                    <div style="max-height:400px; overflow:hidden;">
                                        <img src="{{ asset($posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                                            class="img-fluid">
                                    </div>
                                @else
                                    <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}"
                                        class="card-img-top"
                                        alt="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}">
                                @endif

                                <div class="card-body text-center">

                                    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                                            class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>

                                    <p>
                                        <small class="text-muted">
                                            By. <a href="/blog?author={{ $posts[0]->author->username }}"
                                                class="text-decoration-none">{{ $posts[0]->author->name }}</a> in
                                            <a href="/blog?category={{ $posts[0]->category->slug }}"
                                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                                            {{ $posts[0]->created_at->diffForHumans() }}
                                        </small>
                                    </p>

                                    <p class="card-text">{{ $posts[0]->excerpt }}</p>

                                    <a href="/blog/{{ $posts[0]->slug }}"
                                        class="text-decoration-none btn btn-primary">Read more</a>

                                </div>
                            </div>

                            {{-- Halaman Post --}}
                            <div class="container">
                                <div class="row">
                                    @foreach ($posts->skip(1) as $post)
                                        <div class="col-md-4 mb-3">
                                            <div class="card"">
                                                <div class="position-absolute px-3 py-2 text-white"
                                                    style="background-color: rgba(0,0,0,0.7)"><a
                                                        href="/blog?category={{ $post->category->slug }}"
                                                        class="text-white text-decoration-none">{{ $post->category->name }}</a>
                                                </div>
                                                @if ($post->image)
                                                <img src="{{ asset($post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                                                @else
                                                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                                                        alt="{{ $post->category->name }}" class="img-fluid">
                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $post->title }}</h5>
                                                    <p>
                                                        <small class="text-muted">
                                                            By. <a href="/blog?author={{ $post->author->username }}"
                                                                class="text-decoration-none">{{ $post->author->name }}</a>
                                                            {{ $post->created_at->diffForHumans() }}
                                                        </small>
                                                    </p>
                                                    <p class="card-text">{{ $post->excerpt }}</p>
                                                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <p class="text-center fs-4">No post found.</p>
                        @endif

                        <div class="d-flex justify-content-lg-end ">
                            {{ $posts->links() }}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
