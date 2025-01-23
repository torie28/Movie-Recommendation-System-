<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Nutrition and Healthy Tips</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Hero Section */
        .hero-section {
            background: url('assets/images/GettyImages-1429889779.webp') no-repeat center center/cover;
            height: 100vh;
            position: relative;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.5rem;
            line-height: 1.8;
        }

        /* Content Section */
        .content-section h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .content-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .content-section img {
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .content-section img:hover {
            transform: scale(1.05);
        }

        /* Footer */
        footer {
            background-color: #f8f9fa;
            color: #333;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    
    <!-- Hero Section -->
    <section class="text-center hero-section text-light d-flex align-items-center justify-content-center">
        <div class="container">
            <h1 data-aos="fade-up">Youth Nutrition and Healthy Tips</h1>
            <p data-aos="fade-up" data-aos-delay="200">
                Discover the keys to balanced meals, nutritious recipes, and a healthier lifestyle for a thriving future.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5 content-section">
        <div class="container">
            <div class="mb-5 row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="assets/images/images.jpg" alt="Nutrition for Youth" class="rounded img-fluid">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h2>The Importance of Proper Nutrition</h2>
                    <p>
                        A balanced diet is essential for the growth and development of young people. Incorporating
                        fresh fruits, vegetables, proteins, and whole grains in their meals helps enhance physical and
                        mental performance, boosts immunity, and lays the foundation for lifelong health.
                    </p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 order-md-2" data-aos="fade-left">
                    <img src="assets/images/bigstock-Health-food-selection-super-foods-fruits-veggies-thumb.jpg" alt="Healthy Meals" class="rounded img-fluid">
                </div>
                <div class="col-md-6 order-md-1" data-aos="fade-right">
                    <h2>Healthy Tips for Youth</h2>
                    <p>
                        • Start the day with a nutritious breakfast.<br>
                        • Stay hydrated throughout the day.<br>
                        • Limit sugary snacks and beverages.<br>
                        • Include a mix of proteins, carbs, and healthy fats in every meal.<br>
                        • Opt for whole, minimally processed foods whenever possible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; {{ date('Y') }} Nutrition and Health Tips. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init(); // Initialize animations
    </script>
</body>
</html>
