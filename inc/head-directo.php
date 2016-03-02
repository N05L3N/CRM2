<?php
# Configuración de base de datos para la paginación
include('controller/databases.php');
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

	<title><?php echo $mt_title;?></title>
    
    <!-- Pagination -->
    <link href="css/pagination.css" rel="stylesheet">

	<!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	
        <link href="signin.css" rel="stylesheet">
        <link href="theme.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Paginación -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <script type="text/javascript">
    
    $(document).ready(function(){
        
    //Display Loading Image
    function Display_Load()
    {
        $("#loading").fadeIn(900,0);
        $("#loading").html("<img src='bigLoader.gif' />");
    }
    //Hide Loading Image
    function Hide_Load()
    {
        $("#loading").fadeOut('slow');
    };
    

   //Default Starting Page Results
   
    $("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
    
    Display_Load();
    
    $("#content").load("pagination_data.php?page=1", Hide_Load());



    //Pagination Click
    $("#pagination li").click(function(){
            
        Display_Load();
        
        //CSS Styles
        $("#pagination li")
        .css({'border' : 'solid #dddddd 1px'})
        .css({'color' : '#0063DC'});
        
        $(this)
        .css({'color' : '#FF0084'})
        .css({'border' : 'none'});

        //Loading Data
        var pageNum = this.id;
        
        $("#content").load("pagination_data.php?page=" + pageNum, Hide_Load());
    });
    
    
});
    </script>
    
<link rel="stylesheet" href="main.css" />    
    <!-- /Paginación -->

</head>
<body>