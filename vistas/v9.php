<br>
<div class="row">
    <canvas id="myChart" width="400" height="200"></canvas>
</div>
<br>
<hr>
<script>
var ctx = document.getElementById("myChart");
    
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["1772", "8272", "7171", "6222", "2626", "1282", "6262"],
        datasets: [{
            label: 'Indice de Masa Corporal (IMC)',
            data: [12, 19, 3, 5, 2, 3, 44],
          
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>