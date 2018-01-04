@include('partials.head')


<header id="appHeader">
        <h2 class="hide">App Header</h2>
        
       <div id="topBar">
           <h2>Hello, Ryan</h2>
           <img src="img/userIcon.svg" alt="user Icon" id="userIcon">
           <img src="img/settingsIcon.svg" alt="settings Icon" id="settingsIcon">
       </div>

       <div id="logo">
        <h3>tura</h3>
       </div>

</header>


<section id="mainCon" class="container-fluid">

    <div id="plantInfo" class="row justify-content-center">

        <div id="plantImgCon" class="col-12 col-md-7">
            <img src="img/planty.jpg" id="plantImg">
        </div>

        <div id="plantDetails" class="col-12 col-md-5">
            <div class="centerBox">
            <p id="edit">Edit</p>
            <img src="img/editIcon.svg" alt="edit Icon" id="editIcon">
            <p class="label">Name</p>
            <h3 class="field">Planty</h3>

            <p class="label">Plant Type</p>
            <p class="field">Hydrangea</p>

            <p class="label">Loction</p>
            <p class="field">Living Room</p>

            <p class="label">Age</p>
            <p class="field" id="age">26 Days Old</p>
        </div>
            
        </div>
    </div>


    <div id="welcome" class="row">
        <div id="addCon">
            <p id="add">Add Plant</p>
            <img src="img/addIcon.svg" alt="add Icon" id="addIcon">
        </div>

        <h3>Welcome, Ryan</h3>
        <p>This is your personal tura account. Here you can view all the information you need to make sure your plants are getting everyhting they need for optimal growth.</p>    
    </div>


    <div id="plantData">
        <div id="dataMenu" class="d-md-none">
            <a href="#/"><h2 class="dataMenuItem">Water</h2></a>
            <a href="#/"><h2 class="dataMenuItem">Light</h2></a>
            <a href="#/"><h2 class="dataMenuItem">Temp</h2></a>
        </div>


        <div id="dataCon">

            <div id="water">
                <h2 class="dataMenuItem">Water</h2>
                <h3>Good</h3>
                <p id="message">Needs no watering.</p>
                <img src="img/graph.svg" alt="moisture graph" id="graph">
                <p id="moisture">75% Moist</p>
            </div>

        </div>
            
    </div>


</section>


 

@include('partials.footer')
