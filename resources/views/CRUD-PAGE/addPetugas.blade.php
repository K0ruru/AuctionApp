<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Officer Data</title>

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
                            class="w-24 h-8 flex justify-center items-center bg-black text-white rounded p-10 md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:transition-all">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex w-8/12 justify-between mx-auto mt-7 items-center">
        <h1 class="font-poppins font-bold text-center text-2xl lg:text-3xl mt-9">Officer List</h1>
        <!-- BUTTON FOR POPUP FORM -->
        <button class="bg-black text-white font-poppins rounded-lg hover:bg-blue-700 transition-all"
            id="addOfficerButton" style="width: 100px; height:40px; padding:5px;">Add Officer</button>
    </div>

    <!-- LIST DATA UNTUK BARANG -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-8/12 mx-auto mt-32">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Petugas</th>
                    <th scope="col" class="px-6 py-3">Username</th>
                    <th scope="col" class="px-6 py-3">Password</th>
                    <th scope="col" class="px-6 py-3">ID Level</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($petugas as $officer)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $officer->nama_petugas }}
                        </th>
                        <td class="px-6 py-4">{{ $officer->username }}</td>
                        <td class="px-6 py-4">{{ $officer->password }}</td>
                        <td class="px-6 py-4">{{ $officer->id_level }}</td>
                        <td class="px-6 py-4">
                            <button type="button" class="bg-blue-700 p-2 rounded-lg text-white editButton"
                                data-id="{{ $officer->id_petugas }}" data-name="{{ $officer->nama_petugas }}"
                                data-username="{{ $officer->username }}" data-password="{{ $officer->password }}"
                                data-id_level="{{ $officer->id_level }}">Edit</button>
                            <form action="{{ route('delete.petugas', $officer->id_petugas) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-700 p-2 rounded-lg text-white">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Popup form -->
    <div id="popupForm" class="hidden fixed inset-0 bg-gray-800 flex bg-opacity-50 items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-1/3 relative">
            <span id="closeButton" class="absolute top-2 right-3 text-4xl text-gray-600 cursor-pointer">&times;</span>
            <h2 class="text-2xl font-bold mb-4">Add Officer</h2>
            <!-- FORM -->
            <form id="officerForm" action="{{ route('register.petugas') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama_petugas" class="block text-sm font-medium text-gray-700">Nama Petugas</label>
                    <input type="text" id="nama_petugas" name="nama_petugas"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                        Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="id_level" class="block text-sm font-medium text-gray-700">ID Level</label>
                    <select id="id_level" name="id_level"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                        <option value="1">Admin</option>
                        <option value="2">Petugas</option>
                    </select>
                </div>
                <button type="submit" class="bg-black text-white p-2 rounded-lg hover:bg-blue-700">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Popup form -->
    <div id="editPopupForm" class="hidden fixed inset-0 bg-gray-800 flex bg-opacity-50 items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-1/3 relative">
            <span id="editCloseButton"
                class="absolute top-2 right-3 text-4xl text-gray-600 cursor-pointer">&times;</span>
            <h2 class="text-2xl font-bold mb-4">Edit Officer</h2>
            <form id="editOfficerForm" action="" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="edit_nama_petugas" class="block text-sm font-medium text-gray-700">Nama
                        Petugas</label>
                    <input type="text" id="edit_nama_petugas" name="nama_petugas"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="edit_username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="edit_username" name="username"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="edit_password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="edit_password" name="password"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="edit_password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                        Password</label>
                    <input type="password" id="edit_password_confirmation" name="password_confirmation"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="edit_id_level" class="block text-sm font-medium text-gray-700">ID Level</label>
                    <select id="edit_id_level" name="id_level"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                        <option value="1">Admin</option>
                        <option value="2">Petugas</option>
                    </select>
                </div>
                <button type="submit" class="bg-black text-white p-2 rounded-lg hover:bg-blue-700">Update</button>
            </form>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addOfficerButton = document.getElementById('addOfficerButton');
            var popupForm = document.getElementById('popupForm');
            var closeButton = document.getElementById('closeButton');
            var editPopupForm = document.getElementById('editPopupForm');
            var editCloseButton = document.getElementById('editCloseButton');
            var editOfficerForm = document.getElementById('editOfficerForm');

            addOfficerButton.addEventListener('click', function() {
                popupForm.classList.remove('hidden');
            });

            closeButton.addEventListener('click', function() {
                popupForm.classList.add('hidden');
            });

            editCloseButton.addEventListener('click', function() {
                editPopupForm.classList.add('hidden');
            });

            window.addEventListener('click', function(event) {
                if (event.target == popupForm) {
                    popupForm.classList.add('hidden');
                }
                if (event.target == editPopupForm) {
                    editPopupForm.classList.add('hidden');
                }
            });

            var editButtons = document.querySelectorAll('.editButton');
            editButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    var name = this.getAttribute('data-name');
                    var username = this.getAttribute('data-username');
                    var password = this.getAttribute('data-password');
                    var idLevel = this.getAttribute('data-id_level');

                    document.getElementById('edit_nama_petugas').value = name;
                    document.getElementById('edit_username').value = username;
                    document.getElementById('edit_password').value = password;
                    document.getElementById('edit_password_confirmation').value = password;
                    document.getElementById('edit_id_level').value = idLevel;

                    editOfficerForm.setAttribute('action', '/admin/admin-data-officer/' + id);
                    editPopupForm.classList.remove('hidden');
                });
            });
        });
    </script>


</body>

</html>
