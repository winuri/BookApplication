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
            margin: 0;
            padding: 0;
            background: url("{{ asset('images/wallpepar.png') }}") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            position: relative;
            color: white;
            overflow-x: hidden;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(11, 28, 69, 0.2);
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

        /* Hero */
        .hero {
            text-align: left;
            padding: 50px 50px; 
            min-height: 70vh;   
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
            text-decoration: none; 
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

        /* Content Cards as Buttons */
        .content-cards-section {
            padding: 30px 0; 
            text-align: center;
            z-index: 2;
        }
        .content-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start; 
            text-align: center;
            padding: 10px;
            border-radius: 15px;
            height: 250px;
            width: 260px; 
            max-width: 90%; 
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0,0,0,0.1);
            text-decoration: none;
            color: #000;
            overflow: hidden; 
        }
        .content-card img {
            width: 100%; 
            height: 140px; 
            object-fit: cover;
            border-radius: 10px; 
            margin-bottom: 8px;
        }
        .content-card h5 {
            font-size: 0.9rem;
            margin-bottom: 4px;
        }
        .content-card p {
            font-size: 0.75rem;
            line-height: 1rem;
            margin: 0;
        }
        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
        .pink { background-color: #ffc0cb; }
        .yellow { background-color: #fffacd; }
        .skyblue { background-color: #87ceeb; }
        .cream { background-color: #91e0a5ff; }

        /* About*/
        .about-section { 
            background: #e2e0cfff; 
            padding: 80px 0;
            color: #000;
        }
                
        
        .about-images-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);    
            gap: 10px; 
            height: 400px; 
        }

        .about-image-1 {
            grid-column: 1 / 2; 
            grid-row: 1 / 3;    
        }

        .about-image-2 {
            grid-column: 2 / 3; 
            grid-row: 1 / 2;    
        }

        .about-image-3 {
            grid-column: 2 / 3; 
            grid-row: 2 / 3;   
        }

        .about-images-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            border-radius: 12px;
        }

        .about-section .feature-box {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .about-section .feature-box img {
            width: 50px; 
            height: 50px;
            margin-right: 15px;
            object-fit: contain;
        }

        .about-section .feature-box h6 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
        }
        
        /* Courses Section Styles */
        .courses-section { 
            padding: 80px 0; 
            background: #fff; 
            color: #000;
        }
        .course-filter-buttons .btn {
            background-color: #f0f0f0;
            color: #000;
            border-radius: 20px;
            padding: 5px 15px;
            margin: 0 5px 15px 5px;
            font-size: 0.9rem;
        }
        .course-filter-buttons .btn.active {
            background-color: #be8eff;
            color: #fff;
            font-weight: 600;
        }
        .course-card { 
            background: #fff; 
            border-radius: 12px; 
            padding: 15px; 
            text-align: left; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); 
            height: 100%; 
        }
        .course-card img { 
            border-radius: 12px; 
            margin-bottom: 10px;
            height: 150px; 
            object-fit: cover;
            width: 100%;
        }
        .course-card h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 5px;
        }
        .course-card .category {
            color: #7b7b7b;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        .course-card .pricing {
            display: flex;
            align-items: baseline;
            margin-bottom: 10px;
        }
        .course-card .old-price { 
            font-size: 1rem; 
            color: #999; 
            text-decoration: line-through; 
            margin-right: 10px;
            margin-bottom: 0;
        }
        .course-card .price { 
            font-weight: bold; 
            color: #be8eff; 
            font-size: 1.2rem;
            margin-bottom: 0;
        }
        .course-card .description {
            font-size: 0.85rem;
            color: #555;
            margin-bottom: 10px;
            height: 3.5em; 
            overflow: hidden;
        }
        .course-card .rating {
            color: gold;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }
        .course-card .btn-join {
            background: #be8eff; 
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 25px;
            font-weight: 500;
            width: 100%;
            margin-top: 10px;
        }
        
        .course-card .price.free {
            color: #0e8700;
        }
        
        .course-card .btn-start-date {
            background: #be8eff;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 25px;
            font-weight: 500;
            width: 100%;
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .faq-section { 
            background: url("{{ asset('images/FAQ_wallpepar.png') }}") no-repeat center center fixed;
            background: linear-gradient(135deg, #e3f2fd, #d1c4e9); /* Light gradient background */
            color: #000; 
            padding: 80px 20px; 
        }
        .faq-content-wrapper {
            background-color: white; 
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            display: flex;
            gap: 30px;
        }
        .faq-main {
            flex-grow: 1;
        }
        .faq-sidebar {
            width: 350px; 
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .faq-section h2 { 
            font-weight: 700; 
            margin-bottom: 20px; 
            text-align: left; 
            color: #0b1c45;
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 5px;
            border-radius: 12px;
            box-shadow: none; 
            border-bottom: 1px solid #eee; 
        }

        .accordion-button {
            background-color: transparent;
            color: #333; 
            font-weight: 600; 
            padding: 15px 0; 
            border-radius: 0 !important;
            border: none;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            color: #be8eff;
            background-color: transparent;
            border-bottom: 1px solid #ddd;
        }

        .accordion-button:focus {
            border-color: transparent;
            box-shadow: none;
        }

        .accordion-button::after {
            filter: none; 
            transform: rotate(-90deg); 
        }

        .accordion-button:not(.collapsed)::after {
            transform: rotate(0deg);
            filter: none;
        }

        .accordion-body {
            background-color: white; 
            color: #666; 
            padding: 15px 0 20px 0;
            border-radius: 0; 
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .accordion {
            border-top: 2px solid #be8eff; 
        }
        
       
        .support-card {
            background-color: #fce4ec; 
            padding: 30px 20px;
            border-radius: 12px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .support-card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .support-card h4 {
            color: #0b1c45;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .support-card p {
            color: #555;
            font-size: 0.9rem;
        }
        .support-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .support-buttons .btn-custom {
            padding: 10px 15px;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        .btn-contact { background-color: #66bb6a; } 
        .btn-call { background-color: #ffb347; } 
        .btn-video { background-color: #ff6a3d; } 

        
        .download-card {
            background-color: #f8bbd0; 
            padding: 30px 20px;
            border-radius: 12px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .download-card h4 {
            color: #0b1c45;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .download-card p {
            color: #555;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }
        .app-links a {
            margin: 0 5px;
            display: inline-block;
        }
        .app-links img {
            width: 120px;
            height: auto;
        }

        
        .accordion-button::after {
            filter: invert(1); 
        }

        .accordion-body {
            background-color: #f8f9fa; 
            color: #333; 
            padding: 20px;
            border-radius: 0 0 12px 12px; 
        }
        
.experts-section {
    padding: 80px 0; 
    background-color: #f8f9fa; 
}

/* Heading styles */
.experts-section .sub-heading {
    color: #6c9a30; 
    font-weight: 700;
    margin-bottom: 5px;
}

.experts-section .main-heading {
    font-size: 2.5rem;
    font-weight: 800;
    color: #0b1c45; 
    line-height: 1.2;
}

.experts-section .decorative-emojis {
    font-size: 2rem;
    margin-top: 10px;
}

.experts-section .intro-paragraph {
    color: #555;
    font-size: 0.95rem;
    line-height: 1.6;
}


.experts-section .text-content-right {
    position: relative; 
}


.experts-section .deco-magic {
    position: absolute;
    top: -10px;
    right: 80px;
    font-size: 2rem;
    color: #f06292; 
}


.experts-section .deco-green-star {
    position: absolute;
    bottom: 0px;
    right: 50px;
    font-size: 3rem;
    color: #8bc34a; 
    transform: rotate(15deg);
}


.experts-section .deco-badge-circle {
    position: absolute;
    top: 0px;
    right: -50px;
    width: 100px;
    height: 100px;
    border: 2px dashed #ffc107; 
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.experts-section .deco-badge-icon {
    font-size: 1.5rem;
    color: #ffc107;
    position: absolute;
    top: -15px;
    right: 10px;
}


/* Expert Card Styles */
.expert-card .img-wrapper {
    border: 3px solid #ddd; /
    border-radius: 12px;
    overflow: hidden;
    padding: 5px;
    position: relative; 
}

.expert-card img {
    border-radius: 8px;
    width: 100%;
    height: 250px; 
    object-fit: cover;
}

.expert-card h5 {
    font-weight: 700;
    color: #0b1c45;
    margin-top: 15px;
    margin-bottom: 5px;
}

.expert-card p {
    color: #555;
    font-size: 0.9rem;
    margin-bottom: 0;
}


.expert-card .img-wrapper.overlay-effect::after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    
    background: radial-gradient(circle at 100% 0%, transparent 60%, rgba(255, 193, 7, 0.4) 100%);
    border-radius: 12px;
    pointer-events: none; 
}
   
        .footer { background: #0b1c45; color: #fff; padding: 40px 20px; text-align: center; }


    </style>
</head>
<body>
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
        
    <div class="container d-flex flex-wrap align-items-center justify-content-between hero">
        <div>
            <h1>Surepite with Kid! game</h1>
            <p>little owl project aaa bbbbb</p>
            <a href="#" class="btn-play">Get a Play</a>
        </div>
        <div>
            <img src="{{ asset('images/spaceship.png') }}" alt="Spaceship" class="spaceship">
        </div>
    </div>
    
    <div class="container content-cards-section"> 
        <div class="row g-4 justify-content-center">
            <div class="col-md-3">
                <a href="page1.html" class="content-card pink">
                    <img src="images/picture1.jpg" alt="Card 1">
                    <h5>Guch hoy yudre</h5>
                    <p>Wion alirakd asreaed anog zt, desioaned wih fiacreat.</p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="page2.html" class="content-card yellow">
                    <img src="images/picture2.jpg" alt="Card 2">
                    <h5>Doatis 5lcen</h5>
                    <p>Lianam eany iog dilenopa pe ecisnamd wih doiwet.</p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="page3.html" class="content-card skyblue">
                    <img src="images/picture3.jpg" alt="Card 3">
                    <h5>Simarpr grain</h5>
                    <p>Weavoltan instil arad el for a tenalr boy dol propers.</p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="page4.html" class="content-card cream">
                    <img src="images/picture4.jpeg" alt="Card 4">
                    <h5>Og Surygle day</h5>
                    <p>Viter a singhetonre nifife cat, alu and with fechiastic.</p>
                </a>
            </div>
        </div>
    </div>
 
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="text-warning">ABOUT US</h4>
                    <h2>Globally Recognized Interactive Preschool Education</h2>
                    <p>Creative, fun and child-friendly environment with professional staff members. Learn with real-time activities and build strong foundations for future learning.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 feature-box">
                            <img src="images/p1.png" alt="Child Friendly Environment Icon">
                            <h6>Child Friendly Environment</h6>
                        </div>
                        <div class="col-md-6 feature-box">
                            <img src="images/p2.png" alt="Real-Time Education Icon">
                            <h6>Real-Time Education</h6>
                        </div>
                        <div class="col-md-6 feature-box">
                            <img src="images/p3.png" alt="Well-Built Infrastructure Icon">
                            <h6>Well-Built Infrastructure</h6>
                        </div>
                        <div class="col-md-6 feature-box">
                            <img src="images/p4.png" alt="Professional Staff Members Icon">
                            <h6>Professional Staff Members</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a href="#about-details" class="btn-play">MORE ABOUT US</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-images-container">
                        <img src="images/pic1.jpg" class="about-image-1" alt="Kids in classroom">
                        <img src="images/pic2.jpg" class="about-image-2" alt="Teacher online">
                        <img src="images/pic3.jpg" class="about-image-3" alt="Kid learning online">
                        <img src="images/pic4.jpg" class="about-image-3" alt="Kid learning online">
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="courses-section">
        <div class="container">
            <div class="d-flex justify-content-center mb-5 course-filter-buttons">
                <button class="btn active">All</button>
                <button class="btn">Craft</button>
                <button class="btn">Dance</button>
                <button class="btn">Indoor</button>
                <button class="btn">Language</button>
                <button class="btn">Music</button>
                <button class="btn">Sports</button>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="course-card">
                        <img src="images/sport1.jpg"class="img-fluid" alt="Kids Playing Club">
                        <p class="category">Sports</p>
                        <h5>Kids Playing Club</h5>
                        <p class="description">kids class friendly environment</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 5
                        </div>
                        <div class="pricing">
                            <p class="old-price">$89</p>
                            <p class="price">$79</p>
                        </div>
                        <button class="btn btn-join">Join Class</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card">
                        <img src="images/sport2.jpg"class="img-fluid" alt="Kids Playing Club">
                        <p class="category">Sports</p>
                        <h5>Kids Playing Club</h5>
                        <p class="description">kids class friendly environment</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 5
                        </div>
                        <div class="pricing">
                            <p class="old-price">$89</p>
                            <p class="price">$79</p>
                        </div>
                        <button class="btn btn-join">Join Class</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card">
                        <img src="images/craft1.jpg" class="img-fluid" alt="Painting Class">
                        <p class="category">Craft</p>
                        <h5>Painting Class</h5>
                        <p class="description">kids class friendly environment</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> 4
                        </div>
                        <div class="pricing">
                            <p class="price free">Free</p>
                        </div>
                        <button class="btn btn-join">Start Course</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card">
                        <img src="images/indoor1.png" class="img-fluid" alt="Engineering Class">
                        <p class="category">Indoor</p>
                        <h5>Engineering Class</h5>
                        <p class="description">kids class friendly environment</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> 4
                        </div>
                        <div class="pricing">
                            <p class="old-price">$69</p>
                            <p class="price">$49</p>
                        </div>
                        <button class="btn btn-start-date">Starts On : 18 Sep</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card">
                        <img src="images/sport3.jpg" class="img-fluid" alt="Kids Playing Club">
                        <p class="category">Sports</p>
                        <h5>Kids Playing Club</h5>
                        <p class="description">kids class friendly environment</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 5
                        </div>
                        <div class="pricing">
                            <p class="old-price">$89</p>
                            <p class="price">$79</p>
                        </div>
                        <button class="btn btn-join">Join Class</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card">
                        <img src="images/sport4.jpg" class="img-fluid" alt="Kids Playing Club">
                        <p class="category">Sports</p>
                        <h5>Kids Playing Club</h5>
                        <p class="description">kids class friendly environment</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 5
                        </div>
                        <div class="pricing">
                            <p class="old-price">$89</p>
                            <p class="price">$79</p>
                        </div>
                        <button class="btn btn-join">Join Class</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card">
                        <img src="images/craft2.jpg" class="img-fluid" alt="Painting Class">
                        <p class="category">Craft</p>
                        <h5>Painting Class</h5>
                        <p class="description">kids class friendly environment</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> 4
                        </div>
                        <div class="pricing">
                            <p class="price free">Free</p>
                        </div>
                        <button class="btn btn-join">Start Course</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="course-card">
                        <img src="images/indoor2.jpg" class="img-fluid" alt="Engineering Class">
                        <p class="category">Indoor</p>
                        <h5>Engineering Class</h5>
                        <p class="description">kids class friendly environment</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> 4
                        </div>
                        <div class="pricing">
                            <p class="old-price">$69</p>
                            <p class="price">$49</p>
                        </div>
                        <button class="btn btn-start-date">Starts On : 18 Sep</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
    <div class="container">
        <div class="faq-content-wrapper">
            <div class="faq-main">
                <h2>Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                What costs are covered in course fees?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                kfkfgjsggrrrrr
                            
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                When do you communicate with parents?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                bdbffhfhskfkf
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Do you take kids for field trip?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                DAFGHRJFNG
                            </div>
                        </div>
                    </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                How will your education system helps my child?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                sgerhryjfncb
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-sidebar">
                
                <div class="support-card">
                    <img src="images/support_agent.png" class="img-fluid" alt="Support Agent" style="max-height: 180px;">
                    <h4>Need Support?</h4>
                    <p>chat with us</p>
                    <div class="support-buttons">
                        <a href="#" class="btn-custom btn-contact"><i class="fas fa-comment-dots"><br/></i> Contact Us</a>
                        <a href="#" class="btn-custom btn-call"><i class="fas fa-phone"><br/></i> Call Us</a>
                        <a href="#" class="btn-custom btn-video"><i class="fas fa-video"><br/></i> Video Call</a>
                    </div>
                </div>

                <div class="download-card">
                    <h4>Download Our App</h4>
                    <p>get the app </p>
                    <div class="app-links">
                        <a href="#"><img src="images/google_play.png" alt="Get it on Google Play"></a>
                        <a href="#"><img src="images/app_store.png" alt="Download on the App Store"></a>
                    </div>
                </div>
            </div>
            </div>
    </div>
</section>
    
    <section class="experts-section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-start">
                <h4 class="sub-heading">OUR EXPERTS</h4>
                <h2 class="main-heading">
                    Incredible People Behind <br> Incredible Students.
                </h2>
                
            </div>
            <div class="col-lg-6 text-start text-content-right">
                <p class="intro-paragraph">
                    our talented Teachers....................
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="expert-card text-center">
                    <div class="img-wrapper">
                         <img src="images/teacher1.jpg" alt="Aurora Jackson" class="img-fluid">
                    </div>
                    <h5>AURORA JACKSON</h5>
                    <p>English</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="expert-card text-center">
                    <div class="img-wrapper">
                         <img src="images/teacher2.jpg" alt="Cosmi" class="img-fluid">
                    </div>
                    <h5>COSMI</h5>
                    <p>French</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="expert-card text-center">
                    <div class="img-wrapper">
                         <img src="images/teacher3.jpg" alt="Debora" class="img-fluid">
                    </div>
                    <h5>DEBORA</h5>
                    <p>Classroom Management</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="expert-card text-center">
                    <div class="img-wrapper overlay-effect">
                         <img src="images/teacher4.jpg" alt="Elspeth" class="img-fluid">
                    </div>
                    <h5>ELSPETH</h5>
                    <p>Montessori</p>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <footer class="footer">
        <p>&copy; 2025 Kids Website | All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>