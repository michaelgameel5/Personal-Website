@extends('layouts.app')

@section('title', 'About Me - Michael Gameel')
@section('description', 'Learn about Michael Gameel, a cybersecurity and networking student from Cairo, Egypt. Experience, education, and skills.')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>About Me</h1>
        <p>Get to know my background, education, and expertise</p>
    </div>
</section>

<section class="about-content">
    <div class="container">
        <div class="about-grid">
            <div class="about-main">
                <div class="bio-section">
                    <h2>Bio</h2>
                    <p>
                        I'm Michael Gameel, a cybersecurity and networking student passionate about ethical hacking, 
                        SOC analysis, red teaming, and building practical tech systems. At 20, I'm actively pursuing 
                        my education while gaining real-world experience through internships and personal projects.
                    </p>
                    <p>
                        My journey in cybersecurity started with a curiosity about how systems work and how they can be 
                        secured. This led me to explore penetration testing, network security, and eventually SOC operations. 
                        I believe in continuous learning and hands-on practice, which is why I maintain a home lab and work 
                        on various security projects.
                    </p>
                </div>

                <div class="experience-section">
                    <h2>Work Experience</h2>
                    <div class="experience-timeline">
                        <div class="timeline-item">
                            <div class="timeline-year">Aug 2025 - Current</div>
                            <div class="timeline-content">
                                <h3>Penetration Tester Intern</h3>
                                <h4>Corelia</h4>
                                @php
                                    $coreliaImages = array_merge(
                                        glob(public_path('assets/images/experience/corelia*.jpg')),
                                        glob(public_path('assets/images/experience/corelia*.png')),
                                        glob(public_path('assets/images/experience/corelia*.jpeg'))
                                    );
                                @endphp
                                @if(!empty($coreliaImages))
                                    <div class="timeline-image-container">
                                        <div class="timeline-image-gallery">
                                            @foreach($coreliaImages as $image)
                                                <img src="{{ asset('assets/images/experience/' . basename($image)) }}" alt="Corelia" class="timeline-image">
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <p>Performing penetration tests on web and mobile applications using automated and manual techniques, delivering actionable mitigation strategies.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">Aug 2025 - Sep 2025</div>
                            <div class="timeline-content">
                                <h3>GRC Trainee</h3>
                                <h4>WE Innovate</h4>
                                @php
                                    $weInnovateImages = array_merge(
                                        glob(public_path('assets/images/experience/we-innovate*.jpg')),
                                        glob(public_path('assets/images/experience/we-innovate*.png')),
                                        glob(public_path('assets/images/experience/we-innovate*.jpeg'))
                                    );
                                @endphp
                                @if(!empty($weInnovateImages))
                                    <div class="timeline-image-container">
                                        <div class="timeline-image-gallery">
                                            @foreach($weInnovateImages as $image)
                                                <img src="{{ asset('assets/images/experience/' . basename($image)) }}" alt="WE Innovate" class="timeline-image">
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <p>Training in Governance, Risk, and Compliance (GRC) practices, learning about security frameworks, risk assessment, and compliance standards.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">Jul 2025 - Aug 2025</div>
                            <div class="timeline-content">
                                <h3>Cybersecurity Engineer Intern</h3>
                                <h4>Telecom Egypt</h4>
                                @php
                                    $telecomEgyptCybersecImages = array_merge(
                                        glob(public_path('assets/images/experience/telecom-egypt-cybersec*.jpg')),
                                        glob(public_path('assets/images/experience/telecom-egypt-cybersec*.png')),
                                        glob(public_path('assets/images/experience/telecom-egypt-cybersec*.jpeg'))
                                    );
                                @endphp
                                @if(!empty($telecomEgyptCybersecImages))
                                    <div class="timeline-image-container">
                                        <div class="timeline-image-gallery">
                                            @foreach($telecomEgyptCybersecImages as $image)
                                                <img src="{{ asset('assets/images/experience/' . basename($image)) }}" alt="Telecom Egypt - Cybersecurity" class="timeline-image">
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <p>Working on cybersecurity initiatives, security assessments, and implementing security measures for telecommunications infrastructure.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">Oct 2024 - Nov 2024</div>
                            <div class="timeline-content">
                                <h3>Technical Support</h3>
                                <h4>MCS</h4>
                                @php
                                    $mcsImages = array_merge(
                                        glob(public_path('assets/images/experience/mcs*.jpg')),
                                        glob(public_path('assets/images/experience/mcs*.png')),
                                        glob(public_path('assets/images/experience/mcs*.jpeg'))
                                    );
                                @endphp
                                @if(!empty($mcsImages))
                                    <div class="timeline-image-container">
                                        <div class="timeline-image-gallery">
                                            @foreach($mcsImages as $image)
                                                <img src="{{ asset('assets/images/experience/' . basename($image)) }}" alt="MCS" class="timeline-image">
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <p>Providing technical support to clients, troubleshooting issues, and maintaining customer relationships.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">Sep 2024</div>
                            <div class="timeline-content">
                                <h3>IT Specialist Intern</h3>
                                <h4>Petrojet</h4>
                                @php
                                    $petrojetImages = array_merge(
                                        glob(public_path('assets/images/experience/petrojet*.jpg')),
                                        glob(public_path('assets/images/experience/petrojet*.png')),
                                        glob(public_path('assets/images/experience/petrojet*.jpeg'))
                                    );
                                @endphp
                                @if(!empty($petrojetImages))
                                    <div class="timeline-image-container">
                                        <div class="timeline-image-gallery">
                                            @foreach($petrojetImages as $image)
                                                <img src="{{ asset('assets/images/experience/' . basename($image)) }}" alt="Petrojet" class="timeline-image">
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <p>Assisting with IT infrastructure management, troubleshooting, and technical support.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">Jul 2024 - Aug 2024</div>
                            <div class="timeline-content">
                                <h3>IT Infrastructure Intern</h3>
                                <h4>MCV</h4>
                                @php
                                    $mcvImages = array_merge(
                                        glob(public_path('assets/images/experience/mcv*.jpg')),
                                        glob(public_path('assets/images/experience/mcv*.png')),
                                        glob(public_path('assets/images/experience/mcv*.jpeg'))
                                    );
                                @endphp
                                @if(!empty($mcvImages))
                                    <div class="timeline-image-container">
                                        <div class="timeline-image-gallery">
                                            @foreach($mcvImages as $image)
                                                <img src="{{ asset('assets/images/experience/' . basename($image)) }}" alt="MCV" class="timeline-image">
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <p>Working on network infrastructure, system administration, and infrastructure optimization.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">Aug 2023 - Dec 2023</div>
                            <div class="timeline-content">
                                <h3>Data Center Specialist</h3>
                                <h4>Telecom Egypt</h4>
                                @php
                                    $telecomEgyptDataCenterImages = array_merge(
                                        glob(public_path('assets/images/experience/telecom-egypt-datacenter*.jpg')),
                                        glob(public_path('assets/images/experience/telecom-egypt-datacenter*.png')),
                                        glob(public_path('assets/images/experience/telecom-egypt-datacenter*.jpeg'))
                                    );
                                @endphp
                                @if(!empty($telecomEgyptDataCenterImages))
                                    <div class="timeline-image-container">
                                        <div class="timeline-image-gallery">
                                            @foreach($telecomEgyptDataCenterImages as $image)
                                                <img src="{{ asset('assets/images/experience/' . basename($image)) }}" alt="Telecom Egypt - Data Center" class="timeline-image">
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <p>Managing and maintaining data center infrastructure, ensuring optimal performance and reliability of server systems and network equipment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-sidebar">
                <div class="info-card">
                    <h3>Personal Information</h3>
                    <div class="info-item">
                        <span class="info-label">Age:</span>
                        <span class="info-value">20</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Location:</span>
                        <span class="info-value">Cairo, Egypt</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Track:</span>
                        <span class="info-value">Cybersecurity & Networking</span>
                    </div>
                </div>

                <div class="education-card">
                    <h3>Education</h3>
                    <div class="education-item">
                        <h4>SUT College</h4>
                        <p>Network & Cybersecurity</p>
                    </div>
                    <div class="education-item">
                        <h4>WE School for Applied Technology</h4>
                        <p>Telecom Diploma - 1st Class Honors</p>
                    </div>
                </div>

                <div class="skills-card">
                    <h3>Skills</h3>
                    <div class="skills-grid">
                        <div class="skill-category">
                            <h4>Security</h4>
                            <ul>
                                <li>Penetration Testing</li>
                                <li>Red Teaming</li>
                                <li>SOC Analysis</li>
                                <li>Network Security</li>
                            </ul>
                        </div>
                        <div class="skill-category">
                            <h4>Development</h4>
                            <ul>
                                <li>Laravel</li>
                                <li>PHP/MySQL</li>
                                <li>API Development</li>
                                <li>XAMPP</li>
                            </ul>
                        </div>
                        <div class="skill-category">
                            <h4>Tools</h4>
                            <ul>
                                <li>Wireshark</li>
                                <li>Burp Suite</li>
                                <li>Metasploit</li>
                                <li>Content Writing</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="language-skills-card">
                    <h3>Language Skills</h3>
                    <div class="language-list">
                        <div class="language-item">
                            <span class="language-name">Arabic</span>
                            <span class="language-level">Native</span>
                        </div>
                        <div class="language-item">
                            <span class="language-name">English</span>
                            <span class="language-level">Intermediate</span>
                        </div>
                        <div class="language-item">
                            <span class="language-name">Italian</span>
                            <span class="language-level">Beginner (Actively Learning)</span>
                        </div>
                    </div>
                </div>

                <div class="honours-awards-card">
                    <h3>Honours and Awards</h3>
                    <div class="award-item">
                        <h4>1st Place - Information Network Cabling</h4>
                        <p class="award-organization">World Skills Egypt</p>
                        <p class="award-date">September 2022, National Level</p>
                        <p class="award-description">Awarded 1st place in the 2022 competition and selected to represent Egypt in Kyoto, Japan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

