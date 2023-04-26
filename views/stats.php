<?php
include "header.php";
include "dbconfig.php";
?>

<style>
  .carousel{
    height: 40rem;
  }
  .carousel-item{
    height:40rem;
    background: #444;
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
  .body{
    padding-bottom: 70px;
    background-color: #ffeace;

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
<?php
$query = " Select month_of_interactions, interactions FROM organ_recipient_interaction_rate;";
$con = mysqli_connect($host,$username, $password, $dbname);
$result = mysqli_query($con, $query);

$interactionsData = array();
while ($row = mysqli_fetch_assoc($result)) {
  $interactionsData[] = $row;
}
$interactionsData = json_encode($interactionsData);


echo"<!-- carousel -->
<div id='myJumbotron' class='carousel slide' >

<!-- Carousel content -->
  <div class='carousel-inner'>
    <!-- Card start -->
    <div class='carousel-item active' data-interval='8000' >
      <div class = 'overlay-image' style='background-image:url(images/pulse.jpg);'></div>
      <div class ='container'>
        <div class='card text-bg-light mb-3' style='width: auto;'>
            
          
            <div class='card-body' style ='background-color: #ffeace;'>
               <div class='row'>
      
      <h2 class=' card-title display-3' >Key Metrics</h2>
      
    </div>

    <div class ='row'>

        <div class = 'col-lg-4'>
          <p class='card-text'>
            The founders of Gift of Life are transperant about the results that they acheive in there short time of being open.
            Here is the results of the company thus far.
          </p>
        </div>

  
        <div class='col-lg-8'>
          <canvas id='myChart2'></canvas>
          <script>
            const interactionsData = $interactionsData;

            const labels = interactionsData.map(data => data.month_of_interactions);
            const data = interactionsData.map(data => data.interactions);

            const ctx = document.getElementById('myChart2').getContext('2d');
            const myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: labels,
                datasets: [{
                  label: 'Organ Donation and Recipient Interaction Rate',
                  data: data,
                  backgroundColor: 'rgba(54, 162, 235, 0.2)',
                  borderColor: 'rgba(54, 162, 235, 1)',
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }]
                }
              }
            });
          </script>
        </div>

            
    </div>

        
           

           </div>
        </div>
      </div>  
      </div>
    </div>
    <!-- Card end -->
    
  </div>

<!-- carousel end-->
";


include 'footer.php';

echo"</body></html>"; ?>