<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
<title>Menu</title>
<link rel="stylesheet" href="../css/estilos.css">
<script src="js/jquerylibreria.js"></script>
<script src="js/jquery.js"></script>
<script src="../js/all.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/jquerylibreria.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>
<nav class="barra_nav">
<input type="checkbox" id="btn-menu" class="btn-menu">
  <label for="btn-menu"><i class="fas fa-bars"></i></label>
  <ul class="nav nav-pills">
    <li class="nav-item">
    <a class="nav-link" href="#">Inicio</a>
    </li>
	<li class="nav-item dropdown">
    <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Habitaciones</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_habitaciondoble.php">2 personas</a>
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_habitaciontriple.php">3 personas</a>
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_habitacioncuatropersonas.php">4 personas</a>
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_habitacioncincopersonas.php">5 personas</a>
      <a class="dropdown-item" href="/curso_php/proyecto hotel/vista/vista_suite.php">Suite</a>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#restaurante">Restaurante & bar</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#servicios">Servicios</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/curso_php/proyecto hotel/vista/galeria.php">Galeria</a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="/curso_php/proyecto hotel/vista/vista_reservas.php">Consultar</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Reseña</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Contacto</a>
    </li>
	</ul>
</nav>
 <section class="inicio">
<p>
Hotel tropical
</p>
 </section>
 <section class="restaurante" id="restaurante">
 <div class="row">
 <div class="col">
 <p>Restaurante<p>
 <p>
 Durante su estadía, podrá disfrutar de un exquisito y variado menú de platos típicos de la zona y de otras partes de nuestro hermoso país.
 Igualmente le ofrecemos el servicio de bar, con diversidad de cocteles, bebidas y snacks.
 </p>
 </div>
 </div>
<div class="row restaurante-card">
    <div class="col">
	<div class="card" style="width: 18rem;">
  <img src="../imagenes/desayuno.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Desayuno</h5>
    <p class="card-text">Deleitese con los mejores desayunos tipicos de la isla.</p>
  </div>
</div>
	</div>
	<div class="col">
	<div class="card" style="width: 18rem;">
  <img src="../imagenes/almuerzo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Almuerzo</h5>
    <p class="card-text">Gran variedad de comida de mar para todos los gustos.</p>
  </div>
</div>
	</div>
    <div class="col">
	<div class="col">
	<div class="card" style="width: 18rem;">
  <img src="../imagenes/cena.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cena</h5>
    <p class="card-text">Cenas romanticas al lado de la playa dejese llevar por el romanticismo.</p>
  </div>
</div>
	</div>
	</div>
  </div>
 </section>
 <section class="servicios" id="servicios">
 <div class="row">
 <div class="col">
 <p>Servicios del Hotel</p>

<p>Uno de los paraísos más hermosos de Colombia, es allí donde puedes disfrutar del hermoso y acogedor HOTEL TROPICAL, un hotel que le hace homenaje a la zona con su hermosa arquitectura caribeña, que te invita a disfrutar de los más perfectos paisajes, en el HOTEL TROPICAL puedes deleitarse con sus hermosas y extensas playas de arena blanca.</p>
</div>
</div>
<div class="row servicios-card">
	<div class="col">
	<div class="card" style="width: 18rem;">
    <img src="../imagenes/habitaciones.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Habitaciones</h5>
    <p class="card-text">Contamos con 32 habitaciones y una suite, las cuales le brindan la comodidad que necesita durante sus viajes de negocios o placer. Nuestras habitaciones están equipadas con nevera mini-bar, citofonía, DIRECT TV, cajilla de seguridad, aire acondicionado, closet y baño privado.</p>
    </div>
    </div>
	</div>
	<div class="col">
	<div class="card" style="width: 18rem;">
    <img src="../imagenes/piscina.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Piscina</h5>
    <p class="card-text">Las piscinas están ubicadas, en la parte central del HOTEL TROPICAL, un lugar perfecto para que nuestros huéspedes, disfruten de un refrescante baño, mientras se deleitan observando la mejor vista hacia la ciudad de Cartagena.</p>
    </div>
    </div>
	</div>
	<div class="col">
	<div class="card" style="width: 18rem;">
    <img src="../imagenes/mirador.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Mirador</h5>
    <p class="card-text">Descrito por visitantes, como un lugar MÁGICO, pues desde allí es posible disfrutar de una hermosa vista hacia la ciudad de Cartagena.
    Esta zona es ideal para realizar cenas románticas, cumpleaños, despedidas de soltero (a), bodas, diferentes eventos sociales y empresariales.  Las fotografías tomadas desde esta zona, son espectaculares y únicas. Si eres amante de los paisajes, aquí te traemos el mejor lugar.</p>
    </div>
    </div>
	</div>
	</div>
	</div>
    </section>
	<section class="galeria" id="galeria">

	</section>
	</body>
</html>
