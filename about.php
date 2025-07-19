<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - [Your Website Name]</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="canonical" href="https://www.yourwebsite.com/about-us">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Times rumon';
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
            line-height: 1.7;
        }
        header {
            text-align: center;
            padding: 60px 20px;
            background-color: #b907ff24;
        }
        header h1 {
            font-size: 2.5rem;
            color: #4CAF50;
            margin-bottom: 1rem;
        }
        header p {
            font-size: 1.1rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }
        main {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        section {
            margin-bottom: 60px;
            text-align: center;
        }
        section h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        section h2 i {
            margin-right: 0.5rem;
            color: #4CAF50;
        }
        .mission-section h2 i {
            color: #f44336;
        }
        .what-we-do-section h2 i{
            color: #2196F3;
        }
        .why-donate-section h2 i {
            color: #9C27B0;
        }
        
        
        section p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.7;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        .section-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }
        .section-content div {
            flex: 1;
            text-align: center;
        }
        .section-content img {
            max-width: 50%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .info-boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 2rem;
        }
        .info-box {
            background-color: rgba(221, 160, 221, 0.588);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 300px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .info-box i {
            font-size: 2rem;
            color: #4CAF50;
            margin-bottom: 1rem;
        }
        .info-box h3 {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 0.5rem;
        }
        .info-box p {
            font-size: 1rem;
            color: #666;
        }
        footer {
            text-align: center;
            padding: 30px 20px;
            background-color: rgba(128, 0, 128, 0.201);
            border-top: 1px solid #ddd;
            color: #555;
        }
        footer p{
            font-size: 1rem;
        }
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 2rem;
        }
        .contact-info div {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1rem;
            color: #666;
        }
        .contact-info i {
            font-size: 1.2rem;
            color: #4CAF50;
        }
        .donate-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.1rem;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
        }
        .donate-button:hover {
            background-color: #45a049;
        }
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }
            header p {
                font-size: 1rem;
            }
            main {
                padding: 30px 15px;
            }
            section {
                margin-bottom: 40px;
            }
            section h2 {
                font-size: 1.75rem;
            }
            section p {
                font-size: 1rem;
            }
            .section-content {
                flex-direction: column;
            }
            .info-boxes {
                flex-direction: column;
                align-items: center;
            }
            .info-box {
                width: 100%;
                max-width: 400px;
            }
            .contact-info {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-info-subtle bg-body-tertiary">
        <div class="container">
          <img src="logo.png" class="" alt=logo height="60px" width="auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="bootstrap.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" registration.php">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href = "organisation.php"  aria-disabled="true">Organisation </a>
              </li>
            </ul>
        </div>
        <div class="d-grid gap-2 d-md-block">
         <button class = "btn btn-success "onclick = "window.location.href = 'contactus.php';">Join Us</button>
         <button class = "btn btn-success "onclick = "window.location.href = 'registration.php';">Donate Here </></button>
        </div>
      </nav>
    <header>
        <h1>About Us</h1>
        <p>Giving New Life to Your Gently Loved Items</p>
    </header>
    <main>
        <section class="mission-section">
            <h2><i class="fas fa-heart"></i>Our Mission</h2>
            <div class="section-content">
                <div>
                    <p>
                        Our mission is to foster a culture of sharing and sustainability by making it easy for you to donate items you no longer need. We aim to reduce waste, support those in need, and bring smiles to faces by giving your cherished belongings a second chapter.
                    </p>
                </div>
                <div>
                    <img src="Gemini_Generated_Image_7mcae77mcae77mca copy.jfif" alt="Our Mission">
                </div>
            </div>
        </section>
        <section class="what-we-do-section">
            <h2><i class="fas fa-users"></i>What We Do</h2>
            <div class="section-content">
                <div>
                    <img src=" secondimg.jpg" alt="What We Do">
                </div>
                <div>
                    <p>
                        We act as a bridge between generous donors like you and a network of trusted charities, non-profit organizations, and individuals. Whether it's outgrown children's clothes, toys that have lost their sparkle, or books that have been read and loved, we help ensure they find their way to new homes where they can be appreciated once more.
                    </p>
                </div>
            </div>
        </section>
        <section class="why-donate-section">
            <h2><i class="fas fa-gift"></i>Why Donate Through Us?</h2>
            <div class="info-boxes">
                <div class="info-box">
                    <i class="fas fa-book-open"></i>
                    <h3>Convenience</h3>
                    <p>Donating is easy and hassle-free.</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-heart"></i>
                    <h3>Impact</h3>
                    <p>Your donations make a real difference.</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-recycle"></i>
                    <h3>Sustainability</h3>
                    <p>Contribute to a more sustainable future.</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-users"></i>
                    <h3>Community</h3>
                    <p>Be part of a community of givers.</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-tshirt"></i>
                    <h3>Variety</h3>
                    <p>Donate clothes, toys, and books.</p>
                </div>
                 <div class="info-box">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Transparency</h3>
                    <p>We are transparent about where your donations go.</p>
                </div>
            </div>
        </section>
        
        <section>
            <h2>Join Our Movement</h2>
            <p>
                We invite you to join our growing community of donors and help us make a positive impact, one donation at a time. Together, we can give new life to your gently loved items and bring joy to those who need it most.
            </p>
            <a href="registration.php" class="donate-button">Donate Now</a>
        </section>
        <section>
            <h2><i class="fas fa-envelope"></i>Get In Touch</h2>
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i> Address: Vinay Nagar sector-3 <br>
                    Gwalior Madhya Pradesh</div>
                <div><i class="fas fa-phone"></i> Phone: +918370083860</div>
                <div><i class="fas fa-envelope"></i> Email: shristi.shrivastava703@gmail.com</div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 [Donation Assistant]. All rights reserved.</p>
    </footer>
</body>
</html>
