@extends('layouts.app')

@section('title', 'Portfolio - Jacob Bumacod Portfolio')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-indigo-600 to-purple-600 py-16">
    <div class="max-w-6xl mx-auto px-4 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">My Portfolio</h1>
        <p class="text-xl opacity-90">Showcase of my projects and technical achievements</p>
    </div>
</section>

<!-- Projects Overview -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Featured Projects</h2>
            <p class="text-lg text-gray-600">A collection of real and conceptual projects that demonstrate my skills</p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12">
            @foreach($projects as $project)
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg card-hover">
                <!-- Project Image/Preview -->
                <div class="h-64 bg-gradient-to-br from-blue-400 to-purple-600 flex items-center justify-center relative">
                    <span class="text-white text-3xl font-bold">{{ $project['title'] }}</span>
                    <div class="absolute top-4 right-4">
                        <span class="bg-white bg-opacity-20 text-white px-3 py-1 rounded-full text-sm">Project {{ $project['id'] }}</span>
                    </div>
                </div>
                
                <!-- Project Details -->
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $project['title'] }}</h3>
                    <p class="text-gray-600 mb-6">{{ $project['description'] }}</p>
                    
                    <!-- Technologies Used -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Technologies Used:</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach($project['technologies'] as $tech)
                            <span class="px-3 py-1 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-full text-sm font-medium">
                                {{ $tech }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Project Features -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Key Features:</h4>
                        <ul class="space-y-2 text-gray-600">
                            @if($project['id'] == 1)
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                User-friendly administrative dashboard
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Secure authentication system
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Data management and reporting
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Responsive design for all devices
                            </li>
                            @else
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Modern and clean design
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Mobile-first responsive layout
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Interactive contact form
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Smooth animations and transitions
                            </li>
                            @endif
                        </ul>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="btn-primary text-center">
                            View Live Demo
                        </a>
                        <a href="#" class="btn-secondary text-center">
                            View Source Code
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Development Process -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">My Development Process</h2>
            <p class="text-lg text-gray-600">How I approach building software solutions</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-2xl font-bold">1</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Planning & Analysis</h3>
                <p class="text-gray-600">
                    Understanding requirements, analyzing user needs, and creating a comprehensive project plan.
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-2xl font-bold">2</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Design & Architecture</h3>
                <p class="text-gray-600">
                    Creating wireframes, designing the user interface, and establishing the technical architecture.
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-2xl font-bold">3</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Development & Testing</h3>
                <p class="text-gray-600">
                    Writing clean, maintainable code and conducting thorough testing to ensure quality.
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-yellow-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-2xl font-bold">4</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Deployment & Maintenance</h3>
                <p class="text-gray-600">
                    Launching the application and providing ongoing support and maintenance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Technologies I Work With -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Technologies I Work With</h2>
            <p class="text-lg text-gray-600">The tools and technologies that power my projects</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <!-- Technology Icons/Cards -->
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">PHP</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">PHP</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">L</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">Laravel</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">JS</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">JavaScript</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">HTML</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">HTML5</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">CSS</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">CSS3</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">SQL</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">MySQL</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">BS</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">Bootstrap</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-teal-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">TW</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">Tailwind</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">GIT</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">Git</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-blue-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">VS</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">VS Code</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">VUE</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">Vue.js</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg text-center card-hover">
                <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <span class="text-white font-bold">API</span>
                </div>
                <p class="text-gray-700 text-sm font-medium">REST API</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Interested in Working Together?</h2>
        <p class="text-lg text-gray-600 mb-8">
            I'm always open to discussing new opportunities and interesting projects. 
            Let's connect and see how we can create something amazing together!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-primary">
                Get In Touch
            </a>
            <a href="mailto:bumacodjacob@gmail.com" class="btn-secondary">
                Send Email
            </a>
        </div>
    </div>
</section>
@endsection
