@extends('layouts.app')

@section('title', 'Projects - Michael Gameel')
@section('description', 'Explore my cybersecurity and web development projects including penetration testing labs, Laravel applications, and IoT solutions.')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>My Projects</h1>
        <p>A collection of my work in cybersecurity, web development, and technology</p>
    </div>
</section>

<section class="projects-section">
    <div class="container">
        <div class="projects-grid">
            @forelse($projects as $project)
                <div class="project-card-large">
                    <div class="project-content-large">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ $project->short_description ?? \Illuminate\Support\Str::limit($project->description, 200) }}</p>
                        @if($project->tools)
                            <div class="project-tools">
                                <strong>Tools & Technologies:</strong>
                                <div class="tools-list">
                                    @foreach($project->tools_array as $tool)
                                        <span class="tool-tag">{{ trim($tool) }}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <p>No projects available at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection

