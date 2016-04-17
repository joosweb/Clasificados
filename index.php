<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>
  <title>Clasificados</title>
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- SweetAlert for Bootstrap -->
    <script src="//lipis.github.io/bootstrap-sweetalert/lib/sweet-alert.js"></script>
    <link href="//lipis.github.io/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet" >
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-42119746-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Guaky.cl </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" role="search" style="margin-top:7px;">
       <button type="button" class="btn btn-danger">Publica tu anuncio Gratis!</button>
      </form>
        <li><a href="index.php?s=home">Inicio</a></li>
         <li><a href="index.php?s=register">Crear Cuenta</a></li>
         <li><a href="">Acceder</a></li>
         <li><a href="">Vender</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">

    <div class="row">
        <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Busqueda Avanzada</h3>
          </div>
          <div class="panel-body">
           <form class="form-inline">
            <label class="filter_txt" for="w">Filtrar por palabra</label>
            <div class="form-group">
              <input type="text" style="width:230px; background-color:#F2F2F2;" size="22" class="form-control input-sm" id="exampleInputName2" placeholder="Computadores, Autos, Casas, etc...">
            </div>
            <div style="margin-top:6px;">
            <div class="form-group">
            <label for="exampleInputName2">Seleccione su Región</label>
            <select class="form-control input-sm" style="width:230px; background-color:#F2F2F2;" name="region" id="region">
            <option value="3">Chile</option>            
            <option value="115">Región Metropolitana</option>
            <option value="101">XV Arica &amp; Parinacota</option>
            <option value="102">I Tarapacá</option>
            <option value="103">II Antofagasta</option>
            <option value="104">III Atacama</option>
            <option value="105">IV Coquimbo</option>
            <option value="106">V Valparaíso</option>
            <option value="107">VI O'Higgins</option>
            <option value="108">VII Maule</option>
            <option value="109">VIII Biobío</option>
            <option value="110">IX Araucanía</option>
            <option value="111">XIV Los Ríos</option>
            <option value="112">X Los Lagos</option>
            <option value="113">XI Aisén</option>
            <option value="114">XII Magallanes &amp; Antártica</option>
          </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail2">Seleccione una categoria</label>
            <select style="width:230px; background-color:#F2F2F2" class="form-control input-sm" name="cg" onchange="SearchCrit(false);" id="catgroup" class="search_category">
            <option value="0">Todas las categorías </option>
            <option value="8020">Otros productos</option>
            </select>
          </div>
          <div style="margin-top:10px;">
          <button type="submit" style="width:230px;" class="btn btn-primary">Buscar</button>
          </div>
         </form>
        </div>
        </div>
        </div>
        
       <!-- BOX -->
      </div>
        <?php 
          $site = addslashes(htmlentities($_GET["s"]));
          switch($site) {
              case "home":
                $href = "pages/home.php";
                if(file_exists($href)) {
                  include($href);
                } else {
                  include("pages/404.php");
                }
                break;
              case "register":
                $href = "pages/register.php";
                if(file_exists($href)) {
                  include($href);
                } else {
                  include("pages/404.php");
                }
                break;  
              default:
                include("pages/404.php"); 
            }
          ?>
          </div>
          </div>
        </div>
</div>

</body>
</html>