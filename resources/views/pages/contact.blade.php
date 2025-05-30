@extends('layouts.app')

@section('title', 'Contact - Jacob Bumacod Portfolio')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-green-600 to-blue-600 py-16">
    <div class="max-w-6xl mx-auto px-4 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Me</h1>
        <p class="text-xl opacity-90">Let's connect and discuss your next project</p>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Send Me a Message</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Have a project in mind or just want to say hello? I'd love to hear from you. 
                    Fill out the form below and I'll get back to you as soon as possible.
                </p>
                
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    <div class="flex">
                        <svg class="w-5 h-5 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
                @endif
                
                @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <div class="flex">
                        <svg class="w-5 h-5 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">{{ old('message') }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary w-full text-center">
                        Send Message
                    </button>
                </form>
                
                @if(session('submitted_data'))
                <div class="mt-8 bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4">Your Message (Demo Display):</h3>
                    <div class="space-y-2 text-blue-700">
                        <p><strong>Name:</strong> {{ session('submitted_data')['name'] }}</p>
                        <p><strong>Email:</strong> {{ session('submitted_data')['email'] }}</p>
                        <p><strong>Subject:</strong> {{ session('submitted_data')['subject'] }}</p>
                        <p><strong>Message:</strong></p>
                        <p class="bg-blue-100 p-3 rounded">{{ session('submitted_data')['message'] }}</p>
                    </div>
                </div>
                @endif
            </div>
            
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Get In Touch</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Feel free to reach out through any of these channels. I'm always excited to discuss 
                    new opportunities and interesting projects.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Email</h3>
                            <p class="text-gray-600">bumacodjacob@gmail.com</p>
                            <a href="mailto:bumacodjacob@gmail.com" class="text-purple-600 hover:text-purple-800 font-medium">
                                Send an email →
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Phone</h3>
                            <p class="text-gray-600">09664360539</p>
                            <a href="tel:09664360539" class="text-purple-600 hover:text-purple-800 font-medium">
                                Give me a call →
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Social Media</h3>
                            <p class="text-gray-600">Jomar Jacob</p>
                            <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">
                                Connect on Facebook →
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Response Time -->
                <div class="mt-8 bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Response Time</h3>
                    <p class="text-gray-600 mb-4">
                        I typically respond to messages within 24 hours. For urgent matters, 
                        please feel free to call me directly.
                    </p>
                    <div class="flex items-center text-green-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Usually responds within 24 hours
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Information -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Let's Collaborate</h2>
            <p class="text-lg text-gray-600">I'm available for various types of projects and collaborations</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Freelance Projects</h3>
                <p class="text-gray-600">
                    Available for web development projects, both small and large scale applications.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Internship Opportunities</h3>
                <p class="text-gray-600">
                    Looking for internship opportunities to gain real-world experience and contribute to meaningful projects.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Collaboration</h3>
                <p class="text-gray-600">
                    Open to collaborating with other developers on interesting projects and learning opportunities.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Location & Availability -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Current Status</h2>
        <div class="bg-gray-50 p-8 rounded-lg">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Location</h3>
                    <p class="text-gray-600 mb-4">
                        Based in Alaminos, Pangasinan, Philippines
                    </p>
                    <p class="text-sm text-gray-500">
                        Currently studying at PSU Alaminos Campus
                    </p>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Availability</h3>
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-green-600 font-medium">Available for projects</span>
                    </div>
                    <p class="text-sm text-gray-500">
                        Open to remote work and flexible scheduling
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
