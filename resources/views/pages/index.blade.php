@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-gray-100">    
    <section id="home" class="h-screen relative flex flex-col justify-center items-center text-center px-4 overflow-hidden">
        <div class="max-w-6xl mx-auto relative">
            <div class="animate-fade-in-down">
                <div class="mb-12">
                    <div class="w-40 h-40 md:w-48 md:h-48 mx-auto rounded-full  border-4 border-pink-500 p-1 shadow-xl">
                        <img 
                            src="images/dee.jpg" 
                            alt="Devotion Kamoyo" 
                            class="w-full h-full object-cover rounded-full transform hover:scale-105 transition-transform duration-300"
                        >
                    </div>
                </div>
               
                <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-6 leading-tight">
                    Welcome to My Portfolio
                </h1>
                <h2 class="text-xl md:text-3xl font-semibold text-pink-600 mb-8">Devotion Kamoyo</h2>
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto mb-12">
                    A dedicated and customer-focused professional with experience in hospitality, 
                    customer service, and teamwork. Passionate about providing exceptional experiences 
                    and ensuring every guest feels valued.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                    <a href="#about" 
                       class="px-8 py-3 bg-pink-600 text-white rounded-lg font-semibold hover:bg-pink-700 transform hover:scale-105 transition-all duration-300">
                        Learn More
                    </a>
                    <a href="#contact" 
                       class="px-8 py-3 bg-white text-pink-600 rounded-lg font-semibold border-2 border-pink-600 hover:bg-pink-50 transform hover:scale-105 transition-all duration-300">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="min-h-screen  bg-gray-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">About Me</h2>
                <h3 class="text-2xl font-semibold text-gray-600 mb-8">Who Am I?</h3>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Personal Info Card -->
                <div class="bg-white rounded-lg shadow-lg p-8 transform hover:scale-105 transition-transform duration-300">
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4 mb-6">
                            <span class="p-2 bg-pink-100 rounded-full">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </span>
                            <h4 class="text-xl font-semibold text-gray-800">Personal Profile</h4>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            I'm Devotion Kamoyo, a highly adaptable and service-oriented individual 
                            with a background in hospitality and customer service. I excel in team 
                            collaboration, communication, and problem-solving, ensuring top-tier 
                            service standards.
                        </p>
                        
                        <div class="mt-8">
                            <div class="flex items-center space-x-4 mb-4">
                                <span class="p-2 bg-pink-100 rounded-full">
                                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                                    </svg>
                                </span>
                                <h4 class="text-xl font-semibold text-gray-800">Languages</h4>
                            </div>
                            <ul class="space-y-3">
                                <li class="flex items-center space-x-2 text-gray-600">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>English (Fluent)</span>
                                </li>
                                <li class="flex items-center space-x-2 text-gray-600">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>Afrikaans (Beginner)</span>
                                </li>
                                <li class="flex items-center space-x-2 text-gray-600">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>Shona (Native)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <!-- Skills Card -->
                <div class="bg-white rounded-lg shadow-lg p-8 transform hover:scale-105 transition-transform duration-300">
                    <div class="flex items-center space-x-4 mb-6">
                        <span class="p-2 bg-pink-100 rounded-full">
                            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </span>
                        <h4 class="text-xl font-semibold text-gray-800">Key Skills</h4>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Customer Service Excellence</span>
                        </li>
                        <li class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Strong Interpersonal & Communication Skills</span>
                        </li>
                        <li class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Teamwork & Adaptability</span>
                        </li>
                        <li class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Hospitality & Professionalism</span>
                        </li>
                        <li class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Time Management</span>
                        </li>
                        <li class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Cultural Awareness</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="min-h-screen  bg-gray-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Experience</h2>
                <p class="text-xl text-gray-600">My Professional Journey</p>
            </div>
    
            <div class="space-y-8">
                <!-- Kauai Position -->
                <div class="bg-white rounded-lg shadow-lg p-8 transform hover:scale-105 transition-transform duration-300">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4">
                        <h3 class="text-2xl font-bold text-gray-800">Kauai, Eden on the Bay</h3>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                            Aug 2023 - Present
                        </span>
                    </div>
                    <h4 class="text-xl text-pink-600 mb-4">Full-time Cashier</h4>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Provided friendly and professional service, handling transactions efficiently
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Maintained a welcoming environment for customers
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Ensured customer satisfaction with attention to detail
                        </li>
                    </ul>
                </div>
    
                <!-- Primi Position -->
                <div class="bg-white rounded-lg shadow-lg p-8 transform hover:scale-105 transition-transform duration-300">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4">
                        <h3 class="text-2xl font-bold text-gray-800">Primi Piatii Restaurant</h3>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            Jan 2023 - Aug 2023
                        </span>
                    </div>
                    <h4 class="text-xl text-pink-600 mb-4">Waitress & Food Runner</h4>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Greeted and served guests with a warm and positive attitude
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Delivered food and beverages efficiently in a fast-paced environment
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Resolved customer concerns to ensure guest satisfaction
                        </li>
                    </ul>
                </div>
    
                <!-- Tutor Position -->
                <div class="bg-white rounded-lg shadow-lg p-8 transform hover:scale-105 transition-transform duration-300">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4">
                        <h3 class="text-2xl font-bold text-gray-800">Tutor & Administrator</h3>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                            2021 - 2022
                        </span>
                    </div>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Provided tutoring for students across various subjects
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-pink-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Managed administrative tasks with organization and accuracy
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="min-h-screen bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Education</h2>
                <p class="text-xl text-gray-600">Academic Background</p>
            </div>
    
            <!-- Education Card -->
            <div class="bg-white rounded-lg shadow-lg p-8 transform hover:scale-105 transition-transform duration-300">
                <div class="flex items-start space-x-4">
                    <!-- School Icon -->
                    <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v7"/>
                        </svg>
                    </div>
    
                    <!-- Education Details -->
                    <div class="flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Bloubergrant High School</h3>
                        <p class="text-lg text-pink-600 mb-4">Matriculated in 2022</p>
                        
                        <!-- Subjects Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">English</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Mathematics</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Physical Sciences</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Life Sciences</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Geography</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Life Orientation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="contact" class="min-h-screen bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Get in Touch</h2>
                <p class="text-xl text-gray-600">Let's Connect</p>
            </div>
    
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Contact Information Card -->
                <div class="bg-white rounded-lg shadow-lg p-8 transform hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h3>
                    
                    <!-- Email -->
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Email</p>
                            <a href="mailto:devotionkamoyo@gmail.com" class="text-lg text-pink-600 hover:text-pink-800">
                                devotionkamoyo@gmail.com
                            </a>
                        </div>
                    </div>
    
                    <!-- Phone -->
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Phone</p>
                            <a href="tel:+27744830412" class="text-lg text-pink-600 hover:text-pink-800">
                                +2774 483 0412
                            </a>
                        </div>
                    </div>
    
                    <!-- Social Links -->
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">Connect with me</h4>
                        <div class="flex space-x-4">
                            <a href="https://www.linkedin.com/in/devotion-kamoyo-25b4a426b/" target="_blank" class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center text-pink-600 hover:bg-pink-200 transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                         
                        </div>
                    </div>
                </div>
    
                <!-- Contact Form Card -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Send a Message</h3>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-pink-600 text-white py-3 rounded-lg font-semibold hover:bg-pink-700 transform hover:scale-105 transition-all duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('styles')
<style>
@keyframes fade-in-down {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
.animate-fade-in-down {
    animation: fade-in-down 1s ease-out;
}
</style>

@endsection
