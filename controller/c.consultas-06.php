	window.onload = function(){
	/* Reporte de Status*/
		
	var ctxStatusEquipo = document.getElementById("chart-StatusEquipo").getContext("2d");
	window.myPie = new Chart(ctxStatusEquipo).Pie(pieDataStatusEquipo);
	
	var ctxStatusTelemarketing = document.getElementById("chart-StatusTelemarketing").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketing).Pie(pieDataStatusTelemarketing);

	var ctxStatusPlayeras = document.getElementById("chart-StatusPlayeras").getContext("2d");
	window.myPie = new Chart(ctxStatusPlayeras).Pie(pieDataStatusPlayeras);

	var ctxStatusVentasCampo = document.getElementById("chart-StatusVentascampo").getContext("2d");
	window.myPie = new Chart(ctxStatusVentasCampo).Pie(pieDataStatusVentasCampo);

	var ctxStatusVentasCampo1 = document.getElementById("chart-StatusVentascampo1").getContext("2d");
	window.myPie = new Chart(ctxStatusVentasCampo1).Pie(pieDataStatusVentasCampoC1);

	var ctxStatusVentasCampo2 = document.getElementById("chart-StatusVentascampo2").getContext("2d");
	window.myPie = new Chart(ctxStatusVentasCampo2).Pie(pieDataStatusVentasCampoC2);

//	var ctxStatusTelemarketingCampochihuahua1 = document.getElementById("chart2-StatusCampochihuahua1").getContext("2d");
//	window.myPie = new Chart(ctxStatusTelemarketingCampochihuahua1).Pie(pieDataStatusTelemarketingCampochihuahua1, {segmentShowStroke: true,segmentStrokeColor: "#fff",segmentStrokeWidth: 2,percentageInnerCutout: 0,animationSteps: 100,animationEasing: "easeOutBounce",animateRotate: true,animateScale : false});

	/* Reporte de Asignaciones*/
	
	/* Todos */
	
	var ctx2 = document.getElementById("chart-area2").getContext("2d");
	window.myPie = new Chart(ctx2).Pie(pieData2);
	
	var ctxEquipo = document.getElementById("chart-areaEquipo").getContext("2d");
	window.myPie = new Chart(ctxEquipo).Doughnut(pieDataEquipo);
	
	var ctxConsumibles = document.getElementById("chart-areaConsumibles").getContext("2d");
	window.myPie = new Chart(ctxConsumibles).Doughnut(pieDataConsumibles);
	
	var ctxStatusTelemarketingSAC = document.getElementById("chart-StatusTelemarketingSAC").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingSAC).Pie(pieDataStatusTelemarketingSAC);
	/**/
};