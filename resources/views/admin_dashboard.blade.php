<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{config('app.name')}} - Admin Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="bg-slate-200 flex items-center justify-center w-screen h-screen">
  <nav class="flex absolute items-center justify-between w-screen md:px-[9%] px-5 top-0 left-0 bg-slate-100 shadow-lg py-4 border border-b border-slate-300">
    <p class="text-lg font-semibold">Welcome, {{ Auth::user()->name }} (Admin)</p>
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit" class="text-slate-700 text-lg font-semibold transition transition-300 hover:text-slate-900">Logout</button>
    </form>
  </nav>
  <h1>The candidates of the best fruit.</h1>
</body>
</html>