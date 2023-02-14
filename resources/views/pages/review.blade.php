<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Reviews | Wonders of Luzon </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/review.css">
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
                <img class="mySlides" src="images/review1.jpg">
                <img class="mySlides" src="images/review2.jpg">
                <img class="mySlides" src="images/review3.jpg">

                <div class="hero-line">
                    <section class="hero-line">
                        <h1>REVIEWS</h1>
    
                    </section>

                </div>
            </div>

            
        </div>
        
        <div class="intro">
            <div class="picture">
                <img src="images/rev1.svg" alt="about page">
            </div>

            <div class="description">
                <div class="text">
                    We strive to provide the best possible services for our clients. Please leave a review
                    to let us know how we are doing and to share your experiences with others.
                    This reviews section will only contain comments that are submitted by registered users of our website.
                </div>
            </div>
        </div>

            <div class="comment-container">
                <div class="photo">
                    <img src="images/avatar.svg" alt="">
                </div>

                <div class="information">
                    <div class="name">
                        @if($curuser)
                            {{$curuser->name}}
                        @endif
                    </div>
                    <form action="{{url('/pt-review')}}" method="post">
                    {!! csrf_field() !!}
                    @method("POST")
                    <div class="post">
                        <textarea type="text" name="foo"></textarea>
                    </div>
                    <div class="submit1">
                        <button type="submit">Submit</button>
                    </div>
                    </form>
                </div>
            </div>

            <footer></footer>
            @if(count($rev)>=1)
                @foreach($rev as $r)
                    <div class="comment">
                        <div class="photo1">
                                <img src="images/avatar.svg" alt="">
                            </div>

                            <div class="information1">
                                <div class="name1">
                                    {{$r->username}}
                                </div>
                    
                                <div class="post1">
                                    <div class="commented">{{$r->comment}}</div>
                                </div>
                            </div>
                    </div>
                    @endforeach
                @else
                    <div class="comment">
                        <div class="photo1">
                            <img src="images/avatar.svg" alt="">
                        </div>

                        <div class="information1">
                            <div class="name1">
                                
                            </div>
                        
                            <div class="post1">
                                <div class="commented"></div>
                            </div>
                        </div>
                    </div>
                @endif
            
            
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
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
                alert(msg);
            }
        </script>
    </body>
</html>