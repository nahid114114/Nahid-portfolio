<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use App\Models\About;
use App\Models\ContactMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create About section
        About::create([
            'bio' => 'I\'m a full-stack web developer passionate about creating beautiful and functional web applications. With expertise in Laravel, Vue.js, and modern web technologies, I build scalable solutions that solve real-world problems.',
            'location' => 'San Francisco, USA',
            'email' => 'hello@nahid.dev',
        ]);

        // Create Skills
        Skill::create(['name' => 'PHP', 'level' => 95]);
        Skill::create(['name' => 'Laravel', 'level' => 95]);
        Skill::create(['name' => 'Vue.js', 'level' => 85]);
        Skill::create(['name' => 'JavaScript', 'level' => 90]);
        Skill::create(['name' => 'MySQL', 'level' => 88]);
        Skill::create(['name' => 'REST APIs', 'level' => 92]);
        Skill::create(['name' => 'Tailwind CSS', 'level' => 85]);
        Skill::create(['name' => 'Git', 'level' => 90]);

        // Create Projects
        Project::create([
            'title' => 'E-Commerce Platform',
            'description' => 'A full-featured e-commerce platform built with Laravel and Vue.js. Includes product management, shopping cart, payment integration, and order tracking.',
            'link' => 'https://github.com/example/ecommerce',
        ]);

        Project::create([
            'title' => 'Task Management App',
            'description' => 'A collaborative task management application with real-time updates. Features include project boards, team collaboration, and progress tracking.',
            'link' => 'https://github.com/example/task-manager',
        ]);

        Project::create([
            'title' => 'Portfolio Website',
            'description' => 'My personal portfolio website showcasing my projects and skills. Built with Laravel backend and Vue.js frontend with a beautiful modern design.',
            'link' => 'https://github.com/example/portfolio',
        ]);

        Project::create([
            'title' => 'Social Media Analytics',
            'description' => 'A tool to analyze social media performance across multiple platforms. Includes real-time analytics, trend detection, and reporting dashboards.',
            'link' => 'https://github.com/example/social-analytics',
        ]);

        Project::create([
            'title' => 'API Gateway',
            'description' => 'A robust API gateway for managing and routing microservices. Features authentication, rate limiting, logging, and request transformation.',
            'link' => 'https://github.com/example/api-gateway',
        ]);

        // Sample Contact Messages
        ContactMessage::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Great Work!',
            'message' => 'I really impressed with your portfolio. Would love to discuss potential projects.',
        ]);

        ContactMessage::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'subject' => 'Freelance Inquiry',
            'message' => 'Are you available for freelance work? I have an interesting project in mind.',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

