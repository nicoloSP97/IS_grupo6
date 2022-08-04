<?php
    include("bdd.php");
    $mes_actual=date("m");

    $count_users_pagado="SELECT distinct u.rut, count(*) as cantidad from gasto_comun gc, pago_gasto pg, departamento dp, habita t, usuario u where gc.cod_gasto=pg.cod_gasto and pg.id_depa=dp.id_depa and dp.id_depa=t.id_depa and t.rut=u.rut and pg.estado_pago='pagado' and EXTRACT(MONTH FROM gc.fecha_limite)=$mes_actual";

    $count_users_porpagar="SELECT count(*) as cantidad from gasto_comun gc, pago_gasto pg, departamento dp, habita t, usuario u where gc.cod_gasto=pg.cod_gasto AND pg.id_depa=dp.id_depa and dp.id_depa=t.id_depa and t.rut=u.rut and pg.estado_pago='por pagar'";

    $count_users_nopago="SELECT count(*) as cantidad from gasto_comun gc, pago_gasto pg, departamento dp, habita t, usuario u where gc.cod_gasto=pg.cod_gasto AND pg.id_depa=dp.id_depa and dp.id_depa=t.id_depa and t.rut=u.rut and pg.estado_pago='no pago'";

    $consulta_cant_porpagar=mysqli_query($con,$count_users_porpagar);
    $filas_porpagar=mysqli_fetch_array($consulta_cant_porpagar);

    $consulta_cant_nopago=mysqli_query($con,$count_users_nopago);
    $filas_nopago=mysqli_fetch_array($consulta_cant_nopago);
    
    $consulta_cant_pagado=mysqli_query($con,$count_users_pagado);
    $filas_pagados=mysqli_fetch_array($consulta_cant_pagado);

    $q_users_pagado="SELECT * from gasto_comun gc, pago_gasto pg, departamento dp, habita t, usuario u where gc.cod_gasto=pg.cod_gasto and pg.id_depa=dp.id_depa and dp.id_depa=t.id_depa and t.rut=u.rut and pg.estado_pago='pagado' and EXTRACT(MONTH FROM gc.fecha_limite)=7";

    $q_users_porpagar="SELECT * from gasto_comun gc, pago_gasto pg, departamento dp, habita t, usuario u where gc.cod_gasto=pg.cod_gasto AND pg.id_depa=dp.id_depa and dp.id_depa=t.id_depa and t.rut=u.rut and pg.estado_pago='por pagar'";

    $q_users_nopago="SELECT * from gasto_comun gc, pago_gasto pg, departamento dp, habita t, usuario u where gc.cod_gasto=pg.cod_gasto AND pg.id_depa=dp.id_depa and dp.id_depa=t.id_depa and t.rut=u.rut and pg.estado_pago='no pago'";

    $consulta_porpagar=mysqli_query($con,$q_users_porpagar);
    $users_porpagar=mysqli_fetch_array($consulta_porpagar);

    $consulta_nopago=mysqli_query($con,$q_users_nopago);
    $users_nopago=mysqli_fetch_array($consulta_nopago);
    
    $consulta_pagado=mysqli_query($con,$q_users_pagado);
    $users_pagados=mysqli_fetch_array($consulta_pagado);
    
?>