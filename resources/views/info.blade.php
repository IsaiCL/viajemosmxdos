<html>
<head>
    <title>VAmosMx</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    body {
    font-family: "Times New Roman", Georgia, Serif;}
    h1, h2, h3, h4, h5, h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
    }
    div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
    }

    div.gallery:hover {
    border: 1px solid #777;
    }

    div.gallery img {
    width: 100%;
    height: auto;
    }

    div.desc {
    padding: 15px;
    text-align: center;
    }
    *, *:before, *:after{
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing:border-box;
    box-sizing: border-box;
    }
    .main-title{
    color: #2d2d2d;
    text-align: center;
    text-transform: capitalize;
    padding: 0.7em 0;
    }

    .container{
    padding: 1em 0;
    float: left;
    width: 50%;
    }
    @media screen and (max-width: 640px){
    .container{
        display: block;
        width: 100%;
    }
    }

    @media screen and (min-width: 900px){
    .container{
        width: 33.33333%;
    }
    }

    .container .title{
    color: #1a1a1a;
    text-align: center;
    margin-bottom: 10px;
    }

    .content {
    position: relative;
    width: 90%;
    max-width: 400px;
    margin: auto;
    overflow: hidden;
    }

    .content .content-overlay {
    background: rgba(0,0,0,0.7);
    position: absolute;
    height: 99%;
    width: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s;
    }

    .content:hover .content-overlay{
    opacity: 1;
    }

    .content-image{
    width: 100%;
    }

    .content-details {
    position: absolute;
    text-align: center;
    padding-left: 1em;
    padding-right: 1em;
    width: 100%;
    top: 50%;
    left: 50%;
    opacity: 0;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
    }

    .content:hover .content-details{
    top: 50%;
    left: 50%;
    opacity: 1;
    }

    .content-details h3{
    color: #fff;
    font-weight: 500;
    letter-spacing: 0.15em;
    margin-bottom: 0.5em;
    text-transform: uppercase;
    }

    .content-details p{
    color: #fff;
    font-size: 0.8em;
    }

    .fadeIn-bottom{
    top: 80%;
    }

    .fadeIn-top{
    top: 20%;
    }

    .fadeIn-left{
    left: 20%;
    }

    .fadeIn-right{
    left: 80%;
    }
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
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
         <li class="nav-item"><a href="{{ url('/') }}"><b>Home</b></a></li>
         <li class="nav-item"><a href="{{ url('/map') }}"><b>Mapa</b></a></li>
         <li class="nav-item"><a href="{{ url('/events') }}"><b>Eventos</b></a></li>
         <li class="nav-item"><a href="{{ url('/map') }}"><b>Mapa</b></a></li>
         <li class="nav-item"><a href="{{ url('/info') }}"><b>Información</b></a></li>
         <li class="nav-item"><a href="{{ url('/categorias') }}"><b>Categorías</b></a></li>
         <li class="nav-item"><a href="{{ url('/tours') }}"><b>Tours</b></a></li>
         <i class="fas fa-search" id="search-icon"></i>
         <input class="search-input" type="text" placeholder="Search..">
       </ul>
     </nav>
     </div>
   </div>

  <hr>
  <div class="w3-content" style="max-width:1100px">

    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
      <div class="w3-col m6 w3-padding-large w3-hide-small">
       <img src="https://ml4ww5sfywqg.i.optimole.com/UCJ2sQ-h2lWxm3E/w:337/h:252/q:auto/http://viajaxmexico.com.mx/wp-content/uploads/2020/03/400x300-3733509-mexico-wallpapers.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
      </div>
  
      <div class="w3-col m6 w3-padding-large">
        <h1 class="w3-center">Sobre nosotros</h1><br>
        <h5 class="w3-center">Grupo NEFIX</h5>
        <p class="w3-large">Diversion es todas partes y busca lo que quieras<span class="w3-tag w3-light-grey">Busca</span> y diviertete.</p>
        <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  <hr>




<div class="container">
  <h3 class="title">Texto </h3>
  <div class="content">
    <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Titulo de la imagen</h3>
        <p class="content-text">Pequeña descripción</p>
      </div>
    </a>
  </div>
</div>

<div class="container">
  <h3 class="title">Texto </h3>
  <div class="content">
    <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
      <div class="content-details fadeIn-top">
        <h3>Titulo de la imagen</h3>
        <p>Pequeña descripción</p>
      </div>
    </a>
  </div>
</div>

<div class="container">
  <h3 class="title">Texto </h3>
  <div class="content">
    <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
      <div class="content-details fadeIn-left">
        <h3>Titulo de la imagen</h3>
        <p>Pequeña descripción</p>
      </div>
    </a>
  </div>
</div>

<div class="container">
  <h3 class="title">Texto </h3>
  <div class="content">
    <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
      <div class="content-details fadeIn-right">
        <h3>Titulo de la imagen</h3>
        <p>Pequeña descripción</p>
      </div>
    </a>
  </div>
</div>

<footer>
    <p>Company © Viajemos por MX. All rights reserved.</p>
  </footer>
</body>
</html>