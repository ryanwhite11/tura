
 @include('partials.head')
 @include('partials.header')


        <section id="mainLanding" class="container-fluid">
        <h2 class="hide">Tura Landing</h2>
            
            <div class="fullscreen-bg">
                <video loop autoplay poster="img/background.jpg" class="fullscreen-bg_video d-none d-md-block">
                    <source src="videos/bgVideo.mp4" type="video/mp4">
                </video>
            </div>
            

            <div class="row align-items-center justify-content-center" id="landingArea">
                <div class="col-10" id="landingTextCon">
                    <img src="img/logo.png" alt="Tura Logo" id="landingLogo" class="align-self-center">
                    <div class="buttonWhite d-sm-none orderLink" id="landingButton"><a href="#">ORDER</a></div>
                </div>
                <div id="landingDotCon">
                    <div class="landingDot activeButton" id="ldot0"><a href="#"></a></div>
                    <div class="landingDot" id="ldot1"><a href="#"></a></div>
                    <div class="landingDot" id="ldot2"><a href="#"></a></div>
                    
                </div>
            </div>
        </section>

        <section class="container" id="whatCon">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-9" id="whatTura">
                    <h2>What Is Tura?</h2>
                    <h3 class="green">designed for the plant lover</h3>
                    <p>Revolutionizing the way you care for your plants, Tura is a plant monitoring system designed for the plant lover. Using modern technology, Tura helps you remotely take care of your plants and teaches you about your plants needs. Tura is the ultimate plant monitoring system for those who truly care for their plants.</p>
                    <div class="buttonRed"><a href="#worksCon">LEARN MORE</a></div>
                </div>
                <div class="col-12 col-lg-9 offset-lg-3">
                    <picture>
                        <source srcset="img/greenPlant.png" media="(min-width: 1000px)">
                        <img src="img/greenPlant.jpg" alt="Plant Lover Image" id="personalImg">
                    </picture>
                    
                </div>

                <div class="d-none d-lg-block col-lg-4">
                    <img src="img/potPlant.png" alt="Plant Container Image" id="plantPot">
                </div>

                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-0" id="personalCon">
                    <h2 id="infoHeader">Your Personal Gardener</h2>
                    <p id="infoText">Tura is the only gardener you will ever need. With Tura, you can finally travel without worrying about your plants. Remotely water, feed and monitor your plants from any where in the world. Access the Tura app from any device and begin remotely gardening today.</p>
                    <div id="personalDotCon">
                        <div class="personalDot activeDot" id="pdot0"><a href="#"></a></div>
                        <div class="personalDot" id="pdot1"><a href="#"></a></div>
                        <div class="personalDot" id="pdot2"><a href="#"></a></div>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" id="featureInfoHead">
                        <h2>How Tura Works</h2>
                        <h3 class="green">where science meets nature</h3> 
                    </div>

                    <div class="col-12  col-md-4 featureInfoCon" id="featureCon1">
                        <h2 class="green"  >Termperature Sensor</h2>
                        <p>Never let your plants go cold.</p>
                    </div>

                    <div class="col-12 col-md-3 featureInfoCon" id="featureCon2">
                        <h2 class="green" >Light Sensor</h2>
                        <p>Ensure your plants recieve enough sunlight.</p>
                    </div>

                    <div class="col-12 col-md-4 featureInfoCon" id="featureCon3">
                        <h2 class="green" >Moisture Sensor</h2>
                        <p>Know when and how much to water your plants.</p>
                    </div>

                    <div class="col-md-12" id="pottedPlantCon">
                        <picture>
                            <source srcset="img/plant-lrg.jpg" media="(min-width:992px)">
                            <source srcset="img/plant-med.jpg" media="(min-width:768px)">
                            <img src="img/plant-small.jpg" alt="Tura Potted Plant">
                        </picture>
                    </div>

                    <div class="d-none d-md-block col-12" id="pinkGraph">
                        <img src="img/pink-graph.svg" alt="graph svg" id="pinkGraphSvg">
                    </div>
                    
                </div>
            </div>
            
        </section> 

        <section id="appCon">
            <h2 class="hide">App Info</h2>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-xl-6 offset-xl-0" id="appInfo">
                        <h2>The App</h2>
                        <h3>connecting to your plants</h3>     
                        <p>Connecting you to your plants at all times, the Tura app is the best solution for monitoring and caring for your plants. Tura is the most advanced solution for tracking light, humidity and temperature to ensure optimal plant growth and health.</p>      
                        <div class="buttonRed"><a href="#">Download</a></div>            
                    </div>
                    <div class="col-12 col-sm-8 offset-sm-2 col-xl-5 offset-xl-1" id="appPhones">
                        <img src="img/iphones.png" alt="Tura App Smartphone Image">
                        
                    </div>
                    <div class="col-12 col-md-10 offset-md-1 col-lg-6 col-xl-6 offset-xl-6" id="appInfo2">
                        <h2>Monitor Your Plants From Anywhere</h2>
                        <p>Our app is designed and built for any device! The app allows you to monitor your plants when you’re not home. It also gives you access to information about your plants so that you know what they need and when. Download the app now and use it with tura for optimal performance.</p>      
                    </div>

                    <div class="col-12 col-sm-10 col-md-8 offset-sm-1 offset-md-2 col-xl-7 offset-xl-0" id="appTablets">
                        <img src="img/ipads.png" alt="Tura App Tablet Image">
                    </div>
                </div>
                
            </div>
        </section> 

        <!-- Once we have designed our app, we will put a demo video here -->
        <section id="turaVideoCon">
            <h2 class="hide">Tura Video</h2>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-10 col-md-6 col-lg-4">
                        <img src="img/logo.png" alt="Logo Video Placeholder">
                    </div>
                </div>
            </div>
        </section> 

        <section id="orderCon">
            <h2 class="hide">Order A Tura</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-11 col-md-7 col-xl-5 offset-xl-3" id="orderInfo">
                        <h2>Get Your Tura Now</h2>
                        <h3>start growing today</h3>
                        <p>Pre-order your tura today and be one of the first people to start growing your plants with a computer!</p>
                        <div class="buttonGreen orderLink"><a href="#">PRE-ORDER</a></div>
                    </div> 

                </div>
            </div>
        </section>


        <section>
        <div id="orderFormBlur"></div>
        <div id="orderformCon">
            <h3>pre-order your tura today</h3>
            <h2>Sign up to be notified when tura goes on sale</h2>
            <h4 id="closeForm">&#x2715;</h4>
                <form id="orderform">
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="text" name="email" placeholder="Email">
                    <button type="submit" form="orderform" value="Submit">Submit</button>
                </form>
        </div>
        </section>


        @include('partials.footer')
