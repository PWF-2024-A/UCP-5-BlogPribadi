<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team Profiles</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
/* Styles for team.blade.php */
body {
    font-family: 'figtree', sans-serif;
    background-color: #f3f4f6; /* Light gray background */
    transition: background-color 0.3s, color 0.3s; /* Smooth transition */
}

        .navbar {
            top: 0;
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

        .dark-mode .btn-outline-secondary{
            color: white
        }

        .dropdown-toggle{
            background-color: transparent;
            color: #212529;
            border: none;
        }

        .dark-mode .dropdown-toggle{
            color: white;
        }

.container {
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    padding-top: 100px; /* Adjust top padding */
}

.card {
    background-color: #ffffff; /* White card background */
    border-radius: 5px;
    overflow: hidden;
    transition: transform 0.3s ease;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
}

.card:hover {
    transform: scale(1.05);
}

.card img {
    width: 100%;
    height: auto;
    margin-bottom: 15px;
    border-radius: 5px 5px 0 0; /* Rounded top corners for image */
}

.card .card-body {
    padding: 20px; /* Padding for card content */
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

/* Dark mode styles (based on your provided CSS) */
.dark-mode {
    background-color: #1a202c; /* Dark gray background */
    color: #ffffff; /* White text */
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
    background-color: #2d3748; /* Darker card background */
    color: #ffffff; /* White text */
}

.dark-mode .card p{
    color: white
}
.dark-mode .card h3{
    color: white
}

/* Adjustments for team.blade.php */
.card img {
    border-radius: 5px 5px 0 0; /* Rounded top corners for image */
    height: 250px; /* Adjust image height */
}

.card .card-body {
    padding: 20px; /* Padding for card content */
}

.card h3 {
    margin-top: 0;
    font-size: 1.5rem;
    font-weight: bold;
    color: #333333; /* Dark gray text */
}

.card p {
    color: #666666;
    line-height: 1.5;
}

/* Media queries for responsive design */
@media (max-width: 768px) {
    .container {
        padding-top: 80px; /* Adjust top padding for smaller screens */
    }
}

@media (max-width: 576px) {
    .container {
        padding-top: 60px; /* Adjust top padding for mobile screens */
    }
}

    </style>
</head>
<body class="antialiased">
    @include('components.navbar')

    <!-- Team Section -->
    <div class="container mt-5">
        <div class="grid">
            @foreach($team as $member)
            <div class="card">
                <img src="{{ asset($member['image']) }}" class="card-img-top" alt="{{ $member['name'] }}">
                <div class="card-body">
                    <h3 class="card-title">{{ $member['name'] }}</h3>
                    <p class="card-text">{{ $member['role'] }}</p>
                    <p class="card-text">{{ $member['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

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
