<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wonders of Luzon </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/sm-paoay.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        
    </head>
    <body>
        <div class="wrapper">
           <header>
                <div class="title">
                    <svg class ="logo_start"xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" 
                        viewBox="0 0 24 24"><path fill="#8b3a11" d="M15.31 18.9c-.96 1-2.06 2.03-3.31 3.1c-5.33-4.55-8-8.48-8-11.8C4 
                        5.22 7.8 2 12 2c4 0 7.64 2.92 7.97 7.5h3.53L19 14l-4.5-4.5h3.47C17.65 
                        6.24 15.13 4 12 4c-3.35 0-6 2.57-6 6.2c0 2.34 1.95 5.44 6 9.14c.64-.59 1.23-1.16 1.77-1.71a2.5 
                        2.5 0 0 1-.27-1.12a2.5 2.5 0 0 1 5 0a2.492 2.492 0 0 1-3.19 2.39z"/>
                    </svg>


                    <a href="/home" class="logo"> Wonders of Luzon</a>


                    <nav>
                        <ul>
                            <li><a href="/home">Home</a></li>
                            <li><a href="/packages">Packages</a></li>
                            <li><a href="/review">Reviews</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contacts</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </nav>
                </div>
            </header>

            <div class="back">
                <div class="back1">
                    <a href="/cagayan"><svg class="bb" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" width="1.5em" height="1.5em">
                    <path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256Zm252-74.14v148.28a16 16 0 0 1-26.23 12.29l-89.09-74.13a16 16 0 0 1 0-24.6l89.09-74.13A16 16 0 0 1 300 181.86Z"/></svg></a>
                </div>
                <div class="back2">
                    <a href="/cagayan">Back</a>
                </div>
            </div>

            <div class="about">
                <div class="picture">
                    <img src="images/picture-see.svg" alt="">
                </div>

                <div class="history">
                    <div class="title">
                        <h2> ABOUT <span>TAYID LIGHTHOUSE</span></h2>

                    </div>
                    <div class="description">
                        Situated in Mahatao, Batanes is the “Tayid Lighthouse”, it is one of the three functional ligthouse that was built in early 2000s. The lighthouse also serves as a tourist attraction.Many people think that the Tayid lighthouse is the 18th century old Mahatao Lighthouse but it is not the Spanish-era lighthouse.
                        The construction of Tayid lighthouse together with Basco and Sabtang lighthouse was proposed by then Representative Butch Abad . The ligthouses serves as an indicator to seafarers accross the risky waters of West Philippine Sea and Pacific Ocean.


                    </div>
                </div>
            </div>

            <div class="gallery">
                <div class="picture1">
                    <img src="images/gall.svg" alt="">
                </div>

                <div class="view">
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 5</div>
                          <img src="images/tay1.jpeg" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">2 / 5</div>
                          <img src="images/tay2.jpg" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">3 / 5</div>
                          <img src="images/tay3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">4 / 5</div>
                            <img src="images/tay4.webp" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">5 / 5</div>
                            <img src="images/tay5.jpg" style="width:100%">
                        </div>

                        
                        
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                        
                        </div>
                        <br>
                        
                        <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span> 
                          <span class="dot" onclick="currentSlide(4)"></span>
                          <span class="dot" onclick="currentSlide(5)"></span>
                        </div>
                </div>
            </div>
        </div>

        <div class="footer-basic">
            <footer>
                <div class="social"><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a><a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/home"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="/home">Home</a></li>
                    <li class="list-inline-item"><a href="/packages">Services</a></li>
                    <li class="list-inline-item"><a href="/about">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">Wonders of Luzon © 2022</p>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
        </script>
    </body>
</html>