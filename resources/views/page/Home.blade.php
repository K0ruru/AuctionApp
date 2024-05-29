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
                        <a href="#" id="inbox-popup"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            data-target="#inbox-modal">Inbox</a>
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

    <!-- MODAL INBOX -->
    <div id="inbox-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full md:h-auto right-0 mt-11 mr-auto left-auto md:left-1/2 lg:left-1/2">
        <div class="relative bg-gray-200 rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-between items-center p-5 rounded-t border-b border-gray-200 dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Yay! You Won the Auction!
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="inbox-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="p-6 space-y-6">
                <p class="text-gray-500 dark:text-gray-400">Congratulations! You have successfully won the auction for [nama barang].</p>
            </div>
        </div>
    </div>
</div>

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
    <section class="h-auto mb-5 flex justify-center mx-auto items-center gap-5 flex-wrap p-2 lg:w-auto sm:h-auto sm:mb-5 sm:p-10 lg:p-52" data-aos="fade-up" data-aos-delay="400">
        @foreach($lelangs as $lelang)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 card"
                data-id="{{ $lelang->id }}" data-name="{{ $lelang->barang->nama_barang }}" data-starting-price="{{ $lelang->barang->harga_awal }}"
                data-end-time="{{ $lelang->tgl_lelang }}" data-aos="fade-up" data-aos-delay="600">
                <img class="rounded-t-lg w-72 mx-auto" src="{{ asset('images/product-images/12608-removebg-preview.png') }}" alt="{{ $lelang->barang->nama_barang }}" />
                <div class="p-5">
                    <!-- NAMA BARANG DAN HARGA BARANG -->
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $lelang->barang->nama_barang }} | Rp. {{ number_format($lelang->barang->harga_awal, 0, ',', '.') }}</h5>

                    <!-- DURASI PELELANGAN -->
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <span id="countdown-{{ $lelang->id }}"></span> <br> End Time
                    </p>

                    <!-- DESKRIPSI BARANG -->
                    <p class="font-poppins">{{ $lelang->barang->deskripsi }}</p>
                    <div class="flex flex-col items-center w-9/12 mx-auto mt-10">
                        <!-- BUTTON UNTUK BID -->
                        <button class="bidButton bg-black p-2 font-poppins text-white rounded-lg w-full" data-id-lelang="{{ $lelang->id }}" data-current-price="{{ $lelang->harga_akhir }}">Place a bid</button>
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


<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Place Your Bid</h2>
        <!-- Hidden form to submit bid -->
        <form id="bidForm" action="{{ route('placeBid') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->guard('masyarakat')->id() }}">
            <input type="hidden" name="lelang_id" id="bidLelangId" value="">
            <input type="hidden" name="bid_amount" id="bidAmount" value="">
            <input type="range" id="bidRange" min="100000" max="10000000" step="10000">
            <div class="price-display">Rp. <span id="bidPrice">100000</span></div>
            <button type="submit" id="submitBid" class="bg-black p-2 font-poppins text-white rounded-lg w-full">Submit Bid</button>
        </form>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var modal = document.getElementById("myModal");
            var span = document.getElementsByClassName("close")[0];

            document.querySelectorAll('.bidButton').forEach(button => {
                button.addEventListener('click', function() {
                    var idLelang = this.getAttribute('data-id-lelang');
                    var currentPrice = parseInt(this.getAttribute('data-current-price'));

                    document.getElementById('bidLelangId').value = idLelang;
                    var bidRange = document.getElementById('bidRange');
                    bidRange.min = currentPrice + 10000;
                    bidRange.value = currentPrice + 10000;
                    document.getElementById('bidPrice').innerText = bidRange.value;

                    modal.style.display = "block";
                });
            });

            span.onclick = function() {
                modal.style.display = "none";
            }

            document.getElementById('bidRange').addEventListener('input', function() {
                document.getElementById('bidPrice').innerText = this.value;
            });

            document.getElementById('submitBid').addEventListener('click', function() {
                document.getElementById('bidAmount').value = document.getElementById('bidRange').value;
                document.getElementById('bidForm').submit();
                modal.style.display = "none";
            });

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>

    <script>
        // Add an event listener to the "Inbox" link in the navbar
document.getElementById("inbox-popup").addEventListener("click", () => {
  // Toggle the modal
  const modal = document.getElementById("inbox-modal");
  modal.classList.remove("hidden");
  modal.classList.add("flex");
});

// Add an event listener to the close button of the modal
document.querySelector("[data-modal-toggle='inbox-modal']").addEventListener("click", () => {
  // Toggle the modal
  const modal = document.getElementById("inbox-modal");
  modal.classList.add("hidden");
  modal.classList.remove("flex");
});

// Add an event listener to the "Close" button of the modal
document.querySelector(".modal-footer .close-button").addEventListener("click", () => {
  // Toggle the modal
  const modal = document.getElementById("inbox-modal");
  modal.classList.add("hidden");
  modal.classList.remove("flex");
});
    </script>

</body>

</html>
