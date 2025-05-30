@extends('layouts.app')

@section('title', 'Skills - Jacob Bumacod Portfolio')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 py-16">
    <div class="max-w-6xl mx-auto px-4 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">My Skills</h1>
        <p class="text-xl opacity-90">A comprehensive overview of my technical and soft skills</p>
    </div>
</section>

<!-- Technical Skills -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Technical Skills</h2>
            <p class="text-lg text-gray-600">Programming languages, frameworks, and technologies I work with</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Programming Languages -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Programming Languages</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">HTML</span>
                    <span class="skill-tag">CSS</span>
                    <span class="skill-tag">SQL</span>
                    <span class="skill-tag">Python</span>
                </div>
            </div>
            
            <!-- Frameworks & Libraries -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-blue-600 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Frameworks & Libraries</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">Bootstrap</span>
                    <span class="skill-tag">jQuery</span>
                    <span class="skill-tag">Tailwind CSS</span>
                    <span class="skill-tag">Vue.js</span>
                </div>
            </div>
            
            <!-- Databases -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Databases</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">SQLite</span>
                    <span class="skill-tag">PostgreSQL</span>
                </div>
            </div>
            
            <!-- Tools & Software -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-red-600 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Tools & Software</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">VS Code</span>
                    <span class="skill-tag">XAMPP</span>
                    <span class="skill-tag">Composer</span>
                    <span class="skill-tag">NPM</span>
                </div>
            </div>
            
            <!-- Web Development -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Web Development</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag">Responsive Design</span>
                    <span class="skill-tag">RESTful APIs</span>
                    <span class="skill-tag">MVC Architecture</span>
                    <span class="skill-tag">CRUD Operations</span>
                </div>
            </div>
            
            <!-- Other Technologies -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-red-600 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Other Technologies</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag">JSON</span>
                    <span class="skill-tag">XML</span>
                    <span class="skill-tag">AJAX</span>
                    <span class="skill-tag">Linux</span>
                    <span class="skill-tag">Windows</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Soft Skills -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Soft Skills</h2>
            <p class="text-lg text-gray-600">Personal qualities and interpersonal skills that complement my technical abilities</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6 bg-white rounded-lg shadow-md card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Communication</h3>
                <p class="text-gray-600">
                    Excellent verbal and written communication skills. Able to explain complex technical concepts 
                    in simple terms and collaborate effectively with team members.
                </p>
            </div>
            
            <div class="text-center p-6 bg-white rounded-lg shadow-md card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Teamwork</h3>
                <p class="text-gray-600">
                    Strong collaborative skills and ability to work effectively in diverse teams. 
                    Experience in group projects and cross-functional collaboration.
                </p>
            </div>
            
            <div class="text-center p-6 bg-white rounded-lg shadow-md card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Problem Solving</h3>
                <p class="text-gray-600">
                    Analytical thinking and creative problem-solving abilities. Approach challenges methodically 
                    and find innovative solutions to complex problems.
                </p>
            </div>
            
            <div class="text-center p-6 bg-white rounded-lg shadow-md card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Time Management</h3>
                <p class="text-gray-600">
                    Excellent organizational skills and ability to manage multiple projects simultaneously. 
                    Consistently meet deadlines while maintaining high quality standards.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Skills Progress -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Skill Proficiency</h2>
            <p class="text-lg text-gray-600">My current level of expertise in key technologies</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div class="space-y-6">
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-lg font-semibold text-gray-800">PHP & Laravel</span>
                        <span class="text-gray-600">85%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 h-3 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-lg font-semibold text-gray-800">HTML & CSS</span>
                        <span class="text-gray-600">90%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-green-500 to-blue-600 h-3 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-lg font-semibold text-gray-800">JavaScript</span>
                        <span class="text-gray-600">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-yellow-500 to-orange-600 h-3 rounded-full" style="width: 75%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-lg font-semibold text-gray-800">MySQL</span>
                        <span class="text-gray-600">80%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-purple-500 to-pink-600 h-3 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
            </div>
            
            <div class="space-y-6">
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-lg font-semibold text-gray-800">Git & Version Control</span>
                        <span class="text-gray-600">70%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-3 rounded-full" style="width: 70%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-lg font-semibold text-gray-800">Bootstrap & Tailwind</span>
                        <span class="text-gray-600">85%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-pink-500 to-red-600 h-3 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-lg font-semibold text-gray-800">API Development</span>
                        <span class="text-gray-600">65%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-cyan-500 to-blue-600 h-3 rounded-full" style="width: 65%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-lg font-semibold text-gray-800">Project Management</span>
                        <span class="text-gray-600">80%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-emerald-500 to-teal-600 h-3 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Learning Goals -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Currently Learning</h2>
            <p class="text-lg text-gray-600">Technologies and skills I'm actively working to improve</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Vue.js & React</h3>
                <p class="text-gray-600">Expanding my frontend development skills with modern JavaScript frameworks.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">DevOps & Deployment</h3>
                <p class="text-gray-600">Learning about server management, deployment strategies, and CI/CD pipelines.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Mobile Development</h3>
                <p class="text-gray-600">Exploring mobile app development with React Native and Flutter.</p>
            </div>
        </div>
    </div>
</section>
@endsection
