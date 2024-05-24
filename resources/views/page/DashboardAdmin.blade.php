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
        <h1 class="text-center font-poppins text-3xl lg:text-7xl md:text-5xl font-bold mb-7">Utility Admin</h1>
            <div class=" h-auto flex mx-auto flex-wrap justify-center items-center sm:h-auto" style="gap:20px;">
                <div class="bg-white border w-80 border-gray-200 rounded-3xl shadow-3xl p-6 dark:bg-gray-800 dark:border-gray-700" style="border-radius: 20px;">
                        <img class="rounded-lg w-52 p-3 mt-4 mx-auto" src="{{ asset('images/database.gif') }}" alt="" />
                    <div class="p-5 flex justify-center rounded-md">
                        <button class="inline-flex mx-auto items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="/admin/admin-product">Add Product</a>
                        </button>
                    </div>
                </div>
                <div class="bg-white border w-80 border-gray-200 rounded-3xl shadow-3xl p-6 dark:bg-gray-800 dark:border-gray-700" style="border-radius: 20px;">
                        <img class="rounded-lg w-52 p-3 mt-4 mx-auto" src="{{ asset('images/checklist.gif') }}" alt="" />
                    <div class="p-5 flex justify-center rounded-md">
                        <a href="#" class="inline-flex mx-auto items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Generate Report
                        </a>
                    </div>
                </div> 
                <div class="bg-white border w-80 border-gray-200 rounded-3xl shadow-3xl p-6 dark:bg-gray-800 dark:border-gray-700" style="border-radius: 20px;">
                        <img class="rounded-lg w-52 p-3 mt-4 mx-auto" src="{{ asset('images/skills.gif') }}" alt="" />
                    <div class="p-5 flex justify-center rounded-md">
                        <a href="#" class="inline-flex mx-auto items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Add Workers
                        </a>
                    </div>
                </div> 
            </div>
        </div>
   
    <!-- popup form untuk tambah produk -->
    <div id="popup-form" class="hidden fixed top-0 left-0 w-full h-full bg-gray-500 bg-opacity-50">
        <div class="bg-white p-4 w-1/2 mx-auto mt-20 rounded-lg">
            <h2 class="text-lg font-bold mb-4">Add Product</h2>

            <!-- form open-->
            <form class="mb-5">
            <label for="product-name">Product Name</label>
            <input type="text" id="product-name" class="block w-full p-2 pl-10 text-sm rounded-lg text-gray-700" required>

            <label for="product-type">Product Type</label>
            <input type="text" id="product-type" class="block w-full p-2 pl-10 text-sm text-gray-700" required>

            <label for="description">Description</label>
            <textarea id="description" class="block w-full p-2 pl-10 text-sm rounded-lg text-gray-700" required></textarea>

            <label for="starting-price">Starting Price</label>
            <input type="range" min="100000" max="50000000" value="55" class="w-4/5 m-2 h-2 bg-gray-300 rounded-lg appearance-none cursor-pointer slider" id="myRange">
            <p class="text-xl font-medium mt-4">Value :<span id="demo" class="ml-2 font-bold"></span></p>

            <label for="starting-price" class="mt-10">Minimum bid</label>
            <input type="range" min="10000" max="50000000" value="55" class="w-4/5 m-2 h-2 bg-gray-300 rounded-lg appearance-none cursor-pointer slider" id="myRange">
            <p class="text-xl font-medium mt-4">Value :<span id="demo" class="ml-2 font-bold"></span></p>

            <label for="auction-duration" class="mt-10">Auction Duration</label>
            <input type="number" id="auction-duration" class="block w-full p-2 pl-10 text-sm rounded-lg mt-6 text-gray-700" required>

            <button class="bg-black hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-5" type="submit">Add Product</button>
            </form>
            <!-- form close-->

            <button id="close-btn" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded absolute top-0 right-0 mt-4 mr-4">Close</button>
        </div>
    </div>

<!-- ACCOUNTING JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>

<!-- SOURCE JS APP -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
        const sliders = document.getElementsByClassName("slider");


        for (let i = 0; i < sliders.length; i++) {
        const slider = sliders[i];
        const demo = slider.nextElementSibling.querySelector("span");

        const storedValue = localStorage.getItem(`sliderValue${i + 1}`);
        if (storedValue) {
            slider.value = storedValue;
            demo.innerHTML = accounting.formatMoney(slider.value, "Rp. ", 0);
        }

        slider.oninput = function() {
            demo.innerHTML = accounting.formatMoney(slider.value, "Rp. ", 0);
            localStorage.setItem(`sliderValue${i + 1}`, slider.value);
        }

        demo.innerHTML = accounting.formatMoney(slider.value, "Rp. ", 0);
        }
    </script>

</body>
</html>