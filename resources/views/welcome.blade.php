<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Yellowtail&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            display: flex;
            height: 100vh;
            width: 100%;
            align-items: center;
            justify-content: center;
            background-color: #E8E8E8;
        }
    </style>
</head>

<body>
    <p class="absolute top-3 right-2 font-poppins font-normal bg-black p-3 text-white rounded-md"><a
            href="/login-register/login">Login as Admin</a></p>
    <div class="w-auto flex flex-col justify-center items-center bg-gray-100 p-12 rounded-xl shadow-3xl"
        style="height:auto;">
        <img src="{{ asset('images/Screenshot_20240507_205844-removebg-preview (1).png') }}" class="w-60 mb-5" />
        <p class="mb-10 font font-yellowtail text-3xl">Welcome back!</p>
        @if ($errors->any())
            <div class="mb-4">
                <ul class="list-disc list-inside text-red-600">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="max-w-sm mx-auto h-auto" action="{{ url('/login-register/login-masyarakat') }}" method="POST">
            @csrf
            <div class="mb-5">
                <input type="text" name="username" id="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-medium font-poppins rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-96 p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Username or email" style="background-color: #FEFDED;" required />
            </div>
            <div class="mb-5">
                <input type="password" name="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-medium rounded-xl font-poppins focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Password" style="background-color: #FEFDED;" required />
            </div>
            <button type="submit"
                class="flex justify-center text-white bg-zinc-950 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 p-2 text-center font-poppins dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-auto"
                style="width: 150px; margin-top: 20px;">Login</button>
        </form>
        <p class="mt-24 font-poppins">Don't have an account? <a href="/login-register/sign-up"
                class="font-poppins text-blue-600">Sign up here</a></p>
    </div>
</body>

</html>
