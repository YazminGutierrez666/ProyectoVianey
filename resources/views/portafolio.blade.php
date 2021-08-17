<!DOCTYPE html>
<html lang="en">
<head>
<title>Laravel :)</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <basefont color="#000000 
" face="Calibri">

<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Stylos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galería</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
    </ul>
  </div>
</nav>



<dir>
<header class="container-fluid" style="height: 690px; background-color: #FCF3CF  ">
<center>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-90" src="images/inicio.jpeg"   width="550px" alt="First slide">
    </div>


    <div class="carousel-item">
      <img class="d-block w-90" src="images/inicio2.jpeg" width="550px" alt="Second slide">
    </div>


    <div class="carousel-item">
      <img class="d-block w-90" src="images/chamarra.jpeg" width="550px" alt="Third slide">
    </div>
  </div>


  <a class="left carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="glyphicom glyphicom-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">ANTERIOR</span>
  </a>

 <a class="right carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="glyphicom glyphicom-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">SIGUIENTE</span>
  </a>
  </a>
</div></center>

<script type="text/javascript">
  function anterior(){
    $("#carouselExampleIndicators").carousel('prev');
  }

  function siguiente(){
      $("#carouselExampleIndicators").carousel('next');
  }
</script>
<script> src = " http://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js "</script>
<script type="text/javascript">
  if(annyang){
    var commands={
      'siguiente':function(){
        siguiente();
      },
      'anterior':function(){
        anterior();
      },

    };
    annyang.setlanguage('es-MX');
    annyang.addCommands(commands);
    annyang.debug();
    annyang.start({continuous:false});
  }
</script>

<div class="col-12 aling-self-center text-center">
                <h1>¡Vestirme Es Amor Propio!</h1>
                <p>Miles de opciones, consejos y tips de moda</p>
             </div>
         </header>


        
         <seaction class="container-fluid">
            <div class="row">
              <center><div class="col-12 text-center mt-5"></div>
                 <h2>Galería de Estilos</h2>
                 <h4>Elige el estilo que vaya con tu personalidad</h4></center>

    </div>
</div>
</seaction>
<header class="container-fluid" style="height: 400px; background-color: #EB984E  ">

<img src="images/elegante.jpeg" class="rounded float-left" width="213" alt="... HSPACE="10" VSPACE="10">
<img src="images/sexy.jpeg" class="rounded float-right" width="235" alt="..."HSPACE="10" VSPACE="10">

<img src="images/urbano.jpeg" class="rounded float-right" width="208"  alt="..." HSPACE="10" VSPACE="10">
<img src="images/bohemio.jpeg" class="rounded float-right" width="208" alt="..." HSPACE="10" VSPACE="10">
<img src="images/casual.jpeg" class="rounded float-right" width="250" alt="..."HSPACE="10" VSPACE="10">
</header>
 


<header class="container-fluid" style="height: 1000px; background-image:url(images/fondo3.jpeg)  ">

    <center>
 <h2>Accesorios</h2></center>


    <img src="images/anilli.jpeg" class="rounded float-left" width="230" alt="..." HSPACE="5" VSPACE="5">

<img src="images/collares.jpeg" class="rounded float-right" width="252" alt="..."HSPACE="5" VSPACE="5">

<img src="images/pulseras.jpeg" class="rounded float-right" width="245"  alt="..." HSPACE="5" VSPACE="5">

<img src="images/cadenas.jpeg" class="rounded float-right" width="250" alt="..." HSPACE="5" VSPACE="5">

<img src="images/aretes.jpeg" class="rounded float-right" width="225" alt="..."HSPACE="5" VSPACE="5">
</header>

</body>
</html>