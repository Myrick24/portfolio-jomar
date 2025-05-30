<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jacob Bumacod - Portfolio')</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.svg') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .skill-tag {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }
        
        .btn-secondary {
            background: white;
            color: #667eea;
            border: 2px solid #667eea;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
        }        span{
            color: #667eea;
            font-weight: 600;
            font-size:2rem;
        }
        
        /* Profile Image Styles */
        .profile-image-container {
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            border: 4px solid white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .profile-image-container:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.3);
        }
        
        /* Logo animation styles */
        .logo-container {
            display: inline-flex;
            overflow: hidden;
            position: relative;
        }
        
        .logo-letter {
            color: #667eea;
            font-weight: 600;
            font-size: 2rem;
        }
        
        .logo-hidden {
            max-width: 0;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            color: #667eea;
            font-weight: 600;
            font-size: 2rem;
            opacity: 0;
            transition: max-width 0.5s ease, opacity 0.3s ease;
        }
        
        .logo-container:hover .logo-hidden {
            max-width: 100px;
            opacity: 1;
        }
        .logo-hidden{
            color: black;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800 logo-container">
                        <span class="logo-letter">J</span><span class="logo-hidden">omar</span><span class="logo-letter">J</span><span class="logo-hidden">acob</span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-purple-600 font-medium {{ request()->routeIs('home') ? 'text-purple-600 border-b-2 border-purple-600' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-purple-600 font-medium {{ request()->routeIs('about') ? 'text-purple-600 border-b-2 border-purple-600' : '' }}">
                        About Me
                    </a>
                    <a href="{{ route('skills') }}" class="text-gray-700 hover:text-purple-600 font-medium {{ request()->routeIs('skills') ? 'text-purple-600 border-b-2 border-purple-600' : '' }}">
                        Skills
                    </a>
                    <a href="{{ route('portfolio') }}" class="text-gray-700 hover:text-purple-600 font-medium {{ request()->routeIs('portfolio') ? 'text-purple-600 border-b-2 border-purple-600' : '' }}">
                        Portfolio
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-purple-600 font-medium {{ request()->routeIs('contact') ? 'text-purple-600 border-b-2 border-purple-600' : '' }}">
                        Contact
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-purple-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile menu -->
            <div id="mobile-menu" class="md:hidden hidden pb-4">
                <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-purple-600 {{ request()->routeIs('home') ? 'text-purple-600' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="block py-2 text-gray-700 hover:text-purple-600 {{ request()->routeIs('about') ? 'text-purple-600' : '' }}">About Me</a>
                <a href="{{ route('skills') }}" class="block py-2 text-gray-700 hover:text-purple-600 {{ request()->routeIs('skills') ? 'text-purple-600' : '' }}">Skills</a>
                <a href="{{ route('portfolio') }}" class="block py-2 text-gray-700 hover:text-purple-600 {{ request()->routeIs('portfolio') ? 'text-purple-600' : '' }}">Portfolio</a>
                <a href="{{ route('contact') }}" class="block py-2 text-gray-700 hover:text-purple-600 {{ request()->routeIs('contact') ? 'text-purple-600' : '' }}">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <div class="mb-4">
                <h3 class="text-xl font-semibold mb-2">Jacob Bumacod</h3>
                <p class="text-gray-400">"The World Isn't always fair, but that's what makes it worth fighting for."</p>
            </div>
            
            <div class="flex justify-center space-x-6 mb-4">
                <a href="mailto:bumacodjacob@gmail.com" class="text-gray-400 hover:text-white">
                    <span class="sr-only">Email</span>
                    Email
                </a>
                <a href="tel:09664360539" class="text-gray-400 hover:text-white">
                    <span class="sr-only">Phone</span>
                    Phone
                </a>
                <a href="#" class="text-gray-400 hover:text-white">
                    <span class="sr-only">Facebook</span>
                    Facebook
                </a>
            </div>
            
            <div class="text-gray-400 text-sm">
                © {{ date('Y') }} Jacob Bumacod. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
