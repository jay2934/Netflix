<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Netflix</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/home.css">
  <script src="js/home.js"></script>
</head>
<body>
  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="netflixLogo">
        <a id="logo" href="#home"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="#home">Home</a>
        <a href="#tvShows">TV Shows</a>
        <a href="#movies">Movies</a>
        <a href="#originals">Originals</a>
        <a href="#">Recently Added</a>
        <a target="_blank" href="https://codepen.io/cb2307/full/NzaOrm">Portfolio</a>        
      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="#">Account</a>        
      </nav>      
    </header>
    <!-- END OF HEADER -->
    
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Popular on Netflix</h1>
          <div class="box">
            @if (count($films))
              @foreach($films as $film)
                <a href=""><img src="{{$film->pochette}}" alt=""></a>
              @endforeach
            
              @else
                <p>Aucun films</p>
            @endif
          </div>
      </div>
      

      <h1 id="myList">Trending Now</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            <a href=""><img src="{{$film->pochette}}" alt=""></a>
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif                  
      </div>
      
      <h1 id="tvShows">TV Shows</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            <a href=""><img src="{{$film->pochette}}" alt=""></a>
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif              
      </div>
      

      <h1 id="movies">Blockbuster Action & Adventure</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            <a href=""><img src="{{$film->pochette}}" alt=""></a>
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif            
      </div>

      <h1 id="originals">Netflix Originals</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            <a href=""><img src="{{$film->pochette}}" alt=""></a>
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif                
      </div>
     
    <!-- END OF MAIN CONTAINER -->

    <!-- LINKS -->
    <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->

    <!-- FOOTER -->
    <footer>
      <p>&copy 1997-2018 Netflix, Inc.</p>
      <p>Carlos Avila &copy 2018</p>
    </footer>
  </div>
</body>
</html>