 <?php
 include("../bdd/bdd.php");
 session_start();
 $rut=$_SESSION['rut'];
 $consultaRegistroSql="SELECT * FROM usuario u,habita h where u.rut=$rut and u.rut=h.rut";
 $consultaRegistro=mysqli_query($con, $consultaRegistroSql);
 $reg = mysqli_fetch_array($consultaRegistro);
 $nombre=$reg['nombre'];
 $id_depa=$reg['id_depa'];
//consulta sobre detalles de gasto
$consultadetallesSql= "SELECT * FROM departamento d, pago_gasto p, gasto_comun g
where d.id_depa=$id_depa and d.id_depa=p.id_depa and p.cod_gasto=g.cod_gasto";
$consultadetalles=mysqli_query($con,$consultadetallesSql);
$resultado=mysqli_fetch_array($consultadetalles);

$monto_total = $resultado['monto_luz'] + $resultado['monto_agua'] + $resultado['monto_gas'] + $resultado['monto_otros'];
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
                                <h1 class="font-weight-bold mb-0">Bienvenido <?php echo $nombre ?></h1>
                                <h2 class="font-weight-bold mb-0">Dpto N° <?php echo $id_depa?></h2>
                                <h3><?php echo "fdsa"?></h3>
                                <p class="lead text-muted">Revisa la última información</p>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Fechas por vencer</button>
                            </div>
                        </div>
                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Estado de deudas</h6><span class="badge badge-warning ml-2"><?php echo $resultado['estado_pago']?></span>                           
                                        </div>
                    </div>
                </section>

                <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Luz</h6>
                                        <h3 class="font-weight-bold"><?php echo $resultado['monto_luz']?></h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> <?php echo round((100*$resultado['monto_luz'])/$monto_total, 1)?>%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Agua</h6>
                                        <h3 class="font-weight-bold"><?php echo $resultado['monto_agua']?></h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i><?php echo round((100*$resultado['monto_agua'])/$monto_total, 1)?>%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Gas</h6>
                                        <h3 class="font-weight-bold"><?php echo $resultado['monto_gas']?></h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i><?php echo round((100*$resultado['monto_gas'])/$monto_total, 1)?>%</h6>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Otros</h6>
                                        <h3 class="font-weight-bold"><?php echo $resultado['monto_otros']?></h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i><?php echo round((100*$resultado['monto_otros'])/$monto_total, 1)?>%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
            
              <section>
                  <div class="container">
                      <div class="row">
                          

                          
                          <div class="col-lg-4 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Pago mes Mayo</h6>
                                </div>
                                <div class="card-body pt-2">
                                <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="far fa-bell"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="text-muted">luz</h6>
                                            
                                        <p class="lead text-muted">16.000</p>
                                          
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="far fa-bell"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="text-muted">Agua</h6>
                                            
                                        <p class="lead text-muted">25.000</p>
                                          
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="far fa-bell"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="text-muted">Gas</h6>
                                            
                                        <p class="lead text-muted">30.500</p>
                                          
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="far fa-bell"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="text-muted">Otros</h6>
                                            
                                        <p class="lead text-muted">33.000</p>
                                          
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="far fa-bell"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="text-muted">Total</h6>
                                        <h3 class="font-weight-bold">104.000</h3>
                                        <span class="badge badge-success ml-2" >total a pagar</span>
                                          <br>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <button class="btn btn-primary w-100">Pagar</button>
                                </div>
                            </div>

                            <!-- parte de gastos pagados-->
                          </div>
                            <div class="col-lg-4 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">gastos pagados mensualmente</h6>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Enero</h6><span class="badge badge-success ml-2">gastos pagados</span>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Febrero</h6><span class="badge badge-success ml-2">gastos pagados</span>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Marzo</h6><span class="badge badge-success ml-2">gastos pagados</span>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                       
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Abril</h6><span class="badge badge-success ml-2">gastos pagados</span>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                       
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">Mayo</h6><span class="badge badge-success ml-2">gastos pagados</span>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                      
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Junio</h6><span class="badge badge-warning ml-2">por pagar</span>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>
                                   
                                    
                                    
                                    <button class="btn btn-primary w-100">Ver Mas</button>
                                </div>
                            </div>

                            <!-- fecha limite de pago-->
                            </div>
                            <div class="col-lg-4 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Fecha limite de pago</h6>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <?php 
                                        $fecha_entera=strtotime($resultado['fecha_limite']);
                                        $fecha=date('d-m-Y',$fecha_entera);
                                        ?>    
                                        <h3 class="font-weight-bold"><?php echo $fecha?></h3>
                                        <h6 class="d-inline-block mb-0"></h6>
                                        <span class="badge badge-warning ml-2">
                                            <?php 
                                            echo $resultado['estado_pago'];
                                            ?>
                                        </span>
                                        <br>
                                        <h5>
                                        <?php
                                        $dia_limite=date('d',$fecha_entera);
                                        $dia_actual=date('d')-1;
                                        echo "Dias disponible para pago: ".($dia_limite-$dia_actual);
                                        ?>
                                        </h5> 
                                        </div>
                                    </div>

                                    
                                    
                                    <button class="btn btn-primary w-100">Ver Mas</button>
                                </div>
                            </div>
                            <br>
                            <div class="card rounded-0">
                                  <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">pago de gastos comunes Historico</h6>
                                  </div>
                                  <div class="card-body">
                                    <canvas id="myChart" width="300" height="150"></canvas>
                                  </div>
                              </div>

                      </div>
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
