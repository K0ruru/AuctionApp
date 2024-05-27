<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="flex flex-col justify-center items-center bg-gray-100 p-12 rounded-xl shadow-3xl sm:w-auto"
        style="height:60vh; width:500px;">
        <img src="{{ asset('images/Screenshot_20240507_205844-removebg-preview (1).png') }}" class="w-60 mb-5" />
        <p class="mb-10 font font-yellowtail text-3xl">let's get started!</p>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="mb-4">
                <ul class="list-disc list-inside text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="max-w-sm mx-auto" action="{{ route('register.petugas') }}" method="POST">
            @csrf
            <div class="mb-5">
                <input type="text" name="nama_petugas" id="nama_petugas"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-medium font-poppins rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-96 p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Petugas" style="background-color: #FEFDED;" required
                    value="{{ old('nama_petugas') }}" />
            </div>
            <div class="mb-5">
                <input type="text" name="username" id="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-medium font-poppins rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-96 p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Username or email" style="background-color: #FEFDED;" required
                    value="{{ old('username') }}" />
            </div>
            <div class="mb-5">
                <input type="password" name="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-medium rounded-xl font-poppins focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Password" style="background-color: #FEFDED;" required />
            </div>
            <div class="mb-5">
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-medium rounded-xl font-poppins focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Confirm Password" style="background-color: #FEFDED;" required />
            </div>
            {{-- <div class="mb-5">
                <select name="id_level" id="id_level"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-poppins"
                    style="background-color: #FEFDED;" required>
                    <option value="">Select Level</option>
                    <option value="1" {{ old('id_level') == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ old('id_level') == 2 ? 'selected' : '' }}>Petugas</option>
                </select>
            </div> --}}
            <button type="submit"
                class="flex justify-center text-white bg-zinc-950 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 p-2 text-center font-poppins dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-auto"
                style="width: 150px; margin-top: 20px;">Sign-Up</button>
        </form>
        <p class="mt-24 font-poppins">already have a account? <a href="/login-register/login"
                class="font-poppins text-blue-600">login here</a></p>
    </div>
</body>

</html>
