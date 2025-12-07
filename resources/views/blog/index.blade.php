@extends('layouts.app')

@section('title', 'Blog - Michael Gameel')
@section('description', 'Read articles about cybersecurity, red teaming, SOC analysis, productivity, and tech projects by Michael Gameel.')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Blog</h1>
        <p>Thoughts, tutorials, and insights on cybersecurity and technology</p>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <div class="blog-layout">
            <div class="blog-main">
                @if($categories->count() > 0)
                    <div class="blog-filters">
                        <a href="{{ route('blog') }}" class="filter-btn {{ !request()->has('category') ? 'active' : '' }}">All</a>
                        @foreach($categories as $category)
                            <a href="{{ route('blog', ['category' => $category]) }}" 
                               class="filter-btn {{ request('category') === $category ? 'active' : '' }}">
                                {{ $category }}
                            </a>
                        @endforeach
                    </div>
                @endif

                <div class="blog-grid">
                    @forelse($posts as $post)
                        <article class="blog-card">
                            <div class="blog-thumbnail">
                                <div class="thumbnail-placeholder">
                                    <svg width="300" height="200" viewBox="0 0 300 200" fill="none">
                                        <rect width="300" height="200" fill="#1A73E8" opacity="0.1"/>
                                        <path d="M75 50 L225 50 L225 150 L75 150 Z" stroke="#1A73E8" stroke-width="2" fill="none"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="blog-category">{{ $post->category }}</span>
                                    <span class="blog-date">{{ $post->published_at->format('M d, Y') }}</span>
                                </div>
                                <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                                <p>{{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}</p>
                                <a href="{{ route('blog.show', $post->slug) }}" class="read-more">Read More →</a>
                            </div>
                        </article>
                    @empty
                        <div class="empty-state">
                            <p>No blog posts available yet. Check back soon!</p>
                        </div>
                    @endforelse
                </div>

                <div class="pagination">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

