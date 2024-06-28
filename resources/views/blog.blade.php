<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <title>Laravel Blog</title>

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
            transition: background-color 0.3s ease; /* Transisi warna latar belakang */
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

        .dropdown-toggle{
            background-color: transparent;
            color: #212529;
            border: none;
        }

        .dark-mode .dropdown-toggle{
            color: white;
        }

        .nav-link.active {
            color: #4B6BFB;
            font-weight: bold;
            text-decoration: underline;
        }
        .navbar {
            background-color: transparent; /* Transparent navbar */
            padding: 15px 20px;
            border-bottom: none; /* No border */
            transition: background-color 0.3s ease; /* Transisi warna latar belakang */
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .navbar.navbar-scrolled {
            background-color: #ffffff; /* White background on scroll */
            border-bottom: 1px solid #e3e3e3; /* Light gray border bottom */
        }

        .navbar-brand img {
            height: 40px; /* Adjust height as needed */
            vertical-align: middle; /* Align vertically */
            transition: filter 0.3s ease; /* Transisi filter untuk gambar logo */
        }

        .title-brand {
            font-size: 20px;
            color: #333333; /* Dark gray text */
            transition: color 0.3s ease; /* Transisi warna teks */
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
            transition: color 0.3s ease; /* Transisi warna teks */
        }

        .navbar-nav .nav-link:hover {
            color: #4B6BFB;
        }

        .navbar-right {
            margin-left: auto; /* Pushes buttons to the right */
            display: flex;
            align-items: center; /* Vertical alignment */
        }

        .navbar-right .btn {
            margin-left: 1rem;
            transition: color 0.3s ease; /* Transisi warna teks pada tombol */
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 5px;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
            padding-top: 100px;
            transition: background-color 0.3s ease; /* Transisi warna latar belakang */
        }

        .card {
            background-color: #ffffff; /* White card background */
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease; /* Transisi untuk transform, warna latar belakang, dan warna teks */
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
            transition: color 0.3s ease; /* Transisi warna teks */
        }

        .card p {
            color: #666666;
            line-height: 1.5;
            transition: color 0.3s ease; /* Transisi warna teks */
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

        /* Dark mode */
        .dark-mode {
            background-color: #1a202c; /* Dark gray background */
            color: #ffffff; /* White text */
        }

        .dark-mode body {
            background-color: #1a202c; /* Dark gray background */
        }

        .dark-mode .navbar {
            background-color: transparent; /* Transparent navbar */
            border-bottom: none; /* No border */
        }

        .dark-mode .navbar.navbar-scrolled {
            background-color: #1a202c; /* Dark background on scroll */
            border-bottom: 1px solid #2b3649; /* Dark gray border bottom */
        }

        .dark-mode .navbar-brand img {
            filter: invert(1); /* Invert image colors */
        }

        .dark-mode .title-brand {
            color: #ffffff; /* White text */
        }

        .dark-mode .navbar-nav .nav-link {
            color: #ffffff; /* White text */
        }

        .dark-mode .navbar-nav .nav-link:hover {
            color: #6c757d; /* Light gray text on hover */
        }

        .dark-mode .card {
            background-color: #2b3649; /* Dark card background */
            color: #ffffff; /* White text */
        }

        .dark-mode .card h3,
        .dark-mode .card .category,
        .dark-mode .card .created-at {
            color: #ffffff; /* White text */
        }

        /* Selection color */
        .dark-mode ::selection {
            background-color: #f56565; /* Red selection background */
            color: #ffffff; /* White text */
        }

        .dark-mode .btn-outline-secondary{
            color: white
        }

        hr {
            border: 2px solid;
            transition: border-color 0.3s ease; /* Transisi warna garis */
        }

        .latest-post {
            font-size: 23px;
            font-weight: bold;
            transition: color 0.3s ease; /* Transisi warna teks */
        }

        .pagination {
            display: flex;
            justify-content: center;
            transition: color 0.3s ease; /* Transisi warna teks */
        }

        .alert {
            padding: 20px;
            background-color: #f44336; /* Red */
            color: white;
            margin-bottom: 15px;
            transition: background-color 0.3s ease, color 0.3s ease; /* Transisi untuk warna latar belakang dan teks */
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
            transition: color 0.3s ease; /* Transisi warna teks */
        }

        .closebtn:hover {
            color: black;
        }

    </style>
</head>
<body class="antialiased">

@include('components.navbar')

<div class="container">
    <h1 class="text-center latest-post">Blog</h1>

    <form action="{{ route('blog.index') }}" method="GET" id="filterForm" class="mb-4">
        <div class="form-row">
            <div class="form-group col-md-6">
                <select name="category" id="category" class="form-control">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="search" id="search" class="form-control" value="{{ request('search') }}" placeholder="Search...">
            </div>
        </div>
    </form>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
        @foreach ($todos as $todo)
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

    <!-- Pagination links -->
    <div class="mt-4 pagination">
        {{ $todos->links('pagination::bootstrap-4') }}
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
</script>

<script>
    // Close alert after 2 seconds
    $(document).ready(function () {
        setTimeout(function() {
            $(".alert").alert('close');
        }, 2000);
    });
</script>

<script>
    // Initialize Bootstrap dropdown
    $('.dropdown-toggle').dropdown();
</script>

<script>
    // Submit filter form on change
    document.getElementById('category').addEventListener('change', function() {
        document.getElementById('filterForm').submit();
    });

    document.getElementById('search').addEventListener('change', function() {
        document.getElementById('filterForm').submit();
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

        // Cek status mode pada localStorage saat halaman dimuat
        if (localStorage.getItem('mode') === 'dark') {
            enableDarkMode(); // Aktifkan dark mode tanpa transisi saat halaman dimuat
        }

        // Event listener untuk toggle dark mode
        darkModeToggle.addEventListener('click', function() {
            if (localStorage.getItem('mode') !== 'dark') {
                enableDarkMode(true); // Memiliki transisi saat diaktifkan
                localStorage.setItem('mode', 'dark'); // Simpan mode ke localStorage
            } else {
                disableDarkMode(true); // Memiliki transisi saat dinonaktifkan
                localStorage.setItem('mode', 'light'); // Simpan mode ke localStorage
            }
        });

        // Fungsi untuk mengaktifkan dark mode
        function enableDarkMode(withTransition = false) {
            if (withTransition) {
                document.body.classList.add('transition'); // Tambah class untuk transisi
                setTimeout(() => {
                    document.body.classList.add('dark-mode'); // Aktifkan dark mode setelah timeout
                }, 300); // Delay untuk memungkinkan transisi CSS
            } else {
                document.body.classList.add('dark-mode'); // Aktifkan dark mode tanpa transisi
            }
            darkModeToggle.innerHTML = '<i class="fas fa-sun"></i> Light Mode'; // Ubah teks tombol
        }

        // Fungsi untuk menonaktifkan dark mode
        function disableDarkMode(withTransition = false) {
            if (withTransition) {
                document.body.classList.add('transition'); // Tambah class untuk transisi
                setTimeout(() => {
                    document.body.classList.remove('dark-mode'); // Nonaktifkan dark mode setelah timeout
                }, 300); // Delay untuk memungkinkan transisi CSS
            } else {
                document.body.classList.remove('dark-mode'); // Nonaktifkan dark mode tanpa transisi
            }
            darkModeToggle.innerHTML = '<i class="fas fa-moon"></i> Dark Mode'; // Ubah teks tombol
        }

        // Event listener untuk menghapus class transisi setelah transisi selesai
        document.body.addEventListener('transitionend', function(event) {
            if (event.propertyName === 'background-color' || event.propertyName === 'color') {
                document.body.classList.remove('transition');
            }
        });
    });
</script>



</body>
</html>
