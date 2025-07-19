
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
.para{
  font-family: 'Times New Roman', Times, serif;
  font-size: 1.1rem;
  text-align: justify;
  margin-left: 2rem;
  margin-right: 2rem;
  margin-top: 1rem;
  color: purple;
}



footer {
  background-color: #f0f0f09a;
  padding: 20px 0;
  font-family: sans-serif;
}

.footer-container {
  max-width: 12000px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  background-color: #222f3d;
  height: 370px;

}

.footer-section {
  margin-bottom: 20px;
  width: 25%;
  min-width: 200px;
  color: aliceblue;
}

.footer-section h3 {
  margin-bottom: 10px;
  padding: 2rem;
  text-align: justify;
  font-size: 1.3rem;
}

.footer-section h2{
  font-size: 1.3rem;
  margin-top: 2rem;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  margin-top: 1rem;
}


.footer-section li {
  margin-bottom: 5px;
  color: aliceblue;
  padding-left: 2rem;
  text-align: justify;
}

.footer-section a {
  text-decoration: none;
  color: #333;
  color: aliceblue;
  text-align: justify;
}

.footer-section a:hover {
  text-decoration: underline;
}

.social-icons a {
  display: inline-block;
  margin-right: 10px;
}

.copyright {
  width: 100%;
  text-align: center;
  margin-top: 20px;
  background-color: #222f3d;
  height: 50%;
}

@media (max-width: 768px) {
  .footer-section {
    width: 50%;
  }
}

@media (max-width: 480px) {
  .footer-section {
    width: 100%;
  }
}

.nav-link{
  font-size: 1rem;
}

.card-text{
  text-align: justify;
}

.footer-section copyright{
background-color: #222f3d;
color: #222f3d;
}

.mar{
    color: red;
    font-family: 'Times New Roman', Times, serif;
    font-size: 2.5rem;
    margin-top: 1.2rem;
}




</style>
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
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donate.php">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href = "organisation.php"  aria-disabled="true">Organisation </a>
              </li>
            </ul>
        </div>
        <div class="d-grid gap-2 d-md-block">
          <button class = "btn btn-success "onclick = "window.location.href = 'contactus.php';">Join Us</button>
           <button class = "btn btn-success "onclick = "window.location.href = 'registration.php';">Donate Now </></button>
            <button class = "btn btn-success "onclick = "window.location.href = 'feedback.php';">Feedback</button>

        </div>
      </nav>



      <!---carousel--->

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Gemini_Generated_Image_nmxm7inmxm7inmxm.png" class="d-block w-100" alt="..." height="650" width="300" >
          </div>
          <div class="carousel-item">
            <img src="secondimg.jpg" class="d-block w-100" alt="..."  height="650" width="300" >
          </div>
          <div class="carousel-item">
            <img src="firstimg1.png" class="d-block w-100" alt="..." height="650" width="300" >
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!---------------->



      <h2><marquee class = "mar" direction = "right">Be Supportive , Be helpful </marquee></h2>

      <!------------Our Service------->
      <section>
      <h1 style="text-align: center; font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 1rem; color: purple;">Our Service</h1>
      <div class = "para">
      <p> Our "Helping Hands" service streamlines the donation process in Gwalior by offering convenient pick-up
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
         </div>
        </section>


      

<!------Grid + Cards----------->
<div class="container text-center">
  <div class="row ">
    <div class="col">
      <div class="card mt-5" style="width: 22rem;">
          <img src="img4.jpg" class="card-img-top" alt="Donate Clothes">
          <div class="card-body">
            <h5 class="card-title">Donate Clothes</h5>
            <p class="card-text">Donating old clothes offers significant advantages by decluttering your
               space and providing valuable resources to those in need through charities. Avoid donating heavily soiled, stained, torn, or damaged 
               clothes</p>
            <a href="registration.php" class="btn btn-primary">Donate here</a>
          </div>
        </div>
    </div>

    <div class="col">
      <div class="card mt-5" style="width: 22rem;">
          <img src="img3.jpg" class="card-img-top" alt="Donate Books">
          <div class="card-body">
            <h5 class="card-title"> Donate Books</h5>
            <p class="card-text ">While millions of students in India cannot afford the books they wish to read,
              there are privileged people who have the same books lying on their shelves - books that they have
               already read.<br>
               Books For All aims to bridge this gap!</p>
            <a href="registration.php" class="btn btn-primary">Donate here</a>
          </div>
        </div>
    </div>

    <div class="col">
      <div class="card mt-5" style="width: 22rem;">
          <img src="img5.jpg" class="card-img-top" alt="Donate Toys">
          <div class="card-body">
            <h5 class="card-title"> Donate Toys</h5>
            <p class="card-text">When you donate toys, you bring happiness to children in need and
               contribute a more compassionate society. Whether you contribute to toy donation programs or drop off
               toys at a donation box, your small act of kindness can brighten a child's life in unimaginable
                ways.</p>
            <a href=" registration.php" class="btn btn-primary">Donate here</a>
          </div>
        </div>
    </div>
  </div>
</div>

        
<!------------------->





      <footer>
        <div class="footer-container">
          <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="about.php">About Us</a></li>
              <li><a href="donate.php">Donate Now</a></li>
              <li><a href="contactus.php">Contact Us</a></li>
              <li><a href="organisation.php">Our Organisation</a></li>
            </ul>
          </div>

          <div class="footer-section">
            <h3>Contact Information</h3>
            <p>Vinay Nagar , Sector-3, Gwalior, B-57</p>
            <p>Phone: +918370083860</p>
            <p><a href="mailto:shristishrivastava703@gmail.com"> shristishrivastava703@gmail.com</a></p>
          </div>

          <div class="footer-section">
            <h2>Follow Us</h2>
            <div class="social-icons"></div>

              <ul><a href="https://www.facebook.com/muskanfoundation.org/" target="_blank">Facebook</a></ul>
              <ul><a href="https://twitter.com/ngo_muskan/status/1759861229470855307" target="_blank">Twitter</a></ul>
              <ul><a href="https://www.instagram.com/muskaancare/?hl=en" target="_blank">Instagram</a></ul>
            </div>
          </div>
          <div class="footer-section copyright">
            <p>&copy; 2025 Donation Assistant. All rights reserved.</p>
          </div>
        </div>
      </footer>
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>