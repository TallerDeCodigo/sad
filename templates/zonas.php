<!DOCTYPE html>
<html lang="es" ng-app="appZonas">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard - Nissan SAD</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../assets/images/logo_nissan.png" style="width: 50%;"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Ayuda</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" ng-model="search" ng-change="filter()" placeholder="Buscar" class="form-control" />
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
        
            <li><a href="unidadinmovilizada.html">Unidad Inmovilizada</a></li>
            <li><a href="#">Sistema de llaves</a></li>
            <li class="active"><a href="#">Información de partes en orden pendiente y seguimiento a pedido <span class="sr-only">(current)</span></a></li>
            <li><a href="informaciontecnica.html">Información Técnica</a></li>
            <li><a href="preciospartes-form.html">Consultra relacionada con precio de partes</a></li>
            <li><a href="#">Otras solicitudes</a></li>
          </ul>
          www.lisa.com.mx 
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         
          <div class="row placeholders">
           
           
          </div>
          <h2 class="sub-header">ZONAS</h2>
          
          <div class="row placeholders">
            <a href="backorder-form.html" class="btn btn-default" aria-label="Left Align">
              <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
            </a>
            <a  href="backorder-detail.html" class="btn btn-default" aria-label="Left Align">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a  href="#" class="btn btn-default" aria-label="Left Align">
              <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
            </a>
          </div>  
          <div class="table-responsive" ng-controller="zonasCrtl">
            <table class="table table-hover" ng-show="filteredItems > 0" >
              <thead>
                <tr>
                  <th>#</th>
                  <th style="display:none">Id</th>
                  <th>sad_zonaId</th>
                  <th>Nombre</th>
                  <th>Clave</th>
                  <th>Domicilio</th>
                  <th>Ciudad</th>
                  <th>Estado</th>
                  <th>Dealer</th>
                  <th>Compania</th>
                  <th>Activo</th>
                  <th>FechaMod</th>
                  <th>Tipo</th>
                  <th>Zona</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                  <td>{{data.No}}</td>
                  <td style="display:none">{{data.Id}}</td>
                  <td>{{data.sad_zonaId}}</td>
                  <td>{{data.Nombre}}</td>
                  <td>{{data.Clave}}</td>
                  <td>{{data.Domicilio}}</td>
                  <td>{{data.Ciudad}}</td>                 
                  <td>{{data.Estado}}</td>
                  <td>{{data.Dealer}}</td>
                  <td>{{data.Compania}}</td>
                  <td>{{data.Activo}}</td>
                  <td>{{data.FechaMod}}</td>
                  <td>{{data.Tipo}}</td>
                  <td>{{data.Zona}}</td>
                </tr>                
              </tbody>
            </table>
            <div class="col-md-12" ng-show="filteredItems == 0">
              <div class="col-md-12">
                  <h4>Sin resultados</h4>
              </div>
          </div>
          <div class="col-md-12" ng-show="filteredItems > 0">    
              <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
          </div>
          </div>
        </div>
      </div>
    </div>
         <!-- Bootstrap core JavaScript
    ================================================== -->


    <!-- Placed at the end of the document so the pages load faster -->

    
    <script src="../assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../assets/js/angular.min.js"></script>
    <script src="../assets/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular-route.min.js"></script>
    <script src="../assets/app/app.js"></script> 

  </body>
</html>
