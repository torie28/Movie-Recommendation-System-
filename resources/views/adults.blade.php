<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adults Nutrition and Healthy Tips</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Hero Section */
        .hero-section {
            background: url('assets/images/healthy-eating-ingredients-1296x728-header.jpg') no-repeat center center/cover;
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
            <h1 data-aos="fade-up">Adults Nutrition and Healthy Tips</h1>
            <p data-aos="fade-up" data-aos-delay="200">
                Unlock the secrets to maintaining a balanced diet and a healthier lifestyle for adults.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5 content-section">
        <div class="container">
            <div class="mb-5 row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="assets/images/Good_Food_Display_-_NCI_Visuals_Online.jpg" alt="Adults Healthy Living" class="rounded img-fluid">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h2>The Importance of Balanced Meals</h2>
                    <p>
                        As adults, maintaining a healthy diet is critical to reducing the risk of chronic diseases,
                        improving mental health, and sustaining energy levels throughout the day.
                    </p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 order-md-2" data-aos="fade-left">
                    <img src="assets/images/images (1).jpg" alt="Healthy Diet for Adults" class="rounded img-fluid">
                </div>
                <div class="col-md-6 order-md-1" data-aos="fade-right">
                    <h2>Healthy Tips for Adults</h2>
                    <p>
                        • Prioritize lean proteins, whole grains, and vegetables in your meals.<br>
                        • Limit sodium, sugar, and saturated fat intake.<br>
                        • Stay hydrated by drinking plenty of water.<br>
                        • Incorporate physical activity into your daily routine.<br>
                        • Practice mindful eating to prevent overeating.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; {{ date('Y') }} Nutrition and Health Tips for Adults. All Rights Reserved.</p>
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
