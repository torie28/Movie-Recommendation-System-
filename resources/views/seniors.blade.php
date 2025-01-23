<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seniors Nutrition and Healthy Tips</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Hero Section */
        .hero-section {
            background: url('assets/images/shutterstock_1361709539.jpg') no-repeat center center/cover;
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
            <h1 data-aos="fade-up">Nutrition and Wellness for Seniors</h1>
            <p data-aos="fade-up" data-aos-delay="200">
                Promoting healthy aging through proper nutrition and lifestyle tips for seniors.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5 content-section">
        <div class="container">
            <div class="mb-5 row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="assets/images/6-Diseases-That-Proper-Nutrition-Prevents_379_40044310_0_14113110_728_gfycXep.jpg" alt="Healthy Living for Seniors" class="rounded img-fluid">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h2>Nutrition for Healthy Aging</h2>
                    <p>
                        As we age, maintaining a nutritious diet is key to boosting immunity, improving bone health,
                        and reducing the risk of chronic diseases. Proper nutrition can help seniors maintain their
                        independence and quality of life.
                    </p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 order-md-2" data-aos="fade-left">
                    <img src="assets/images/images (2).jpg" alt="Balanced Diet for Seniors" class="rounded img-fluid">
                </div>
                <div class="col-md-6 order-md-1" data-aos="fade-right">
                    <h2>Healthy Tips for Seniors</h2>
                    <p>
                        • Include calcium and vitamin D-rich foods to support bone health.<br>
                        • Eat fiber-rich foods like fruits, vegetables, and whole grains for better digestion.<br>
                        • Stay hydrated by drinking plenty of water.<br>
                        • Reduce sodium intake to manage blood pressure.<br>
                        • Engage in light physical activities like walking or yoga to stay active.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; {{ date('Y') }} Seniors Nutrition and Wellness. All Rights Reserved.</p>
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
