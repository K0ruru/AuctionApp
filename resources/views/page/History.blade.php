<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
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
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- NAVBAR -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="{{ asset('images/Screenshot_20240507_205844-removebg-preview (1).png') }}" class="h-8"
                alt="Logo" />
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
                        <form method="POST" action="{{ route('logout.petugas') }}" class="inline">
                            @csrf
                            <button type="submit"
                                class="w-24 h-8 flex justify-center items-center bg-black text-white rounded p-10 md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:transition-all">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- HISTORY LELANG -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-8/12 mx-auto mt-32">
        <div class="flex bg-blue-900 w-auto mx-auto justify-between p-2">
            <h1 class="font-poppins font-bold text-white text-2xl lg:text-3xl">Auction History</h1>
            <button type="button" onclick="window.location='{{ route('download.auction.history.pdf') }}'"
                class="bg-green-700 p-2 rounded-lg text-white hover:bg-blue-500 transition-all">Download PDF</button>

        </div>

        <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">ID Lelang</th>
                    <th scope="col" class="px-6 py-3">Barang</th>
                    <th scope="col" class="px-6 py-3">Pemenang</th>
                    <th scope="col" class="px-6 py-3">No Telp</th>
                    <th scope="col" class="px-6 py-3">Harga Jual</th>
                    <th scope="col" class="px-6 py-3">Berakhir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lelangs as $index => $lelang)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $index + 1 }}
                        </th>
                        <td class="px-6 py-4">{{ $lelang->id_lelang }}</td>
                        <td class="px-6 py-4">{{ $lelang->barang->nama_barang }}</td>
                        <td class="px-6 py-4">{{ $lelang->user->nama_lengkap }}</td>
                        <td class="px-6 py-4">{{ $lelang->user->telp }}</td>
                        <td class="px-6 py-4">Rp. {{ number_format($lelang->harga_akhir, 2, ',', '.') }}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($lelang->tgl_lelang)->format('d M Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
