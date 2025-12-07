<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Projects
        $projects = [
            [
                'title' => 'Library Management System',
                'description' => 'A complete system with admin and user features for database management, user accounts, and book borrowing.',
                'short_description' => 'Complete system with admin and user features for database management, user accounts, and book borrowing.',
                'tools' => 'Database Management, User Authentication, Book Borrowing System',
                'featured' => true,
            ],
            [
                'title' => 'File Compression Utility',
                'description' => 'A program that uses Huffman Coding to compress and decompress files.',
                'short_description' => 'A program that uses Huffman Coding to compress and decompress files.',
                'tools' => 'Huffman Coding, File Compression, Data Structures',
                'featured' => true,
            ],
            [
                'title' => 'Point of Sale System',
                'description' => 'A Java-based point-of-sale system that includes user authentication, inventory tracking, and billing for book sales.',
                'short_description' => 'Java-based point-of-sale system with user authentication, inventory tracking, and billing.',
                'tools' => 'Java, User Authentication, Inventory Management, Billing System',
                'featured' => true,
            ],
            [
                'title' => 'Enhanced DevOps Security Using AI',
                'description' => 'A project focused on utilizing AI to strengthen security within DevOps pipelines and automate threat detection.',
                'short_description' => 'Utilizing AI to strengthen security within DevOps pipelines and automate threat detection.',
                'tools' => 'AI, DevOps, Security Automation, Threat Detection',
                'featured' => true,
            ],
            [
                'title' => 'Penetration Testing Project',
                'description' => 'A hands-on project focused on conducting penetration testing to identify vulnerabilities and improve system security.',
                'short_description' => 'Hands-on project focused on conducting penetration testing to identify vulnerabilities and improve system security.',
                'tools' => 'Penetration Testing, Vulnerability Assessment, Security Testing',
                'featured' => true,
            ],
            [
                'title' => 'E-commerce Platform using Laravel',
                'description' => 'A complete e-commerce platform built with Laravel featuring product management, shopping cart, payment integration, and order management.',
                'short_description' => 'Complete e-commerce platform with product management, shopping cart, payment integration, and order management.',
                'tools' => 'Laravel, PHP, MySQL, Payment Integration, E-commerce',
                'featured' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // Seed Blog Posts
        $blogPosts = [
            [
                'title' => 'Getting Started with Penetration Testing',
                'content' => '<p>Penetration testing is a crucial skill for cybersecurity professionals. In this post, I\'ll share my journey learning ethical hacking and the tools that have been most valuable.</p><p>Starting with basic web application testing using Burp Suite, I\'ve progressed to network penetration testing and red team exercises. The key is consistent practice in controlled lab environments.</p>',
                'excerpt' => 'Learn the fundamentals of penetration testing and ethical hacking from a student\'s perspective.',
                'category' => 'Cybersecurity',
                'tags' => 'Penetration Testing, Ethical Hacking, Burp Suite',
                'published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'SOC Analyst Internship: What I Learned',
                'content' => '<p>My experience as a SOC Analyst Intern at Corelia has been transformative. Working with real security incidents, monitoring SIEM systems, and responding to threats has given me practical insights into blue team operations.</p><p>Key takeaways include the importance of log analysis, incident response procedures, and collaboration within security teams.</p>',
                'excerpt' => 'Reflections on my SOC analyst internship and the practical skills gained.',
                'category' => 'SOC/Blue Teaming',
                'tags' => 'SOC, Blue Team, Incident Response, SIEM',
                'published' => true,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Building Secure Laravel Applications',
                'content' => '<p>Security should be a priority from day one when building web applications. In this post, I share best practices for securing Laravel applications, including authentication, authorization, and input validation.</p><p>We\'ll cover CSRF protection, SQL injection prevention, XSS mitigation, and secure API development.</p>',
                'excerpt' => 'Security best practices for Laravel web development.',
                'category' => 'Tech Projects',
                'tags' => 'Laravel, Web Security, PHP, Best Practices',
                'published' => true,
                'published_at' => now()->subDays(15),
            ],
            [
                'title' => 'Red Teaming Fundamentals',
                'content' => '<p>Red teaming goes beyond penetration testing. It\'s about simulating real-world attacks to test an organization\'s security posture comprehensively. This post covers the methodology, tools, and mindset required for effective red team exercises.</p>',
                'excerpt' => 'An introduction to red teaming and offensive security operations.',
                'category' => 'Red Teaming',
                'tags' => 'Red Team, Offensive Security, Security Testing',
                'published' => true,
                'published_at' => now()->subDays(20),
            ],
            [
                'title' => 'Productivity Tips for Cybersecurity Students',
                'content' => '<p>Balancing coursework, internships, and personal projects can be challenging. Here are productivity strategies that have helped me stay organized and make progress in my cybersecurity journey.</p><p>From time management techniques to learning resources, I share what works for me.</p>',
                'excerpt' => 'Practical productivity advice for students in cybersecurity programs.',
                'category' => 'Productivity',
                'tags' => 'Productivity, Study Tips, Time Management',
                'published' => true,
                'published_at' => now()->subDays(25),
            ],
        ];

        foreach ($blogPosts as $post) {
            BlogPost::create($post);
        }
    }
}

