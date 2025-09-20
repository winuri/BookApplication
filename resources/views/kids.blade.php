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
            /* Keep existing background for hero section */
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
        .btn-play-icons {
            margin-left: 10px;
            font-size: 1.2rem;
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

        /* --- New/Updated Styles for Content Cards Section --- */
        .content-cards-section {
            position: relative;
            padding: 100px 0 50px;
            text-align: center;
            background-color: #0b1c45;
            z-index: 2;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300"><defs><linearGradient id="cloudGrad" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:rgb(255,153,153);stop-opacity:0.8" /><stop offset="100%" style="stop-color:rgb(255,102,102);stop-opacity:0.8" /></linearGradient><linearGradient id="cloudGrad2" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:rgb(173,216,230);stop-opacity:0.8" /><stop offset="100%" style="stop-color:rgb(135,206,250);stop-opacity:0.8" /></linearGradient></defs><path fill="url(%23cloudGrad)" d="M0,100c0,0,100-50,250-50S500,100,600,100s200-50,300-50s200,50,300,50s240-50,240-50V300H0Z" opacity="0.6"/><path fill="url(%23cloudGrad2)" d="M0,150c0,0,100-50,250-50S500,150,600,150s200-50,300-50s200,50,300,50s240-50,240-50V300H0Z" opacity="0.7"/><path fill="url(%23cloudGrad)" d="M0,200c0,0,100-50,250-50S500,200,600,200s200-50,300-50s200,50,300,50s240-50,240-50V300H0Z" opacity="0.5"/></svg>');
            background-repeat: repeat-x;
            background-position: bottom center;
            background-size: 100% auto;
        }
        .content-card-container {
            position: relative;
            z-index: 3;
        }
        .content-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            margin: 15px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            transition: transform 0.3s ease;
        }
        .content-card:hover {
            transform: translateY(-10px);
        }
        .card-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        .central-icon-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }
        .central-icon {
            font-size: 4rem;
            color: #fff;
            padding: 20px;
            border-radius: 50%;
            background-color: #8A2BE2;
            border: 2px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg p-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3">Kids</a>
            <div class="ms-auto">
                <a href="#">Home</a>
                <a href="#">Travedts</a>
                <a href="#">Pripotel</a>
                <a href="#">Buility</a>
                <a href="#" class="btn-login ms-3">Cantee</a>
            </div>
        </div>
    </nav>

    <div class="container d-flex flex-wrap align-items-center justify-content-between hero">
        <div>
            <h1>Surepite with Kid! game</h1>
            <p>little owl project aaa bbbbb</p>
            <button class="btn-play">
                Get a Play
                <span class="btn-play-icons"></span>
            </button>
        </div>
        <div>
            <img src="{{ asset('images/spaceship.png') }}" alt="Spaceship" class="spaceship">
        </div>
    </div>
    
    <div class="content-cards-section">
        <div class="container content-card-container">
            
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

</body>
</html>