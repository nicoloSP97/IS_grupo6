 <!-- head -->
 <?php include('../partes/head.php') ?>
    <!-- fin head -->


<body>
    <div class="d-flex" id="content-wrapper">
    <!-- sideBar -->
    <?php include('../partes/sidebar.php') ?>
    <!-- fin sideBar -->

        <div class="w-100">
    <?php $nombre=""?>
    <!-- Navbar -->
        <?php include('../partes/nav.php') ?>
    <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

                <section class="bg-light py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">Bienvenido Administrador</h1>
                                
                                <p class="lead text-muted">Revisa la última información de los gastos comunes de los usuarios</p>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Fechas por vencer</button>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Agregar Gasto Común</button>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Modificar Gasto Común</button>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Eliminar Gasto Común</button>
                            </div>
                        </div>
                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">formato </h6><span class="badge badge-info ml-2">detalles generales</span>
                                          
                                        </div>
                    </div>
                </section>

                <?php include("../bdd/consultas.php")?>
                <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">No han pagado </h6>
                                        <h3 class="font-weight-bold"><?php echo $filas_nopago['cantidad']?></h3>
                                        <h4>personas  <span class="badge badge-danger">No pago</span></h4>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Por Pagar </h6>
                                        <h3 class="font-weight-bold"><?php echo $filas_porpagar['cantidad']?></h3>
                                        <h4>personas  <span class="badge badge-warning">por pagar</span></h4>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">al dia</h6>
                                        <h3 class="font-weight-bold"><?php echo $filas_pagados['cantidad']?> </h3>
                                        <h4>personas <span class="badge badge-success">pagado</span> </h4>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6></h6>
                                    <div>
                                    <h6 class="text-muted">fecha</h6>
                                        <?php
                                        $fecha_entera=strtotime(date("d-m-Y"));
                                        $fecha_actual=date('d-m-Y',$fecha_entera);
                                        ?>
                                        <h1 class="font-weight"><?php echo $fecha_actual?></h1>
                                    </div>
                                        
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


                        


                          <!-- personas no pago-->
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Personas Atrasadas</h6>
                                </div>
                                <div class="card-body pt-2">

                                <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Mario faundez</h6><span class="badge badge-danger ml-2">No pago</span>
                                        <h6>Dpto N° 201</h6>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Mario faundez</h6><span class="badge badge-danger ml-2">No pago</span>
                                        <h6>Dpto N° 201</h6>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                <!--usuario-->
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Mario faundez</h6><span class="badge badge-danger ml-2">No pago</span>
                                        <h6>Dpto N° 201</h6>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div> 


                                    <!--usuario-->
                                    
                                    <button class="btn btn-primary w-100">Pagar</button>
                                </div>
                            </div>



                            

                            <!-- cuadro de personas pago-->
                          </div>
                                <div class="col-lg-4 my-3">
                                    <div class="card rounded-0">
                                        <div class="card-header bg-light">
                                             <h6 class="font-weight-bold mb-0">personas por pagar</h6>
                                        </div>
                                <div class="card-body pt-2">
                                        <!--- fila de usuarios-->

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Mario faundez</h6><span class="badge badge-warning ml-2">por pagar</span>
                                        <h6>Dpto N° 201</h6>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Mario faundez</h6><span class="badge badge-warning ml-2">por pagar</span>
                                        <h6>Dpto N° 201</h6>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Mario faundez</h6><span class="badge badge-warning ml-2">por pagar</span>
                                        <h6>Dpto N° 201</h6>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                   <!--- fila de usuarios-->

                                    
                                    
 
                                    <button class="btn btn-primary w-100">Ver Mas</button>
                                </div>
                            </div>

                            <!--fin cuadro -->

                            <!-- cuadro de personas pagos -->

                            </div>
                                <div class="col-lg-4 my-3">
                                    <div class="card rounded-0">
                                        <div class="card-header bg-light">
                                             <h6 class="font-weight-bold mb-0">personas al dia</h6>
                                        </div>
                                <div class="card-body pt-2">
                                        <!--- fila de usuarios-->

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Mario faundez</h6><span class="badge badge-success ml-2">pagados</span>
                                        <h6>Dpto N° 201</h6>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Mario faundez</h6><span class="badge badge-success ml-2">pagados</span>
                                        <h6>Dpto N° 201</h6>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                         
                                        </div>
                                        <div class="align-self-center">
                                        <h6 class="d-inline-block mb-0">Mario faundez</h6><span class="badge badge-success ml-2">pagados</span>
                                        <h6>Dpto N° 201</h6>
                                          <small class="d-block text-muted">ver</small>
                                        </div>
                                    </div>

                                    

                                   <!--- fila de usuarios-->

                                    
                                    
 
                                    <button class="btn btn-primary w-100">Ver Mas</button>
                                </div>
                            </div>
                            <!--fin de cuadro -->

                            <!-- fecha limite de pago-->
                            
                            <br>
                            <div class="card rounded-0">
                                  <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">pago de gastos comunes Historico</h6>
                                  </div>
                                  <div class="card-body">
                                    <canvas id="myChart" width="300" height="150"></canvas>
                                    <div>
                                    <form>
                                        <a href="/grupo06/partes/graficohistorico.php">
                                        <input type="button" class="btn btn-primary w-100" value="ver registro">
                                         </a>
                                    </form>
                                    </div>
                                    
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
