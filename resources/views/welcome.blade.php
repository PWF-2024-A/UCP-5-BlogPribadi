<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Base styles */
        body {
            font-family: 'figtree', sans-serif;
            background-color: #f3f4f6; /* Light gray background */
            transition: background-color 0.3s, color 0.3s; /* Smooth transition */
        }

        .rounded-circle {
            width: 30px;
            height: 30px;
            padding: 5px;
            border-radius: 50%;
            background-color: #6c757d; /* Sesuaikan dengan warna latar belakang atau tema */
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }

        .rounded-circle i {
            color: white; /* Sesuaikan dengan warna ikon */
        }

        .navbar {
            background-color: transparent; /* Transparent navbar */
            padding: 15px 20px;
            border-bottom: none; /* No border */
            transition: background-color 0.3s ease; /* Smooth transition */
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }


        .navbar.navbar-scrolled {
            background-color: #ffffff; /* White background on scroll */
            border-bottom: 1px solid #e3e3e3; /* Light gray border bottom */
        }

        .navbar-brand img {
            height: 40px; /* Adjust height as needed */
            vertical-align: middle; /* Align vertically */
        }

        .title-brand {
            font-size: 20px;
            color: #333333; /* Dark gray text */
        }

        .nav-link.active {
            color: #4B6BFB; /* Atur warna yang diinginkan untuk link aktif */
            font-weight: bold; /* Buat teks lebih tebal */
            text-decoration: underline;
        }

        .navbar-nav {
            flex-grow: 1; /* Take remaining space */
            display: flex;
            justify-content: center; /* Center align navbar links */
            align-items: center; /* Vertical alignment */
        }

        .navbar-nav .nav-link {
            padding: 0.5rem 1rem;
            color: #333333; /* Dark gray text */
        }

        .navbar-nav .nav-link:hover {
            color: #4B6BFB; /* Dark gray text on hover */
        }

        .navbar-right {
            margin-left: auto; /* Pushes buttons to the right */
            display: flex;
            align-items: center; /* Vertical alignment */
        }

        .navbar-right .btn {
            margin-left: 1rem;
        }

        .dropdown-toggle{
            background-color: transparent;
            color: #212529;
            border: none;
        }

        .dark-mode .dropdown-toggle{
            color: white;
        }

        .dropdown-item {
            padding: 0.75rem 1.5rem;
            color: #333;
            font-size: 14px;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: #f8f9fa;
            color: #4B6BFB;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .dropdown-menu::before {
            content: '';
            position: absolute;
            top: -5px;
            left: calc(50% - 5px);
            border-width: 0 5px 5px 5px;
            border-style: solid;
            border-color: transparent transparent white transparent;
        }
        .container {
            max-width: 899px;
            margin: 0 auto;
            padding: 20px;
            padding-top: 100px;
        }

        .card {
            background-color: #ffffff; /* White card background */
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .card .content {
            padding: 10px;
        }

        .card h3 {
            margin-top: 0;
            font-size: 1.25rem;
            font-weight: bold;
            color: #333333; /* Dark gray text */
        }

        .card p {
            color: #666666;
            line-height: 1.5;
        }

        .card .category {
            display: inline-block;
            background-color: #4b6bfb1a; /* Light gray background */
            color: #4B6BFB; /* Dark gray text */
            padding: 3px 8px;
            border-radius: 5px;
            font-size: 0.875rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .created-at {
            font-size: 0.875rem;
            color: #999999;
            margin-top: 10px;
        }

        /* Responsive grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        /* Centered text */
        .text-center {
            text-align: center;
        }

        /* Selection color */
        ::selection {
            background-color: #f56565; /* Red selection background */
            color: #ffffff; /* White text */
        }

        .jumbotron {
            position: relative;
            padding: 0;
            margin-bottom: 2rem;
            background-color: white;
            text-align: center;
            overflow: hidden;
            transition: transform 0.6s ease;
        }

        .jumbotron:hover {
            transform: scale(1.05);
        }

        .jumbotron img {
            width: 100%;
            height: 27rem;
            border-radius: 10px;
        }

        .jumbotron .overlay {
            transition: transform 0.3s ease;
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: white; /* Black overlay with opacity */
            padding: 15px;
            border-radius: 10px;
            text-align: left;
            color: black;
            max-width: 400px;
        }

        .jumbotron .overlay:hover {
            transform: scale(1.05);
        }

        .jumbotron .overlay h1 {
            font-size: 30px;
            font-weight: 500;
        }

        .jumbotron .overlay p {
            font-size: 1rem;
        }

        .jumbotron .overlay .category {
            display: inline-block;
            background-color: #4B6BFB; /* Light gray background */
            color: white; /* Dark gray text */
            padding: 3px 8px;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .latest-post {
            font-size: 23px;
            font-weight: bold;
        }

        .pagination {
            display: flex;
            justify-content: center;
        }

        .alert {
            padding: 20px;
            background-color: #f44336; /* Red */
            color: white;
            margin-bottom: 15px;
        }

        .alert-danger {
            background-color: #f44336; /* Red */
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        .tombol-post {
            padding: 10px;
            width: 20%;
            font-weight: 500;
            border: 2px solid #e3e3e3;
            transition: transform 0.3s ease;
        }

        .tombol-post:hover{
            transform: scale(1.05)
        }


        /* Dark mode styles */
        .dark-mode {
            background-color: #1a202c; /* Dark gray background */
            color: #ffffff; /* White text */
        }

        .dark-mode .navbar.navbar-scrolled {
            background-color: #1a202c;
            border-bottom: 1px solid #4a5568; /* Darker border bottom */
        }

        .dark-mode .card {
            background-color: #2d3748; /* Darker card background */
            color: #ffffff; /* White text */
        }

        .dark-mode .jumbotron {
            background-color: #2d3748; /* Darker jumbotron background */
        }

        .dark-mode .jumbotron .overlay {
            background: #4a5568; /* Darker overlay background */
        }

        .dark-mode .jumbotron .overlay .category {
            background-color: #718096; /* Darker category background */
        }

        .dark-mode .category {
            background-color: #4a5568; /* Darker category background */
        }

        .dark-mode .tombol-post {
            border: 2px solid #4a5568; /* Darker button border */
        }

        .navbar.navbar-scrolled.dark-mode {
            background-color: #2d3748; /* Darker background for dark mode */
            border-bottom: 1px solid #4a5568; /* Darker border bottom for dark mode */
        }

        .dark-mode .navbar {
    background-color: transparent; /* Darker background for dark mode */
    color: #ffffff; /* White text color */
}

        .dark-mode .navbar .navbar-brand {
            color: #ffffff; /* White text color for brand */
        }

        .dark-mode .navbar-brand img {
            filter: invert(1); /* Invert image colors */
        }

        .dark-mode .title-brand {
            color: #ffffff; /* White text */
        }

.dark-mode .navbar .nav-link {
    color: #ffffff; /* White text color for links */
}

.dark-mode .navbar .nav-link:hover {
    color: #cbd5e0; /* Lighter text color on hover */
}

.dark-mode .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.95)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.dark-mode .card h3,
.dark-mode .card p,
.dark-mode .tombol-post {
    color: #ffffff; /* White text color for card heading, paragraph, and button */
}

.dark-mode .jumbotron .overlay {
    color: #ffffff; /* White text color for jumbotron overlay */
}

.dark-mode .btn-outline-secondary {
    color: #ffffff; /* Teks warna putih */
    border-color: #ffffff; /* Warna border putih */
}

.dark-mode .btn-outline-secondary:hover {
    color: #212529; /* Teks warna hitam */
    background-color: #ffffff; /* Latar belakang putih */
}

    </style>
</head>
<body class="antialiased">
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @include('components.navbar')

        <div class="container">
            <!-- Jumbotron -->
            @if($todos->count() > 0)
                <div class="jumbotron">
                    <a href="{{ route('artikel.show', $todos[0]->id) }}">
                        @if ($todos[0]->image_path)
                            <img src="{{ $todos[0]->getImage() }}" alt="{{ $todos[0]->title }}">
                        @endif
                        <div class="overlay">
                            @if ($todos[0]->category)
                            <p class="category">{{ $todos[0]->category->title }}</p>
                        @endif
                            <h1>{{ $todos[0]->title }}</h1>
                            <p class="created-at">{{ $todos[0]->created_at->format('M d, Y') }}</p>
                        </div>
                    </a>
                </div>
            @endif
            <div class="latest-post"><p>Latest Post</p></div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
                @foreach ($todos->slice(0) as $todo)
                <div class="card">
                    <a href="{{ route('artikel.show', $todo->id) }}">
                        <div class="content">
                            @if ($todo->image_path)
                            <img src="{{ $todo->getImage() }}" alt="{{ $todo->title }}" class="w-full h-auto rounded-lg">
                            @endif
                            @if ($todo->category)
                            <p class="category">{{ $todo->category->title }}</p>
                            @endif
                            <h3 class="mb-2 text-lg font-semibold">{{ $todo->title }}</h3>
                            <p class="created-at">{{ $todo->created_at->format('M d, Y') }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
                <!-- See All Posts button -->
                <div class="mt-4 text-center">
                    <a href="{{ route('blog.index') }}" class="outline-btn btn tombol-post">See All Posts</a>
                </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Add scroll event listener to navbar
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 50) {
                $('#mainNavbar').addClass('navbar-scrolled');
            } else {
                $('#mainNavbar').removeClass('navbar-scrolled');
            }
        });

        // Dark mode toggle
        document.getElementById('darkModeToggle').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            if (document.body.classList.contains('dark-mode')) {
                this.innerHTML = '<i class="fas fa-sun"></i> Light Mode';
            } else {
                this.innerHTML = '<i class="fas fa-moon"></i> Dark Mode';
            }
        });

        $(document).ready(function () {
            setTimeout(function() {
                $("#error-alert").alert('close');
            }, 2000);
        });


        // Initialize Bootstrap dropdown
        $('.dropdown-toggle').dropdown();
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const darkModeToggle = document.getElementById('darkModeToggle');

        // Mengecek status mode pada localStorage saat halaman dimuat
        if (localStorage.getItem('mode') === 'dark') {
            enableDarkMode();
        }

        // Menambahkan event listener untuk toggle dark mode
        darkModeToggle.addEventListener('click', function() {
            if (localStorage.getItem('mode') !== 'dark') {
                enableDarkMode();
                localStorage.setItem('mode', 'dark'); // Menyimpan mode ke localStorage
            } else {
                disableDarkMode();
                localStorage.setItem('mode', 'light'); // Menyimpan mode ke localStorage
            }
        });

        // Fungsi untuk mengaktifkan dark mode
        function enableDarkMode() {
            document.body.classList.add('dark-mode'); // Menambahkan class dark-mode ke body
            darkModeToggle.innerHTML = '<i class="fas fa-sun"></i> Light Mode'; // Mengubah teks tombol
        }

        // Fungsi untuk menonaktifkan dark mode
        function disableDarkMode() {
            document.body.classList.remove('dark-mode'); // Menghapus class dark-mode dari body
            darkModeToggle.innerHTML = '<i class="fas fa-moon"></i> Dark Mode'; // Mengubah teks tombol
        }
    });
</script>

</body>
</html>
