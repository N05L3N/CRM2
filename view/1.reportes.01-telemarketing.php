<style> 
table.center .bordeInferior{
    border-bottom:1px #999 solid;
}
table.center td {
    text-align: center;
}
</style>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="myModalLabel">Telemarketing</h4>
            </div>
            <div class="modal-body">
<table class="table table-bordered table-striped table-condensed table-hover center" style="width:100%; margin-bottom:0;">
    <tr style="font-size:12px;">
        <th class="bordeInferior"></th>
        <th class="bordeInferior"><small>Asignaciones</small> <br> para Hoy</th>
        <th class="bordeInferior"><small>Asignaciones</small> <br> Totales</th>
        <th class="bordeInferior"><small>Asignaciones</small> <br> Atrasadas</th>
        <th class="bordeInferior">Facturado</th>
        <th class="bordeInferior">Correo</th>
        <th class="bordeInferior">Llamada</th>
        <th class="bordeInferior">Correo y<br> Llamada</th>
        <th class="bordeInferior">Descartado</th>
        <th class="bordeInferior"></th>
    </tr>
<?php
    

for ($i=1; $i < 9; $i++) { 

        $fxyT1 = ''.$fxyT1.'asignadoa = \''.$usuariosConsumibles[$i].'\' OR ';
        $fxyT2 = ''.$fxyT2.'usuario = \''.$usuariosConsumibles[$i].'\' OR ';

    }

    $res = mysql_query("SELECT usuario,nombre1,apellido1,correo FROM usuarios");

            $i = 1;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}
                    if ($r['usuario'] == 'telemarketing01') { $telemarketingNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $telemarketingEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'telemarketing02') { $telemarketingNombre02 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $telemarketingEmail02 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'telemarketing03') { $telemarketingNombre03 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $telemarketingEmail03 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'telemarketing04') { $telemarketingNombre04 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $telemarketingEmail04 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'telemarketing05') { $telemarketingNombre05 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $telemarketingEmail05 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'telemarketing06') { $telemarketingNombre06 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $telemarketingEmail06 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'telemarketing07') { $telemarketingNombre07 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $telemarketingEmail07 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'telemarketing08') { $telemarketingNombre08 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $telemarketingEmail08 = '' . $r['correo'] . ''; }

                    # Chihuahua

                    if ($r['usuario'] == 'evargas') { $uchihuahuaNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uchihuahuaEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'evargas') { $uchihuahuaNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uchihuahuaEmail01 = '' . $r['correo'] . ''; }

                    if ($r['usuario'] == 'campojuarez') { $ujuarezNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $ujuarezEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'campomonterrey') { $umonterreyNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $umonterreyEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'ventasmonterrey') { $umonterreyNombre02 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $umonterreyEmail02 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'airigoyen') { $udurangoNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $udurangoEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'ealvarez') { $uculiacanNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uculiacanEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'ventas2culiacan') { $uculiacanNombre02 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uculiacanEmail02 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'jhernandez') { $uobregonNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uobregonEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'jvazquez') { $umexicaliNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $umexicaliEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'vctijuana01') { $utijuanaNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $utijuanaEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'naguilar') { $utorreonNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $utorreonEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'rlopez') { $uhermosilloNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uhermosilloEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'coordinadorventas2') { $uSLPNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uSLPEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'ckarem') { $uveracruzNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uveracruzEmail01 = '' . $r['correo'] . ''; }
                    # Guadalajara
                    if ($r['usuario'] == 'ventasguadalajara') { $uguadalajaraNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uguadalajaraEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'vcguadalajara01') { $uguadalajaraNombre02 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uguadalajaraEmail02 = '' . $r['correo'] . ''; }

                    if ($r['usuario'] == 'nenriq') { $uqueretaroNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uqueretaroEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'rrojas') { $upueblaNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $upueblaEmail01 = '' . $r['correo'] . ''; }

                    # Aguascalientes
                    if ($r['usuario'] == 'slopez') { $uaguascalientesNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uaguascalientesEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'vmaguascalientes01') { $uaguascalientesNombre02 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uaguascalientesEmail02 = '' . $r['correo'] . ''; }

                    # México
                    if ($r['usuario'] == 'campoedomexico1') { $uestadodemexicoNombre01 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uestadodemexicoEmail01 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'equipoedomexico') { $uestadodemexicoNombre02 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uestadodemexicoEmail02 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'mostradoredomexico1') { $uestadodemexicoNombre03 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uestadodemexicoEmail03 = '' . $r['correo'] . ''; }
                    if ($r['usuario'] == 'mostradoredomexico2') { $uestadodemexicoNombre04 = '' . $r['nombre1'] . ' ' . $r['apellido1'] . ''; $uestadodemexicoEmail04 = '' . $r['correo'] . ''; }

                    else {

                    }

                    $i++;

            }

?>  
    <tr>
        <th class="bordeInferior">
            <?= $telemarketingNombre01 ?><br>
            <small>Usuario: Telemarketing01</small><br>
            <small><?= $telemarketingEmail01 ?></small>
        </th>
        <td class="bordeInferior"><span class="label label-info"><?= $semaforoHoyTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosTelemarketing01 ?></span></td>
        <td class="bordeInferior"><?= $facturadoSucursalTelemarketing01 ?></td>
        <td class="bordeInferior"><?= $correoSucursalTelemarketing01 ?></td>
        <td class="bordeInferior"><?= $llamadaSucursalTelemarketing01 ?></td>
        <td class="bordeInferior"><?= $llamadaycorreoSucursalTelemarketing01 ?></td>
        <td class="bordeInferior"><?= $descartadoSucursalTelemarketing01 ?></td>
        <td class="bordeInferior">
            <a href="history?vendedor=telemarketing01" target="_blank">
                <button type="button" class="btn btn-primary btn-xs">Bitácora</button>
            </a>
        </td>
    </tr>
    <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalSucursalAguascalientes"></button> -->
    <th class="bordeInferior">
            <?= $telemarketingNombre02 ?><br>
            <small>Usuario: Telemarketing02</small><br>
            <small><?= $telemarketingEmail02 ?></small>
        </th>
        <td class="bordeInferior"><span class="label label-info"><?= $semaforoHoyTelemarketing02 ?></span></td>
        <td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalTelemarketing02 ?></span></td>
        <td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosTelemarketing02 ?></span></td>
        <td class="bordeInferior"><?= $facturadoSucursalTelemarketing02 ?></td>
        <td class="bordeInferior"><?= $correoSucursalTelemarketing02 ?></td>
        <td class="bordeInferior"><?= $llamadaSucursalTelemarketing02 ?></td>
        <td class="bordeInferior"><?= $llamadaycorreoSucursalTelemarketing02 ?></td>
        <td class="bordeInferior"><?= $descartadoSucursalTelemarketing02 ?></td>
        <td class="bordeInferior">
            <a href="history?vendedor=telemarketing02" target="_blank">
                <button type="button" class="btn btn-primary btn-xs">Bitácora</button>
            </a>
        </td>
    </tr>
    <tr>
        <th class="bordeInferior">
            <?= $telemarketingNombre03 ?><br>
            <small>Usuario: Telemarketing03</small><br>
            <small><?= $telemarketingEmail03 ?></small>
        </th>
        <td class="bordeInferior"><span class="label label-info"><?= $semaforoHoyTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosTelemarketing01 ?></span></td>
        <td class="bordeInferior"><?= $facturadoSucursalTelemarketing03 ?></td>
        <td class="bordeInferior"><?= $correoSucursalTelemarketing03 ?></td>
        <td class="bordeInferior"><?= $llamadaSucursalTelemarketing03 ?></td>
        <td class="bordeInferior"><?= $llamadaycorreoSucursalTelemarketing03 ?></td>
        <td class="bordeInferior"><?= $descartadoSucursalTelemarketing03 ?></td>
        <td class="bordeInferior">
            <a href="history?vendedor=telemarketing03" target="_blank">
                <button type="button" class="btn btn-primary btn-xs">Bitácora</button>
            </a>
        </td>
    </tr>
    <tr>
        <th class="bordeInferior">
            <?= $telemarketingNombre04 ?><br>
            <small>Usuario: Telemarketing04</small><br>
            <small><?= $telemarketingEmail04 ?></small>
        </th>
        <td class="bordeInferior"><span class="label label-info"><?= $semaforoHoyTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosTelemarketing01 ?></span></td>
        <td class="bordeInferior"><?= $facturadoSucursalTelemarketing04 ?></td>
        <td class="bordeInferior"><?= $correoSucursalTelemarketing04 ?></td>
        <td class="bordeInferior"><?= $llamadaSucursalTelemarketing04 ?></td>
        <td class="bordeInferior"><?= $llamadaycorreoSucursalTelemarketing04 ?></td>
        <td class="bordeInferior"><?= $descartadoSucursalTelemarketing04 ?></td>
        <td class="bordeInferior">
            <a href="history?vendedor=telemarketing04" target="_blank">
                <button type="button" class="btn btn-primary btn-xs">Bitácora</button>
            </a>
        </td>
    </tr>
    <tr>
        <th class="bordeInferior">
            <?= $telemarketingNombre05 ?><br>
            <small>Usuario: Telemarketing05</small><br>
            <small><?= $telemarketingEmail05 ?></small>
        </th>
        <td class="bordeInferior"><span class="label label-info"><?= $semaforoHoyTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosTelemarketing01 ?></span></td>
        <td class="bordeInferior"><?= $facturadoSucursalTelemarketing05 ?></td>
        <td class="bordeInferior"><?= $correoSucursalTelemarketing05 ?></td>
        <td class="bordeInferior"><?= $llamadaSucursalTelemarketing05 ?></td>
        <td class="bordeInferior"><?= $llamadaycorreoSucursalTelemarketing05 ?></td>
        <td class="bordeInferior"><?= $descartadoSucursalTelemarketing05 ?></td>
        <td class="bordeInferior">
            <a href="history?vendedor=telemarketing05" target="_blank">
                <button type="button" class="btn btn-primary btn-xs">Bitácora</button>
            </a>
        </td>
    </tr>
    <tr>
        <th class="bordeInferior">
            <?= $telemarketingNombre06 ?><br>
            <small>Usuario: Telemarketing06</small><br>
            <small><?= $telemarketingEmail06 ?></small>
        </th>
        <td class="bordeInferior"><span class="label label-info"><?= $semaforoHoyTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosTelemarketing01 ?></span></td>
        <td class="bordeInferior"><?= $facturadoSucursalTelemarketing06 ?></td>
        <td class="bordeInferior"><?= $correoSucursalTelemarketing06 ?></td>
        <td class="bordeInferior"><?= $llamadaSucursalTelemarketing06 ?></td>
        <td class="bordeInferior"><?= $llamadaycorreoSucursalTelemarketing06 ?></td>
        <td class="bordeInferior"><?= $descartadoSucursalTelemarketing06 ?></td>
        <td class="bordeInferior">
            <a href="history?vendedor=telemarketing06" target="_blank">
                <button type="button" class="btn btn-primary btn-xs">Bitácora</button>
            </a>
        </td>
    </tr>
    <tr>
        <th class="bordeInferior">
            <?= $telemarketingNombre07 ?><br>
            <small>Usuario: Telemarketing07</small><br>
            <small><?= $telemarketingEmail07 ?></small>
        </th>
        <td class="bordeInferior"><span class="label label-info"><?= $semaforoHoyTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosTelemarketing01 ?></span></td>
        <td class="bordeInferior"><?= $facturadoSucursalTelemarketing07 ?></td>
        <td class="bordeInferior"><?= $correoSucursalTelemarketing07 ?></td>
        <td class="bordeInferior"><?= $llamadaSucursalTelemarketing07 ?></td>
        <td class="bordeInferior"><?= $llamadaycorreoSucursalTelemarketing07 ?></td>
        <td class="bordeInferior"><?= $descartadoSucursalTelemarketing07 ?></td>
        <td class="bordeInferior">
            <a href="history?vendedor=telemarketing07" target="_blank">
                <button type="button" class="btn btn-primary btn-xs">Bitácora</button>
            </a>
        </td>
    </tr>
    <tr>
        <th class="bordeInferior">
            <?= $telemarketingNombre08 ?><br>
            <small>Usuario: Telemarketing08</small><br>
            <small><?= $telemarketingEmail08 ?></small>
        </th>
        <td class="bordeInferior"><span class="label label-info"><?= $semaforoHoyTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalTelemarketing01 ?></span></td>
        <td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosTelemarketing01 ?></span></td>
        <td class="bordeInferior"><?= $facturadoSucursalTelemarketing08 ?></td>
        <td class="bordeInferior"><?= $correoSucursalTelemarketing08 ?></td>
        <td class="bordeInferior"><?= $llamadaSucursalTelemarketing08 ?></td>
        <td class="bordeInferior"><?= $llamadaycorreoSucursalTelemarketing08 ?></td>
        <td class="bordeInferior"><?= $descartadoSucursalTelemarketing08 ?></td>
        <td class="bordeInferior">
            <a href="history?vendedor=telemarketing08" target="_blank">
                <button type="button" class="btn btn-primary btn-xs">Bitácora</button>
            </a>
        </td>
    </tr>
</table>
        </div>
    </div>
</div>
</div>










<div class="modal fade" id="ModalSucursalChihuahuaPlayeras" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="myModalLabel">Playeras y Gorras Textiles</h4>
            </div>
            <div class="modal-body">
<table class="table table-bordered table-striped table-condensed table-hover" style="width:100%; margin-bottom:0;">
    <tr>
        <th>Departamento</th class="bordeInferior">
        <th>Facturado</th class="bordeInferior">
        <th>Correo</th class="bordeInferior">
        <th>Llamada</th class="bordeInferior">
        <th>Correo y Llamada</th class="bordeInferior">
        <th>Descartado</th class="bordeInferior">
        <th></th class="bordeInferior">
    </tr>
    <tr>
        <th>campochihuahua1</th class="bordeInferior">
        <th><?= $total_facturados_campochihuahua1 ?></th class="bordeInferior">
        <th><?= $total_correos_campochihuahua1 ?></th class="bordeInferior">
        <th><?= $total_llamadas_campochihuahua1 ?></th class="bordeInferior">
        <th><?= $total_llamadasycorreos_campochihuahua1 ?></th class="bordeInferior">
        <th><?= $total_descartados_campochihuahua1 ?></th class="bordeInferior">
        <th class="bordeInferior">
            <a href="history?vendedor=telemarketing01" target="_blank">
                <button type="button" class="btn btn-primary btn-xs">Bitácora</button>
            </a>
        </th>
    </tr>
</table>
        </div>
    </div>
</div>
</div>