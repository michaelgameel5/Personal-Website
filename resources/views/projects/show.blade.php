@extends('layouts.app')

@section('title', $project->title . ' - Michael Gameel')
@section('description', $project->short_description ?? \Illuminate\Support\Str::limit($project->description, 160))

@section('content')
<section class="page-header">
    <div class="container">
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> / 
            <a href="{{ route('projects') }}">Projects</a> / 
            <span>{{ $project->title }}</span>
        </nav>
        <h1>{{ $project->title }}</h1>
    </div>
</section>

<section class="project-detail">
    <div class="container">
        <div class="project-detail-content">
            <div class="project-detail-main">
                <div class="project-image">
                    <div class="thumbnail-placeholder-large">
                        <svg width="600" height="400" viewBox="0 0 600 400" fill="none">
                            <rect width="600" height="400" fill="#1A73E8" opacity="0.1"/>
                            <path d="M150 100 L450 100 L450 300 L150 300 Z" stroke="#1A73E8" stroke-width="3" fill="none"/>
                        </svg>
                    </div>
                </div>
                <div class="project-description">
                    <h2>About This Project</h2>
                    <div class="description-content">
                        {!! nl2br(e($project->description)) !!}
                    </div>
                </div>
            </div>
            <div class="project-detail-sidebar">
                <div class="project-info-card">
                    <h3>Project Details</h3>
                    @if($project->tools)
                        <div class="info-section">
                            <h4>Tools & Technologies</h4>
                            <div class="tools-list">
                                @foreach($project->tools_array as $tool)
                                    <span class="tool-tag">{{ trim($tool) }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="info-section">
                        <h4>Status</h4>
                        <p>{{ $project->featured ? 'Featured Project' : 'Active Project' }}</p>
                    </div>
                </div>
                <a href="{{ route('projects') }}" class="btn btn-secondary">← Back to Projects</a>
            </div>
        </div>
    </div>
</section>
@endsection

