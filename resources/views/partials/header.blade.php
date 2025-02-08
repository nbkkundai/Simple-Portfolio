<nav class="bg-pink-600 text-white p-4 shadow-lg fixed w-full top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Brand -->
        <div class="text-2xl font-extrabold flex items-center space-x-3 group">
            <span class="hover:text-pink-300 transition-colors duration-300">Devotion Kamoyo</span>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-8">
            <a href="#home" class="nav-link text-lg font-medium hover:text-pink-400 transition-all duration-300 border-b-2 border-transparent hover:border-pink-400">Home</a>
            <a href="#about" class="nav-link text-lg font-medium hover:text-pink-400 transition-all duration-300 border-b-2 border-transparent hover:border-pink-400">About</a>
            <a href="#experience" class="nav-link text-lg font-medium hover:text-pink-400 transition-all duration-300 border-b-2 border-transparent hover:border-pink-400">Experience</a>
            <a href="#contact" class="nav-link text-lg font-medium hover:text-pink-400 transition-all duration-300 border-b-2 border-transparent hover:border-pink-400">Contact</a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-2xl focus:outline-none hover:text-pink-400 transition-colors duration-300" onclick="toggleMenu()">
            <span class="material-icons">menu</span>
        </button>
    </div>
</nav>

<!-- Mobile Navigation Menu -->
<div id="mobile-menu" class="hidden md:hidden bg-gradient-to-b from-gray-800 to-gray-900 text-white p-6 w-full fixed top-16 left-0 shadow-lg rounded-b-lg z-10 transform transition-transform duration-300 ease-in-out">
    <a href="#home" class="block py-3 text-lg font-medium hover:text-pink-400 transition-colors duration-300 border-b border-gray-700" onclick="closeMenu()">Home</a>
    <a href="#about" class="block py-3 text-lg font-medium hover:text-pink-400 transition-colors duration-300 border-b border-gray-700" onclick="closeMenu()">About</a>
    <a href="#experience" class="block py-3 text-lg font-medium hover:text-pink-400 transition-colors duration-300 border-b border-gray-700" onclick="closeMenu()">Experience</a>
    <a href="#contact" class="block py-3 text-lg font-medium hover:text-pink-400 transition-colors duration-300" onclick="closeMenu()">Contact</a>
</div>

<script>
    function toggleMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    }

    function closeMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.add('hidden');
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const mobileMenu = document.getElementById('mobile-menu');
        const menuButton = document.querySelector('button');
        if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
