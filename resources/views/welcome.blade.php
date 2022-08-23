<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Home</title>
</head>
<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Lato', 'Arial', sans-serif;
  }

  /* HEADINGS */

  h1, p {
    background: linear-gradient(-45deg, #40C4FF, #80D8FF, #84FFFF, #A7FFEB);
    background-size: 400% 400%;
      -webkit-animation: gradbar 15s ease infinite;
    -moz-animation: gradbar 15s ease infinite;
    animation: gradbar 15s ease infinite;
    text-align: center;
    line-height: 1.4;
  }

  h1 {
    font-size: 2.2rem;
  }

  h2 {
    color: #000;
    font-size: 1.3rem;
    text-align: center;
    line-height: 1.4;
    margin-bottom: 10px;
  }

  /* BASIC SETUP */

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
<body>
  <div class="page-wrapper">
    <div class="nav-wrapper">
     <div class="grad-bar"></div>
     <nav class="navbar">
       <img src="https://th.bing.com/th/id/OIP.6SmJYoZ2xVueQD3CiZj_UQHaHa?pid=ImgDet&rs=1" alt="Company Logo">
       <div class="menu-toggle" id="mobile-menu">
         <span class="bar"></span>
         <span class="bar"></span>
         <span class="bar"></span>
       </div>
       
       <ul class="nav no-search">

         <li class="nav-item"><a href="{{ url('/') }}"> <b>Home</b></a></li>
         <li class="nav-item"><a href="{{ url('/events') }}"><b>Eventos</b></a></li>
         <li class="nav-item"><a href="{{ url('/login') }}"><b>Login</b></a></li>
         <li class="nav-item"><a href="{{ url('/register') }}"><b>Registrarse</b></a></li>
         <i class="fas fa-search" id="search-icon"></i>
         <input class="search-input" type="text" placeholder="Search..">
       
       </ul>
     </nav>
     </div>
   </div>  

   <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <img class="w3-image" src="https://almomento.mx/wp-content/uploads/2019/07/Merida.jpg" alt="Hamburger Catering" width="1600" height="800">
    <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    </div>
  </header>

   <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="https://ml4ww5sfywqg.i.optimole.com/UCJ2sQ-h2lWxm3E/w:337/h:252/q:auto/http://viajaxmexico.com.mx/wp-content/uploads/2020/03/400x300-3733509-mexico-wallpapers.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>
    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Sobre nosotros</h1><br>
      <h5 class="w3-center">Grupo NEFIX</h5>
      <p class="w3-large">Diversion es todas partes y busca lo que quieras</p>
    </div>
  </div>


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