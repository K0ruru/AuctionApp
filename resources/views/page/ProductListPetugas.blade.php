<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">

        @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    <!-- NAVBAR -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="{{ asset('images/Screenshot_20240507_205844-removebg-preview (1).png') }}" class="h-8"
                alt="Logo" />
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="w-24 h-8 flex justify-center items-center bg-black text-white rounded p-10 md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:transition-all">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="font-poppins font-bold text-center text-2xl lg:text-5xl mt-9">Auction Product List</h1>

    <!-- LIST DATA UNTUK BARANG -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-8/12 mx-auto mt-32">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Product name</th>
                    <th scope="col" class="px-6 py-3">Created At</th>
                    <th scope="col" class="px-6 py-3">Starting Price</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Bananaphone 12</th>
                    <td class="px-6 py-4">20/02/2024</td>
                    <td class="px-6 py-4">Rp.100.000</td>
                    <td class="px-6 py-4">Handphone Flagship</td>
                    <td class="px-6 py-4">
                        <form action="" method="post">
                            @csrf
                            <button type="submit" name="edit"
                                class=" bg-yellow-300 p-2 rounded-lg text-black">Edit
                            </button>
                            |
                            <button type="submit" name="delete"
                                class=" bg-red-700 p-2 rounded-lg text-white">Delete
                            </button>
                            |
                            <button type="button" name="open" id="openButton"
                                class=" bg-green-700 p-2 rounded-lg text-white">Open
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- POPUP FORM OPEN LELANG -->
    <div id="popupForm" class="popup hidden">
        <div class="popup-content">
            <span class="close" id="closeButton">&times;</span>
            <form action="" class="flex flex-col justify-center text-center">
                <label for="endDate" class="font-poppins font-semibold">End Date</label>
                <input type="date" id="endDate" name="endDate" required class="rounded-lg mt-4">
                <button type="submit" class="bg-black p-2 rounded-lg mt-6 text-white">Submit</button>
            </form>
        </div>
    </div>

    <!-- form js -->
    <script src="{{ asset('js/popupformproduct.js') }}"></script>

</body>
</html>