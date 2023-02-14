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
                        <h1>PACKAGE</h1>
            
                        <p class="subhead">Confirm your desired package that you want to avail from us.</p>
                    </section>

                </div>
            </div>

            <div class="choices">
                <div class="start">
                    <section class="region">
                        <h2> CONFIRM PAYMENT: </h2>
                    </section>
                </div>

                <div class="box-container">

                    <div class="box">
                        <div class="box-one">
                        @if($place && $pkg)
                            <h3> {{$pkg}} </h3>
                            <p class="conf"> {{$place}} </p>
                            <div id="paypal-button-container"></div>
                        @else
                            <h3> {{$pkg}} </h3>
                            <p> {{$place}} </p>
                        @endif

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

@if($pkg==="Package 1: Good for 2-3 people")
<script src="https://www.paypal.com/sdk/js?client-id=AedupBBfqeELst2eD7q0V2C_vmiIC8EIPU9ViBbRjz18E9z8eO068QebGB3RQsyrwZZqFw0RuEzGXogG&currency=PHP&disable-funding=card"></script>

    <script>
        var presyo = 1000;
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style:{
                color:'silver',
                shape:'pill',
                size:'responsive',
                height: 50,
            },

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: parseFloat(presyo).toFixed(2)
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    //alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                    //actions.redirect('IABC_WEB/onlinepay/');
                    window.alert("Successfully Paid");
                    window.location.href="/home";
                    // Replace the above to show a success message within this page, e.g.
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '';
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }


        }).render('#paypal-button-container');
    </script>
@elseif($pkg==="Package 2: Good for 5-6 people")
<script src="https://www.paypal.com/sdk/js?client-id=AedupBBfqeELst2eD7q0V2C_vmiIC8EIPU9ViBbRjz18E9z8eO068QebGB3RQsyrwZZqFw0RuEzGXogG&currency=PHP&disable-funding=card"></script>

    <script>
        var presyo = 3000;
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style:{
                color:'silver',
                shape:'pill',
                size:'responsive',
                height: 50,
            },

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: parseFloat(presyo).toFixed(2)
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    //alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                    //actions.redirect('IABC_WEB/onlinepay/');
                    window.alert("Successfully Paid");
                    window.location.href="/home";
                    // Replace the above to show a success message within this page, e.g.
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '';
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }


        }).render('#paypal-button-container');
    </script>
@else
<script src="https://www.paypal.com/sdk/js?client-id=AedupBBfqeELst2eD7q0V2C_vmiIC8EIPU9ViBbRjz18E9z8eO068QebGB3RQsyrwZZqFw0RuEzGXogG&currency=PHP&disable-funding=card"></script>

    <script>
        var presyo = 5000;
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style:{
                color:'silver',
                shape:'pill',
                size:'responsive',
                height: 50,
            },

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: parseFloat(presyo).toFixed(2)
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    //alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                    //actions.redirect('IABC_WEB/onlinepay/');
                    window.alert("Successfully Paid");
                    window.location.href="/home";
                    // Replace the above to show a success message within this page, e.g.
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '';
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }


        }).render('#paypal-button-container');
    </script>
@endif


    </body>
</html>