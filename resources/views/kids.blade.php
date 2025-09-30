<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Website - Kids</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #0b1c45;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 800"><path fill="%23ff9999" d="M0,320c0,0,210.8-213.9,431.1-213.9C651.4,106.1,876.1,320,1051.1,320c175,0,388.9-213.9,388.9-213.9V800H0V320z" opacity="0.3"/><path fill="%23fff" d="M0,320c0,0,181.1-140.7,351.1-140.7S701.4,320,871.4,320c170,0,388.6-140.7,388.6-140.7V800H0V320z" opacity="0.5"/><path fill="%23ff9999" d="M0,426.7c0,0,206.1-255,426.1-255S842.2,426.7,1052.2,426.7s387.8-255,387.8-255V800H0V426.7z" opacity="0.2"/><path fill="%23fff" d="M0,480c0,0,229.4-204,449.4-204s429.2,204,649.2,204c220,0,341.4-204,341.4-204V800H0V480z" opacity="0.4"/><path fill="%23ffcccc" d="M0,533.3c0,0,229.4-255,449.4-255s429.2,255,649.2,255c220,0,341.4-255,341.4-255V800H0V533.3z" opacity="0.1"/></svg>');
            background-repeat: no-repeat;
            background-position: top center;
            background-size: cover;
            color: white;
            font-family: 'Poppins', sans-serif;
            position: relative;
            z-index: 1;
            overflow-x: hidden;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, #0b1c45, #0f305e, #1c447b);
            opacity: 0.95;
            z-index: -1;
        }
        .navbar-brand {
            font-size: 2.5rem;
            font-weight: 700;
        }
        .navbar a {
            color: white !important;
            margin: 0 15px;
            font-weight: 500;
        }
        .hero {
            text-align: left;
            padding: 80px 50px;
            min-height: 80vh;
        }
        .hero h1 {
            font-size: 56px;
            font-weight: 700;
        }
        .hero p {
            max-width: 500px;
            margin: 20px 0;
            font-size: 1.1rem;
        }
        .btn-play {
            background: linear-gradient(90deg, #ff6a3d, #ffb347);
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 30px;
            color: white;
            display: inline-flex;
            align-items: center;
        }
        .btn-login {
            background: #ffc107;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            color: #000;
        }
        .spaceship {
            max-width: 500px;
            animation: float 4s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* Content cards */
        .content-cards-section {
            position: relative;
            padding: 100px 0 50px;
            text-align: center;
            background-color: #0b1c45;
            z-index: 2;
        }
        .content-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            margin: 15px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }
        .content-card:hover {
            transform: translateY(-10px);
        }

        /* About */
        .about-section { background: #0b1c45; padding: 80px 0; }
        .feature-box { background: #3a07d5ff; padding: 20px; border-radius: 12px; margin-bottom: 20px; text-align: center; }
        .feature-box i { font-size: 2rem; color: #ff6a3d; margin-bottom: 10px; }

        /* Courses */
        .courses-section { padding: 80px 0; }
        .course-card { background: #0b1c45; border-radius: 12px; padding: 20px; text-align: left; box-shadow: 0 3px 10px rgba(0,0,0,0.1); }
        .course-card img { border-radius: 12px; margin-bottom: 15px; }
        .course-card:hover { transform: translateY(-8px); transition: .3s; }
        .price { font-weight: bold; color: #ff6a3d; }

        /* FAQ */
        .faq-section {
            background: #fff;
            color: #000;
            padding: 80px 20px;
        }
        .faq-section h2 {
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
        }
        .accordion-button {
            font-weight: 500;
        }

        /* Experts */
        .experts-section {
            background: #f9f9f9;
            padding: 80px 20px;
            text-align: center;
            color: #000;
        }
        .experts-section h2 {
            font-weight: 700;
            margin-bottom: 40px;
        }
        .expert-card img {
            border-radius: 10px;
        }

        /* Footer */
        .footer {
            background: #0b1c45;
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3">Kids</a>
            <div class="ms-auto">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Pripotel</a>
                <a href="#">Buility</a>
                <a href="{{ route('admin.login') }}" class="btn-login ms-3">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="container d-flex flex-wrap align-items-center justify-content-between hero">
        <div>
            <h1>Surepite with Kid! game</h1>
            <p>little owl project aaa bbbbb</p>
            <button class="btn-play">Get a Play</button>
        </div>
        <div>
            <img src="{{ asset('images/spaceship.png') }}" alt="Spaceship" class="spaceship">
        </div>
    </div>
    
    <!-- Content Cards -->
    <div class="content-cards-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="content-card">
                        <img src="https://via.placeholder.com/150/ffb6c1" class="img-fluid rounded-circle mb-3" alt="Card 1">
                        <h4>Guch hoy yudre</h4>
                        <p>Wion alirakd asreaed anog zt, desioaned wih fiacreat.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content-card">
                        <img src="https://via.placeholder.com/150/add8e6" class="img-fluid rounded-circle mb-3" alt="Card 2">
                        <h4>Doatis 5lcen</h4>
                        <p>Lianam eany iog dilenopa pe ecisnamd wih doiwet.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content-card">
                        <img src="https://via.placeholder.com/150/90ee90" class="img-fluid rounded-circle mb-3" alt="Card 3">
                        <h4>Simarpr grain</h4>
                        <p>Weavoltan instil arad el for a tenalr boy dol propers.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content-card">
                        <img src="https://via.placeholder.com/150/ff9999" class="img-fluid rounded-circle mb-3" alt="Card 4">
                        <h4>Og Surygle day</h4>
                        <p>Viter a singhetonre nifife cat, alu and with fechiastic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Globally Recognized Interactive Preschool Education</h2>
                    <p>Creative, fun and child-friendly environment with professional staff members. Learn with real-time activities and build strong foundations for future learning.</p>
                    <div class="row">
                        <div class="col-md-6 feature-box">
                            <i class="fas fa-child"></i>
                            <h6>Child Friendly Environment</h6>
                        </div>
                        <div class="col-md-6 feature-box">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h6>Professional Staff</h6>
                        </div>
                        <div class="col-md-6 feature-box">
                            <i class="fas fa-clock"></i>
                            <h6>Real-Time Education</h6>
                        </div>
                        <div class="col-md-6 feature-box">
                            <i class="fas fa-school"></i>
                            <h6>Well-Built Infrastructure</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x350" class="img-fluid rounded" alt="About Kids">
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Our Programs & Activities</h2>
                <p>Choose from a variety of fun and educational classes</p>
            </div>
            <div class="row">
                <!-- Course 1 -->
                <div class="col-md-4 mb-4">
                    <div class="course-card">
                        <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Kids Playing Club">
                        <h5>Kids Playing Club</h5>
                        <p class="old-price">$60</p>
                        <p class="price">$50</p>
                        <button class="btn btn-join mt-2">Join Class</button>
                    </div>
                </div>
                <!-- Course 2 -->
                <div class="col-md-4 mb-4">
                    <div class="course-card">
                        <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Painting Class">
                        <h5>Painting Class</h5>
                        <p class="price">Free</p>
                        <button class="btn btn-join mt-2">Start Course</button>
                    </div>
                </div>
                <!-- Course 3 -->
                <div class="col-md-4 mb-4">
                    <div class="course-card">
                        <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Engineering Class">
                        <h5>Engineering Class</h5>
                        <p class="old-price">$60</p>
                        <p class="price">$40</p>
                        <button class="btn btn-join mt-2">Starts 15 Sep</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            What costs are covered in course fees?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our package includes program materials, trips, unique events, and online resources.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Do you take kids for field trips?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we organize safe and educational field trips during the year.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            How will your education system help my child?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We use modern learning methods that balance academics, creativity, and play.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experts Section -->
    <section class="experts-section">
        <div class="container">
            <h2>Incredible People Behind Incredible Students</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="expert-card">
                        <img src="https://via.placeholder.com/250" alt="Aurora" class="img-fluid mb-3">
                        <h5>AURORA JACKSON</h5>
                        <p>English</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="expert-card">
                        <img src="https://via.placeholder.com/250" alt="Cosmi" class="img-fluid mb-3">
                        <h5>COSMI</h5>
                        <p>French</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="expert-card">
                        <img src="https://via.placeholder.com/250" alt="Debora" class="img-fluid mb-3">
                        <h5>DEBORA</h5>
                        <p>Classroom Management</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="expert-card">
                        <img src="https://via.placeholder.com/250" alt="Elspeth" class="img-fluid mb-3">
                        <h5>ELSPETH</h5>
                        <p>Montessori</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Kids Website | All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
