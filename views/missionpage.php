<?php
include "header.php";

echo"   
<div class='card bg-white text-white'>
  <img class='card-img bg-transparent' src='images/tangerine.png' alt='Card image' >
  <div class='card-img-overlay'>
    <h2 class='card-title' style='color:white;'>Mission Page</h2>
    <div class = 'col-lg-4'> 
    <p class='card-text' style='color:white;'>
        The founders of Gift of Life worked in mind of the people in society who need life saving donations to
        function and support their families.          
    </p>
  </div>

  <br>
  <br>

  <p style='color:white;'>Live Testimonals:<p>

  <div class='thumbnail'>
  <a href='#' onclick=\"toggleContent( './testimonals/test1.html' )\">
  <img src='thumbnail.jpg' alt='Thumbnail1'>
  </a>
  </div>
  <div class='thumbnail'>
  <a href='#' onclick=\"toggleContent( './testimonals/test2.html' )\">
  <img src='thumbnail.jpg' alt='Thumbnail2'>
  </a>
  </div>
<div id='content'></div>

<script>
  var loaded = false;

  function toggleContent(url) {
    if (loaded) {
      document.getElementById('content').innerHTML = '';
      loaded = false;
    } else {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById('content').innerHTML = this.responseText;
          loaded = true;
        }
      };
      xhttp.open('GET', url, true);
      xhttp.send();
    }
  }
</script>


  </div>
</div>

 ";

include 'footer.php';
echo"</body></html>";

?>