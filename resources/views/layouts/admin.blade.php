<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.3/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Sidebar + Content -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex flex-col">
            <div class="p-4 text-2xl font-bold border-b border-gray-700">
                Admin Panel
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="{{ route('portfolios.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700">📂 Portfolios</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-700">⚙️ Settings</a>
                <a href="{{url('admin/logout')}}" class="block px-3 py-2 rounded hover:bg-gray-700">Logout</a>
            </nav>
            {{-- <div class="p-4 border-t border-gray-700">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="w-full px-3 py-2 bg-red-600 hover:bg-red-700 rounded">Logout</button>
                </form>
            </div> --}}
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <!-- Topbar -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">@yield('page-title', 'Dashboard')</h1>
                <div class="text-gray-600">Welcome, {{ auth()->user()->name ?? 'Admin' }}</div>
            </header>

            <!-- Page Content -->
            <div class="p-6">
                @if(session('success'))
                    <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>

    </div>
</body>
</html>
