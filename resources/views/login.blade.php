<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{config('app.name')}} - Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="bg-slate-200 flex items-center justify-center w-screen h-screen">
  <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4 items-center justify-center rounded-lg border border-slate-300 p-5 shadow-sm bg-slate-100 w-96">
    <h1 class="text-2xl font-semibold font-montserrat">Voting App - Login</h1>
    @csrf
    <div class="w-full">
      <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
      <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>
    <div class="w-full">
      <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
      <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>
    <div class="w-full flex justify-center">
      <a href="/register" class="text-slate-700 text-lg font-semibold transition transition-300 hover:text-slate-900">Register</a>
    </div>
    <div class="w-full">
      @error('name')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
      @error('password')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
    </div>
    <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">
      Login
    </button>
  </form>
</body>
</html>