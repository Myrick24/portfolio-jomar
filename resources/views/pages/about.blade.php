@extends('layouts.app')

@section('title', 'About Me - Jacob Bumacod Portfolio')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-purple-600 to-blue-600 py-16">
    <div class="max-w-6xl mx-auto px-4 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About Me</h1>
        <p class="text-xl opacity-90">Get to know more about my background and journey</p>
    </div>
</section>

<!-- About Content -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Hello, I'm Jacob Bumacod</h2>
                <p class="text-lg text-gray-600 mb-6">
                    I am a passionate and dedicated student currently pursuing my studies at Pangasinan State University (PSU) Alaminos Campus. 
                    My journey in technology and development started with curiosity and has grown into a deep passion for creating 
                    innovative solutions that can make a positive impact.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    Throughout my academic journey, I have developed a strong foundation in web development, programming, and project management. 
                    I believe that technology should be accessible and should solve real-world problems.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    My philosophy is simple: <em>"The World Isn't always fair, but that's what makes it worth fighting for."</em> 
                    This drives me to persist through challenges and continue learning and growing.
                </p>
            </div>
            <div class="text-center">
                <div class="w-64 h-64 mx-auto rounded-full overflow-hidden shadow-xl profile-image-container">
                    <img src="{{ asset('images/image.png') }}" alt="Jacob Bumacod" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Education</h2>
            <p class="text-lg text-gray-600">My educational journey and achievements</p>
        </div>
        
        <div class="space-y-8">
            <div class="bg-white p-8 rounded-lg shadow-md card-hover">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Pangasinan State University (PSU) Alaminos Campus</h3>
                        <p class="text-purple-600 font-medium mb-2">Current Institution</p>
                        <p class="text-gray-600">
                            Currently pursuing my degree in Computer Science/Information Technology. Gaining comprehensive knowledge 
                            in programming, software development, and emerging technologies.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md card-hover">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Alos National High School</h3>
                        <p class="text-green-600 font-medium mb-2">Secondary Education</p>
                        <p class="text-gray-600">
                            Completed my secondary education with a focus on academics and extracurricular activities. 
                            Developed foundational skills in mathematics, science, and critical thinking.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md card-hover">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-red-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M10 3v4h4V3M6 3h12l-1 7H7L6 3z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Maawi Elementary School</h3>
                        <p class="text-orange-600 font-medium mb-2">Primary Education</p>
                        <p class="text-gray-600">
                            Started my educational journey here, where I developed a love for learning and discovered 
                            my interests in technology and problem-solving.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Personal Interests & Hobbies -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Personal Interests & Hobbies</h2>
            <p class="text-lg text-gray-600">What I enjoy doing in my free time</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6 bg-gray-50 rounded-lg card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Programming</h3>
                <p class="text-gray-600">I love exploring new programming languages and frameworks, building personal projects, and solving coding challenges.</p>
            </div>
            
            <div class="text-center p-6 bg-gray-50 rounded-lg card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Learning</h3>
                <p class="text-gray-600">Continuous learning is my passion. I enjoy reading tech blogs, taking online courses, and staying updated with technology trends.</p>
            </div>
            
            <div class="text-center p-6 bg-gray-50 rounded-lg card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Collaboration</h3>
                <p class="text-gray-600">I enjoy working with others, participating in group projects, and contributing to open-source communities.</p>
            </div>
        </div>
    </div>
</section>

<!-- Goals & Aspirations -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Goals & Aspirations</h2>
            <p class="text-lg text-gray-600">What drives me forward</p>
        </div>
        
        <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Short-term Goals</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Complete my degree with excellent grades
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Master modern web development frameworks
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Build a strong portfolio of projects
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Gain practical experience through internships
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Long-term Vision</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Become a full-stack developer
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Lead innovative software projects
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Contribute to open-source communities
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Make a positive impact through technology
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
