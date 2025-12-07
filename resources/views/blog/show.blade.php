@extends('layouts.app')

@section('title', $post->title . ' - Michael Gameel Blog')
@section('description', $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 160))

@section('content')
<section class="page-header">
    <div class="container">
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> / 
            <a href="{{ route('blog') }}">Blog</a> / 
            <span>{{ $post->title }}</span>
        </nav>
    </div>
</section>

<article class="blog-post">
    <div class="container">
        <div class="blog-post-header">
            <div class="blog-post-meta">
                <span class="blog-category">{{ $post->category }}</span>
                <span class="blog-date">{{ $post->published_at->format('F d, Y') }}</span>
            </div>
            <h1>{{ $post->title }}</h1>
            @if($post->tags)
                <div class="blog-tags">
                    @foreach($post->tags_array as $tag)
                        <span class="tag">{{ trim($tag) }}</span>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="blog-post-content">
            <div class="blog-post-thumbnail">
                <div class="thumbnail-placeholder-large">
                    <svg width="800" height="400" viewBox="0 0 800 400" fill="none">
                        <rect width="800" height="400" fill="#1A73E8" opacity="0.1"/>
                        <path d="M200 100 L600 100 L600 300 L200 300 Z" stroke="#1A73E8" stroke-width="3" fill="none"/>
                    </svg>
                </div>
            </div>
            <div class="blog-post-body">
                {!! $post->content !!}
            </div>
        </div>

        @if($relatedPosts->count() > 0)
            <div class="related-posts">
                <h2>Related Posts</h2>
                <div class="related-posts-grid">
                    @foreach($relatedPosts as $relatedPost)
                        <div class="related-post-card">
                            <h3><a href="{{ route('blog.show', $relatedPost->slug) }}">{{ $relatedPost->title }}</a></h3>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($relatedPost->content), 100) }}</p>
                            <a href="{{ route('blog.show', $relatedPost->slug) }}" class="read-more">Read →</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="blog-post-footer">
            <a href="{{ route('blog') }}" class="btn btn-secondary">← Back to Blog</a>
        </div>
    </div>
</article>
@endsection

