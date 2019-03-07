<!DOCTYPE html>
<html>
<head>
  <meta name="wiewport" content="width=device-width,initial-scale=1">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="css/image/owl.theme.default.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<title>SEN Shopping</title>
<link href="{{ asset('css/main.css') }}" rel="stylesheet" />
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>
  <section class="indigo">
  <nav class="navbar navbar-default">
    <div class="container">
        <title id="title">SEN SHOPPING</title>
        <div class="navbar">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar2">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
             </button>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar2"> 
             <ul class="nav navbar-nav" id="nav">
                <li><a href="#">ACCUEIL</a></li>
                <li><a href="#">HOMME</a></li>
                <li><a href="#">FEMME</a></li>
                <li><a href="#">LOOKBOOK</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="/home">ADMIN</a></li>
                <li><img src="../css/image/bag.png" id="img"></li>
                <li><img src="../css/image/search.png" id="search"></li>
             </ul>
        </div>
    </div>
</nav>
     <div class="container-fluid">
            <div class="row">                   
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background:#7841a4;">
                  <!-- Indicators -->          
                  <ol class="carousel-indicators"><h1 id="small">A PARTIR DE 6000  Fcfa<br>2019<br>COLLECTION D'ETE<br/><br/><button class="btn btn-danger">ACHETE MAINTENANT</button></h1>      
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>                
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>                   
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="../css/image/slider-img.png" alt="">
                    </div>
                    <div class="item">
                      <img src="../css/image/slider-img.png" alt="">
                    </div>                  
                    <div class="item">
                      <img src="../css/image/slider-img.png" alt="">
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>                   
                  </a>
                </div>
              </div>
            </div> 
     </section>
<body>
      @yield('content')
</body>
  <footer>
        @yield('footer')
  </footer>