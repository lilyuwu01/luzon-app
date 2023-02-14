<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Packages | Wonders of Luzon </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/packages.css">
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

           <div class="hero">
                <img class="mySlides" src="images/package1.jpg">
                <img class="mySlides" src="images/package2.jpg">
                <img class="mySlides" src="images/package3.jpg">

                <div class="hero-line">
                    <section class="hero-line">
                        <h1>PACKAGES</h1>
            
                        <p class="subhead">Choose your desired packages that you want to avail from us.</p>
                    </section>

                </div>
            </div>

            <div class="choices">
                <div class="start">
                    <section class="region">
                        <h2> SELECT A REGION TO WHERE YOU WANT TO TRAVEL: </h2>
                    </section>
                </div>


                <div class="dropdown">
                    <form action="{{url('/confirm')}}" method="post">
                    {!! csrf_field() !!}
                    @method("POST")
                        <label for="reg">Regions:</label>
                        <select name="reg" id="reg">
                            <option value="Ilocos Region, this travel package includes visiting the Paoay Church, Bangui Windmills, Museo Ilocos Norte, Bantay Church Bell Tower, Vigan Cathedral, Calle Crisologo, Lotus Valley Farm, Tondal Beach and Tambobong Beach">Ilocos Region</option>
                            <option value="Cagayan Valley, this travel package includes visiting the Morong Beach, Basco Lighthouse, Honesty Coffee Shop, Vayang Rolling Hills, Calvary Hills, Dicotcotan Beach, Mt. Ugu, Gulon Peak and Landingan Viewport.">Cagayan Valley</option>
                            <option value="Cordillera Administrative Region, this package includes visiting the Kaparkan Falls, Apao Rolling Hills, Dupag Rock Formation, Aran Cave, Northen Blossom Flower Farm, Mt. Ulap, Burnham Park, and Strawberry Farm.">Cordillera Admininstrative Region</option>
                            <option value="Central Luzon, this package includes visiting the Dicasalarin Cove, Museo De Baler, Casapsapan Beach, Las Casas Filipinas de Acuzar, Marivales View Park, Candaba Bird Sanctuary, Carron Dream Park, Farm Villaronte's Flower Farm, and Mt. Pinatubo.">Central Luzon</option>
                            <option value="National Capital Region, this package includes visiting the Bamboo Organ Museum, Nature Church, Leon Gallery, Sy Mansion, Angel Cacnio Gallery, Rizal Park, Fort Santiago, Manila Ocean Park, Marikina City Footwear and City of Dreams Manila">National Capital Region</option>
                            <option value="Calabarzon, this package includes visiting or sightseeing the Taal Volcano, Enchanted Kingdom, Mount Makiling, Bahay ni Rizal, Fantasy World, Fortune Island, Mount Maculot, Pililla Wind Farm, Kanaway Beach and Salibungot Beach.">Calabarzon</option>
                            <option value="Mimaropa, this package includes visiting and sightseeing of Mongpong Island, Poctoy White Beach, Apo Reef Natural Park, Mount Iglit-Baco National Park, Tubbataha Reef Natural Park, Bacuit Bay Islands, Footprints Beach and Linao ni Victo.">Mimaropa</option>
                            <option value="Bicol Region, this package includes visiting and sightseeing of Mount Mayon, Quitinday Green Hills Formation, Bagasbas Beach, Caramoan Islands, Bat-Ongan Cave, and Paguriran Island and Lagoon.">Bicol Region</option>
                        </select>
                        <br><br>
                </div>

                <div class="box-container">

                    <div class="box">
                        <div class="box-one">
                            <h3> Package 1 </h3>
                            <p> Package 1 is good for 2-3 people. By clicking proceed you'll see which places you'll get to visit.  </p>
                            <input type="radio" id="pack1" name="fav_language" value="Package 1: Good for 2-3 people" required>
                        </div>

                        
                    </div>

                    <div class="box2">

                        <div class="box-two">
                                <h3> Package 2 </h3>
                                <p> Package 2 is good for 5-6 people. By clicking proceed you'll see which places you'll get to visit. </p>
                                <input type="radio" id="pack2" name="fav_language" value="Package 2: Good for 5-6 people">
                        </div>
                    </div>

                    <div class="box3">

                        <div class="box-three">
                                <h3> Package 3 </h3>
                                <p> Package 3 is good for 10-12 people. By clicking proceed you'll see which places you'll get to visit.</p>
                                <input type="radio" id="pack3" name="fav_language" value="Package 3: Good for 9-12 people">
                        </div>
                    </div>

                </div>
                <div class="sub">
                    <button type="submit" class="button1">Proceed</button>
                </div>
                </form>


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

            </div>

                

            
        </div>

        <script>
    var slideIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2750);
    }

</script>
    </body>
</html>
    