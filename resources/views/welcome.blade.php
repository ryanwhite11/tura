<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.fontawesome.com/8fc58092e5.js"></script>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <title>Tura</title>

        
    </head>
    <body>
        
        @include('partials.header')

        <section id="mainLanding" class="container-fluid">
        <h2 class="hide">Tura Landing</h2>
            <div class="row align-items-center justify-content-center">
                <div class="col-10">
                    <img src="img/logo.png" alt="Tura Logo" id="landingLogo" class="align-self-center">
                    <div class="buttonWhite d-sm-none" id="landingButton"><a href="#">ORDER</a></div>
                </div>
                <div id="landingDotCon">
                    <div class="landingDot"><a href="#"></a></div>
                    <div class="landingDot"><a href="#"></a></div>
                    <div class="landingDot"><a href="#"></a></div>
                    
                </div>
            </div>
        </section>

        <section class="container" id="whatCon">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1" id="whatTura">
                    <h2>What Is Tura?</h2>
                    <h3 class="green">designed for the plant lover</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <div class="buttonRed"><a href="#">BUTTON</a></div>
                </div>
                <div class="col-12">
                    <img src="img/greenPlant.jpg" alt="Plant Lover Image" id="personalImg">
                </div>

                <div class="col-12 col-md-10">
                    <h2>Personal Gardener</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div id="personalDotCon">
                        <div class="personalDot"><a href="#"></a></div>
                        <div class="personalDot"><a href="#"></a></div>
                        <div class="personalDot"><a href="#"></a></div>
                    </div>
                </div>
                
            </div>
            
        </section>  

        <section id="indoorCon">
        <h2 class="hide">Tura Purpose Section</h2>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <h2 class="white">Multi Purpose Monitoring System</h2>
                    <h3 class="white">use indoor or outdoor</h3>
                </div>
            </div>
        </div>
        </section> 

        <section id="worksCon">
            <h2 class="hide">How Tura Works Section</h2>
            <div class="container">
                <div class="row">
                    <div class="col-12" id="featureInfoHead">
                        <h2>How Tura Works</h2>
                        <h3 class="green">where science meets nature</h3> 
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 featureInfoCon" id="featureCon1">
                        <h2 class="green">Termperature Sensor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 featureInfoCon" id="featureCon2">
                        <h2 class="green">Light Sensor</h2>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 featureInfoCon" id="featureCon3">
                        <h2 class="green">Moisture Sensor</h2>
                        <p>Lorem ipsum dolor sit amer, lorem.</p>
                    </div>

                    <div class="col-12" id="pottedPlantCon">
                        <picture>
                            <source srcset="img/plant-lrg.jpg" media="(min-width:992px)">
                            <source srcset="img/plant-med.jpg" media="(min-width:768px)">
                            <img src="img/plant.jpg" alt="Tura Potted Plant">
                        </picture>
                    </div>
                    
                </div>
            </div>
            
        </section> 

        <section id="appCon">
            <h2 class="hide">App Info</h2>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1" id="appInfo">
                        <h2>The App</h2>
                        <h3>connecting to your plants</h3>     
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>      
                        <div class="buttonRed"><a href="#">Download</a></div>            
                    </div>
                    <div class="col-12 col-sm-8 offset-sm-2" id="appPhones">
                        <img src="img/iphones.png" alt="Tura App Smartphone Image">
                        
                    </div>
                    <div class="col-12 col-md-10" id="appInfo2">
                        <h2>Monitor Your Plants From Anywhere</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>      
                    </div>

                    <div class="col-12 col-sm-10 col-md-8 offset-sm-1 offset-md-2" id="appTablets">
                        <img src="img/ipads.png" alt="Tura App Tablet Image">
                    </div>
                </div>
                
            </div>
        </section> 

        <section id="turaVideoCon">
            <h2 class="hide">Tura Video</h2>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-8">
                        <img src="img/logo.png" alt="Logo Video Placeholder">
                    </div>
                </div>
            </div>
        </section> 

        <section id="orderCon">
            <h2 class="hide">Order A Tura</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-11 col-md-8" id="orderInfo">
                        <h2>Get Your Tura Now</h2>
                        <h3>start growing today</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <div class="buttonGreen"><a href="#">PRE-ORDER</a></div>
                    </div>  
                </div>
                
            </div>
        </section>


        @include('partials.footer')

    <script src="js/menu.js"></script>
    </body>
</html>
