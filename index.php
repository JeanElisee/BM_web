<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Meny - A three dimensional and space efficient menu concept</title>

    <meta name="description" content="Building management">

    <meta name="viewport" content="width=800, user-scalable=no">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animations.css"/>


    <style>
        .sub-menu
        {
            font-family: "Times New Roman";
        }

        @-webkit-keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(400px);
            }
            50%{
                opacity: 0.3;
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(400px);
            }
            50%{
                opacity: 0.3;
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fadeInUp{
            opacity: 0;
            -webkit-transform: translateY(400px);
            transform: translateY(400px);
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }
        .contents
        {
            background-image: url("img/house.jpg");
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


        /*profile*/

        #signup form p:after {
            display: block;
            content: '';
            border-bottom: solid 3px aquamarine;
            transform: scaleX(0);
            transition: transform 250ms ease-in-out;
        }

        #signup form p:last-child {
            border: none;
        }

        #signup form p:hover:after {
            transform: scaleX(1);
        }

        #signup form p.fromRight:after {
            transform-origin: 100% 50%;
        }

        #signup form p.fromLeft:after {
            transform-origin: 0% 50%;
        }
        input{
            border: none;
            background: rgba(0,0,0,0.3);
            color: white;
        }

        input:focus {
            outline: none;
        }

    </style>
</head>

<body>

<div class="meny w3-white">
    <ul class="w3-center">
        <li>


            <div class="w3-dropdown-hover">
                <button class="w3-button w3-white"><img src="img/test.png" alt="" height="24" width="24"/>Profile</button>
                <div class="w3-dropdown-content w3-bar-block w3-border bounceInRight w3-dark-gray w3-card-4">
                    <a onclick="showContenu('signup')" class="w3-bar-item w3-button w3-large sub-menu"><i class="fa fa-eye w3-small"></i> See profile</a>

                    <a onclick="showContenu('modify')" class="w3-bar-item w3-button w3-large sub-menu"><i class="fa fa-edit w3-small"></i> Modify profile</a>
                </div>
            </div>

        </li>
        <li>

            <div class="w3-dropdown-hover">
                <button class="w3-button w3-white w3-hover-gray"><img src="img/payment-method.png" alt="" height="24" width="24"/>Payments</button>
                <div class="w3-dropdown-content w3-bar-block w3-border bounceInRight w3-dark-gray w3-card-4">
                    <a onclick="showContenu('paid')" class="w3-bar-item w3-button w3-large sub-menu"><i class="fa fa-money w3-small"></i> To be paid</a>
                    <a onclick="showContenu('paid')" class="w3-bar-item w3-button w3-large sub-menu"><i class="fa fa-money w3-small"></i> Paid</a>
                </div>
            </div>


        </li>
        <li>

            <div class="w3-dropdown-hover">
                <button class="w3-button w3-white w3-hover-gray">
                    <img src="img/password.png" alt="" height="24" width="24"/>Account
                </button>
                <div class="w3-dropdown-content w3-bar-block w3-border bounceInRight w3-dark-gray w3-card-4">
                    <a onclick="showContenu('login')" class="w3-bar-item w3-button w3-large sub-menu"><i
                            class="fa fa-user-circle-o w3-small"></i> Login</a>
                    <a onclick="showContenu('reg')"" class="w3-bar-item w3-button w3-large sub-menu"><i
                            class="fa fa-address-card-o"></i> Registration</a>
                    <a href="#" class="w3-bar-item w3-button w3-large sub-menu"><i
                            class="fa fa-lock w3-small"></i> Password</a>
                </div>
            </div>

        </li>

        <li class="w3-hover-light-gray"><a href="#"><img src="img/alarm.png" alt="" height="24" width="24"/>Alerts</a></li>

    </ul>
</div>

<div class="meny-arrow"></div>

<div class="contents">
    <!--Profile-->

    <?php include "profile.php"; ?>
    <?php include "ModifyProfile.php"; ?>
    <?php include "paid.php"; ?>
    <?php include "registration.php"; ?>
    <?php include "login.php"; ?>






</div>

<script src="js/meny.js"></script>
<script>
    // Create an instance of Meny
    var meny = Meny.create({
        // The element that will be animated in from off screen
        menuElement: document.querySelector( '.meny' ),

        // The contents that gets pushed aside while Meny is active
        contentsElement: document.querySelector( '.contents' ),

        // [optional] The alignment of the menu (top/right/bottom/left)
        position: Meny.getQuery().p || 'top',

        // [optional] The height of the menu (when using top/bottom position)
        height: 200,

        // [optional] The width of the menu (when using left/right position)
        width: 260,

        // [optional] Distance from mouse (in pixels) when menu should open
        threshold: 40,

        // [optional] Use mouse movement to automatically open/close
        mouse: true,

        // [optional] Use touch swipe events to open/close
        touch: true
    });

    // API Methods:
    // meny.open();
    // meny.close();
    // meny.isOpen();

    // Events:
    // meny.addEventListener( 'open', function(){ console.log( 'open' ); } );
    // meny.addEventListener( 'close', function(){ console.log( 'close' ); } );

    // Embed an iframe if a URL is passed in
    if( Meny.getQuery().u && Meny.getQuery().u.match( /^http/gi ) ) {
        var contents = document.querySelector( '.contents' );
        contents.style.padding = '0px';
        contents.innerHTML = '<div class="cover"></div><iframe src="'+ Meny.getQuery().u +'" style="width: 100%; height: 100%; border: 0; position: absolute;"></iframe>';
    }

    function showContenu(id) {
        var i;
      var x= document.getElementsByClassName("contenu");
      for(i=0;i< x.length;i++)
      {
         x[i].style.display="none";
      }
      document.getElementById(id).style.display="block";


    }
</script>

<script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>



</body>
</html>
