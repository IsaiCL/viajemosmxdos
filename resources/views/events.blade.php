<!DOCTYPE html>
<html lang="en">
   
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <style>
  
        /* Styling the body */
        body {
            margin: 0;
            padding: 0;
            font-family: "Playfair Display";
            
        }
        *, *:before, *:after{
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing:border-box;
        box-sizing: border-box;
        }
           
        /* Styling section, giving background
            image and dimensions */
        section {
            width: 100%;
            height: 100vh;
            background: 
        url('https://ml4ww5sfywqg.i.optimole.com/UCJ2sQ-QizskRPO/w:1100/h:687/q:auto/http://viajaxmexico.com.mx/wp-content/uploads/2020/03/bahia-tangolunda-huatulco.jpg');
            background-size: cover;
        }
           
        /* Styling the left floatig section */
        section .leftBox {
            width: 50%;
            height: 100%;
            float: left;
            padding: 50px;
            box-sizing: border-box;
        }
           
        /* Styling the background of 
            left floatig section */
        section .leftBox .content {
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            padding: 40px;
            transition: .5s;
        }
           
        /* Styling the hover effect  
            of left floatig section */
        section .leftBox .content:hover {
            background: #e91e63;
        }
           
        /* Styling the header of left 
            floating section */
        section .leftBox .content h1 {
            margin: 0;
            padding: 0;
            font-size: 50px;
            text-transform: uppercase;
        }
           
        /* Styling the paragraph of 
            left floating section */
        section .leftBox .content p {
            margin: 10px 0 0;
            padding: 0;
        }
           
        /* Styling the three events section */
        section .events {
            position: relative;
            width: 50%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            float: right;
            box-sizing: border-box;
        }
           
        /* Styling the links of 
        the events section */
        section .events ul {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            margin: 0;
            padding: 40px;
            box-sizing: border-box;
        }
           
        /* Styling the lists of the event section */
        section .events ul li {
            list-style: none;
            background: #fff;
            box-sizing: border-box;
            height: 200px;
            margin: 15px 0;
        }
           
        /* Styling the time class of events section */
        section .events ul li .time {
            position: relative;
            padding: 20px;
            background: #262626;
            box-sizing: border-box;
            width: 30%;
            height: 100%;
            float: left;
            text-align: center;
            transition: .5s;
        }
           
        /* Styling the hover effect
            of events section */
        section .events ul li:hover .time {
            background: #e91e63;
        }
           
        /* Styling the header of time 
            class of events section */
        section .events ul li .time h2 {
            position: absolute;
            margin: 0;
            padding: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 60px;
            line-height: 30px;
        }
           
        /* Styling the texts of time 
        class of events section */
        section .events ul li .time h2 span {
            font-size: 30px;
        }
           
        /* Styling the details 
        class of events section */
        section .events ul li .details {
            padding: 20px;
            background: #fff;
            box-sizing: border-box;
            width: 70%;
            height: 100%;
            float: left;
        }
           
        /* Styling the header of the 
        details class of events section */
        section .events ul li .details h3 {
            position: relative;
            margin: 0;
            padding: 0;
            font-size: 22px;
        }
           
        /* Styling the lists of details 
        class of events section */
        section .events ul li .details p {
            position: relative;
            margin: 10px 0 0;
            padding: 0;
            font-size: 16px;
        }
           
        /* Styling the links of details
        class of events section */
        section .events ul li .details a {
            display: inline-block;
            text-decoration: none;
            padding: 10px 15px;
            border: 1.5px solid #262626;
            margin-top: 8px;
            font-size: 18px;
            transition: .5s;
        }
           
        /* Styling the details class's hover effect */
        section .events ul li .details a:hover {
            background: #e91e63;
            color: #fff;
            border-color: #e91e63;
        }
        .page-wrapper {
          width: 100%;
          height: auto;
          background: linear-gradient(-45deg, #40C4FF, #80D8FF, #84FFFF, #A7FFEB);
          background-size: 400% 400%;
            -webkit-animation: gradbar 15s ease infinite;
          -moz-animation: gradbar 15s ease infinite;
          animation: gradbar 15s ease infinite;
        }
      
        .nav-wrapper {
          width: 100%;
          position: -webkit-sticky; /* Safari */
          position: sticky;
          top: 0;
          background: linear-gradient(-45deg, #40C4FF, #80D8FF, #84FFFF, #A7FFEB);
          background-size: 400% 400%;
            -webkit-animation: gradbar 15s ease infinite;
          -moz-animation: gradbar 15s ease infinite;
          animation: gradbar 15s ease infinite;
        }
      
        .grad-bar {
          width: 100%;
          height: 5px;
          background: linear-gradient(-45deg, #40C4FF, #80D8FF, #84FFFF, #A7FFEB);
          background-size: 400% 400%;
            -webkit-animation: gradbar 15s ease infinite;
          -moz-animation: gradbar 15s ease infinite;
          animation: gradbar 15s ease infinite;
        }
      
        /* NAVIGATION */
      
        .navbar {
          display: grid;
          grid-template-columns: 1fr 3fr;
          align-items: center;
          height: 50px;
          overflow: hidden;
        }
      
        .navbar img {
          height: 16px;
          width: auto;
          justify-self: start;
          margin-left: 20px;
        }
      
        .navbar ul {
          list-style: none;
          display: grid;
          grid-template-columns: repeat(6,1fr);
          justify-self: end;
          
        }
      
        .nav-item a {
          color: #000;
          font-size: 0.9rem;
          font-weight: 400;
          text-decoration: none;
          transition: color 0.3s ease-out;
        }
      
        .nav-item a:hover {
          color: #3498db;
        }
      
        /* SECTIONS */
      
        .features {
          width: 100%;
          height: auto;
          background-color: #f1f1f1;
          display: flex;
          padding: 50px 20px;
          justify-content: space-around;
        }
      
        .feature-container {
          flex-basis: 30%;
          margin-top: 10px;
        }
      
        .feature-container p {
          color: #000;
          text-align: center;
          line-height: 1.4;
          margin-bottom: 15px;
        }
      
        .feature-container img {
          width: 100%;
          margin-bottom: 15px;
        }
      
        /* SEARCH FUNCTION */
      
        #search-icon {
          font-size: 0.9rem;
          margin-top: 3px;
          margin-left: 15px;
          transition: color 0.3s ease-out;
        }
      
        #search-icon:hover {
          color: #3498db;
          cursor: pointer;
        }
      
        .search {
          transform: translate(-35%);
          -webkit-transform: translate(-35%);
          transition: transform 0.7s ease-in-out;
          color: #3498db;
        }
      
        .no-search {
          transform: translate(0);
          transition: transform 0.7s ease-in-out;
        }
      
        .search-input {
          position: absolute;
          top: -4px;
          right: -125px;
          opacity: 0;
          z-index: -1;
          transition: opacity 0.6s ease;
        }
      
        .search-active {
          opacity: 1;
          z-index: 0;
        }
      
        input {
          border: 0;
          border-left: 1px solid #ccc;
          border-radius: 0; /* FOR SAFARI */
          outline: 0;
          padding: 5px;
        }
      
        /* MOBILE MENU & ANIMATION */
      
        .menu-toggle .bar{
          width: 25px;
          height: 3px;
          background-color: #3f3f3f;
          margin: 5px auto;
          -webkit-transition: all 0.3s ease-in-out;
          -o-transition: all 0.3s ease-in-out;
          transition: all 0.3s ease-in-out;
        }
      
        .menu-toggle {
          justify-self: end;
          margin-right: 25px;
          display: none;
        }
      
        .menu-toggle:hover{
          cursor: pointer;
        }
      
        #mobile-menu.is-active .bar:nth-child(2){
          opacity: 0;
        }
      
        #mobile-menu.is-active .bar:nth-child(1){
          -webkit-transform: translateY(8px) rotate(45deg);
          -ms-transform: translateY(8px) rotate(45deg);
          -o-transform: translateY(8px) rotate(45deg);
          transform: translateY(8px) rotate(45deg);
        }
      
        #mobile-menu.is-active .bar:nth-child(3){
          -webkit-transform: translateY(-8px) rotate(-45deg);
          -ms-transform: translateY(-8px) rotate(-45deg);
          -o-transform: translateY(-8px) rotate(-45deg);
          transform: translateY(-8px) rotate(-45deg);
        }
      
        /* KEYFRAME ANIMATIONS */
      
        @-webkit-keyframes gradbar {
          0% {
            background-position: 0% 50%
          }
          50% {
            background-position: 100% 50%
          }
          100% {
            background-position: 0% 50%
          }
        }
      
        @-moz-keyframes gradbar {
          0% {
            background-position: 0% 50%
          }
          50% {
            background-position: 100% 50%
          }
          100% {
            background-position: 0% 50%
          }
        }
      
        @keyframes gradbar {
          0% {
            background-position: 0% 50%
          }
          50% {
            background-position: 100% 50%
          }
          100% {
            background-position: 0% 50%
          }
        }
      
        /* Media Queries */
      
          /* Mobile Devices - Phones/Tablets */
      
        @media only screen and (max-width: 720px) { 
          .features {
            flex-direction: column;
            padding: 50px;
          }
          
          /* MOBILE HEADINGS */
          
          h1 {
            font-size: 1.9rem;
          }
          
          h2 {
            font-size: 1rem;
          }
          
          p {
            font-size: 0.8rem;
          }
          
          /* MOBILE NAVIGATION */
            
          .navbar ul {
            display: flex;
            flex-direction: column;
            position: fixed;
            justify-content: start;
            top: 55px;
            background-color: #fff;
            width: 100%;
            height: calc(100vh - 55px);
            transform: translate(-101%);
            text-align: center;
            overflow: hidden;
          }
          
          .navbar li {
            padding: 15px;
          }
          
          .navbar li:first-child {
            margin-top: 50px;
          }
          
          .navbar li a {
            font-size: 1rem;
          }
          
          .menu-toggle, .bar {
            display: block;
            cursor: pointer;
          }
          
          .mobile-nav {
          transform: translate(0%)!important;
        }
          
          /* SECTIONS */  
          .feature-container p {
            margin-bottom: 25px;
          }
          
          .feature-container {
            margin-top: 20px;
          }
          
          .feature-container:nth-child(2) {
            order: -1;
          }
          
          /* SEARCH DISABLED ON MOBILE */
          
          #search-icon {
            display: none;
          }
          
          .search-input {
          display: none;
        }
          
        }
      
        footer {
              padding: 10px 20px;
              background: #666;
              color: white;
        }
    </style>
</head>
   
<body>
    <div class="page-wrapper">
        <div class="nav-wrapper">
          <ul class="nav no-search">
             <li class="nav-item"><a href="{{ url('/') }}"><b>Home</b></a></li>
             <li class="nav-item"><a href="{{ url('/') }}"><b>About</b></a></li>
             <li class="nav-item"><a href="{{ url('/events') }}"><b>Eventos</b></a></li>
             <li class="nav-item"><a href="{{ url('/map') }}"><b>Mapa</b></a></li>
             <li class="nav-item"><a href="{{ url('/info') }}"><b>Información</b></a></li>
             <li class="nav-item"><a href="{{ url('/categorias') }}"><b>Categorías</b></a></li>
             <li class="nav-item"><a href="{{ url('/tours') }}"><b>Tours</b></a></li>
             <i class="fas fa-search" id="search-icon"></i>
             <input class="search-input" type="text" placeholder="Search..">
          </ul>
         <div class="grad-bar"></div>
         <nav class="navbar">
           <img src="https://th.bing.com/th/id/OIP.6SmJYoZ2xVueQD3CiZj_UQHaHa?pid=ImgDet&rs=1" alt="Company Logo">
           <div class="menu-toggle" id="mobile-menu">
             <span class="bar"></span>
             <span class="bar"></span>
             <span class="bar"></span>
           </div>
         </nav>
         </div>
       </div>

    <div class="container">
        <section>
            <div class="leftBox">
                <div class="content">
                    <h1>
                        Events and Shows
                    </h1>
                    <p>
                        With the idea of imparting programming 
                        knowledge, Mr. Sandeep Jain, an IIT 
                        Roorkee alumnus started a dream, 
                        GeeksforGeeks. Whether programming 
                        excites you or you feel stifled, 
                        wondering how to prepare for 
                        interview questions or
                        how to ace data structures and 
                        algorithms, GeeksforGeeks is a 
                        one-stop solution. With every 
                        tick of time, we are adding arrows 
                        in our quiver. From articles on 
                        various computer science subjects 
                        to programming problems for practice,
                        from basic to premium courses, from 
                        technologies to entrance examinations, 
                        we have been building ample content 
                        with superior quality. In a short 
                        span, we have built a community of 
                        1 Million+ Geeks around the world, 20,000+
                        Contributors and 500+ Campus Ambassadors 
                        in various colleges across the nation. 
                        Our success stories include a lot of 
                        students who benefitted in their 
                        placements and landed jobs at tech 
                        giants. Our vision is to build a gigantic
                        network of geeks and we are only a 
                        fraction of it yet.
                    </p>
                </div>
            </div>
            <br><br>
       
            <div class="events">
                <ul>
                    <li>
                        <div class="time">
                            <h2>
                                15 <br><span>March</span>
                            </h2>
                        </div>
                        <div class="details">
                            <h3>
                                Where is the event happening?
                            </h3>
                            <p> 
                                With the idea of imparting programming 
                                knowledge, Mr. Sandeep Jain, an IIT 
                                Roorkee alumnus started a dream, 
                                GeeksforGeeks. Whether programming 
                                excites you or you feel stifled, 
                                how to ace data structures and 
                                algorithms, GeeksforGeeks is a 
                                one-stop solution.
                            </p>
       
                            <a href="#">View Details</a>
                        </div>
                        <div style="clear: both;"></div>
                    </li>
                    <br>
       
                    <li>
                        <div class="time">
                            <h2>
                                27 <br><span>May</span>
                            </h2>
                        </div>
                        <div class="details">
                            <h3>
                                Where is the event happening?
                            </h3>
                            <p>
                                With the idea of imparting programming 
                                knowledge, Mr. Sandeep Jain, an IIT 
                                Roorkee alumnus started a dream, 
                                GeeksforGeeks. Whether programming 
                                excites you or you feel stifled, 
                                how to ace data structures and 
                                algorithms, GeeksforGeeks is a 
                                one-stop solution.
                            </p>
                            <a href="#">View Details</a>
                        </div>
                        <div style="clear:both;"></div>
                    </li>
                    <br>
       
                    <li>
                        <div class="time">
                            <h2>
                                12 <br><span>August</span>
                            </h2>
                        </div>
                        <div class="details">
                            <h3>
                                Where is the event happening?
                            </h3>
                            <p>
                                With the idea of imparting programming 
                                knowledge, Mr. Sandeep Jain, an IIT 
                                Roorkee alumnus started a dream, 
                                GeeksforGeeks. Whether programming 
                                excites you or you feel stifled, 
                                how to ace data structures and 
                                algorithms, GeeksforGeeks is a 
                                one-stop solution.
                            </p>
       
                            <a href="#">View Details</a>
                        </div>
                        <div style="clear:both;"></div>
                    </li>
                </ul>
                <br>
            </div>
        </section>

    </div>
    <br><br><br><br><br>
    <footer>
        <p>Company © Viajemos por MX. All rights reserved.</p>
      </footer>
    
</body>
<script>
    $("#search-icon").click(function() {
      $(".nav").toggleClass("search");
      $(".nav").toggleClass("no-search");
      $(".search-input").toggleClass("search-active");
    });
  
    $('.menu-toggle').click(function(){
      $(".nav").toggleClass("mobile-nav");
      $(this).toggleClass("is-active");
    });
    
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>