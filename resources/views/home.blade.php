<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthier Diets For All</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Nunito', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar .nav-link {
            font-weight: 700;
            color: #333;
            margin-right: 15px;
        }

        .navbar .nav-link:hover {
            color: #007BFF;
        }

        .navbar-brand img {
            height: 50px;
        }

        /* Hero Section */
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #e8efd4;
            padding: 80px 15px;
            position: relative;
        }

        .hero-text {
            max-width: 50%;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            color: #222;
            font-weight: 700;
        }

        .hero-text h1 span {
            color: #d32f2f;
        }

        .hero-text p {
            font-size: 1.2rem;
            margin-top: 15px;
            color: #555;
        }

        .hero-image {
            max-width: 45%;
            position: relative;
        }

        .hero-image img {
            border-radius: 10px;
            width: 100%;
            height: auto;
        }

        /* Overlay Drawings */
        .overlay-drawing {
            position: absolute;
            width: 100px;
        }

        .drawing-tomatoes {
            top: 30%;
            left: 5%;
        }

        .drawing-branch {
            bottom: 5%;
            right: 10%;
        }

        /* News Section */
        .news-section {
            background-color: #f9f9f9;
            padding: 50px 0;
        }

        .news-title {
            font-weight: bold;
            font-size: 1rem;
            color: #999;
        }

        .news-content {
            font-size: 1.2rem;
            color: #333;
        }

        .news-link {
            color: #007BFF;
            font-weight: bold;
            text-decoration: none;
        }

        .news-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="home">
                <img src="{{ asset('assets/images/attachment_58400982.jpg') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#impact">Impact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resources">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-text">
                <h1>Healthier Diets <br> <span>FOR ALL</span></h1>
                <p>
                    Building demand under the vision for adapted crops and soils.
                    Our mission is to create healthier solutions for all communities.
                </p>
                <a href="#news" class="mt-3 btn btn-primary">Read More</a>
            </div>
            {{-- <div class="hero-image">
                <img src="{{ asset('assets/images/Nutritional-Analysis-of-Food.jpg') }}" alt="Hero Girl">
                <img src="{{ asset('assets/images/shutterstock_590825882-scaled.jpg') }}" alt="Tomatoes Drawing">
                <img src="{{ asset('assets/images/dNutrition-hero-1.jpg') }}" alt="Branch Drawing">
            </div> --}}
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section" id="news">
        <div class="container">
            <p class="news-title">16 Jan 2025 Programme and project updates</p>
            <p class="news-content">
                Building Demand under the Vision for Adapted Crops and Soils
            </p>
            <a href="{{route('register')}}" class="news-link">lets get stared</a>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
