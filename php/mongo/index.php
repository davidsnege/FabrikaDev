<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>




	<!-- Image and text -->
	<nav class="navbar navbar-light bg-dark sticky-top" >
	  <a class="navbar-brand" href="#">
	    <img src="https://img.stackshare.io/service/5739/atlas-360x360.png" style="width: 20%;" class="d-inline-block align-top" alt="">
	  </a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">LIST QUERYE <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ADD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CHANGE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DELETE</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ADVANCED
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">FILTERS</a>
          <a class="dropdown-item" href="#">COLECTIONS</a>
          <a class="dropdown-item" href="#">CREATE</a>
        </div>
      </li>
    </ul>
  </div>



	</nav>


<br>
<div class="container-fluid">

	<div class="row">
	</div>

<div class="row">


	<?php
	//NECESITAMOS AQUI DO AUTOLOAD PARA MONGO Y A CONEXAO A BASE
	require_once 'vendor/autoload.php';
	include 'conexao.php';


	$start = '0';
	$limit = '60';

	$find =
	[
	// "_id" => "10006546",
	];
	$options = [
	'skip' => intval($start),
	'limit' => intval($limit),
	];

	$cursor = $collection->find($find, $options);

	foreach ($cursor as $airbresults) {

		echo '<div class="col-sm-2">';

		echo '  <div class="card" style="width: 18rem; margin-bottom: 30px;">';
		echo '  <img src="'.$airbresults->images->picture_url.'" class="card-img-top" alt="'.$airbresults->images->picture_url.'" style="height: 200px;">';
		echo '  <div class="card-body">';

		echo '  <h5 class="card-title">'.$airbresults->name.'</h5>';
		echo '  <h6 class="card-subtitle mb-2 text-muted">€ '.$airbresults->price.' <small>/night</small></h6>';
		echo '  <p class="card-text">'.$airbresults->room_type.' </p>';
		echo '  <a href="'.$airbresults->listing_url.'" target="_blank" class="btn btn-info">Reservar </a>';

		echo '  </div>';
		echo '  <div class="card-footer">';
		$fecha = substr("$airbresults->last_scraped", 0, -3);
		echo '  <p class="card-text">De: '.date('d/m/Y', "$fecha").' </p>';

		echo '	</div>';
		echo '	</div>';

		echo '</div>';


	};

	?>



</div>

<div class="row">.
</div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
