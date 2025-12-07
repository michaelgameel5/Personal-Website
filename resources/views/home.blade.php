@extends('layouts.app')

@section('title', 'Home - Michael Gameel')
@section('description', 'Michael Gameel - Cybersecurity & Networking Specialist. SOC Analyst Intern, Penetration Testing Student, and Tech Builder from Cairo, Egypt.')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span class="gradient-text">Michael Gameel</span><br>
                    Penetration Tester
                </h1>
                <p class="hero-subtitle">
                    Offensive Security • Red Teaming • GRC • SOC • Network Specialist • Tech Builder
                </p>
                <p class="hero-description">
                I’m a 20-year-old cybersecurity and networking student from Cairo, Egypt, specializing in ethical hacking, red teaming, GRC, and building secure technical systems.
                I’m passionate about breaking and securing systems, understanding how attacks work, and creating practical security solutions that make organizations safer.
                </p>
                <div class="hero-buttons">
                    <a href="{{ route('about') }}" class="btn btn-primary">Learn More About Me</a>
                    <a href="{{ asset('assets/cv/cv.pdf') }}" class="btn btn-secondary" id="downloadCV" download>Download CV</a>
                </div>
            </div>
            <div class="hero-image">
                @if(file_exists(public_path('assets/images/profile.jpg')))
                    <img src="{{ asset('assets/images/profile.jpg') }}" alt="Michael Gameel" class="profile-image">
                @elseif(file_exists(public_path('assets/images/profile.png')))
                    <img src="{{ asset('assets/images/profile.png') }}" alt="Michael Gameel" class="profile-image">
                @else
                    <div class="profile-image-placeholder">
                        <svg width="300" height="300" viewBox="0 0 300 300" fill="none">
                            <circle cx="150" cy="150" r="150" fill="#1A73E8" opacity="0.1"/>
                            <circle cx="150" cy="120" r="50" fill="#1A73E8" opacity="0.3"/>
                            <path d="M100 220 Q150 180 200 220" stroke="#1A73E8" stroke-width="3" fill="none"/>
                        </svg>
                        <p class="placeholder-text">Add your photo: public/assets/images/profile.jpg</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Summary Section -->
<section class="summary">
    <div class="container">
        <div class="summary-grid">
            <div class="summary-card">
                <div class="summary-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3>Cybersecurity</h3>
                <p>Penetration Testing, Red Teaming, SOC Analysis, Network Security</p>
            </div>
            <div class="summary-card">
                <div class="summary-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3>Web Development</h3>
                <p>Laravel, PHP, MySQL, API Development, Full-Stack Solutions</p>
            </div>
            <div class="summary-card">
                <div class="summary-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                </div>
                <h3>Networking</h3>
                <p>Network Security, Infrastructure, Troubleshooting, System Administration</p>
            </div>
        </div>
    </div>
</section>

<!-- Skills & Expertise Section -->
<section class="skills-section">
    <div class="container">
        <div class="section-header">
            <h2>Skills & Expertise</h2>
            <p>Technologies and tools I work with</p>
        </div>
        <div class="skills-grid">
            <div class="skill-category">
                <h3>Cybersecurity</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Penetration Testing</span>
                    <span class="skill-tag">SOC Analysis</span>
                    <span class="skill-tag">Red Teaming</span>
                    <span class="skill-tag">Threat Hunting</span>
                    <span class="skill-tag">SIEM</span>
                    <span class="skill-tag">Network Security</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Development</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">API Development</span>
                    <span class="skill-tag">Git</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Networking & Infrastructure</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Network Configuration</span>
                    <span class="skill-tag">System Administration</span>
                    <span class="skill-tag">Troubleshooting</span>
                    <span class="skill-tag">IT Support</span>
                    <span class="skill-tag">Infrastructure Management</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

