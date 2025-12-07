@extends('layouts.app')

@section('title', 'Volunteering - Michael Gameel')
@section('description', 'Volunteering activities and community involvement of Michael Gameel.')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Volunteering</h1>
        <p>My community involvement and volunteer work</p>
    </div>
</section>

<section class="experience-timeline-section">
    <div class="container">
        <div class="timeline">


            <div class="timeline-item-detailed">
                <div class="timeline-marker"></div>
                <div class="timeline-content-detailed">
                    <div class="timeline-year-badge">Oct 2025</div>
                    <h2>SEYS Event Organizer</h2>
                    <h3>ACTS | AUC El Tahrir</h3>
                    @php
                        $seysImages = array_merge(
                            glob(public_path('assets/images/volunteering/seys*.jpg')),
                            glob(public_path('assets/images/volunteering/seys*.png')),
                            glob(public_path('assets/images/volunteering/seys*.jpeg'))
                        );
                    @endphp
                    @if(!empty($seysImages))
                        <div class="timeline-image-container">
                            <div class="timeline-image-gallery">
                                @foreach($seysImages as $image)
                                    <img src="{{ asset('assets/images/volunteering/' . basename($image)) }}" alt="SEYS Event" class="timeline-image">
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <p>
                        Organized and coordinated the SEYS event, managing logistics, participant engagement, and ensuring 
                        smooth execution of the event activities.
                    </p>
                    <ul class="experience-details">
                        <li>Event planning and logistics</li>
                        <li>Participant coordination</li>
                        <li>Venue management</li>
                        <li>Event execution and support</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item-detailed">
                <div class="timeline-marker"></div>
                <div class="timeline-content-detailed">
                    <div class="timeline-year-badge">Sep 2024 - Aug 2025</div>
                    <h2>SUT Ambassadors President</h2>
                    <h3>SUT College | 10th of Ramadan, Egypt</h3>
                    @php
                        $sutImages = array_merge(
                            glob(public_path('assets/images/volunteering/sut-ambassadors*.jpg')),
                            glob(public_path('assets/images/volunteering/sut-ambassadors*.png')),
                            glob(public_path('assets/images/volunteering/sut-ambassadors*.jpeg'))
                        );
                    @endphp
                    @if(!empty($sutImages))
                        <div class="timeline-image-container">
                            <div class="timeline-image-gallery">
                                @foreach($sutImages as $image)
                                    <img src="{{ asset('assets/images/volunteering/' . basename($image)) }}" alt="SUT Ambassadors" class="timeline-image">
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <p>
                        Leading the SUT Ambassadors program, representing the college, organizing events, and managing 
                        ambassador activities. Building leadership skills while promoting the college's mission and values.
                    </p>
                    <ul class="experience-details">
                        <li>Leadership and team management</li>
                        <li>Event planning and coordination</li>
                        <li>College representation</li>
                        <li>Program development and execution</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item-detailed">
                <div class="timeline-marker"></div>
                <div class="timeline-content-detailed">
                    <div class="timeline-year-badge">Mar 2025</div>
                    <h2>EFB Event Organizer</h2>
                    <h3>EFB | 3rd Settlement</h3>
                    @php
                        $efbImages = array_merge(
                            glob(public_path('assets/images/volunteering/efb*.jpg')),
                            glob(public_path('assets/images/volunteering/efb*.png')),
                            glob(public_path('assets/images/volunteering/efb*.jpeg'))
                        );
                    @endphp
                    @if(!empty($efbImages))
                        <div class="timeline-image-container">
                            <div class="timeline-image-gallery">
                                @foreach($efbImages as $image)
                                    <img src="{{ asset('assets/images/volunteering/' . basename($image)) }}" alt="EFB Event" class="timeline-image">
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <p>
                        Organized the EFB event, handling all aspects of event management from planning to execution, 
                        ensuring a successful and engaging experience for all participants.
                    </p>
                    <ul class="experience-details">
                        <li>Event planning and coordination</li>
                        <li>Stakeholder communication</li>
                        <li>Resource management</li>
                        <li>On-site event management</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item-detailed">
                <div class="timeline-marker"></div>
                <div class="timeline-content-detailed">
                    <div class="timeline-year-badge">Sep 2024</div>
                    <h2>YLF Event Setup Coordinator & Organizer</h2>
                    <h3>YLF | Al Tahrir, Egypt</h3>
                    @php
                        $ylfImages = array_merge(
                            glob(public_path('assets/images/volunteering/ylf*.jpg')),
                            glob(public_path('assets/images/volunteering/ylf*.png')),
                            glob(public_path('assets/images/volunteering/ylf*.jpeg'))
                        );
                    @endphp
                    @if(!empty($ylfImages))
                        <div class="timeline-image-container">
                            <div class="timeline-image-gallery">
                                @foreach($ylfImages as $image)
                                    <img src="{{ asset('assets/images/volunteering/' . basename($image)) }}" alt="YLF Event" class="timeline-image">
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <p>
                        Coordinated event setup and organization for YLF, managing technical infrastructure, logistics, 
                        and ensuring all event components were properly configured and ready for participants.
                    </p>
                    <ul class="experience-details">
                        <li>Event setup and technical coordination</li>
                        <li>Infrastructure management</li>
                        <li>Logistics planning</li>
                        <li>Team coordination</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item-detailed">
                <div class="timeline-marker"></div>
                <div class="timeline-content-detailed">
                    <div class="timeline-year-badge">Jul - Aug 2024</div>
                    <h2>TEDx Youth IT Specialist</h2>
                    <h3>TEDx Youth | Al Dokki, Egypt</h3>
                    @php
                        $tedxImages = array_merge(
                            glob(public_path('assets/images/volunteering/tedx*.jpg')),
                            glob(public_path('assets/images/volunteering/tedx*.png')),
                            glob(public_path('assets/images/volunteering/tedx*.jpeg'))
                        );
                    @endphp
                    @if(!empty($tedxImages))
                        <div class="timeline-image-container">
                            <div class="timeline-image-gallery">
                                @foreach($tedxImages as $image)
                                    <img src="{{ asset('assets/images/volunteering/' . basename($image)) }}" alt="TEDx Youth" class="timeline-image">
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <p>
                        Served as IT Specialist for TEDx Youth event, managing technical infrastructure, AV equipment, 
                        and ensuring smooth operation of all technology-related aspects of the event.
                    </p>
                    <ul class="experience-details">
                        <li>IT infrastructure management</li>
                        <li>AV equipment setup and operation</li>
                        <li>Technical troubleshooting</li>
                        <li>Event technology support</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

