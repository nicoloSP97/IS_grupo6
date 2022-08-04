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

<script>

</script>