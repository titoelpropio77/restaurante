<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema PosGooN</title>
	<!-- bootstrap -->
    
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- bootstrap js -->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
      <ul class="nav navbar-nav navbar-right">        
      	<li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i>Cierre diario</a></li>                      
        <li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i>Reporte de Caja</a></li>                      
        <li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i>Reporte de Productos</a></li>                      
        <li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i>Reporte de Servicios</a></li>                      
        <li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i>Reporte de Clientes</a></li>                      
        <li class="dropdown" id="navOrder">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-cog"></i> Mantenimiento <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="navCategories"><a href="categories.php"> <i class="glyphicon glyphicon-th-list"></i> Categorias</a></li>        
            <li id="navProduct"><a href="productos.php"> <i class="glyphicon glyphicon-cutlery"></i> Productos </a></li>               
            <li id="navCategories"><a href="categories.php"> <i class="glyphicon glyphicon-th-list"></i>Grupos</a></li>        
            <li id="navCategories"><a href="categories.php"> <i class="glyphicon glyphicon-th-list"></i>Inventario y produccion</a></li>                    
            <li id="navProduct"><a href="product.php"> <i class="glyphicon glyphicon-ruble"></i>Usuarios</a></li>               
            <li id="navProduct"><a href="product.php"> <i class="glyphicon glyphicon-ruble"></i>Mesas</a></li>               
          </ul>
        </li> 
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
	<div class="container">
    