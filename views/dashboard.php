<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <h1 class="mt-4">Bienvenido:
                <?= $_SESSION["nombre_usuario"] ?></h1>
        </div>
        <div class="col">

        </div>
    </div>
</div>

<html>

<div class="row">
    <h2 class="mt-4">Dashboard</h2>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Primary Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">

                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Warning Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">

                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Success Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">

                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Danger Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">

                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>


</html>


<?php
$con = mysqli_connect("localhost", "root", "", "MVC");
if (!$con) {
    echo "conexion fallida";
} else{
         $sql ="SELECT status FROM clientes";
         $result = mysqli_query($con,$sql);
         $chart_data="";
                
         while ($row = mysqli_fetch_array($result)) { 
           
            $productname[]  = $row['status'];
            
            $sales[] = $row['status'];
        }
 
 
 }
 
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div style="width:30%;hieght:20%;text-align:center">
        <h2 class="page-header">Reporte de estatus </h2>
        <div>Personas </div>
        <canvas id="chartjs_pie"></canvas>
    </div>
</body>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
var ctx = document.getElementById("chartjs_pie").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: <?php echo json_encode($productname); ?>,
        datasets: [{
            backgroundColor: [
                "#5969ff",
                "#ff407b",
                "#25d5f2",
                "#ffc750",
                "#2ec551",
                "#7040fa",
                "#ff004e"
            ],
            data: <?php echo json_encode($sales); ?>,
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom',

            labels: {
                fontColor: '#71748d',
                fontFamily: 'Circular Std Book',
                fontSize: 14,
            }
        },


    }
});
</script>

</html>