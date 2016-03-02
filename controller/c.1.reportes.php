<?php
    include('inc/menu-superior.php');
#   include('controller/c.consultas.php');

    $filterDate1 =  $_POST['filterDate1'];
    $filterDate2 =  $_POST['filterDate2'];

    $filterDate1E = explode("-", $filterDate1);
    $filterDate1 = ''. $filterDate1E[2]. '-'. $filterDate1E[1] .'-'. $filterDate1E[0] . '';

    $filterDate2E = explode("-", $filterDate2);
    $filterDate2 = ''. $filterDate2E[2]. '-'. $filterDate2E[1] .'-'. $filterDate2E[0] . '';

    if ($filterDate1 == '--') { $filterDate1 = ''; } else { }
    if ($filterDate2 == '--') { $filterDate2 = ''; } else { }

    if ($filterDate1 == '') {
        # $whereDate2 = '(fecharespuesta >= \'2015-05-07\' AND fecharespuesta <= \'2015-05-07\') AND';
        $whereDate2 = "(fecharespuesta >= '2010-01-01' AND fecharespuesta <= '2017-01-01') AND";
                            $whereDate1 = "(fecha >= '2010-01-01' AND fecha <= '2017-01-01') AND";
    }
    else {
        $whereDate2 = "(fecharespuesta >= ' $filterDate1' AND fecharespuesta <= '$filterDate2') AND";
                            $whereDate1 = "(fecha >= ' $filterDate1' AND fecha <= '$filterDate2') AND";
    }


    $usuariosConsumibles = array(
        '1' => 'telemarketing01','2' => 'telemarketing02','3' => 'telemarketing03','4' => 'telemarketing04','5' => 'telemarketing05','6' => 'telemarketing06','7' => 'telemarketing07','8' => 'telemarketing08',
    );

    for ($i=1; $i < 9; $i++) { 

        $fxyT1 = ''.$fxyT1.'asignadoa = \''.$usuariosConsumibles[$i].'\' OR ';
        $fxyT2 = ''.$fxyT2.'usuario = \''.$usuariosConsumibles[$i].'\' OR ';

    }

    $whereConsumiblesUsuarios1 = substr($fxyT1, 0, -4);
    $whereConsumiblesUsuarios2 = substr($fxyT2, 0, -4);

    $query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
    $queryTest = $query_interno;
    $result_interno = mysql_query($query_interno);
    $total_correosT = mysql_num_rows($result_interno);
    
    $query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
    $result_interno = mysql_query($query_interno);
    $total_descartadosT = mysql_num_rows($result_interno);
    
    $query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
    $test_query_interno = $query_interno;
    $result_interno = mysql_query($query_interno);
    $total_facturadosT = mysql_num_rows($result_interno);
    
    $query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
    $result_interno = mysql_query($query_interno);
    $total_llamadasT = mysql_num_rows($result_interno);
    
    $query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
    $result_interno = mysql_query($query_interno);
    $total_llamadasycorreosT = mysql_num_rows($result_interno);


    # campochihuahua1
    $query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
    $result_interno = mysql_query($query_interno);
    $total_correos_campochihuahua1 = mysql_num_rows($result_interno);

    $query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
    $result_interno = mysql_query($query_interno);
    $total_descartados_campochihuahua1 = mysql_num_rows($result_interno);

    $query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
    $result_interno = mysql_query($query_interno);
    $total_facturados_campochihuahua1 = mysql_num_rows($result_interno);

    $query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
    $result_interno = mysql_query($query_interno);
    $total_llamadas_campochihuahua1 = mysql_num_rows($result_interno);

    $query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
    $result_interno = mysql_query($query_interno);
    $total_llamadasycorreos_campochihuahua1 = mysql_num_rows($result_interno);

                # Semaforo
    
                $res = mysql_query("SELECT asignadoa FROM contacto WHERE $whereDate1 (estadodeventa != 'descartado')");

                $i = 1;
                $semaforoTotalTelemarketing01 = 0;
                $semaforoTotalTelemarketing02 = 0;
                $semaforoTotalTelemarketing03 = 0;
                $semaforoTotalTelemarketing04 = 0;
                $semaforoTotalTelemarketing05 = 0;
                $semaforoTotalTelemarketing06 = 0;
                $semaforoTotalTelemarketing07 = 0;
                $semaforoTotalTelemarketing08 = 0;

                $semaforoTotalSucursalAguascalientes01 = 0;
                $semaforoTotalSucursalAguascalientes02 = 0;
                $semaforoTotalSucursalChihuahua01 = 0;
                $semaforoTotalSucursalCuliacan01 = 0;
                $semaforoTotalSucursalCuliacan02 = 0;
                $semaforoTotalSucursalDurango01 = 0;
                $semaforoTotalSucursalEstadodemexico01 = 0;
                $semaforoTotalSucursalEstadodemexico02 = 0;
                $semaforoTotalSucursalEstadodemexico03 = 0;
                $semaforoTotalSucursalEstadodemexico04 = 0;
                $semaforoTotalSucursalGuadalajara01 = 0;
                $semaforoTotalSucursalGuadalajara02 = 0;
                $semaforoTotalSucursalHermosillo01 = 0;
                $semaforoTotalSucursalJuarez01 = 0;
                $semaforoTotalSucursalMexicali01 = 0;
                $semaforoTotalSucursalMonterrey01 = 0;
                $semaforoTotalSucursalMonterrey02 = 0;
                $semaforoTotalSucursalObregon01 = 0;
                $semaforoTotalSucursalPuebla01 = 0;
                $semaforoTotalSucursalQueretaro01 = 0;
                $semaforoTotalSucursalSaltillo01 = 0;
                $semaforoTotalSucursalSLP01 = 0;
                $semaforoTotalSucursalTijuana01 = 0;
                $semaforoTotalSucursalTorreon01 = 0;
                $semaforoTotalSucursalVeracruz01 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}
                # Telemarketing
                if ($r['asignadoa'] == 'telemarketing01') { $semaforoTotalTelemarketing01 = $semaforoTotalTelemarketing01; $semaforoTotalTelemarketing01++; }
                if ($r['asignadoa'] == 'telemarketing02') { $semaforoTotalTelemarketing02 = $semaforoTotalTelemarketing02; $semaforoTotalTelemarketing02++; }
                if ($r['asignadoa'] == 'telemarketing03') { $semaforoTotalTelemarketing03 = $semaforoTotalTelemarketing03; $semaforoTotalTelemarketing03++; }
                if ($r['asignadoa'] == 'telemarketing04') { $semaforoTotalTelemarketing04 = $semaforoTotalTelemarketing04; $semaforoTotalTelemarketing04++; }
                if ($r['asignadoa'] == 'telemarketing05') { $semaforoTotalTelemarketing05 = $semaforoTotalTelemarketing05; $semaforoTotalTelemarketing05++; }
                if ($r['asignadoa'] == 'telemarketing06') { $semaforoTotalTelemarketing06 = $semaforoTotalTelemarketing06; $semaforoTotalTelemarketing06++; }
                if ($r['asignadoa'] == 'telemarketing07') { $semaforoTotalTelemarketing07 = $semaforoTotalTelemarketing07; $semaforoTotalTelemarketing07++; }
                if ($r['asignadoa'] == 'telemarketing08') { $semaforoTotalTelemarketing08 = $semaforoTotalTelemarketing08; $semaforoTotalTelemarketing08++; }

                # Aguascalientes
                if ($r['asignadoa'] == 'slopez') { $semaforoTotalSucursalAguascalientes01 = $semaforoTotalSucursalAguascalientes01; $semaforoTotalSucursalAguascalientes01++; }
                if ($r['asignadoa'] == 'vmaguascalientes01') { $semaforoTotalSucursalAguascalientes02 = $semaforoTotalSucursalAguascalientes02; $semaforoTotalSucursalAguascalientes02++; }
                # Chihuahua
                if ($r['asignadoa'] == 'evargas') { $semaforoTotalSucursalChihuahua01 = $semaforoTotalSucursalChihuahua01; $semaforoTotalSucursalChihuahua01++; }
                # Culiacan
                if ($r['asignadoa'] == 'ealvarez') { $semaforoTotalSucursalCuliacan01 = $semaforoTotalSucursalCuliacan01; $semaforoTotalSucursalCuliacan01++; }
                if ($r['asignadoa'] == 'ventas2culiacan') { $semaforoTotalSucursalCuliacan02 = $semaforoTotalSucursalCuliacan02; $semaforoTotalSucursalCuliacan02++; }
                # Durango
                if ($r['asignadoa'] == 'airigoyen') { $semaforoTotalSucursalDurango01 = $semaforoTotalSucursalDurango01; $semaforoTotalSucursalDurango01++; }
                # Estado de México
                if ($r['asignadoa'] == 'campoedomexico1') { $semaforoTotalSucursalEstadodemexico01 = $semaforoTotalSucursalEstadodemexico01; $semaforoTotalSucursalEstadodemexico01++; }
                if ($r['asignadoa'] == 'equipoedomexico') { $semaforoTotalSucursalEstadodemexico02 = $semaforoTotalSucursalEstadodemexico02; $semaforoTotalSucursalEstadodemexico02++; }
                if ($r['asignadoa'] == 'mostradoredomexico1') { $semaforoTotalSucursalEstadodemexico03 = $semaforoTotalSucursalEstadodemexico03; $semaforoTotalSucursalEstadodemexico03++; }
                if ($r['asignadoa'] == 'mostradoredomexico2') { $semaforoTotalSucursalEstadodemexico04 = $semaforoTotalSucursalEstadodemexico04; $semaforoTotalSucursalEstadodemexico04++; }
                # Guadalajara
                if ($r['asignadoa'] == 'ventasguadalajara') { $semaforoTotalSucursalGuadalajara01 = $semaforoTotalSucursalGuadalajara01; $semaforoTotalSucursalGuadalajara01++; }
                if ($r['asignadoa'] == 'ggalvan') { $semaforoTotalSucursalGuadalajara02 = $semaforoTotalSucursalGuadalajara02; $semaforoTotalSucursalGuadalajara02++; }
                # Hermosillo
                if ($r['asignadoa'] == 'rlopez') { $semaforoTotalSucursalHermosillo01 = $semaforoTotalSucursalHermosillo01; $semaforoTotalSucursalHermosillo01++; }
                # Juárez
                if ($r['asignadoa'] == 'campojuarez') { $semaforoTotalSucursalJuarez01 = $semaforoTotalSucursalJuarez01; $semaforoTotalSucursalJuarez01++; }
                # Mexicali
                if ($r['asignadoa'] == 'jvazquez') { $semaforoTotalSucursalMexicali01 = $semaforoTotalSucursalMexicali01; $semaforoTotalSucursalMexicali01++; }
                # Monterrey
                if ($r['asignadoa'] == 'campomonterrey') { $semaforoTotalSucursalMonterrey01 = $semaforoTotalSucursalMonterrey01; $semaforoTotalSucursalMonterrey01++; }
                if ($r['asignadoa'] == 'ventasmonterrey') { $semaforoTotalSucursalMonterrey02 = $semaforoTotalSucursalMonterrey02; $semaforoTotalSucursalMonterrey02++; }
                # Obregon
                if ($r['asignadoa'] == 'jhernandez') { $semaforoTotalSucursalObregon01 = $semaforoTotalSucursalObregon01; $semaforoTotalSucursalObregon01++; }
                # Puebla
                if ($r['asignadoa'] == 'rrojas') { $semaforoTotalSucursalPuebla01 = $semaforoTotalSucursalPuebla01; $semaforoTotalSucursalPuebla01++; }
                # Queretaro
                if ($r['asignadoa'] == 'nenriq') { $semaforoTotalSucursalQueretaro01 = $semaforoTotalSucursalQueretaro01; $semaforoTotalSucursalQueretaro01++; }
                # Saltillo
                if ($r['asignadoa'] == 'ventascamposaltillo') { $semaforoTotalSucursalSaltillo01 = $semaforoTotalSucursalSaltillo01; $semaforoTotalSucursalSaltillo01++; }
                # SLP
                if ($r['asignadoa'] == 'coordinadorventas2') { $semaforoTotalSucursalSLP01 = $semaforoTotalSucursalSLP01; $semaforoTotalSucursalSLP01++; }
                # Tijuana
                if ($r['asignadoa'] == 'vctijuana01') { $semaforoTotalSucursalTijuana01 = $semaforoTotalSucursalTijuana01; $semaforoTotalSucursalTijuana01++; }
                # Torreon
                if ($r['asignadoa'] == 'naguilar') { $semaforoTotalSucursalTorreon01 = $semaforoTotalSucursalTorreon01; $semaforoTotalSucursalTorreon01++; }
                # Veracruz
                if ($r['asignadoa'] == 'ckarem') { $semaforoTotalSucursalVeracruz01 = $semaforoTotalSucursalVeracruz01; $semaforoTotalSucursalVeracruz01++; }
                else {
                }

                    $i++;

            }


            $dia = date(d);
            $mes = date(m);
            $ano = date(Y);

            $fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';

            $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'");

                $i = 1;
                $semaforoAtrasadosTelemarketing01 = 0;
                $semaforoAtrasadosTelemarketing02 = 0;
                $semaforoAtrasadosTelemarketing03 = 0;
                $semaforoAtrasadosTelemarketing04 = 0;
                $semaforoAtrasadosTelemarketing05 = 0;
                $semaforoAtrasadosTelemarketing06 = 0;
                $semaforoAtrasadosTelemarketing07 = 0;
                $semaforoAtrasadosTelemarketing08 = 0;

                $semaforoAtrasadosSucursalAguascalientes01 = 0;
                $semaforoAtrasadosSucursalAguascalientes02 = 0;
                $semaforoAtrasadosSucursalChihuahua01 = 0;
                $semaforoAtrasadosSucursalCuliacan01 = 0;
                $semaforoAtrasadosSucursalCuliacan02 = 0;
                $semaforoAtrasadosSucursalDurango01 = 0;
                $semaforoAtrasadosSucursalEstadodemexico01 = 0;
                $semaforoAtrasadosSucursalEstadodemexico02 = 0;
                $semaforoAtrasadosSucursalEstadodemexico03 = 0;
                $semaforoAtrasadosSucursalEstadodemexico04 = 0;
                $semaforoAtrasadosSucursalGuadalajara01 = 0;
                $semaforoAtrasadosSucursalGuadalajara02 = 0;
                $semaforoAtrasadosSucursalHermosillo01 = 0;
                $semaforoAtrasadosSucursalJuarez01 = 0;
                $semaforoAtrasadosSucursalMexicali01 = 0;
                $semaforoAtrasadosSucursalMonterrey01 = 0;
                $semaforoAtrasadosSucursalMonterrey02 = 0;
                $semaforoAtrasadosSucursalObregon01 = 0;
                $semaforoAtrasadosSucursalPuebla01 = 0;
                $semaforoAtrasadosSucursalQueretaro01 = 0;
                $semaforoAtrasadosSucursalSaltillo01 = 0;
                $semaforoAtrasadosSucursalSLP01 = 0;
                $semaforoAtrasadosSucursalTijuana01 = 0;
                $semaforoAtrasadosSucursalTorreon01 = 0;
                $semaforoAtrasadosSucursalVeracruz01 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}
                if ($r['usuario'] == 'telemarketing01') { $semaforoAtrasadosTelemarketing01 = $semaforoAtrasadosTelemarketing01;$semaforoAtrasadosTelemarketing01++; }
                if ($r['usuario'] == 'telemarketing02') { $semaforoAtrasadosTelemarketing02 = $semaforoAtrasadosTelemarketing02;$semaforoAtrasadosTelemarketing02++; }
                if ($r['usuario'] == 'telemarketing03') { $semaforoAtrasadosTelemarketing03 = $semaforoAtrasadosTelemarketing03;$semaforoAtrasadosTelemarketing03++; }
                if ($r['usuario'] == 'telemarketing04') { $semaforoAtrasadosTelemarketing04 = $semaforoAtrasadosTelemarketing04;$semaforoAtrasadosTelemarketing04++; }
                if ($r['usuario'] == 'telemarketing05') { $semaforoAtrasadosTelemarketing05 = $semaforoAtrasadosTelemarketing05;$semaforoAtrasadosTelemarketing05++; }
                if ($r['usuario'] == 'telemarketing06') { $semaforoAtrasadosTelemarketing06 = $semaforoAtrasadosTelemarketing06;$semaforoAtrasadosTelemarketing06++; }
                if ($r['usuario'] == 'telemarketing07') { $semaforoAtrasadosTelemarketing07 = $semaforoAtrasadosTelemarketing07;$semaforoAtrasadosTelemarketing07++; }
                if ($r['usuario'] == 'telemarketing08') { $semaforoAtrasadosTelemarketing08 = $semaforoAtrasadosTelemarketing08;$semaforoAtrasadosTelemarketing08++; }

                # Aguascalientes
                if ($r['usuario'] == 'slopez') { $semaforoAtrasadosSucursalAguascalientes01 = $semaforoAtrasadosSucursalAguascalientes01; $semaforoAtrasadosSucursalAguascalientes01++; }
                if ($r['usuario'] == 'vmaguascalientes01') { $semaforoAtrasadosSucursalAguascalientes02 = $semaforoAtrasadosSucursalAguascalientes02; $semaforoAtrasadosSucursalAguascalientes02++; }
                # Chihuahua
                if ($r['usuario'] == 'evargas') { $semaforoAtrasadosSucursalChihuahua01 = $semaforoAtrasadosSucursalChihuahua01; $semaforoAtrasadosSucursalChihuahua01++; }
                # Culiacan
                if ($r['usuario'] == 'ealvarez') { $semaforoAtrasadosSucursalCuliacan01 = $semaforoAtrasadosSucursalCuliacan01; $semaforoAtrasadosSucursalCuliacan01++; }
                if ($r['usuario'] == 'ventas2culiacan') { $semaforoAtrasadosSucursalCuliacan02 = $semaforoAtrasadosSucursalCuliacan02; $semaforoAtrasadosSucursalCuliacan02++; }
                # Durango
                if ($r['usuario'] == 'airigoyen') { $semaforoAtrasadosSucursalDurango01 = $semaforoAtrasadosSucursalDurango01; $semaforoAtrasadosSucursalDurango01++; }
                # Estado de México
                if ($r['usuario'] == 'campoedomexico1') { $semaforoAtrasadosSucursalEstadodemexico01 = $semaforoAtrasadosSucursalEstadodemexico01; $semaforoAtrasadosSucursalEstadodemexico01++; }
                if ($r['usuario'] == 'equipoedomexico') { $semaforoAtrasadosSucursalEstadodemexico02 = $semaforoAtrasadosSucursalEstadodemexico02; $semaforoAtrasadosSucursalEstadodemexico02++; }
                if ($r['usuario'] == 'mostradoredomexico1') { $semaforoAtrasadosSucursalEstadodemexico03 = $semaforoAtrasadosSucursalEstadodemexico03; $semaforoAtrasadosSucursalEstadodemexico03++; }
                if ($r['usuario'] == 'mostradoredomexico2') { $semaforoAtrasadosSucursalEstadodemexico04 = $semaforoAtrasadosSucursalEstadodemexico04; $semaforoAtrasadosSucursalEstadodemexico04++; }
                # Guadalajara
                if ($r['usuario'] == 'ventasguadalajara') { $semaforoAtrasadosSucursalGuadalajara01 = $semaforoAtrasadosSucursalGuadalajara01; $semaforoAtrasadosSucursalGuadalajara01++; }
                if ($r['usuario'] == 'ggalvan') { $semaforoAtrasadosSucursalGuadalajara02 = $semaforoAtrasadosSucursalGuadalajara02; $semaforoAtrasadosSucursalGuadalajara02++; }
                # Hermosillo
                if ($r['usuario'] == 'rlopez') { $semaforoAtrasadosSucursalHermosillo01 = $semaforoAtrasadosSucursalHermosillo01; $semaforoAtrasadosSucursalHermosillo01++; }
                # Juárez
                if ($r['usuario'] == 'campojuarez') { $semaforoAtrasadosSucursalJuarez01 = $semaforoAtrasadosSucursalJuarez01; $semaforoAtrasadosSucursalJuarez01++; }
                # Mexicali
                if ($r['usuario'] == 'jvazquez') { $semaforoAtrasadosSucursalMexicali01 = $semaforoAtrasadosSucursalMexicali01; $semaforoAtrasadosSucursalMexicali01++; }
                # Monterrey
                if ($r['usuario'] == 'campomonterrey') { $semaforoAtrasadosSucursalMonterrey01 = $semaforoAtrasadosSucursalMonterrey01; $semaforoAtrasadosSucursalMonterrey01++; }
                if ($r['usuario'] == 'ventasmonterrey') { $semaforoAtrasadosSucursalMonterrey02 = $semaforoAtrasadosSucursalMonterrey02; $semaforoAtrasadosSucursalMonterrey02++; }
                # Obregon
                if ($r['usuario'] == 'jhernandez') { $semaforoAtrasadosSucursalObregon01 = $semaforoAtrasadosSucursalObregon01; $semaforoAtrasadosSucursalObregon01++; }
                # Puebla
                if ($r['usuario'] == 'rrojas') { $semaforoAtrasadosSucursalPuebla01 = $semaforoAtrasadosSucursalPuebla01; $semaforoAtrasadosSucursalPuebla01++; }
                # Queretaro
                if ($r['usuario'] == 'nenriq') { $semaforoAtrasadosSucursalQueretaro01 = $semaforoAtrasadosSucursalQueretaro01; $semaforoAtrasadosSucursalQueretaro01++; }
                # Saltillo
                if ($r['usuario'] == 'ventascamposaltillo') { $semaforoAtrasadosSucursalSaltillo01 = $semaforoAtrasadosSucursalSaltillo01; $semaforoAtrasadosSucursalSaltillo01++; }
                # SLP
                if ($r['usuario'] == 'coordinadorventas2') { $semaforoAtrasadosSucursalSLP01 = $semaforoAtrasadosSucursalSLP01; $semaforoAtrasadosSucursalSLP01++; }
                # Tijuana
                if ($r['usuario'] == 'vctijuana01') { $semaforoAtrasadosSucursalTijuana01 = $semaforoAtrasadosSucursalTijuana01; $semaforoAtrasadosSucursalTijuana01++; }
                # Torreon
                if ($r['usuario'] == 'naguilar') { $semaforoAtrasadosSucursalTorreon01 = $semaforoAtrasadosSucursalTorreon01; $semaforoAtrasadosSucursalTorreon01++; }
                # Veracruz
                if ($r['usuario'] == 'ckarem') { $semaforoAtrasadosSucursalVeracruz01 = $semaforoAtrasadosSucursalVeracruz01; $semaforoAtrasadosSucursalVeracruz01++; }


                    else {

                    }

                    

                    $i++;

            }

            $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE fechaproxima = '$fecha_pendientes' AND horaasignacion != 'ok' ORDER BY fechaproxima");

                $i = 1;
                $semaforoHoyTelemarketing01 = 0;
                $semaforoHoyTelemarketing02 = 0;
                $semaforoHoyTelemarketing03 = 0;
                $semaforoHoyTelemarketing04 = 0;
                $semaforoHoyTelemarketing05 = 0;
                $semaforoHoyTelemarketing06 = 0;
                $semaforoHoyTelemarketing07 = 0;
                $semaforoHoyTelemarketing08 = 0;

                $semaforoHoySucursalAguascalientes01 = 0;
                $semaforoHoySucursalAguascalientes02 = 0;
                $semaforoHoySucursalChihuahua01 = 0;
                $semaforoHoySucursalCuliacan01 = 0;
                $semaforoHoySucursalCuliacan02 = 0;
                $semaforoHoySucursalDurango01 = 0;
                $semaforoHoySucursalEstadodemexico01 = 0;
                $semaforoHoySucursalEstadodemexico02 = 0;
                $semaforoHoySucursalEstadodemexico03 = 0;
                $semaforoHoySucursalEstadodemexico04 = 0;
                $semaforoHoySucursalGuadalajara01 = 0;
                $semaforoHoySucursalGuadalajara02 = 0;
                $semaforoHoySucursalHermosillo01 = 0;
                $semaforoHoySucursalJuarez01 = 0;
                $semaforoHoySucursalMexicali01 = 0;
                $semaforoHoySucursalMonterrey01 = 0;
                $semaforoHoySucursalMonterrey02 = 0;
                $semaforoHoySucursalObregon01 = 0;
                $semaforoHoySucursalPuebla01 = 0;
                $semaforoHoySucursalQueretaro01 = 0;
                $semaforoHoySucursalSaltillo01 = 0;
                $semaforoHoySucursalSLP01 = 0;
                $semaforoHoySucursalTijuana01 = 0;
                $semaforoHoySucursalTorreon01 = 0;
                $semaforoHoySucursalVeracruz01 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}
                if ($r['usuario'] == 'telemarketing01') { $semaforoHoyTelemarketing01 = $semaforoHoyTelemarketing01;$semaforoHoyTelemarketing01++; }
                if ($r['usuario'] == 'telemarketing02') { $semaforoHoyTelemarketing02 = $semaforoHoyTelemarketing02;$semaforoHoyTelemarketing02++; }
                if ($r['usuario'] == 'telemarketing03') { $semaforoHoyTelemarketing03 = $semaforoHoyTelemarketing03;$semaforoHoyTelemarketing03++; }
                if ($r['usuario'] == 'telemarketing04') { $semaforoHoyTelemarketing04 = $semaforoHoyTelemarketing04;$semaforoHoyTelemarketing04++; }
                if ($r['usuario'] == 'telemarketing05') { $semaforoHoyTelemarketing05 = $semaforoHoyTelemarketing05;$semaforoHoyTelemarketing05++; }
                if ($r['usuario'] == 'telemarketing06') { $semaforoHoyTelemarketing06 = $semaforoHoyTelemarketing06;$semaforoHoyTelemarketing06++; }
                if ($r['usuario'] == 'telemarketing07') { $semaforoHoyTelemarketing07 = $semaforoHoyTelemarketing07;$semaforoHoyTelemarketing07++; }
                if ($r['usuario'] == 'telemarketing08') { $semaforoHoyTelemarketing08 = $semaforoHoyTelemarketing08;$semaforoHoyTelemarketing08++; }

                # Aguascalientes
                if ($r['usuario'] == 'slopez') { $semaforoHoySucursalAguascalientes01 = $semaforoHoySucursalAguascalientes01; $semaforoHoySucursalAguascalientes01++; }
                if ($r['usuario'] == 'vmaguascalientes01') { $semaforoHoySucursalAguascalientes02 = $semaforoHoySucursalAguascalientes02; $semaforoHoySucursalAguascalientes02++; }
                # Chihuahua
                if ($r['usuario'] == 'evargas') { $semaforoHoySucursalChihuahua01 = $semaforoHoySucursalChihuahua01; $semaforoHoySucursalChihuahua01++; }
                # Culiacan
                if ($r['usuario'] == 'ealvarez') { $semaforoHoySucursalCuliacan01 = $semaforoHoySucursalCuliacan01; $semaforoHoySucursalCuliacan01++; }
                if ($r['usuario'] == 'ventas2culiacan') { $semaforoHoySucursalCuliacan02 = $semaforoHoySucursalCuliacan02; $semaforoHoySucursalCuliacan02++; }
                # Durango
                if ($r['usuario'] == 'airigoyen') { $semaforoHoySucursalDurango01 = $semaforoHoySucursalDurango01; $semaforoHoySucursalDurango01++; }
                # Estado de México
                if ($r['usuario'] == 'campoedomexico1') { $semaforoHoySucursalEstadodemexico01 = $semaforoHoySucursalEstadodemexico01; $semaforoHoySucursalEstadodemexico01++; }
                if ($r['usuario'] == 'equipoedomexico') { $semaforoHoySucursalEstadodemexico02 = $semaforoHoySucursalEstadodemexico02; $semaforoHoySucursalEstadodemexico02++; }
                if ($r['usuario'] == 'mostradoredomexico1') { $semaforoHoySucursalEstadodemexico03 = $semaforoHoySucursalEstadodemexico03; $semaforoHoySucursalEstadodemexico03++; }
                if ($r['usuario'] == 'mostradoredomexico2') { $semaforoHoySucursalEstadodemexico04 = $semaforoHoySucursalEstadodemexico04; $semaforoHoySucursalEstadodemexico04++; }
                # Guadalajara
                if ($r['usuario'] == 'ventasguadalajara') { $semaforoHoySucursalGuadalajara01 = $semaforoHoySucursalGuadalajara01; $semaforoHoySucursalGuadalajara01++; }
                if ($r['usuario'] == 'ggalvan') { $semaforoHoySucursalGuadalajara02 = $semaforoHoySucursalGuadalajara02; $semaforoHoySucursalGuadalajara02++; }
                # Hermosillo
                if ($r['usuario'] == 'rlopez') { $semaforoHoySucursalHermosillo01 = $semaforoHoySucursalHermosillo01; $semaforoHoySucursalHermosillo01++; }
                # Juárez
                if ($r['usuario'] == 'campojuarez') { $semaforoHoySucursalJuarez01 = $semaforoHoySucursalJuarez01; $semaforoHoySucursalJuarez01++; }
                # Mexicali
                if ($r['usuario'] == 'jvazquez') { $semaforoHoySucursalMexicali01 = $semaforoHoySucursalMexicali01; $semaforoHoySucursalMexicali01++; }
                # Monterrey
                if ($r['usuario'] == 'campomonterrey') { $semaforoHoySucursalMonterrey01 = $semaforoHoySucursalMonterrey01; $semaforoHoySucursalMonterrey01++; }
                if ($r['usuario'] == 'ventasmonterrey') { $semaforoHoySucursalMonterrey02 = $semaforoHoySucursalMonterrey02; $semaforoHoySucursalMonterrey02++; }
                # Obregon
                if ($r['usuario'] == 'jhernandez') { $semaforoHoySucursalObregon01 = $semaforoHoySucursalObregon01; $semaforoHoySucursalObregon01++; }
                # Puebla
                if ($r['usuario'] == 'rrojas') { $semaforoHoySucursalPuebla01 = $semaforoHoySucursalPuebla01; $semaforoHoySucursalPuebla01++; }
                # Queretaro
                if ($r['usuario'] == 'nenriq') { $semaforoHoySucursalQueretaro01 = $semaforoHoySucursalQueretaro01; $semaforoHoySucursalQueretaro01++; }
                # Saltillo
                if ($r['usuario'] == 'ventascamposaltillo') { $semaforoHoySucursalSaltillo01 = $semaforoHoySucursalSaltillo01; $semaforoHoySucursalSaltillo01++; }
                # SLP
                if ($r['usuario'] == 'coordinadorventas2') { $semaforoHoySucursalSLP01 = $semaforoHoySucursalSLP01; $semaforoHoySucursalSLP01++; }
                # Tijuana
                if ($r['usuario'] == 'vctijuana01') { $semaforoHoySucursalTijuana01 = $semaforoHoySucursalTijuana01; $semaforoHoySucursalTijuana01++; }
                # Torreon
                if ($r['usuario'] == 'naguilar') { $semaforoHoySucursalTorreon01 = $semaforoHoySucursalTorreon01; $semaforoHoySucursalTorreon01++; }
                # Veracruz
                if ($r['usuario'] == 'ckarem') { $semaforoHoySucursalVeracruz01 = $semaforoHoySucursalVeracruz01; $semaforoHoySucursalVeracruz01++; }


                    else {

                    }

                    

                    $i++;

            }

                # / Semaforo

    $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'");

                $i = 1;
        $facturadoSucursalDurango = 0;
        $facturadoSucursalChihuahua = 0;
        $facturadoSucursalJuarez = 0;
        $facturadoSucursalMonterrey = 0;
        $facturadoSucursalSaltillo = 0;
        $facturadoSucursalCuliacan = 0;
        $facturadoSucursalObregon = 0;
        $facturadoSucursalMexicali = 0;
        $facturadoSucursalTijuana = 0;
        $facturadoSucursalTorreon = 0;
        $facturadoSucursalHermosillo = 0;
        $facturadoSucursalSLP = 0;
        $facturadoSucursalVeracruz = 0;
        $facturadoSucursalGuadalajara = 0;
        $facturadoSucursalQueretaro = 0;
        $facturadoSucursalPuebla = 0;
        $facturadoSucursalAguascalientes = 0;
        $facturadoSucursalEstadodemexico = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    # Durango
                    if ($r['usuario'] == 'airigoyen') { $facturadoSucursalDurango = $facturadoSucursalDurango; $facturadoSucursalDurango++; }
                    # Chihuahua
                    if ($r['usuario'] == 'evargas') { $facturadoSucursalChihuahua = $facturadoSucursalChihuahua; $facturadoSucursalChihuahua++; }
                    # Juárez
                    if ($r['usuario'] == 'campojuarez') { $facturadoSucursalJuarez = $facturadoSucursalJuarez; $facturadoSucursalJuarez++; }
                    # Monterrey
                    if ($r['usuario'] == 'campomonterrey') { $facturadoSucursalMonterrey = $facturadoSucursalMonterrey; $facturadoSucursalMonterrey++; }
                    # Saltillo
                    if ($r['usuario'] == 'ventascamposaltillo') { $facturadoSucursalSaltillo = $facturadoSucursalSaltillo; $facturadoSucursalSaltillo++; }
                    # Culiacan
                    if ($r['usuario'] == 'ealvarez') { $facturadoSucursalCuliacan = $facturadoSucursalCuliacan; $facturadoSucursalCuliacan++; }
                    # Obregon
                    if ($r['usuario'] == 'jhernandez') { $facturadoSucursalObregon = $facturadoSucursalObregon; $facturadoSucursalObregon++; }
                    # Mexicali
                    if ($r['usuario'] == 'jvazquez') { $facturadoSucursalMexicali = $facturadoSucursalMexicali; $facturadoSucursalMexicali++; }
                    # Tijuana
                    if ($r['usuario'] == 'vctijuana01') { $facturadoSucursalTijuana = $facturadoSucursalTijuana; $facturadoSucursalTijuana++; }
                    # Torreon
                    if ($r['usuario'] == 'naguilar') { $facturadoSucursalTorreon = $facturadoSucursalTorreon; $facturadoSucursalTorreon++; }
                    # Hermosillo
                    if ($r['usuario'] == 'rlopez') { $facturadoSucursalHermosillo = $facturadoSucursalHermosillo; $facturadoSucursalHermosillo++; }
                    # SLP
                    if ($r['usuario'] == 'coordinadorventas2') { $facturadoSucursalSLP = $facturadoSucursalSLP; $facturadoSucursalSLP++; }
                    # Veracruz
                    if ($r['usuario'] == 'ckarem') { $facturadoSucursalVeracruz = $facturadoSucursalVeracruz; $facturadoSucursalVeracruz++; }
                    # Guadalajara
                    if ($r['usuario'] == 'ventasguadalajara' OR $r['usuario'] == 'ggalvan') { $facturadoSucursalGuadalajara = $facturadoSucursalGuadalajara; $facturadoSucursalGuadalajara++; }
                    # Queretaro
                    if ($r['usuario'] == 'nenriq') { $facturadoSucursalQueretaro = $facturadoSucursalQueretaro; $facturadoSucursalQueretaro++; }
                    # Puebla
                    if ($r['usuario'] == 'rrojas') { $facturadoSucursalPuebla = $facturadoSucursalPuebla; $facturadoSucursalPuebla++; }
                    # Aguascalientes
                    if ($r['usuario'] == 'slopez' OR $r['usuario'] == 'vmaguascalientes01') { $facturadoSucursalAguascalientes = $facturadoSucursalAguascalientes; $facturadoSucursalAguascalientes++; }
                    # Estado de México
                    if ($r['usuario'] == 'equipoedomexico' OR $r['usuario'] == 'campoedomexico1' OR $r['usuario'] == 'mostradoredomexico1' OR $r['usuario'] == 'mostradoredomexico2') { $facturadoSucursalEstadodemexico = $facturadoSucursalEstadodemexico; $facturadoSucursalEstadodemexico++; }
            
                    else {

                    }
                    
                    $i++;

            }

            $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'");

                $i = 1;
        
            $correoSucursalDurango = 0;
            $correoSucursalChihuahua = 0;
            $correoSucursalJuarez = 0;
            $correoSucursalMonterrey = 0;
            $correoSucursalSaltillo = 0;
            $correoSucursalCuliacan = 0;
            $correoSucursalObregon = 0;
            $correoSucursalMexicali = 0;
            $correoSucursalTijuana = 0;
            $correoSucursalTorreon = 0;
            $correoSucursalHermosillo = 0;
            $correoSucursalSLP = 0;
            $correoSucursalVeracruz = 0;
            $correoSucursalGuadalajara = 0;
            $correoSucursalQueretaro = 0;
            $correoSucursalPuebla = 0;
            $correoSucursalAguascalientes = 0;
            $correoSucursalEstadodemexico = 0;

            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                # Durango
                if ($r['usuario'] == 'airigoyen') { $correoSucursalDurango = $correoSucursalDurango; $correoSucursalDurango++; }
                # Chihuahua
                if ($r['usuario'] == 'evargas') { $correoSucursalChihuahua = $correoSucursalChihuahua; $correoSucursalChihuahua++; }
                # Juárez
                if ($r['usuario'] == 'campojuarez') { $correoSucursalJuarez = $correoSucursalJuarez; $correoSucursalJuarez++; }
                # Monterrey
                if ($r['usuario'] == 'campomonterrey') { $correoSucursalMonterrey = $correoSucursalMonterrey; $correoSucursalMonterrey++; }
                # Saltillo
                if ($r['usuario'] == 'ventascamposaltillo') { $correoSucursalSaltillo = $correoSucursalSaltillo; $correoSucursalSaltillo++; }
                # Culiacan
                if ($r['usuario'] == 'ealvarez') { $correoSucursalCuliacan = $correoSucursalCuliacan; $correoSucursalCuliacan++; }
                # Obregon
                if ($r['usuario'] == 'jhernandez') { $correoSucursalObregon = $correoSucursalObregon; $correoSucursalObregon++; }
                # Mexicali
                if ($r['usuario'] == 'jvazquez') { $correoSucursalMexicali = $correoSucursalMexicali; $correoSucursalMexicali++; }
                # Tijuana
                if ($r['usuario'] == 'vctijuana01') { $correoSucursalTijuana = $correoSucursalTijuana; $correoSucursalTijuana++; }
                # Torreon
                if ($r['usuario'] == 'naguilar') { $correoSucursalTorreon = $correoSucursalTorreon; $correoSucursalTorreon++; }
                # Hermosillo
                if ($r['usuario'] == 'rlopez') { $correoSucursalHermosillo = $correoSucursalHermosillo; $correoSucursalHermosillo++; }
                # SLP
                if ($r['usuario'] == 'coordinadorventas2') { $correoSucursalSLP = $correoSucursalSLP; $correoSucursalSLP++; }
                # Veracruz
                if ($r['usuario'] == 'ckarem') { $correoSucursalVeracruz = $correoSucursalVeracruz; $correoSucursalVeracruz++; }
                # Guadalajara
                if ($r['usuario'] == 'ventasguadalajara' OR $r['usuario'] == 'ggalvan') { $correoSucursalGuadalajara = $correoSucursalGuadalajara; $correoSucursalGuadalajara++; }
                # Queretaro
                if ($r['usuario'] == 'nenriq') { $correoSucursalQueretaro = $correoSucursalQueretaro; $correoSucursalQueretaro++; }
                # Puebla
                if ($r['usuario'] == 'rrojas') { $correoSucursalPuebla = $correoSucursalPuebla; $correoSucursalPuebla++; }
                # Aguascalientes
                if ($r['usuario'] == 'slopez' OR $r['usuario'] == 'vmaguascalientes01') { $correoSucursalAguascalientes = $correoSucursalAguascalientes; $correoSucursalAguascalientes++; }
                # Estado de México
                if ($r['usuario'] == 'equipoedomexico' OR $r['usuario'] == 'campoedomexico1' OR $r['usuario'] == 'mostradoredomexico1' OR $r['usuario'] == 'mostradoredomexico2') { $correoSucursalEstadodemexico = $correoSucursalEstadodemexico; $correoSucursalEstadodemexico++; }                

                else {

                }

                $i++;

            }

            $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'");

            $i = 1;
            $descartadoSucursalDurango = 0;
            $descartadoSucursalDurango = 0;
            $descartadoSucursalChihuahua = 0;
            $descartadoSucursalJuarez = 0;
            $descartadoSucursalMonterrey = 0;
            $descartadoSucursalSaltillo = 0;
            $descartadoSucursalCuliacan = 0;
            $descartadoSucursalObregon = 0;
            $descartadoSucursalMexicali = 0;
            $descartadoSucursalTijuana = 0;
            $descartadoSucursalTorreon = 0;
            $descartadoSucursalHermosillo = 0;
            $descartadoSucursalSLP = 0;
            $descartadoSucursalVeracruz = 0;
            $descartadoSucursalGuadalajara = 0;
            $descartadoSucursalQueretaro = 0;
            $descartadoSucursalPuebla = 0;
            $descartadoSucursalAguascalientes = 0;
            $descartadoSucursalEstadodemexico = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                # Durango
                if ($r['usuario'] == 'airigoyen') { $descartadoSucursalDurango = $descartadoSucursalDurango; $descartadoSucursalDurango++; }
                # Chihuahua
                if ($r['usuario'] == 'evargas') { $descartadoSucursalChihuahua = $descartadoSucursalChihuahua; $descartadoSucursalChihuahua++; }
                # Juárez
                if ($r['usuario'] == 'campojuarez') { $descartadoSucursalJuarez = $descartadoSucursalJuarez; $descartadoSucursalJuarez++; }
                # Monterrey
                if ($r['usuario'] == 'campomonterrey') { $descartadoSucursalMonterrey = $descartadoSucursalMonterrey; $descartadoSucursalMonterrey++; }
                # Saltillo
                if ($r['usuario'] == 'ventascamposaltillo') { $descartadoSucursalSaltillo = $descartadoSucursalSaltillo; $descartadoSucursalSaltillo++; }
                # Culiacan
                if ($r['usuario'] == 'ealvarez' OR $r['usuario'] == 'ventas2culiacan') { $descartadoSucursalCuliacan = $descartadoSucursalCuliacan; $descartadoSucursalCuliacan++; }
                # Obregon
                if ($r['usuario'] == 'jhernandez') { $descartadoSucursalObregon = $descartadoSucursalObregon; $descartadoSucursalObregon++; }
                # Mexicali
                if ($r['usuario'] == 'jvazquez') { $descartadoSucursalMexicali = $descartadoSucursalMexicali; $descartadoSucursalMexicali++; }
                # Tijuana
                if ($r['usuario'] == 'vctijuana01') { $descartadoSucursalTijuana = $descartadoSucursalTijuana; $descartadoSucursalTijuana++; }
                # Torreon
                if ($r['usuario'] == 'naguilar') { $descartadoSucursalTorreon = $descartadoSucursalTorreon; $descartadoSucursalTorreon++; }
                # Hermosillo
                if ($r['usuario'] == 'rlopez') { $descartadoSucursalHermosillo = $descartadoSucursalHermosillo; $descartadoSucursalHermosillo++; }
                # SLP
                if ($r['usuario'] == 'coordinadorventas2') { $descartadoSucursalSLP = $descartadoSucursalSLP; $descartadoSucursalSLP++; }
                # Veracruz
                if ($r['usuario'] == 'ckarem') { $descartadoSucursalVeracruz = $descartadoSucursalVeracruz; $descartadoSucursalVeracruz++; }
                # Guadalajara
                if ($r['usuario'] == 'ventasguadalajara' OR $r['usuario'] == 'ggalvan') { $descartadoSucursalGuadalajara = $descartadoSucursalGuadalajara; $descartadoSucursalGuadalajara++; }
                # Queretaro
                if ($r['usuario'] == 'nenriq') { $descartadoSucursalQueretaro = $descartadoSucursalQueretaro; $descartadoSucursalQueretaro++; }
                # Puebla
                if ($r['usuario'] == 'rrojas') { $descartadoSucursalPuebla = $descartadoSucursalPuebla; $descartadoSucursalPuebla++; }
                # Aguascalientes
                if ($r['usuario'] == 'slopez' OR $r['usuario'] == 'vmaguascalientes01') { $descartadoSucursalAguascalientes = $descartadoSucursalAguascalientes; $descartadoSucursalAguascalientes++; }
                # Estado de México
                if ($r['usuario'] == 'equipoedomexico' OR $r['usuario'] == 'campoedomexico1' OR $r['usuario'] == 'mostradoredomexico1' OR $r['usuario'] == 'mostradoredomexico2') { $descartadoSucursalEstadodemexico = $descartadoSucursalEstadodemexico; $descartadoSucursalEstadodemexico++; }
                
                else {
                }

                    $i++;

            }



            /*Individuales*/
            $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'");

            $i = 1;
            $facturadoSucursalEstadodemexico01 = 0;
            $facturadoSucursalEstadodemexico02 = 0;
            $facturadoSucursalEstadodemexico03 = 0;
            $facturadoSucursalEstadodemexico04 = 0;

            $facturadoSucursalAguascalientes01 = 0;
            $facturadoSucursalAguascalientes02 = 0;

            $facturadoSucursalMonterrey01 = 0;
            $facturadoSucursalMonterrey02 = 0;
            $facturadoSucursalGuadalajara01 = 0;
            $facturadoSucursalGuadalajara02 = 0;
            $facturadoSucursalCuliacan01 = 0;
            $facturadoSucursalCuliacan02 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                # México
                if ($r['usuario'] == 'campoedomexico1') { $facturadoSucursalEstadodemexico01 = $facturadoSucursalEstadodemexico01; $facturadoSucursalEstadodemexico01++;}
                if ($r['usuario'] == 'equipoedomexico') { $facturadoSucursalEstadodemexico01 = $facturadoSucursalEstadodemexico01; $facturadoSucursalEstadodemexico01++;}
                if ($r['usuario'] == 'mostradoredomexico1') { $facturadoSucursalEstadodemexico03 = $facturadoSucursalEstadodemexico03; $facturadoSucursalEstadodemexico03++;}
                if ($r['usuario'] == 'mostradoredomexico2') { $facturadoSucursalEstadodemexico04 = $facturadoSucursalEstadodemexico04; $facturadoSucursalEstadodemexico04++;}
                
                # Aguascalientes
                if ($r['usuario'] == 'slopez') { $facturadoSucursalAguascalientes01 = $facturadoSucursalAguascalientes01; $facturadoSucursalAguascalientes01++;}
                if ($r['usuario'] == 'vmaguascalientes01') { $facturadoSucursalAguascalientes02 = $facturadoSucursalAguascalientes02; $facturadoSucursalAguascalientes02++;}

                # Monterrey
                if ($r['usuario'] == 'campomonterrey') { $facturadoSucursalMonterrey01 = $facturadoSucursalMonterrey01; $facturadoSucursalMonterrey01++;}
                if ($r['usuario'] == 'ventasmonterrey') { $facturadoSucursalMonterrey02 = $facturadoSucursalMonterrey02; $facturadoSucursalMonterrey02++;}
                # Guadalajara
                if ($r['usuario'] == 'ggalvan') { $facturadoSucursalGuadalajara01 = $facturadoSucursalGuadalajara01; $facturadoSucursalGuadalajara01++;}
                if ($r['usuario'] == 'ventasguadalajara') { $facturadoSucursalGuadalajara02 = $facturadoSucursalGuadalajara02; $facturadoSucursalGuadalajara02++;}
                # Culiacan
                if ($r['usuario'] == 'ealvarez') { $facturadoSucursalCuliacan01 = $facturadoSucursalCuliacan01; $facturadoSucursalCuliacan01++;}
                if ($r['usuario'] == 'ventas2culiacan') { $facturadoSucursalCuliacan02 = $facturadoSucursalCuliacan02; $facturadoSucursalCuliacan02++;}
                else {
                }

                    $i++;

            }
        $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'");

            $i = 1;
            $correoSucursalEstadodemexico01 = 0;
            $correoSucursalEstadodemexico02 = 0;
            $correoSucursalEstadodemexico03 = 0;
            $correoSucursalEstadodemexico04 = 0;

            $correoSucursalAguascalientes01 = 0;
            $correoSucursalAguascalientes02 = 0;

            $correoSucursalMonterrey01 = 0;
            $correoSucursalMonterrey02 = 0;
            $correoSucursalGuadalajara01 = 0;
            $correoSucursalGuadalajara02 = 0;
            $correoSucursalCuliacan01 = 0;
            $correoSucursalCuliacan02 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                # México
                if ($r['usuario'] == 'campoedomexico1') { $correoSucursalEstadodemexico01 = $correoSucursalEstadodemexico01; $correoSucursalEstadodemexico01++; }
                if ($r['usuario'] == 'equipoedomexico') { $correoSucursalEstadodemexico02 = $correoSucursalEstadodemexico02; $correoSucursalEstadodemexico02++; }
                if ($r['usuario'] == 'mostradoredomexico1') { $correoSucursalEstadodemexico03 = $correoSucursalEstadodemexico03; $correoSucursalEstadodemexico03++; }
                if ($r['usuario'] == 'mostradoredomexico2') { $correoSucursalEstadodemexico04 = $correoSucursalEstadodemexico04; $correoSucursalEstadodemexico04++; }
                # Aguascalientes
                if ($r['usuario'] == 'slopez') { $correoSucursalAguascalientes01 = $correoSucursalAguascalientes01; $correoSucursalAguascalientes01++; }
                if ($r['usuario'] == 'vmaguascalientes01') { $correoSucursalAguascalientes02 = $correoSucursalAguascalientes02; $correoSucursalAguascalientes02++; }
                # Monterrey
                if ($r['usuario'] == 'campomonterrey') { $correoSucursalMonterrey01 = $correoSucursalMonterrey01; $correoSucursalMonterrey01++; }
                if ($r['usuario'] == 'ventasmonterrey') { $correoSucursalMonterrey02 = $correoSucursalMonterrey02; $correoSucursalMonterrey02++; }
                # Guadalajara
                if ($r['usuario'] == 'ggalvan') { $correoSucursalGuadalajara01 = $correoSucursalGuadalajara01; $correoSucursalGuadalajara01++; }
                if ($r['usuario'] == 'ventasguadalajara') { $correoSucursalGuadalajara02 = $correoSucursalGuadalajara02; $correoSucursalGuadalajara02++; }
                # Culiacan
                if ($r['usuario'] == 'ealvarez') { $correoSucursalCuliacan01 = $correoSucursalCuliacan01; $correoSucursalCuliacan01++; }
                if ($r['usuario'] == 'ventas2culiacan') { $correoSucursalCuliacan02 = $correoSucursalCuliacan02; $correoSucursalCuliacan02++; }
                else {
                }
                $i++;

            }
            $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'");

            $i = 1;
            $descartadoSucursalEstadodemexico01 = 0;
            $descartadoSucursalEstadodemexico02 = 0;
            $descartadoSucursalEstadodemexico03 = 0;
            $descartadoSucursalEstadodemexico04 = 0;

            $descartadoSucursalAguascalientes01 = 0;
            $descartadoSucursalAguascalientes02 = 0;

            $descartadoSucursalMonterrey01 = 0;
            $descartadoSucursalMonterrey02 = 0;
            $descartadoSucursalGuadalajara01 = 0;
            $descartadoSucursalGuadalajara02 = 0;
            $descartadoSucursalCuliacan01 = 0;
            $descartadoSucursalCuliacan02 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                # Estado de México
                if ($r['usuario'] == 'campoedomexico1') { $descartadoSucursalEstadodemexico01 = $descartadoSucursalEstadodemexico01; $descartadoSucursalEstadodemexico01++; }
                if ($r['usuario'] == 'equipoedomexico') { $descartadoSucursalEstadodemexico02 = $descartadoSucursalEstadodemexico02; $descartadoSucursalEstadodemexico02++; }
                if ($r['usuario'] == 'mostradoredomexico1') { $descartadoSucursalEstadodemexico03 = $descartadoSucursalEstadodemexico03; $descartadoSucursalEstadodemexico03++; }
                if ($r['usuario'] == 'mostradoredomexico2') { $descartadoSucursalEstadodemexico04 = $descartadoSucursalEstadodemexico04; $descartadoSucursalEstadodemexico04++; }
                # Aguascalientes
                if ($r['usuario'] == 'slopez') { $descartadoSucursalAguascalientes01 = $descartadoSucursalAguascalientes01; $descartadoSucursalAguascalientes01++; }
                if ($r['usuario'] == 'vmaguascalientes01') { $descartadoSucursalAguascalientes02 = $descartadoSucursalAguascalientes02; $descartadoSucursalAguascalientes02++; }
                # Monterrey
                if ($r['usuario'] == 'campomonterrey') { $descartadoSucursalMonterrey01 = $descartadoSucursalMonterrey01; $descartadoSucursalMonterrey01++; }
                if ($r['usuario'] == 'ventasmonterrey') { $descartadoSucursalMonterrey02 = $descartadoSucursalMonterrey02; $descartadoSucursalMonterrey02++; }
                # Guadalajara
                if ($r['usuario'] == 'ggalvan') { $descartadoSucursalGuadalajara01 = $descartadoSucursalGuadalajara01; $descartadoSucursalGuadalajara01++; }
                if ($r['usuario'] == 'ventasguadalajara') { $descartadoSucursalGuadalajara02 = $descartadoSucursalGuadalajara02; $descartadoSucursalGuadalajara02++; }
                # Culiacan
                if ($r['usuario'] == 'ealvarez') { $descartadoSucursalCuliacan01 = $descartadoSucursalCuliacan01; $descartadoSucursalCuliacan01++; }
                if ($r['usuario'] == 'ventas2culiacan') { $descartadoSucursalCuliacan02 = $descartadoSucursalCuliacan02; $descartadoSucursalCuliacan02++; }
                else {
                }

                $i++;

            }            


/* / Individuales */


    $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'");

            $i = 1;
            $facturadoSucursalTelemarketing01 = 0;
            $facturadoSucursalTelemarketing02 = 0;
            $facturadoSucursalTelemarketing03 = 0;
            $facturadoSucursalTelemarketing04 = 0;
            $facturadoSucursalTelemarketing05 = 0;
            $facturadoSucursalTelemarketing06 = 0;
            $facturadoSucursalTelemarketing07 = 0;
            $facturadoSucursalTelemarketing08 = 0;


            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                if ($r['usuario'] == 'telemarketing01') { $facturadoSucursalTelemarketing01 = $facturadoSucursalTelemarketing01; $facturadoSucursalTelemarketing01++; }
                if ($r['usuario'] == 'telemarketing02') { $facturadoSucursalTelemarketing02 = $facturadoSucursalTelemarketing02; $facturadoSucursalTelemarketing02++; }
                if ($r['usuario'] == 'telemarketing03') { $facturadoSucursalTelemarketing03 = $facturadoSucursalTelemarketing03; $facturadoSucursalTelemarketing03++; }
                if ($r['usuario'] == 'telemarketing04') { $facturadoSucursalTelemarketing04 = $facturadoSucursalTelemarketing04; $facturadoSucursalTelemarketing04++; }
                if ($r['usuario'] == 'telemarketing05') { $facturadoSucursalTelemarketing05 = $facturadoSucursalTelemarketing05; $facturadoSucursalTelemarketing05++; }
                if ($r['usuario'] == 'telemarketing06') { $facturadoSucursalTelemarketing06 = $facturadoSucursalTelemarketing06; $facturadoSucursalTelemarketing06++; }
                if ($r['usuario'] == 'telemarketing07') { $facturadoSucursalTelemarketing07 = $facturadoSucursalTelemarketing07; $facturadoSucursalTelemarketing07++; }
                if ($r['usuario'] == 'telemarketing08') { $facturadoSucursalTelemarketing08 = $facturadoSucursalTelemarketing08; $facturadoSucursalTelemarketing08++; }
                else {
                }
                $i++;

            }

    $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'");

            $i = 1;
            $correoSucursalTelemarketing01 = 0;
            $correoSucursalTelemarketing02 = 0;
            $correoSucursalTelemarketing03 = 0;
            $correoSucursalTelemarketing04 = 0;
            $correoSucursalTelemarketing05 = 0;
            $correoSucursalTelemarketing06 = 0;
            $correoSucursalTelemarketing07 = 0;
            $correoSucursalTelemarketing08 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}
                if ($r['usuario'] == 'telemarketing01') { $correoSucursalTelemarketing01 = $correoSucursalTelemarketing01; $correoSucursalTelemarketing01++; }
                if ($r['usuario'] == 'telemarketing02') { $correoSucursalTelemarketing02 = $correoSucursalTelemarketing02; $correoSucursalTelemarketing02++; }
                if ($r['usuario'] == 'telemarketing03') { $correoSucursalTelemarketing03 = $correoSucursalTelemarketing03; $correoSucursalTelemarketing03++; }
                if ($r['usuario'] == 'telemarketing04') { $correoSucursalTelemarketing04 = $correoSucursalTelemarketing04; $correoSucursalTelemarketing04++; }
                if ($r['usuario'] == 'telemarketing05') { $correoSucursalTelemarketing05 = $correoSucursalTelemarketing05; $correoSucursalTelemarketing05++; }
                if ($r['usuario'] == 'telemarketing06') { $correoSucursalTelemarketing06 = $correoSucursalTelemarketing06; $correoSucursalTelemarketing06++; }
                if ($r['usuario'] == 'telemarketing07') { $correoSucursalTelemarketing07 = $correoSucursalTelemarketing07; $correoSucursalTelemarketing07++; }
                if ($r['usuario'] == 'telemarketing08') { $correoSucursalTelemarketing08 = $correoSucursalTelemarketing08; $correoSucursalTelemarketing08++; }

                    else {

                    }

                    $i++;

            }

    $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'");

            $i = 1;
            $llamadaSucursalTelemarketing01 = 0;
            $llamadaSucursalTelemarketing02 = 0;
            $llamadaSucursalTelemarketing03 = 0;
            $llamadaSucursalTelemarketing04 = 0;
            $llamadaSucursalTelemarketing05 = 0;
            $llamadaSucursalTelemarketing06 = 0;
            $llamadaSucursalTelemarketing07 = 0;
            $llamadaSucursalTelemarketing08 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    if ($r['usuario'] == 'telemarketing01') { $llamadaSucursalTelemarketing01 = $llamadaSucursalTelemarketing01; $llamadaSucursalTelemarketing01++; }
                    if ($r['usuario'] == 'telemarketing02') { $llamadaSucursalTelemarketing02 = $llamadaSucursalTelemarketing02; $llamadaSucursalTelemarketing02++; }
                    if ($r['usuario'] == 'telemarketing03') { $llamadaSucursalTelemarketing03 = $llamadaSucursalTelemarketing03; $llamadaSucursalTelemarketing03++; }
                    if ($r['usuario'] == 'telemarketing04') { $llamadaSucursalTelemarketing04 = $llamadaSucursalTelemarketing04; $llamadaSucursalTelemarketing04++; }
                    if ($r['usuario'] == 'telemarketing05') { $llamadaSucursalTelemarketing05 = $llamadaSucursalTelemarketing05; $llamadaSucursalTelemarketing05++; }
                    if ($r['usuario'] == 'telemarketing06') { $llamadaSucursalTelemarketing06 = $llamadaSucursalTelemarketing06; $llamadaSucursalTelemarketing06++; }
                    if ($r['usuario'] == 'telemarketing07') { $llamadaSucursalTelemarketing07 = $llamadaSucursalTelemarketing07; $llamadaSucursalTelemarketing07++; }
                    if ($r['usuario'] == 'telemarketing08') { $llamadaSucursalTelemarketing08 = $llamadaSucursalTelemarketing08; $llamadaSucursalTelemarketing08++; }
                    else {

                    }

                    $i++;

            }

            $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'");

            $i = 1;
            $llamadaycorreoSucursalTelemarketing01 = 0;
            $llamadaycorreoSucursalTelemarketing02 = 0;
            $llamadaycorreoSucursalTelemarketing03 = 0;
            $llamadaycorreoSucursalTelemarketing04 = 0;
            $llamadaycorreoSucursalTelemarketing05 = 0;
            $llamadaycorreoSucursalTelemarketing06 = 0;
            $llamadaycorreoSucursalTelemarketing07 = 0;
            $llamadaycorreoSucursalTelemarketing08 = 0;

            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}
                if ($r['usuario'] == 'telemarketing01') { $llamadaycorreoSucursalTelemarketing01 = $llamadaycorreoSucursalTelemarketing01; $llamadaycorreoSucursalTelemarketing01++; }
                if ($r['usuario'] == 'telemarketing02') { $llamadaycorreoSucursalTelemarketing02 = $llamadaycorreoSucursalTelemarketing02; $llamadaycorreoSucursalTelemarketing02++; }
                if ($r['usuario'] == 'telemarketing03') { $llamadaycorreoSucursalTelemarketing03 = $llamadaycorreoSucursalTelemarketing03; $llamadaycorreoSucursalTelemarketing03++; }
                if ($r['usuario'] == 'telemarketing04') { $llamadaycorreoSucursalTelemarketing04 = $llamadaycorreoSucursalTelemarketing04; $llamadaycorreoSucursalTelemarketing04++; }
                if ($r['usuario'] == 'telemarketing05') { $llamadaycorreoSucursalTelemarketing05 = $llamadaycorreoSucursalTelemarketing05; $llamadaycorreoSucursalTelemarketing05++; }
                if ($r['usuario'] == 'telemarketing06') { $llamadaycorreoSucursalTelemarketing06 = $llamadaycorreoSucursalTelemarketing06; $llamadaycorreoSucursalTelemarketing06++; }
                if ($r['usuario'] == 'telemarketing07') { $llamadaycorreoSucursalTelemarketing07 = $llamadaycorreoSucursalTelemarketing07; $llamadaycorreoSucursalTelemarketing07++; }
                if ($r['usuario'] == 'telemarketing08') { $llamadaycorreoSucursalTelemarketing08 = $llamadaycorreoSucursalTelemarketing08; $llamadaycorreoSucursalTelemarketing08++; }
                else {

                }

                    $i++;

            }

        $res = mysql_query("SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'");

            $i = 1;
            $descartadoSucursalTelemarketing01 = 0;
            $descartadoSucursalTelemarketing02 = 0;
            $descartadoSucursalTelemarketing03 = 0;
            $descartadoSucursalTelemarketing04 = 0;
            $descartadoSucursalTelemarketing05 = 0;
            $descartadoSucursalTelemarketing06 = 0;
            $descartadoSucursalTelemarketing07 = 0;
            $descartadoSucursalTelemarketing08 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                if ($r['usuario'] == 'telemarketing01') { $descartadoSucursalTelemarketing01 = $descartadoSucursalTelemarketing01; $descartadoSucursalTelemarketing01++; }
                if ($r['usuario'] == 'telemarketing02') { $descartadoSucursalTelemarketing02 = $descartadoSucursalTelemarketing02; $descartadoSucursalTelemarketing02++; }
                if ($r['usuario'] == 'telemarketing03') { $descartadoSucursalTelemarketing03 = $descartadoSucursalTelemarketing03; $descartadoSucursalTelemarketing03++; }
                if ($r['usuario'] == 'telemarketing04') { $descartadoSucursalTelemarketing04 = $descartadoSucursalTelemarketing04; $descartadoSucursalTelemarketing04++; }
                if ($r['usuario'] == 'telemarketing05') { $descartadoSucursalTelemarketing05 = $descartadoSucursalTelemarketing05; $descartadoSucursalTelemarketing05++; }
                if ($r['usuario'] == 'telemarketing06') { $descartadoSucursalTelemarketing06 = $descartadoSucursalTelemarketing06; $descartadoSucursalTelemarketing06++; }
                if ($r['usuario'] == 'telemarketing07') { $descartadoSucursalTelemarketing07 = $descartadoSucursalTelemarketing07; $descartadoSucursalTelemarketing07++; }
                if ($r['usuario'] == 'telemarketing08') { $descartadoSucursalTelemarketing08 = $descartadoSucursalTelemarketing08; $descartadoSucursalTelemarketing08++; }
                else {
                
                }

                    $i++;
                    
            }

?>