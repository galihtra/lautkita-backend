@extends('landing_pages.layouts.main')

@section('title', 'Berita Kelautan Di Indonesia')

@push('style')
    <!-- CSS Libraries -->
@endpush


@section('main')
    <main class="page-blog">
        <div class="container">
            <div class="row justify-content-center mb-5 mt-5">
                <div class="col-md-12">

                    {{-- bisa ambil seperti ini $post['title'] namun bisa seperti $post->title --}}
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <p>By.
                        <a href="/blog?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a> in
                        <a href="/blog?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                    </p>

                    @if ($post->image)
                        <div style="max-height:350px; overflow:hidden;">
                            <img src="{{ asset($post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid">
                    @endif

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>

                    <a href="/blog" class="d-block mt-3">Back to Posts</a>

                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
