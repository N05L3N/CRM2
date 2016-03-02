	var pieDataStatusEquipo = [
		{
			value: <?= $total_calientes ?>,
			color:"#d9534f",
			highlight: "#d9534f",
			label: "Calientes"
		},
		{
			value: <?= $total_descartados ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
		{
			value: <?= $total_facturados ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_frios ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Frios"
		},
		{
			value: <?= $total_tibios ?>,
			color: "#f0ad4e",
			highlight: "#f0ad4e",
			label: "Tibios"
		}
	];

	var pieDataStatusTelemarketing = [
		{
			value: <?= $total_correosT ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_descartadosT ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
		{
			value: <?= $total_facturadosT ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_llamadasT ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreosT ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Correos y Llamadas"
		}
	];

	var pieDataStatusPlayeras = [
		{
			value: <?= $total_correos_campochihuahua1 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_descartados_campochihuahua1 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
		{
			value: <?= $total_facturados_campochihuahua1 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_llamadas_campochihuahua1 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_campochihuahua1 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Correos y Llamadas"
		}
	];

	var pieDataStatusVentasCampo = [
		{
			value: <?= $total_correosVC ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: ""
		},
		{
			value: <?= $total_descartadosVC ?>,
			color: "#999999",
			highlight: "#999999",
			label: ""
		},
		{
			value: <?= $total_facturadosVC ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: ""
		},
	];

	var pieDataStatusVentasCampoC1 = [
		{
			value: <?= $total_correosVC1 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: ""
		},
		{
			value: <?= $total_descartadosVC1 ?>,
			color: "#999999",
			highlight: "#999999",
			label: ""
		},
		{
			value: <?= $total_facturadosVC1 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: ""
		},
	];

	var pieDataStatusVentasCampoC2 = [
		{
			value: <?= $total_correosVC2 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: ""
		},
		{
			value: <?= $total_descartadosVC2 ?>,
			color: "#999999",
			highlight: "#999999",
			label: ""
		},
		{
			value: <?= $total_facturadosVC2 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: ""
		},
	];

	var pieDataStatusTelemarketingCampochihuahua1 = [
		{
			value: <?= $total_correos_campochihuahua1 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			segmentStrokeColor: "#ff0000",
			label: "Correos",
			
			//Boolean - Whether we should show a stroke on each segment
			segmentShowStroke : true,

    			//String - The colour of each segment stroke
    			segmentStrokeColor : "#fff",

    			//Number - The width of each segment stroke
    			segmentStrokeWidth : 2,

			//Number - The percentage of the chart that we cut out of the middle
			percentageInnerCutout : 50, // This is 0 for Pie charts

			//Number - Amount of animation steps
			animationSteps : 100,

    			//String - Animation easing effect
			animationEasing : "easeOutBounce",

			//Boolean - Whether we animate the rotation of the Doughnut
			animateRotate : true,

			//Boolean - Whether we animate scaling the Doughnut from the centre
			animateScale : false,

			//String - A legend template
			legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
		},
		{
			value: <?= $total_descartados_campochihuahua1 ?>,
			color: "#999999",
			highlight: "#999999",
			segmentStrokeColor: "#ff0000",
			label: "Descartados"
		},
		{
			value: <?= $total_facturados_campochihuahua1 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			segmentStrokeColor: "#ff0000",
			label: "Facturados"
		},
		{
			value: <?= $total_llamadas_campochihuahua1 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			segmentStrokeColor: "#ff0000",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_campochihuahua1 ?>,
			color: "#428bca",
			highlight: "#428bca",
			segmentStrokeColor: "#ff0000",
			label: "Llamadas y Correos"
		}
	];

	var pieDataStatusTelemarketingSAC = [
		{
			value: <?= $total_pendientesSAC ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Pendientes"
		},
		{
			value: <?= $total_facturadosSAC ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		}
	];

	var pieData2 = [
		{
			value: <?= $consultas_numero_asignacionesHoy ?>,
			color:"#5bc0de",
			highlight: "#5bc0de",
			label: "Hoy"
		},
		{
			value: <?= $consultas_numero_asignacionesTotal ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Total"
		},
		{
			value: <?= $consultas_numero_sinAsignacionesTotal ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Sin Asignaciones"
		},
		{
			value: <?= $consultas_numero_pendientes ?>,
			color: "#d9534f",
			highlight: "#d9534f",
			label: "Atrasados"
		}
	];

	var pieDataEquipo = [
		{
			value: <?= $consultasEquipo_numero_asignacionesHoy ?>,
			color:"#5bc0de",
			highlight: "#5bc0de",
			label: "Hoy"
		},
		{
			value: <?= $b_equipo ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $consultasEquipo_numero_pendientes ?>,
			color: "#d9534f",
			highlight: "#d9534f",
			label: "Atrasados"
		}
	];

	var pieDataConsumibles = [
		{
			value: <?= $consultasConsumibles_numero_asignacionesHoy ?>,
			color:"#5bc0de",
			highlight: "#5bc0de",
			label: "Hoy"
		},
		{
			value: <?= $b_consumibles ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $consultasConsumibles_numero_pendientes ?>,
			color: "#d9534f",
			highlight: "#d9534f",
			label: "Atrasados"
		}
	];