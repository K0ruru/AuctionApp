<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add - Product</title>
    <!-- RESOURCES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Yellowtail&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Rampart+One&family=Yellowtail&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- NAVBAR -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="{{ asset('images/Screenshot_20240507_205844-removebg-preview (1).png') }}" class="h-8"
                alt="Flowbite Logo" />
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

    <p class="font-poppins text-center mb-5 font-semibold text-4xl mt-5">Add Product</p>

    <div class="flex w-3/4 mx-auto justify-center mt-10 flex-wrap sm:w-11/12 lg:gap-44">
        <form class="w-96 mt-40 lg:mt-60" action="{{ url('/addProduct') }}" method="POST">
            @csrf
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama_barang" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                        Barang</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="date" name="tgl_date" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal</label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="range-harga" class="font-poppins text-sm font-medium">Harga Awal</label>
                <input type="range" name="harga_awal" min="100000" max="5000000" value="55" step="10000"
                    class="w-4/5 m-2 h-2 bg-gray-400 rounded-lg border-gray-400 appearance-none cursor-pointer slider"
                    id="myRange">
                <p class="text-sm font-medium mt-4">Value :<span id="demo" class="ml-2 font-bold"></span></p>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="description" class="font-poppins text-sm font-medium">Deskripsi Barang</label>
                <textarea id="description" name="deskripsi" class="block w-full p-2 text-sm rounded-lg text-gray-700"
                    placeholder="Enter your description ..." required></textarea>
            </div>
            <button type="submit"
                class="text-white bg-black hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm lg:w-auto sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                style="width: 384px;">Submit</button>
        </form>
        <img src="{{ asset('images/Screenshot_20240508_194557 3.png') }}" class="h-auto sm:w-auto mt-40"
            style="width: 450px;" alt="">
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
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
