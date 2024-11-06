<!-- resources/views/partials/nav.blade.php -->
<nav class="bg-gray-100 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <a class="text-3xl font-bold" href="#">PROJECT</a>
        
        <div class="hidden md:flex w-full justify-center">
            <ul class="flex space-x-10 text-lg">
                <li class="nav-item">
                    <a class="text-gray-700 hover:text-gray-900" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="text-gray-700 hover:text-gray-900" href="{{route('profile.create')}}">Profiles</a>
                </li>
                <li class="nav-item">
                    <a class="text-gray-700 hover:text-gray-900" href="#">Sign up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
