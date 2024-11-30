<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white p-4">
      <h1 class="text-3xl font-bold underline text-center">
        Welcome to HRM Page!
      </h1>
    </header>
    
    <main class="container mx-auto p-4">
      @yield('content')
    </main>
    
    <footer class="bg-gray-800 text-white p-4 text-center">
      <p>&copy; 2024 HRM Application. All rights reserved.</p>
    </footer>

    <!-- Include jQuery and DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    @yield('scripts')
  </body>
</html>