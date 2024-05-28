<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>
        <!-- RESOURCES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rampart+One&family=Yellowtail&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">

        @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <!-- NAVBAR -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="{{ asset('images/Screenshot_20240507_205844-removebg-preview (1).png') }}" class="h-8" alt="Flowbite Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
            <a href="#" class="w-24 h-8 flex justify-center items-center bg-black text-white rounded p-10 md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:transition-all">Logout</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- card-section -->
    <div class="flex items-center justify-center flex-col sm:h-auto lg:h-screen lg:overflow-hidden md:h-auto" style="padding:20px;">
        <h1 class="text-center font-poppins text-3xl lg:text-7xl md:text-5xl font-bold mb-7">Utility Officer</h1>
            <div class=" h-auto flex mx-auto flex-wrap justify-center items-center sm:h-auto" style="gap:20px;">
                <div class="bg-white border w-80 border-gray-200 rounded-3xl shadow-3xl p-6 dark:bg-gray-800 dark:border-gray-700" style="border-radius: 20px;">
                        <img class="rounded-lg w-52 p-3 mt-4 mx-auto" src="{{ asset('images/database.gif') }}" alt="" />
                    <div class="p-5 flex justify-center rounded-md">
                        <button class="inline-flex mx-auto items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="/officer/officer-product">Add Product</a>
                        </button>
                    </div>
                </div>
            <div class=" h-auto flex mx-auto flex-wrap justify-center items-center sm:h-auto" style="gap:20px;">
            <div class="bg-white border w-80 border-gray-200 rounded-3xl shadow-3xl p-6 dark:bg-gray-800 dark:border-gray-700"
                style="border-radius: 20px;">
                <img class="rounded-lg w-52 p-3 mt-4 mx-auto" src="{{ asset('images/box.gif') }}" alt="" />
                <div class="p-5 flex justify-center rounded-md">
                    <button
                        class="inline-flex mx-auto items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="/officer/officer-product-list">Product List</a>
                    </button>
                </div>
            </div>
                <div class="bg-white border w-80 border-gray-200 rounded-3xl shadow-3xl p-6 dark:bg-gray-800 dark:border-gray-700" style="border-radius: 20px;">
                        <img class="rounded-lg w-52 p-3 mt-4 mx-auto" src="{{ asset('images/checklist.gif') }}" alt="" />
                    <div class="p-5 flex justify-center rounded-md">
                        <a href="/admin/admin-report" class="inline-flex mx-auto items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Generate Report
                        </a>
                    </div>
                </div> 
            </div>
        </div>

</body>
</html>