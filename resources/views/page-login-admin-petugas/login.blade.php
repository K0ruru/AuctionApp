<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - admin</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        body{
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
    <p class="absolute top-3 right-2 font-poppins font-normal bg-black p-3 text-white rounded-md"><a href="/">Login as User</a></p>
	<div class="w flex flex-col justify-center items-center bg-gray-100 p-12 rounded-xl shadow-3xl" style="height:60vh;">
        <img src="{{ asset('images/Screenshot_20240507_205844-removebg-preview (1).png') }}" class="w-60 mb-5" />
        <p class="mb-10 font font-yellowtail text-3xl">Welcome back!</p>
       <form class="max-w-sm mx-auto">
        <div class="mb-5">
            <input type="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-medium font-poppins rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-96 p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username or email" style="background-color: #FEFDED;" required />
        </div>
        <div class="mb-5">
            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-medium rounded-xl font-poppins focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password" style="background-color: #FEFDED;" required />
        </div>
        <div class="mb-5">
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-poppins" style="background-color: #FEFDED;">
                <option>Level</option>
                <option>Admin</option>
                <option>Petugas</option>
            </select>
        </div>
        <button type="submit" class="flex justify-center text-white bg-zinc-950 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 p-2 text-center font-poppins dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-auto" style="width: 150px; margin-top: 20px;">Login</button>
        </form> 
        <p class="mt-24 font-poppins">don't have a account? <a href="/login-register/sign-up-officer" class="font-poppins text-blue-600">sign up here</a></p>
    </div>
    
</body>
</html>