<?php 
include 'entete.php';

?>
<head>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body  >
    <div>
        <canvas id="myChart"></canvas>
    </div>

    <?php
        $con = mysqli_connect("localhost","root","","gestion_stock_leptit");

        if(!$con){
            echo "connexion échouée";
        }
        $req = mysqli_query($con, "SELECT ");

    ?>


    <script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
    'Aout','Septembre','Octobre','Novembre','Décembre'],
      datasets: [{
        label: '# of Votes',
        data: [12, 13, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<script>
    const myChart = new Chart(document.getElementById('myChart'), config);
</script>

</body>
    
<?php 
include 'pied.php';
?>
