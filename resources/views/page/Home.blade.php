<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- RESOURCES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rampart+One&family=Yellowtail&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- navbar -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="{{ asset('images/Screenshot_20240507_205844-removebg-preview (1).png') }}" class="h-8"
                alt="Flowbite Logo" />
            </a>
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
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Account</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout.masyarakat') }}" class="inline">
                            @csrf
                            <button type="submit"
                                class="w-24 h-8 flex justify-center items-center bg-black text-white rounded p-10 md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:transition-all">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- jumbotron -->
    <section class="h-screen flex justify-center" data-aos="fade-up" data-aos-delay="400">
        <div class="flex justify-center flex-col">
            <h1 class="ml13 mb-2 text-center text-3xl md:text-5xl lg:text-6xl" style="font-family: 'Rampart One';">
                Welcome To Auctions!</h1>
            <p class="font-poppins text-xl mt-4 p-3 font-medium text-center md:text-2xl lg:text-5xl">Bid, Win, and
                Enjoy! Dive into the <br>world of online auctions today.</p>
        </div>
    </section>

    <h1 class="text-center font-poppins font-bold text-4xl md:text-5xl sm:mb-8 lg:text-7xl" data-aos="fade-up"
        data-aos-delay="500">New Auctions!</h1>

    <!-- section-product -->
    <section
        class="h-auto mb-5 flex justify-center mx-auto items-center gap-5 flex-wrap p-2 lg:w-auto sm:h-auto sm:mb-5 sm:p-10 lg:p-52"
        data-aos="fade-up" data-aos-delay="400">

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 card"
            data-id="1" data-name="Phone 3" data-starting-price="200000" data-aos="fade-up" data-aos-delay="600">
            <img class="rounded-t-lg w-72 mx-auto" src="{{ asset('images/product-images/12608-removebg-preview.png') }}"
                alt="" />
            <div class="p-5">
                <!-- NAMA BARANG DAN HARGA BARANG -->
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Phone 3 | Rp. 200.000
                </h5>

                <!-- DURASI PELELANGAN -->
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">2:02:30 <br> End Time</p>

                <!-- DESKRIPSI BARANG -->
                <p class="font-poppins">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, itaque.
                    Porro, fugit nobis ducimus omnis quis molestias nihil perspiciatis repudiandae corrupti eiu, id
                    obcaecati aut?</p>
                <div class="flex flex-col items-center w-9/12 mx-auto mt-10">
                    <!-- BUTTON UNTUK BID -->
                    <button class="bidButton bg-black p-2 font-poppins text-white rounded-lg w-full">Place a
                        bid</button>
                </div>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 card"
            data-id="1" data-name="Phone 3" data-starting-price="200000" data-aos="fade-up" data-aos-delay="600">
            <img class="rounded-t-lg w-72 mx-auto" src="{{ asset('images/product-images/12608-removebg-preview.png') }}"
                alt="" />
            <div class="p-5">
                <!-- NAMA BARANG DAN HARGA BARANG -->
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Phone 3 | Rp. 200.000
                </h5>

                <!-- DURASI PELELANGAN -->
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">2:02:30 <br> End Time</p>

                <!-- DESKRIPSI BARANG -->
                <p class="font-poppins">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, itaque.
                    Porro, fugit nobis ducimus omnis quis molestias nihil perspiciatis repudiandae corrupti eiu, id
                    obcaecati aut?</p>
                <div class="flex flex-col items-center w-9/12 mx-auto mt-10">
                    <!-- BUTTON UNTUK BID -->
                    <button class="bidButton bg-black p-2 font-poppins text-white rounded-lg w-full">Place a
                        bid</button>
                </div>
            </div>
        </div>
    </section>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Place Your Bid</h2>
            <input type="range" id="bidRange" min="100000" max="5000000" step="10000">
            <div class="price-display">Rp. <span id="bidPrice">100000</span></div>
            <button id="submitBid" class="bg-black p-2 font-poppins text-white rounded-lg w-full">Submit Bid</button>
        </div>
    </div>



    <section class="bg-center bg-no-repeat footer bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Choose, bid and win!</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Auction Place is your
                trusted platform for buying and selling unique items. We aim to make the auction process simple, secure,
                and enjoyable for everyone.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>


    <div>
        <div class="h-28 bg-stone-800 text-white font-bold font-poppins flex justify-between p-8 items-center">
            <p>Auction Inc.</p>
            <p>2024</p>
        </div>
    </div>

    <!-- ALERT -->
    <div id="successAlert"
        class="hidden fixed top-0 inset-x-0 p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
        role="alert">
        <span class="font-medium">Success!</span> Your bid has been placed successfully.
    </div>

    <!-- javascript & source -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/anime.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modals.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
