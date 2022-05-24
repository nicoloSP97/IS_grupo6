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
                                <h1 class="font-weight-bold mb-0">Bienvenido Administrador</h1>
                                
                                <p class="lead text-muted">Revisa la última información de los gastos comunes de los usuarios</p>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Fechas por vencer</button>
                            </div>
                        </div>
                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">formato </h6><span class="badge badge-info ml-2">detalles generales</span>
                                          
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
                                        <h6 class="text-muted">No han pagado </h6>
                                        <h3 class="font-weight-bold">50 </h3>
                                        <h4>personas  <span class="badge badge-danger">No pago</span></h4>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Por Pagar </h6>
                                        <h3 class="font-weight-bold">70 </h3>
                                        <h4>personas  <span class="badge badge-warning">por pagar</span></h4>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">al dia</h6>
                                        <h3 class="font-weight-bold">70 </h3>
                                        <h4>personas <span class="badge badge-success">pagado</span> </h4>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6></h6>
                                    <div>
                                    <h6 class="text-muted">fecha</h6>
                                        <h1 class="font-weight">25-08-2022</h1>
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
                  
              </section>


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
