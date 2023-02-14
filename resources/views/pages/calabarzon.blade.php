<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calabarzon | Wonders of Luzon </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/ilocos.css">
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
                <img class="mySlides" src="images/cala1.jpg">
                <img class="mySlides" src="images/cala2.jpg">
                <img class="mySlides" src="images/cala3.jpg">

                <div class="hero-line">
                    <section class="hero-line">
                        <h1>CALABARZON</h1>
            
                        <p class="subhead">Calabarzon, Known for its white beaches, cultural heritage sites dating back to the Spanish era, marine sanctuary, majestic mountains, among others, the region is a favorite spot to many local and international travellers.</p>
                    </section>

                </div>
            </div>

            <section class="more-info">
                <div class="feature">
                    <div class="content">
                        <img src="images/calarbazon_map.png" alt="calabarzon" map>
                    </div>

                    <div class="title-info">       
                        <p class="title">Calabarzon</p>
                        <p class="desc">Calabarzon s an administrative region in the Philippines, designated as Region IV-A. The region comprises five provinces: Batangas, Cavite, Laguna, Quezon, and Rizal; 
                            and one highly urbanized city, Lucena. The region is the most populous region in the Philippines according to the Philippine Statistics Authority, having over 14.4 million inhabitants 
                            in 2020, and is also the country's second most densely populated after the National Capital Region. The region is situated southeast of Metro Manila, and is bordered by the Manila Bay 
                            to the west, Lamon Bay and the Bicol Region to the east, the Tayabas Bay and Sibuyan Sea to the south, and Central Luzon to the north. It is home to places like Mount Makiling near Los 
                            Baños, Laguna, and the Taal Volcano in Batangas. Prior to its creation as a region, Calabarzon, together with the Mimaropa region, the province of Aurora and several parts of Metro Manila, 
                            formed the historical region known as Southern Tagalog, until they were separated in 2002 by virtue of Executive Order No. 103. The region is the 12th largest region in the Philippines, with 
                            an area of 16,873.31 km2. The region itself is relatively flat, but also consists of coastal areas and highlands. It is bordered by Manila Bay in the west, Metro Manila, Bulacan, and Aurora in 
                            the north, Lamon Bay and Bicol in the east, and the Isla Verde Passage in the south. Each province in the region is composed of different environments, ranging from low coastal areas to rugged 
                            mountainous ones.
                        </p>
                    </div>

                </div>
            </section>

            <div class="footer">
                <p class="footer-class">TOURIST SPOTS IN CAVITE</p>
            </div>

            <div class="container">
                <div class="feature1">
                    <div class="pic">
                        <img src="images/tagaytay.webp" alt="Tagaytay Ridge" class="image">
                    </div>
                    <div class="paoay">
                        <p class="title1">Tagaytay Ridge</p>
                        <p class="desc1">Tagaytay Ridge is a highland area in Tagaytay where Palance in the Sky (now called as People’s Park in the Sky) is located. 
                            It is a rest house of a former Philippine President Ferdinand Marcos. Tagaytay Ridge will offer you a majestic view to the smallest volcano 
                            in the Philippines, Taal Volcano. ince Taal Volcano is situated in Taal Lake, it will surely give you breath taking scenery. </p>
                        <button class="b1" style="vertical-align:middle"><a href="/tagaytay-ridge"><span> See More</span></a></button>
                    </div>
                </div>

                <div class="feature1">
                    <div class="paoay2">
                        <p class="title2">Taal Volcano</p>
                        <p class="desc2">Taal Volcano is an astonishing volcano located in Cavite. Although it is quite small, actually the smallest active volcano 
                            in the Philippines, it is really a beautiful volcano. It situated within a lake (Taal Lake) and within Taal Volcano lies the Taal Crater Lake.
                            This is an interesting volcano and many ventured to its top to witness the beauty of the breath taking Crater Lake.</p>
                        <button class="b2" style="vertical-align:middle"><a href="/taal-volcano"><span> See More</span></a></button>
                        
                    </div>
                    <div class="pic">
                        <img src="images/taal.webp" alt="Taal Volcano" class="image">
                    </div>
                </div>

                <div class="feature1">
                    <div class="pic">
                        <img src="images/dela.webp" alt="Museo de la Salle" class="image">
                    </div>
                    <div class="paoay">
                        <p class="title1">Museo de la Salle</p>
                        <p class="desc1">Museo de la Salle holds most of the historical artifacts of Cavite. It is located inside De La Salle University in Dasmareñas, Cavite. 
                            The museum was inspired by Bahay na Bato, a two-story building with a stone, mortar, brick and wooden structure. If you have read the famous Noli Me 
                            Tangere of Dr. Jose P. Rizal, the place is like the house of Kapitan Tiago</p>
                        <button class="b3" style="vertical-align:middle"><a href="/museo-de-la-salle"><span> See More</span></a></button>
                    </div>
                </div>

                <div class="feature1">
                    <div class="paoay2">
                        <p class="title2">Gen. Emilio Aguinaldo Shrine</p>
                        <p class="desc2">General Emilio Aguinaldo Shrine is the home of the first president in the Philippines. This is where the First Filipino Flag 
                            was waved marked the Independence of Filipinos from the rule of Spain on June 12, 1898. This is a 1, 325 square meters mansion of General 
                            Emilio Aguinaldo which he himself donated to the government “to perpetuate the spirit of the Philippine Revolution of 1896 that put an end 
                            to Spanish colonization of the country.” </p>
                        <button class="b4" style="vertical-align:middle"><a href="/gen-emilio-aguinaldo-shrine"><span> See More</span></a></button>
                    </div>
                    <div class="pic">
                        <img src="images/gen.webp" alt="Gen. Emilio Aguinaldo Shrine" class="image">
                    </div>
                </div>

                <div class="feature1">
                    <div class="pic">
                        <img src="images/corr.webp" alt="Corregidor Island" class="image">
                    </div>
                    <div class="paoay">
                        <p class="title1">Corregidor Island</p>
                        <p class="desc1">Corregidor Island is a stronghold of joint forces of Filipino and American soldiers in World War II defending the entrance of Manila Bay from the Japanese invaders. 
                            Today it is a historic monument which the big artilleries and the structures tell its story of heroism and bravery of Filipinos. If you love learning some history of the Philippines,
                            you can visit Corregidor Island and witness the moving story of Philippine fighters.</p>
                        <button class="b5" style="vertical-align:middle"><a href="/corregidor-island"><span> See More</span></a></button>

                        <div class="see-more">
                            <button class="button" id="myBtn" style="vertical-align:middle"><span>Choose another Region </span></button>
                                <div class="next-page">
                                    <a href="/home" class="previous round">&#8249;</a>
                                    <a href="/laguna" class="next round">&#8250;</a>
                                </div>
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