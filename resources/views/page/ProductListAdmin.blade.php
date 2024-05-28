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
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->nama_barang }}
                        </td>
                        <td class="px-6 py-4">{{ $item->tgl_date }}</td>
                        <td class="px-6 py-4">Rp. {{ number_format($item->harga_awal, 0, ',', '.') }}</td>
                        <td class="px-6 py-4">{{ $item->deskripsi }}</td>
                        <td class="px-6 py-4">{{ $item->status ?? 'tutup' }}</td>
                        <td class="px-6 py-4">
                            <button onclick="openForm('{{ $item->id_barang }}')"
                                class="bg-blue-500 p-2 rounded-lg text-white mr-2">Open Auction</button>
                            <form action="" method="post">
                                @csrf
                                <button type="submit" name="edit"
                                    class="bg-yellow-300 p-2 rounded-lg text-black">Edit</button>
                                |
                                <button type="submit" name="delete"
                                    class="bg-red-700 p-2 rounded-lg text-white">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="auctionForm" class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-8 rounded-lg">
            <h2 class="text-2xl font-bold mb-4">Auction Product</h2>
            <form action="{{ route('add.lelang')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="end_date" class="block text-sm font-medium text-gray-700">End Auction Date</label>
                    <input type="date" name="end_date" id="end_date" class="mt-1 p-2 border rounded-lg w-full">
                    <input type="hidden" name="id_barang" id="id_barang" value="">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Open For Auction</button>
            </form>
        </div>
    </div>

    <script>
        function openForm(idBarang) {
            document.getElementById('id_barang').value = idBarang;
            document.getElementById('auctionForm').classList.remove('hidden');
        }
    </script>


</body>

</html>
