@extends('layouts.app')

@section('title', 'Home - Jacob Bumacod Portfolio')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient min-h-screen flex items-center justify-center">
    <div class="max-w-6xl mx-auto px-4 text-center text-white py-12">
        <div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Welcome To My Portfolio Website!
            </h1>
            <p class="text-xl md:text-2xl mb-10 opacity-90">
                "The World Isn't always fair, but that's what makes it worth fighting for."
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('about') }}" class="btn-primary">
                    Learn About Me
                </a>
                <a href="{{ route('portfolio') }}" class="btn-secondary">
                    View My Work
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Introduction -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Hello, I'm Jacob!</h2>
                <p class="text-lg text-gray-600 mb-6">
                    I'm a passionate developer and student currently pursuing my education at Pangasinan State University (PSU) Alaminos Campus. 
                    I love creating innovative solutions and learning new technologies.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    With a strong foundation in web development and a keen eye for detail, I strive to build applications 
                    that make a difference in people's lives.
                </p>                <a href="{{ route('contact') }}" class="btn-primary">
                    Get In Touch
                </a>
            </div>
            <div class="text-center">
                <div class="w-64 h-64 mx-auto rounded-full overflow-hidden shadow-xl profile-image-container">
                    <img src="{{ asset('images/image.png') }}" alt="Jacob Bumacod" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Skills Preview -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">What I Do</h2>
            <p class="text-lg text-gray-600">A glimpse into my technical abilities</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Web Development</h3>
                <p class="text-gray-600">Building responsive and modern web applications using Laravel, PHP, and JavaScript.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Management</h3>
                <p class="text-gray-600">Organizing and managing projects efficiently with strong problem-solving skills.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Team Collaboration</h3>
                <p class="text-gray-600">Working effectively in teams with excellent communication and leadership skills.</p>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('skills') }}" class="btn-primary">
                View All Skills
            </a>
        </div>
    </div>
</section>

<!-- Featured Projects Preview -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Featured Projects</h2>
            <p class="text-lg text-gray-600">Some of my recent work</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md card-hover">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-purple-600 flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">IAS Project</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">IAS Project</h3>
                    <p class="text-gray-600 mb-4">An innovative web application that streamlines administrative processes.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">PHP</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">MySQL</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md card-hover">
                <div class="h-48 bg-gradient-to-br from-green-400 to-blue-600 flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">Portfolio Site</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Portfolio Website</h3>
                    <p class="text-gray-600 mb-4">A responsive portfolio website showcasing technical skills and projects.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm">HTML</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">CSS</span>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">JavaScript</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('portfolio') }}" class="btn-primary">
                View All Projects
            </a>
        </div>
    </div>
</section>
@endsection
