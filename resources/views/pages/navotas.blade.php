<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> National Capital Region | Wonders of Luzon </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/ilocos-sur.css">
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
                <img class="mySlides" src="images/ncr1.jpg">
                <img class="mySlides" src="images/ncr2.jpg">
                <img class="mySlides" src="images/ncr3.jpg">
                <img class="mySlides" src="images/ncr4.jpg">

            <div class="hero-line">
                <section class="hero-line">
                    <h1>NATIONAL CAPITAL REGION</h1>
        
                    <p class="subhead">National Capital Region, the region is the political, economic, social, cultural, and educational center of the Philippines</p>
                </section>

            </div>
        </div>
        
        

        <div class="footer">
            <div class="footer-class">TOURIST SPOTS IN NAVOTAS</div>
        </div>

        <div class="container">
            <div class="feature1">
                <div class="pic">
                    <img src="images/fish.jpg" alt="Navotas Fish Port" class="image">
                </div>
                <div class="paoay">
                    <p class="title1">Navotas Fish Port</p>
                    <p class="desc1">Manila Bay provides Navotas with a bountiful source of fish and other marine products, which constitute the basic diet of the town's residents. Navotas, home to low marginal fisherman, and big time trawlers, own the most modern sophisticated fishing boats dominating the fishing ground of the country today.</p>
                    <button class="b1" style="vertical-align:middle"><a href="/navotas-fish-port"><span> See More</span></a></button>
                </div>
            </div>

            <div class="feature1">
                <div class="paoay">
                    <p class="title2">San Jose de Navotas Parish Church</p>
                    <p class="desc2">Soon to be the Shrine of St. Joseph in the Diocese of Navotas, the parish church is the oldest in the municipality, established in 1838-1862.
                    he simple and beautiful church façade complements the beautiful and more elaborate interiors of the San Jose de Navotas Parish Church. The massive and sturdy design of the exteriors evokes strength which is probably how we can define the people of Navotas, having to withstand yearly flooding in most of its areas.
                    </p>
                    <button class="b2" style="vertical-align:middle"><a href="/san-jose-de-navotas-parish-church"><span> See More</span></a></button>
                </div>
                <div class="pic">
                    <img src="images/sanj.jpg" alt="San Jose de Navotas Parish Church" class="image">
                </div>
            </div>

            <div class="feature1">
                <div class="pic">
                    <img src="images/cent1.jpg" alt="Century House" class="image">
                </div>
                <div class="paoay">
                    <p class="title1">Century House</p>
                    <p class="desc1">For generations, an antique house in Navotas City stood out along a narrow road lined with local drug stores just across the Navotas city hospital.
                    Behind the gated walls stood the two-story antique house facing the road with large capiz windowpanes, topped with what looked like a small chimney on the roof. Just above the gated entrance were the embossed words that gave the house its name today – Century House.
                    </p>
                    <button class="b3" style="vertical-align:middle"><a href="/century-house"><span> See More</span></a></button>
                </div>
            </div>

            <div class="feature1">
                <div class="paoay">
                    <p class="title2">Navotas City Hall</p>
                    <p class="desc2">Navotas City Hall (formerly Navotas Municipal Hall) is a government building located at M. Naval St., Brgy. Sipac Almacen, Navotas City. This structure was constructed around 2002-2003 to replace the old municipal hall due to a fire. Navotas City Hall is surrounded by these institutions.
                    </p>
                    <button class="b4" style="vertical-align:middle"><a href="/navotas-city-hall"><span> See More</span></a></button>
                </div>
                <div class="pic">
                    <img src="images/city.webp" alt="Navotas City Hall" class="image">
                </div>
            </div>

            <div class="feature1">
                <div class="pic">
                    <img src="images/navr.jpg" alt="Navotas River" class="image">
                </div>
                <div class="paoay">
                    <p class="title1">Navotas River</p>
                    <p class="desc1">At low tide, the waters from inland flowed out into the sea. This geographical change prompted the people to refer to the place as “nabutas” which means breached or pierced through. This developed into a regular waterway, now known as the Navotas River. In later years, the whole place came to be known as Navotas.
                    </p>
                    <button class="b5" style="vertical-align:middle"><a href="/navotas-river"><span> See More</span></a></button>

                    <div class="see-more">
                        <button class="button" id="myBtn" style="vertical-align:middle"><span>Choose another Region</span></button>
                            <div class="next-page">
                                <a href="/marikina" class="previous round">&#8249;</a>
                                <a href="/paranaque" class="next round">&#8250;</a>
                            </div>
                    </div>
                </div>
            </div>

            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>Regions in Luzon</h2>
                        <p>See Tourist Spots in each Regions</p>
                    </div>
                    <div class="choices-box">
                        <div class="button-container">
                            <div class="move">
                                <div class="button1">
                
                                <a href="/ilocos"><button type="button"><svg class="one" xmlns="http://www.w3.org/2000/svg"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="white" d="M12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 
                                                14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 
                                                12 2q3.65 0 6.387 2.287q2.738 2.288 3.413 5.738h-2.05q-.475-1.825-1.712-3.263Q16.8 
                                                5.325 15 4.6V5q0 .825-.587 1.412Q13.825 7 13 7h-2v2q0 .425-.287.712Q10.425 10 10 
                                                10H8v2h2v3H9l-4.8-4.8q-.075.45-.138.9Q4 11.55 4 12q0 3.275 2.3 5.625T12 
                                                20Zm9.1-.5l-3.2-3.2q-.525.3-1.125.5T15.5 19q-1.875 0-3.188-1.312Q11 16.375 11 
                                                14.5q0-1.875 1.312-3.188Q13.625 10 15.5 10q1.875 0 3.188 1.312Q20 12.625 20 14.5q0 .675-.2 
                                                1.275q-.2.6-.5 1.125l3.2 3.2ZM15.5 17q1.05 0 1.775-.725Q18 15.55 18 14.5q0-1.05-.725-1.775Q16.55 12 15.5 12q-1.05 0-1.775.725Q13 
                                                13.45 13 14.5q0 1.05.725 1.775Q14.45 17 15.5 17Z"/>
                                                </svg>Region I:<br>Ilocos Region </button>
                                            </a>
                                        </div>
                        
                                        <div class="button2">
                                            <a href="/cagayan"><button type="button"><svg class="two" xmlns="http://www.w3.org/2000/svg"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="white" d="M12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 
                                                14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 
                                                12 2q3.65 0 6.387 2.287q2.738 2.288 3.413 5.738h-2.05q-.475-1.825-1.712-3.263Q16.8 
                                                5.325 15 4.6V5q0 .825-.587 1.412Q13.825 7 13 7h-2v2q0 .425-.287.712Q10.425 10 10 
                                                10H8v2h2v3H9l-4.8-4.8q-.075.45-.138.9Q4 11.55 4 12q0 3.275 2.3 5.625T12 
                                                20Zm9.1-.5l-3.2-3.2q-.525.3-1.125.5T15.5 19q-1.875 0-3.188-1.312Q11 16.375 11 
                                                14.5q0-1.875 1.312-3.188Q13.625 10 15.5 10q1.875 0 3.188 1.312Q20 12.625 20 14.5q0 .675-.2 
                                                1.275q-.2.6-.5 1.125l3.2 3.2ZM15.5 17q1.05 0 1.775-.725Q18 15.55 18 14.5q0-1.05-.725-1.775Q16.55 12 15.5 12q-1.05 0-1.775.725Q13 
                                                13.45 13 14.5q0 1.05.725 1.775Q14.45 17 15.5 17Z"/>
                                                </svg>Region II:<br>Cagayan Valley </button>
                                            </a>
                                        </div>
                        
                                        <div class="button3">
                                            <a href="/central-luzon"><button type="button"><svg class="three" xmlns="http://www.w3.org/2000/svg"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="white" d="M12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 
                                                14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 
                                                12 2q3.65 0 6.387 2.287q2.738 2.288 3.413 5.738h-2.05q-.475-1.825-1.712-3.263Q16.8 
                                                5.325 15 4.6V5q0 .825-.587 1.412Q13.825 7 13 7h-2v2q0 .425-.287.712Q10.425 10 10 
                                                10H8v2h2v3H9l-4.8-4.8q-.075.45-.138.9Q4 11.55 4 12q0 3.275 2.3 5.625T12 
                                                20Zm9.1-.5l-3.2-3.2q-.525.3-1.125.5T15.5 19q-1.875 0-3.188-1.312Q11 16.375 11 
                                                14.5q0-1.875 1.312-3.188Q13.625 10 15.5 10q1.875 0 3.188 1.312Q20 12.625 20 14.5q0 .675-.2 
                                                1.275q-.2.6-.5 1.125l3.2 3.2ZM15.5 17q1.05 0 1.775-.725Q18 15.55 18 14.5q0-1.05-.725-1.775Q16.55 12 15.5 12q-1.05 0-1.775.725Q13 
                                                13.45 13 14.5q0 1.05.725 1.775Q14.45 17 15.5 17Z"/>
                                                </svg>Region III:<br>Central Luzon</button>
                                            </a>
                                        </div>
                        
                                        <div class="button4">
                                            <a href="/calabarzon"><button type="button"><svg class="four" xmlns="http://www.w3.org/2000/svg"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="white" d="M12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 
                                                14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 
                                                12 2q3.65 0 6.387 2.287q2.738 2.288 3.413 5.738h-2.05q-.475-1.825-1.712-3.263Q16.8 
                                                5.325 15 4.6V5q0 .825-.587 1.412Q13.825 7 13 7h-2v2q0 .425-.287.712Q10.425 10 10 
                                                10H8v2h2v3H9l-4.8-4.8q-.075.45-.138.9Q4 11.55 4 12q0 3.275 2.3 5.625T12 
                                                20Zm9.1-.5l-3.2-3.2q-.525.3-1.125.5T15.5 19q-1.875 0-3.188-1.312Q11 16.375 11 
                                                14.5q0-1.875 1.312-3.188Q13.625 10 15.5 10q1.875 0 3.188 1.312Q20 12.625 20 14.5q0 .675-.2 
                                                1.275q-.2.6-.5 1.125l3.2 3.2ZM15.5 17q1.05 0 1.775-.725Q18 15.55 18 14.5q0-1.05-.725-1.775Q16.55 12 15.5 12q-1.05 0-1.775.725Q13 
                                                13.45 13 14.5q0 1.05.725 1.775Q14.45 17 15.5 17Z"/>
                                                </svg>Region IV-A:<br>Calabarzon</button>
                                            </a>
                                        </div>

                                        <div class="button5">
                                            <a href="/mimaropa"><button type="button"><svg class="five" xmlns="http://www.w3.org/2000/svg"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="white" d="M12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 
                                                14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 
                                                12 2q3.65 0 6.387 2.287q2.738 2.288 3.413 5.738h-2.05q-.475-1.825-1.712-3.263Q16.8 
                                                5.325 15 4.6V5q0 .825-.587 1.412Q13.825 7 13 7h-2v2q0 .425-.287.712Q10.425 10 10 
                                                10H8v2h2v3H9l-4.8-4.8q-.075.45-.138.9Q4 11.55 4 12q0 3.275 2.3 5.625T12 
                                                20Zm9.1-.5l-3.2-3.2q-.525.3-1.125.5T15.5 19q-1.875 0-3.188-1.312Q11 16.375 11 
                                                14.5q0-1.875 1.312-3.188Q13.625 10 15.5 10q1.875 0 3.188 1.312Q20 12.625 20 14.5q0 .675-.2 
                                                1.275q-.2.6-.5 1.125l3.2 3.2ZM15.5 17q1.05 0 1.775-.725Q18 15.55 18 14.5q0-1.05-.725-1.775Q16.55 12 15.5 12q-1.05 0-1.775.725Q13 
                                                13.45 13 14.5q0 1.05.725 1.775Q14.45 17 15.5 17Z"/>
                                                </svg>Mimaropa:<br>Southwestern Tagalog Region</button>
                                            </a>
                                        </div>

                                        <div class="button6">
                                            <a href="/bicol"><button type="button"><svg class="six" xmlns="http://www.w3.org/2000/svg"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="white" d="M12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 
                                                14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 
                                                12 2q3.65 0 6.387 2.287q2.738 2.288 3.413 5.738h-2.05q-.475-1.825-1.712-3.263Q16.8 
                                                5.325 15 4.6V5q0 .825-.587 1.412Q13.825 7 13 7h-2v2q0 .425-.287.712Q10.425 10 10 
                                                10H8v2h2v3H9l-4.8-4.8q-.075.45-.138.9Q4 11.55 4 12q0 3.275 2.3 5.625T12 
                                                20Zm9.1-.5l-3.2-3.2q-.525.3-1.125.5T15.5 19q-1.875 0-3.188-1.312Q11 16.375 11 
                                                14.5q0-1.875 1.312-3.188Q13.625 10 15.5 10q1.875 0 3.188 1.312Q20 12.625 20 14.5q0 .675-.2 
                                                1.275q-.2.6-.5 1.125l3.2 3.2ZM15.5 17q1.05 0 1.775-.725Q18 15.55 18 14.5q0-1.05-.725-1.775Q16.55 12 15.5 12q-1.05 0-1.775.725Q13 
                                                13.45 13 14.5q0 1.05.725 1.775Q14.45 17 15.5 17Z"/>
                                                </svg>Region V:<br>Bicol Region</button>
                                            </a>
                                        </div>

                                        <div class="button7">
                                            <a href="/cordillera-administrative-region"><button type="button"><svg class="seven" xmlns="http://www.w3.org/2000/svg"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="white" d="M12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 
                                                14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 
                                                12 2q3.65 0 6.387 2.287q2.738 2.288 3.413 5.738h-2.05q-.475-1.825-1.712-3.263Q16.8 
                                                5.325 15 4.6V5q0 .825-.587 1.412Q13.825 7 13 7h-2v2q0 .425-.287.712Q10.425 10 10 
                                                10H8v2h2v3H9l-4.8-4.8q-.075.45-.138.9Q4 11.55 4 12q0 3.275 2.3 5.625T12 
                                                20Zm9.1-.5l-3.2-3.2q-.525.3-1.125.5T15.5 19q-1.875 0-3.188-1.312Q11 16.375 11 
                                                14.5q0-1.875 1.312-3.188Q13.625 10 15.5 10q1.875 0 3.188 1.312Q20 12.625 20 14.5q0 .675-.2 
                                                1.275q-.2.6-.5 1.125l3.2 3.2ZM15.5 17q1.05 0 1.775-.725Q18 15.55 18 14.5q0-1.05-.725-1.775Q16.55 12 15.5 12q-1.05 0-1.775.725Q13 
                                                13.45 13 14.5q0 1.05.725 1.775Q14.45 17 15.5 17Z"/>
                                                </svg>CAR:<br>Cordillera Administrative Region</button>
                                            </a>
                                        </div>

                                        <div class="button8">
                                            <a href="/national-capital-region"><button type="button"><svg class="eight" xmlns="http://www.w3.org/2000/svg"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="white" d="M12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 
                                                14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 
                                                12 2q3.65 0 6.387 2.287q2.738 2.288 3.413 5.738h-2.05q-.475-1.825-1.712-3.263Q16.8 
                                                5.325 15 4.6V5q0 .825-.587 1.412Q13.825 7 13 7h-2v2q0 .425-.287.712Q10.425 10 10 
                                                10H8v2h2v3H9l-4.8-4.8q-.075.45-.138.9Q4 11.55 4 12q0 3.275 2.3 5.625T12 
                                                20Zm9.1-.5l-3.2-3.2q-.525.3-1.125.5T15.5 19q-1.875 0-3.188-1.312Q11 16.375 11 
                                                14.5q0-1.875 1.312-3.188Q13.625 10 15.5 10q1.875 0 3.188 1.312Q20 12.625 20 14.5q0 .675-.2 
                                                1.275q-.2.6-.5 1.125l3.2 3.2ZM15.5 17q1.05 0 1.775-.725Q18 15.55 18 14.5q0-1.05-.725-1.775Q16.55 12 15.5 12q-1.05 0-1.775.725Q13 
                                                13.45 13 14.5q0 1.05.725 1.775Q14.45 17 15.5 17Z"/>
                                                </svg>NCR:<br>National Capital Region</button>
                                            </a>
                                </div>
                            </div>
                        </div>
                </div>
              
            </div>

        </div>

        <div class="footer-basic">
            <footer>
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">Wonders of Luzon © 2022</p>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

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

<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>
    </body>
</html>