<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema PosGooN</title>
	<!-- bootstrap -->
    <link href="css/cargando.css" rel="stylesheet">
    
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="css/puglins/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/puglins/AdminLTE.css" rel="stylesheet">
    <link href="css/puglins/alertify.css" rel="stylesheet">
  <!-- bootstrap js -->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body style="background-image: url(imagenes/bg2.jpg); box-shadow: 0 0 35px 8px black;">
	
	<div class="container">
    <nav class="navbar navbar-inverse" >
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
       <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
              </button>

      <a class="navbar-brand" href="#">GOURMET</a>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myNavbar">      
      <ul class="nav navbar-nav ">        
        <li id="navDashboard"><a href="index.php"></i>Cierre diario</a></li>                      
        <li id="navDashboard"><a href="index.php"></i>Reporte de Caja</a></li>                      
        <li id="navDashboard"><a href="index.php"></i>Reporte de Productos</a></li>                      
        <li id="navDashboard"><a href="index.php"></i>Reporte de Servicios</a></li>                      
        <li id="navDashboard"><a href="index.php"></i>Reporte de Clientes</a></li>                      
        <li id="navDashboard"><a href="productos.php" > <i class="glyphicon glyphicon-cog"></i> Mantenimiento</span></a></li>                      
    
        <li id="navBrand"><a href="brand.php"><i class="glyphicon glyphicon-btc"></i>Contabilidad</a></li>        
        <!-- <li id="navReport"><a href="report.php"> <i class="glyphicon glyphicon-check"></i> Report </a></li> -->
        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavSetting"><a href="setting.php"> <i class="glyphicon glyphicon-wrench"></i> Ajuestes</a></li>            
            <li id="topNavLogout"><a href="../posgoon/logout.php"> <i class="glyphicon glyphicon-log-out"></i> Cerrar Sesion</a></li>            
          </ul>
        </li>                       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>