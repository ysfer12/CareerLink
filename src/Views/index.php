<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReKroot - Recruitment Agency</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-shape {
            position: absolute;
            top: 0;
            right: 0;
            width: 45%;
            height: 100%;
            background-color: rgb(99 102 241);
            clip-path: path('M0 0 L100 0 L100 100 L0 100 Q50 50 0 0');
            z-index: 0;
        }
        
        .search-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z' /%3E%3C/svg%3E");
            background-position: 16px center;
            background-repeat: no-repeat;
            background-size: 20px 20px;
        }
        
        .location-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z' /%3E%3C/svg%3E");
            background-position: 16px center;
            background-repeat: no-repeat;
            background-size: 20px 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="bg-white shadow-md fixed w-full z-50">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold text-blue-600">ReKroot</div>
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Jobs</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Candidates</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Employers</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">About</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="../Views/Auth/login.php" class="px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-600 hover:text-white">Sign In</a>
                    <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Post a Job</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="relative min-h-screen overflow-hidden bg-white">
        <!-- Background Shape -->
        <div class="hero-shape"></div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 py-20 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[calc(100vh-80px)]">
                
                <!-- Left Content -->
                <div class="space-y-12 lg:pr-12">
                    <!-- Heading -->
                    <div class="space-y-6">
                        <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                            Get your new<br>
                            <span class="text-indigo-600">dream job</span> today
                        </h1>
                        <p class="text-xl text-gray-600">25.478 Offers Worldwide</p>
                    </div>

                    <!-- Search Box -->
                    <div class="bg-white rounded-xl shadow-lg p-4 max-w-2xl">
                        <div class="flex flex-col md:flex-row gap-4">
                            <input 
                                type="text" 
                                placeholder="Keywords" 
                                class="search-icon w-full px-12 py-4 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            >
                            <input 
                                type="text" 
                                placeholder="Location" 
                                class="location-icon w-full px-12 py-4 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            >
                            <button class="w-full md:w-auto px-8 py-4 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors whitespace-nowrap">
                                Search
                            </button>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="space-y-6">
                        <p class="text-gray-500">Don't know where to start?</p>
                        <div class="flex flex-wrap gap-3">
                            <a href="#" class="px-6 py-2.5 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition-colors">
                                Sales
                            </a>
                            <a href="#" class="px-6 py-2.5 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition-colors">
                                Customer Service
                            </a>
                            <a href="#" class="px-6 py-2.5 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition-colors">
                                Accounting
                            </a>
                            <a href="#" class="px-6 py-2.5 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition-colors">
                                Entry Level
                            </a>
                            <a href="#" class="px-6 py-2.5 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition-colors">
                                Administrative Assistant
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="hidden lg:block relative">
                    <div class="relative w-full h-full">
                        <div class="w-[600px] h-[600px] relative">
                            <img 
                                src="../../public/assets/home_1_face-440x439.png" 
                                alt="Happy professional" 
                                class="w-full h-full object-cover rounded-[48px]"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Jobs Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Jobs</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Job Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow">
                    <h3 class="text-xl font-semibold mb-2">Senior Software Engineer</h3>
                    <p class="text-gray-600 mb-4">Tech Corp</p>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                        <span class="text-gray-600">San Francisco, CA</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-dollar-sign text-blue-600 mr-2"></i>
                        <span class="text-gray-600">$120k - $150k</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">
                            Full-time
                        </span>
                        <a href="#" class="text-blue-600 hover:text-blue-700">Apply Now →</a>
                    </div>
                </div>

                <!-- Job Card 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow">
                    <h3 class="text-xl font-semibold mb-2">Marketing Manager</h3>
                    <p class="text-gray-600 mb-4">Global Marketing</p>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                        <span class="text-gray-600">New York, NY</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-dollar-sign text-blue-600 mr-2"></i>
                        <span class="text-gray-600">$80k - $100k</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">
                            Full-time
                        </span>
                        <a href="#" class="text-blue-600 hover:text-blue-700">Apply Now →</a>
                    </div>
                </div>

                <!-- Job Card 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow">
                    <h3 class="text-xl font-semibold mb-2">UX Designer</h3>
                    <p class="text-gray-600 mb-4">Design Studio</p>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                        <span class="text-gray-600">Remote</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-dollar-sign text-blue-600 mr-2"></i>
                        <span class="text-gray-600">$90k - $120k</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">
                            Remote
                        </span>
                        <a href="#" class="text-blue-600 hover:text-blue-700">Apply Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">5000+</div>
                    <div class="text-gray-600">Job Postings</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">3000+</div>
                    <div class="text-gray-600">Companies</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">1M+</div>
                    <div class="text-gray-600">Candidates</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>
                    <div class="text-gray-600">Daily Placements</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">ReKroot</h3>
                    <p class="text-gray-400">
                        Connecting talented professionals with great opportunities worldwide.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">For Employers</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Post a Job</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Browse Candidates</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Pricing Plans</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 ReKroot. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js"></script>
</body>
</html>