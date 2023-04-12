<?php
include "header.php";
include "dbconfig.php";
$query = " Select month_of_interactions, interactions FROM organ_recipient_interaction_rate;";
$result = mysqli_query($conn, $query);

$interactionsData = array();
while ($row = mysqli_fetch_assoc($result)) {
  $interactionsData[] = $row;
}
$interactionsData = json_encode($interactionsData);
echo"
<div class='card bg-white text-white'>
  <img class='card-img bg-transparent' src='images/tangerine.png' alt='Card image' >
  <div class='card-img-overlay'>
    <h2 class='card-title' style='color:white;'>Key Metrics</h2>
    <div class = 'col-lg-4'>
    <p class='card-text' style='color:white;'>
        The founders of Gift of Life are transperant about the results that they acheive in there short time of being open.
        Here is the results of the company thus far.
    </p>
  </div>

  <br>
  <br>
  <div class='col-lg-6'>
    <canvas id='myChart'></canvas>
  </div>
  <script>
  const interactionsData = $interactionsData;

  const labels = interactionsData.map(data => data.month_of_interactions);
  const data = interactionsData.map(data => data.interactions);

  const ctx = document.getElementById('myChart').getContext('2d');
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
  <p style='color:white;'><p>

  <br>
  <br>
  <br>
  <br>
  </div>
</div>

 ";




include 'footer.php';
echo"</body></html>";

?>