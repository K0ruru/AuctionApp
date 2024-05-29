<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    <!-- RESOURCES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&family=Rampart+One&display=swap"
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
        @foreach ($lelangs as $lelang)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 card"
                data-id="{{ $lelang->id }}" data-name="{{ $lelang->barang->nama_barang }}"
                data-starting-price="{{ $lelang->barang->harga_awal }}" data-end-time="{{ $lelang->tgl_lelang }}"
                data-aos="fade-up" data-aos-delay="600">
                <img class="rounded-t-lg w-72 mx-auto"
                    src="{{ asset('images/product-images/12608-removebg-preview.png') }}"
                    alt="{{ $lelang->barang->nama_barang }}" />
                <div class="p-5">
                    <!-- NAMA BARANG DAN HARGA BARANG -->
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $lelang->barang->nama_barang }} | Rp.
                        {{ number_format($lelang->harga_akhir, 0, ',', '.') }}
                    </h5>
                    <!-- DURASI PELELANGAN -->
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <span id="countdown-{{ $lelang->id }}"></span> <br> End Time
                    </p>
                    <!-- DESKRIPSI BARANG -->
                    <p class="font-poppins">{{ $lelang->barang->deskripsi }}</p>
                    <div class="flex flex-col items-center w-9/12 mx-auto mt-10">
                        <!-- BUTTON UNTUK BID -->
                        <button class="bidButton bg-black p-2 font-poppins text-white rounded-lg w-full"
                            data-id-lelang="{{ $lelang->id_lelang }}"
                            data-current-price="{{ $lelang->harga_akhir }}">Place
                            a bid</button>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <script>
        // Update the countdown for each auction item
        function updateCountdowns() {
            var auctions = document.querySelectorAll('.card');
            auctions.forEach(function(auction) {
                var endTime = new Date(auction.getAttribute('data-end-time'));
                var currentTime = new Date();
                var timeDifference = endTime - currentTime;

                var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                // Update the countdown element
                auction.querySelector('span').innerHTML = days + " : " + hours + " : " + minutes + " : " + seconds;
            });
        }

        // Call updateCountdowns initially
        updateCountdowns();

        // Update countdowns every second
        setInterval(updateCountdowns, 1000);
    </script>

    <!-- Place Your Bid Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Place Your Bid</h2>
            <form id="bidForm">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->guard('masyarakat')->id() }}">
                <input type="hidden" name="id_lelang" id="bidLelangId" value="">
                <input type="hidden" name="bid_amount" id="bidAmount" value="">
                <input type="range" id="bidRange" min="100000" max="10000000" step="10000">
                <div class="price-display">Rp. <span id="bidPrice">100000</span></div>
                <button type="button" id="submitBid"
                    class="bg-black p-2 font-poppins text-white rounded-lg w-full">Submit Bid</button>
            </form>
        </div>
    </div>

    <!-- ALERTS -->
    <div id="successAlert"
        class="hidden fixed top-0 inset-x-0 p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
        role="alert">
        <span class="font-medium">Success!</span> Your bid has been placed successfully.
    </div>

    <div id="errorAlert"
        class="hidden fixed top-0 inset-x-0 p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
        role="alert">
        <span class="font-medium">Error!</span> <span id="errorMessage"></span>
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


    <!-- javascript & source -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/anime.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modals.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById("myModal");
            var span = document.getElementsByClassName("close")[0];
            var bidForm = document.getElementById("bidForm");

            // Function to handle bid button click
            function handleBidButtonClick() {
                var idLelang = this.getAttribute('data-id-lelang');
                var currentPrice = parseInt(this.getAttribute('data-current-price'));

                // Set the hidden input value for id_lelang
                document.getElementById('bidLelangId').value = idLelang;
                var bidRange = document.getElementById('bidRange');

                // Set the minimum value of the range to currentPrice + 10000
                bidRange.min = currentPrice + 10000;
                bidRange.value = currentPrice + 10000;

                // Update the displayed bid price
                document.getElementById('bidPrice').innerText = bidRange.value;

                // Show the modal
                modal.style.display = "block";
            }

            // Add click event listeners to all bid buttons
            document.querySelectorAll('.bidButton').forEach(function(button) {
                button.addEventListener('click', handleBidButtonClick);
            });

            // Close the modal when the 'x' is clicked
            span.onclick = function() {
                modal.style.display = "none";
            };

            // Update the displayed bid price when the range input changes
            document.getElementById('bidRange').addEventListener('input', function() {
                document.getElementById('bidPrice').innerText = this.value;
            });

            // Handle the form submission via AJAX
            document.getElementById('submitBid').addEventListener('click', function() {
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                var lelangId = document.getElementById('bidLelangId').value;
                var bidAmount = document.getElementById('bidRange').value;

                var data = {
                    _token: csrfToken,
                    id_lelang: lelangId,
                    bid_amount: bidAmount
                };

                fetch('{{ route('place.bid') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok: ' + response.statusText);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            // Hide the modal after successful bid
                            modal.style.display = "none";
                            window.location.reload();
                            document.getElementById('successAlert').classList.remove('hidden');
                        } else {
                            document.getElementById('errorMessage').innerText = data.error ||
                                'Unknown error occurred';
                            document.getElementById('errorAlert').classList.remove('hidden');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        document.getElementById('errorMessage').innerText = error.message;
                        document.getElementById('errorAlert').classList.remove('hidden');
                    });
            });

            // Close the modal when clicking outside of it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
        });;
    </script>

</body>

</html>
