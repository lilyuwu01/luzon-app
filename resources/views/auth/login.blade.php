<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login | Wonders of Luzon </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css">
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


                <a href="homepage.html" class="logo"> Wonders of Luzon</a>


                <nav>
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="/packages">Packages</a></li>
                        <li><a href="/review">Reviews</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contacts</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                </nav>
            </div>

           </header>

           <div class="background1"></div>

           <div class="login-box">

                <div class="allcontainer">
                    
    
                    <div class="container">
                        <div class="img_log">
                            <img src="images/login1.svg" width="80%"  alt="ewan" class="center" background-size="cover">
                        </div>
                        <div class="input-box">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label for="email">Email Address: </label>
                            <input type="text" id="email" placeholder="Enter Email Address" name="email" required>
    
                            <label for="password">Password: </label>
                            <input type="password" placeholder="Enter Password" name="password" required>
    
                      
    
                            
                            <div class="button-container">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('register'))
                                    <button type="button"><a href="{{ route('register') }}">{{ __('Register') }}</a></button>
                                    @endif
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

        </div>

    </body>
</html>