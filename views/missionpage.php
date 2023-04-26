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
    opacity:  0.3;
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


 
<div class='container-fluid text-center' style ='background-color: #ffeace;'>
  
    <div class='row'>
    <h1 class='display-1' >Mission Page</h1>
    <hr class=' rounded border  border-3 opacity-75' style ='border-color:#005247 !important;'>
    </div>

     <div class='row'>
    <div class = 'col-lg-4 mx-auto'> 
    <p class=>
        The founders of Gift of Life worked in mind of the people in society who need life saving donations to
        function and support their families.          
    </p>
  </div>
  <hr class=' rounded border  border-3 opacity-75' style ='border-color:#a47953 !important;'>
   </div>



  <div class='row'>
  <h3 class ='display-5'>Live Testimonals:</h3>
  </div>


 <div class = "row">
</div>



</div>


<!-- carousel -->
<div id='myJumbotron' class='carousel slide' data-bs-ride='carousel' >
   <!-- Indicators -->
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#myJumbotron' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#myJumbotron' data-bs-slide-to='1' aria-label='Slide 2'></button>
  </div>

<!-- Carousel content -->
  <div class='carousel-inner '>
    <!-- Card start -->
    <div class='carousel-item active' data-interval='8000' >
      <div class = 'overlay-image' style='background-image:url(images/flower.jpg);'></div>
      <div class ='container'>
        <div class='card text-bg-dark mb-3' style='width: auto;'>
            
            <div class='row  scrollable-2 '>

          <div class = 'col-md-8 '>
            <div class='card-body' >
              <h3 class='card-title'>Anonymous</h3>
              <p class='card-text'>I don't know who you are, but I want to express my deepest gratitude to you for giving me the gift of life. Thanks to your selfless act of donating your organ, I have a second chance at life and the opportunity to spend more time with my loved ones.<br><br>

    I can only imagine the courage and compassion it takes to make such a decision, and I want you to know that your generosity has not gone unnoticed. You have made an incredible difference in my life and in the lives of my family and friends.<br><br>

    Although we may never meet, I will always carry you in my heart and will never forget the incredible gift you have given me. You are a true hero and an inspiration to us all.</p>


          </div>
          </div>
            <div class = 'col-md-4 d-none d-md-block' >
              <img class='card-img' src='images/silo.svg' alt='Card image' >
            </div>

           </div>
        </div>
      </div>  
      </div>

      <!-- Card start -->
    <div class='carousel-item' data-interval='8000' >
      <div class = 'overlay-image' style='background-image:url(images/flower2.jpg);'></div>
      <div class ='container'>
        <div class='card text-bg-dark mb-3' style='width: auto;'>
            
            <div class='row  scrollable-2 '>

          <div class = 'col-md-8 '>
            <div class='card-body' >
              <h3 class='card-title'>Anonymous</h3>
              <p class='card-text'>When I was diagnosed with leukemia, a bone marrow transplant was my only hope.
                <br><br>The procedure was tough, but I had an amazing support system and an incredible medical team who helped me through it.
                <br><br>Today, I'm cancer-free and grateful to the donor who made it all possible. To anyone facing a bone marrow transplant, don't give up – there is hope.</p>


          </div>
          </div>
            <div class = 'col-md-4 d-none d-md-block' >
              <img class='card-img' src='images/silo.svg' alt='Card image' >
            </div>

           </div>
        </div>
      </div>  
      </div>
    </div>
    <!-- Card end -->





          <!-- Buttons-->
  <button class='carousel-control-prev' type='button' data-bs-target='#myJumbotron' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#myJumbotron' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
    </div>
    <!-- Card end -->








    
  </div>

<!-- carousel end-->









<?php
include 'footer.php';
echo"</body></html>";

?>