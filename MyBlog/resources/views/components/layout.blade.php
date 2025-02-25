<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 shadow-md">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap">Brand</span>
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100" aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5h14M3 10h14M3 15h14" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:flex md:w-auto" id="navbar-multi-level">
                <ul class="flex flex-col md:flex-row md:space-x-8">
                    <li><a href="#" class="block py-2 px-3 md:p-0">Home</a></li>
                    <li><a href="#" class="block py-2 px-3 md:p-0">About</a></li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="block py-2 px-3 md:p-0">Services</button>
                        <div id="dropdownNavbar" class="hidden bg-white text-base z-10 divide-y divide-gray-100 shadow-md w-44">
                            <ul class="py-1" aria-labelledby="dropdownNavbarLink">
                                <li><a href="#" class="block px-4 py-2">Service 1</a></li>
                                <li><a href="#" class="block px-4 py-2">Service 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" class="block py-2 px-3 md:p-0">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>now solved the tialwind css issue </h1>
</body>
</html>
