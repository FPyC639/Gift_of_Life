<?php
include "header.php";

?>
 
<style>
  .carousel{
    height: 40rem;
  }
  .carousel-item{
    height:40rem;
    background: #000;
    color:white;
    background-position: center;
    background-size: cover;
  }

  .container {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .overlay-image{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top:0;
    background-position: center;
    background-size: cover;
    opacity:  0.5;
  }

  .card{
    position: center;
    bottom: 0;
    left: 0;
    right: 0;
    top:0;
  }
  .scrollable{
    overflow-y: auto;
    max-height:10em;
  }
  .card-text {
      overflow-y: auto;
      text-overflow: ellipsis;
      white-space: wrap;
      max-height:  15em;
  }
  .footer{
    background: #111;
    color:white;
    background-position: center;
    background-size: cover;
  }

  .form-group{
    background-color: #111;
    color:white;
    background-position: center;
    background-size: cover;
    margin-bottom: 0;
  }
  .categories{
    background: #111;
    color:white;
    background-position: center;
    background-size: cover;
  }



</style>

<!-- carousel -->
<div id='myJumbotron' class='carousel slide' >

<!-- Carousel content -->
  <div class='carousel-inner'>
    <!-- Card start -->
    <div class='carousel-item active' data-interval='8000' >
      <div class = 'overlay-image' style='background-image:url(images/bpimg.jpg);'></div>
      <div class ='container'>
        <div class='card text-bg-dark mb-3' style='width: auto;'>
            
            <div class='row  scrollable-2 '>

          <div class = 'col-md-8 '>
            <div class='card-body' >
              <h3 class='card-title'>Welcome to Gift of Life's Homepage</h3>
              <p class='card-text'>Here at Gift of Life, we aim to streamline the donation process. Giving users the tools necessary to request and make donations. Allowing greater access for hospitals, blood banks, and other medical centers to provide more efficent donation inqueries. We aim to make the donation process seamless.</p>

              <a href='#' class='btn btn-primary'>Get Started!</a>

          </div>
          </div>
            <div class = 'col-md-4 d-none d-md-block' >
              <img class='card-img' src='images/Life.png' alt='Card image' >
            </div>

           </div>
        </div>
      </div>  
      </div>
    </div>
    <!-- Card end -->
    
  </div>

<!-- carousel end-->




<?php
include 'footer.php';
echo"</body></html>";

?>