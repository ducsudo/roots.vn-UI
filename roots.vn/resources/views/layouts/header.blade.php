<header class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-xl font-bold">My Website</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white hover:underline">Home</a></li>
                <li><a href="#" class="text-white hover:underline">About</a></li>
                <li><a href="#" class="text-white hover:underline">Contact</a></li>
            </ul>
        </nav>
        <div class="space-x-2">
            <a 
                href="{{ route('auth.showLogin') }}" 
                class="bg-white text-blue-500 px-4 py-2 rounded-md font-bold hover:bg-gray-200"
            >
                Login
            </a>
            <a 
                href="{{ route('auth.showSignup') }}" 
                class="bg-blue-700 text-white px-4 py-2 rounded-md font-bold hover:bg-blue-600"
            >
                Sign Up
            </a>
        </div>
    </div>
</header>