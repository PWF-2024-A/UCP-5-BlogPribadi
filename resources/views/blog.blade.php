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
            padding-top: 100px
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

        /* Dark mode */
        .dark-mode {
            background-color: #1a202c; /* Dark gray background */
            color: #ffffff; /* White text */
        }

        /* Selection color */
        ::selection {
            background-color: #f56565; /* Red selection background */
            color: #ffffff; /* White text */
        }

        hr {
            border: 2px solid;
        }


        .latest-post{
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

    </style>
</head>
<body class="antialiased bg-white dark:bg-slate-800" style="background-color: white;  ">

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
            <h1 class="text-center">Blog</h1>
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
        $(document).ready(function () {
            setTimeout(function() {
                $("#error-alert").alert('close');
            }, 2000);
        });
    </script>

    <script>
        // Initialize Bootstrap dropdown
        $('.dropdown-toggle').dropdown();
    </script>

<script>
    // Jalankan kode ketika nilai dropdown atau input pencarian berubah
    document.getElementById('category').addEventListener('change', function() {
        document.getElementById('filterForm').submit(); // Submit form secara otomatis
    });

    document.getElementById('search').addEventListener('change', function() {
        document.getElementById('filterForm').submit(); // Submit form secara otomatis
    });
</script>


</body>
</html>
