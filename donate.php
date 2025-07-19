<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Your Goods</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="canonical" href="https://www.yourwebsite.com/about-us">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

    <style>
    
        body {
            font-family: 'Inter', sans-serif;
            background: rgba(47, 255, 234, 0.192);
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
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .acchi{
            color: purple;
            font-family: Times 'Times New Roman', Times, serif;
            font-size: 3.2rem;
            font:bold;
        }

        .jaana{
            color: blue;
            font-family: 'Times New Roman', Times, serif;
            font: bolder;
            margin-bottom: 13px;
        }

    </style>
</head>
<body>
    <!--------
<nav class="navbar navbar-expand-lg bg-info-subtle bg-body-tertiary">
        <div class="container">
          <img src="logo.png" class="" alt = logo height="60px" width="60px">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="bootstrap.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donate.html">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href = "organisation.html"  aria-disabled="true">Organisation </a>
              </li>
            </ul>
        </div>
        <div class="d-grid gap-2 d-md-block">
        <button class = "btn btn-success ">Join Us</button>
        <button class = "btn btn-success">Donate Here</button>
        </div>
      </nav>
------->
    

    <section class="hero bg-green-100 text-gray-800 text-center py-20 px-4 rounded-md mt-20">
       <div class = "jaana">
      <h1 class="text-3xl font-bold mb-4">Give Your Goods a New Life</h1>
    </div>

     <div class = "acchi">
      <p class="text-lg mb-8">Donate your old clothes, toys, and books to those in need. Your contribution can make a big difference!</p>
    </div>
      <button onclick="window.location.href = ' bootstrap.php';" class="bg-green-500 text-white py-3 px-6 rounded-full hover:bg-green-700 transition duration-300 text-lg font-semibold">Back to Home</button>
</section>



    <section id="how-to-donate" class="section bg-gray-100 py-16 px-4 text-center rounded-md">
        <h2 class="text-2xl font-bold mb-8 text-green-600">How to Donate</h2>
        <div class="steps flex flex-col md:flex-row justify-center items-center gap-8">
            <div class="step bg-warning rounded-lg shadow-md p-6 flex flex-col items-center w-80">
                <h3 class="text-xl font-semibold mb-4 text-dark-500">1. Gather Your Items</h3>
                <p class="text-gray-700 text-center">Collect the clothes, toys, and books you wish to donate. Please ensure they are in good condition.</p>
            </div>
            <div class="step bg-info rounded-lg shadow-md p-6 flex flex-col items-center w-80">
                <h3 class="text-xl font-semibold mb-4 text-dark-500">2. Contact Us</h3>
                <p class="text-gray-700 text-center">Reach out to us through our website or contact number to schedule a pickup.</p>
            </div>
            <div class="step bg-warning rounded-lg shadow-md p-6 flex flex-col items-center w-80">
                <h3 class="text-xl font-semibold mb-4 text-dark-500">3. We Pick Up</h3>
                <p class="text-gray-700 text-center">Our team will come to your location to collect the items.  We appreciate your generosity!</p>
            </div>
        </div>
    </section>

    <section id="about-us" class="section bg-green-100 py-16 px-4 text-center rounded-md">
        <h2 class="text-2xl font-bold mb-8 text-green-600">Our Service</h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto">
            Our "Helping Hands" service streamlines the donation process in Gwalior by offering convenient pick-up
            and drop-off options for your old clothes, toys, and books. To begin, we assess the condition of your
             items, ensuring they are clean and suitable for donation. We then utilize our comprehensive database
              of local NGOs, charities, and community centers to identify organizations with specific needs.
               We prioritize connecting your donations with those who can benefit most, such as shelters requiring
                winter clothing, children's hospitals seeking toys, or libraries needing books. Our service 
                eliminates the hassle of transportation by providing scheduled pick-up services directly from your
                
                doorstep. Alternatively, we offer a list of convenient drop-off locations with operating hours for
                 those who prefer to deliver their donations personally. We provide detailed information about each
                  organization, ensuring transparency and accountability. By handling the logistics, "Helping Hands"
                   makes it easier than ever to contribute to your community, ensuring your donations directly 
                    those in need within Gwalior.          
        </p>
    </section>

    <section id="contact-us" class="section bg-gray-100 py-16 px-4 text-center rounded-md">
        <h2 class="text-2xl font-bold mb-8 text-primary-600" >Contact Us</h2>
        <p class="text-lg text-gray-700 mb-4">Email: shristi.shrivastava703@gmail.com</p>
        <p class="text-lg text-gray-700">Phone: +918370083860</p>
    </section>

    <footer class="bg-gray-800 text-white py-4 text-center rounded-md">
        <p>© 2024 Donate Goods. All rights reserved.</p>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>


</body>
</html>




