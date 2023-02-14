<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Register | Wonders of Luzon </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/reg.css">
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
                        <li><a href="homepage.html">Home</a></li>
                        <li><a href="#">Packages</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="login.html">Sign In</a></li>
                    </ul>
                </nav>
            </div>

           </header>

           <div class="background1"></div>

           <div class="login-box">
                <div class="allcontainer">

                    <div class="container">
                        <div class="img_log">
                            <img src="images/register.svg" width="80%"  alt="register" class="center" background-size="cover">

                            <div class="container-signin">
                                <p>Already have an account? <a href="/">Sign in</a>.</p>
                            </div>
                        </div>
    
                        <div class="input-box">
    
                            <div class="register">
                                Register
                                <p>Please fill this form to create an account.</p>
                            </div>
                            
                            <form method="POST" action="{{ route('register') }}">
                            @csrf

                                <label for="name">Full name:</label>
                                <input type="text" placeholder="Enter First Name" id="name" name="name" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        
                                <label for="email">Email Address: </label>
                                <input type="text" placeholder="Enter Email Address" name="email" required>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="password">Password: </label>
                                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="password_confirmation">Confirm Password: </label>
                                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                                
                                <div class="button-container">
                                    <button type="submit">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>

                        </div>
    
                    </div>
                </div>
    
        </div>

    <script>
        var w = window.innerWidth;
        var h = window.innerHeight;

        var x = document.getElementById("demo");
        x.innerHTML = "Browser width: " + w + ", height: " + h + ".";
    </script>

    </body>
</html>    