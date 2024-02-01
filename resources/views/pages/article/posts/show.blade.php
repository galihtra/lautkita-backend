@extends('layouts.app')

@section('title', 'My Posts')

@push('style')
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $post->category->name }}</h1>
            </div>

            <div class="card p-3">
                <div class="section-body">
                    <div class="row my-3">
                        <div class="col-lg-12">
                            <h1 class="mb-3">{{ $post->title ?? 'No Title' }}</h1>

                            <a href="/article" class="btn btn-success"><span data-feather="arrow-left"></span> Back to
                                my all
                                posts</a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span
                                    data-feather="edit"></span> Edit</a>
                            <form action="{{ route('article.destroy', $post->slug) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span>Delete</button>
                            </form>

                            @if ($post->image)
                                <div style="max-height:350px; overflow:hidden;">
                                    <img src="{{  asset($post->image) }}" alt="{{ $post->category->name }}"
                                        class="img-fluid mt-3">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                            @endif

                            <article class="my-3 fs-5">
                                {!! $post->body !!}
                            </article>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
@endpush
