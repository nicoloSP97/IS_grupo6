<?php
include("../bdd/bdd.php");
session_start();
$rut=$_SESSION['rut'];
$consultaRegistroSql="SELECT * FROM usuario u,habita h where u.rut=$rut and u.rut=h.rut";
$consultaRegistro=mysqli_query($con, $consultaRegistroSql);
$reg = mysqli_fetch_array($consultaRegistro);
$nombre=$reg['nombre'];
$id_depa=$reg['id_depa'];
$mes_act=date('m');
//consulta sobre detalles de gasto
$consultadetallesSql= "SELECT * FROM departamento d, pago_gasto p, gasto_comun g
where d.id_depa=$id_depa and d.id_depa=p.id_depa and p.cod_gasto=g.cod_gasto";
$consultadetalles=mysqli_query($con,$consultadetallesSql);
$resultado=mysqli_fetch_array($consultadetalles);
$cantidad_filas=mysqli_num_rows($consultadetalles);
?>

<!-- head -->
<?php include('../partes/head.php') ?>
    <!-- fin head -->


<body>
    <div class="d-flex" id="content-wrapper">
    <!-- sideBar -->
    <?php include('../partes/sidebar.php') ?>
    <!-- fin sideBar -->

        <div class="w-100">

    <!-- Navbar -->
        <?php include('../partes/nav.php') ?>
    <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

                <section class="bg-light py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">PAGO DE GASTOS COMUNES</h1>
                                <p class="lead text-muted">paga aqui tus gatos comunes de edifred</p>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Descargar</button>
                            </div>
                        </div>
                    </div>
                </section>

              
            <!--parte de grafico que muestra pagos historicos de gastos comunes-->
              <section>
                  <div class="container">
                      <div class="row">
                          <br>
                          <div class="col-lg-10 my-3">
                          section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                    
                              <style>
    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .atributos{
    background-color:aqua;
    border-radius: 1em;
    width: 13em;
    height: 4em;
    font-size: 16px;
    font-weight: 700;
    color:blue;
    font-weight: bolder;  
    }
    td{
        padding: 10px;
        font-weight:600;
    }
    
</style>
<body>
<h1>Informacion de la deuda</h1>
<br>
 
<table>
    <tr class="atributos">
        <td>codigo gasto</td>
        <td>fecha limite</td>
        <td>monto luz</td>
        <td>monto agua</td>
        <td>monto gas</td>
        <td>monto otros</td>
        <td>Estado pago</td>
    </tr>
    <?php
    
    while($resultado=mysqli_fetch_array($consultadetalles)){
        if($resultado['estado_pago'] == 'no pago' || $resultado['estado_pago'] == 'por pagar'){
            $fecha_entera=strtotime($resultado['fecha_limite']);
            $fecha=date('d-m-Y',$fecha_entera);
    ?>
    <tr>
        <td><?php echo $resultado['cod_gasto']?></td>
        <td><?php echo $fecha?></td>
        <td><?php echo $resultado['monto_luz']?></td>
        <td><?php echo $resultado['monto_agua']?></td>
        <td><?php echo $resultado['monto_gas']?></td>
        <td><?php echo $resultado['monto_otros']?></td>
        <td><?php echo $resultado['estado_pago']?></td>
        <td><button><a href="..\bdd/update_pago.php?cod_gasto=<?php echo urlencode($resultado['cod_gasto'])?>">Pagar</a></button></td>
    </tr>
    <?php
    }
    
    }
    ?>
</table>


<br>   
</body>
                                
                            </div>
                        </div>
                    </div>
                </div>
              </section>
                              </div>
                          </div>
                          
              </section>

        </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'bar',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
                    datasets: [{
                        label: 'Nuevos equipos',
                        data: [50, 100, 150, 200],
                        backgroundColor: [
                            '#12C9E5',  
                            '#12C9E5',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
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
</body>

</html>