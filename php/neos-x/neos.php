<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script  src = "https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<title>NEOS-X</title>
</head>
<body>

<?php
ini_set('display_errors', 0 );
error_reporting(0);

    if(isset($_POST['dateIn'])){
        $today = $_POST['dateIn'];
        $tomorrow = date('Y-m-d', strtotime('+3 days', strtotime($today)));
    }else{
        // $today = $fullDateToday;
        $today = date("Y-m-d");
        $tomorrow = date('Y-m-d', strtotime('+3 days', strtotime($today)));
    }
?>


<nav class="navbar navbar-light bg-secondary">
<a class="navbar-brand" href="#"><ion-icon name="finger-print-outline"></ion-icon>NEOS-X</a> 
</nav>

<div class="container">
  <div class="row">

    <div class="col-sm">
          <form class="form" method="POST" action="neos.php">
            <div class="form-group">
            <label for="fname">Search</label>
            <input class="form-control" type="date" id="dateIn" name="dateIn" value="<?php echo $today; ?>"> <?php //echo $tomorrow; ?>
            </div>
            <div class="form-group">
            <button class="btn btn-warning" type="submit" >Search</button>
            </div>
          </form>
    </div>

<?php
// REQUEST CURL TO NSA START
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.nasa.gov/neo/rest/v1/feed?api_key=DEMO_KEY&start_date=".$today."&end_date=".$tomorrow."",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "code: DEMO_KEY"
  ),
));
$response = curl_exec($curl);
curl_close($curl);
// REQUEST CURL TO NSA END

// JSON DECODE FILE TO OBJECT TREAT
$response = json_decode($response, NULL);

// HTML FORMAT RESULT START
echo '
<table class="table table-bordered table-sm table-dark table-hover" style="font-size: 12px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Link</th>
      <th scope="col">Diametro Km Min</th>
      <th scope="col">Hazardous</th>

    </tr>
  </thead>
  ';

// FOREACH LOOP TO ALL ITEMS SEARCH
foreach($response as $newArray => $newResponse){
echo '  <tbody>
  ';
    foreach($newResponse as $itemRes => $item){

        foreach($item as $new => $newItem){
            echo '<tr>';
            echo '<td>';
            echo $newItem->name;
            echo '</td>';
            echo '<td>';
            echo '<a href="'.$newItem->nasa_jpl_url.'" target="_blank">';
            echo 'See More';
            echo '</a>';
            echo '</td>';
            foreach($newItem as $diameter => $diametro){
                if($diametro->kilometers->estimated_diameter_min !== null){
                echo '<td>';    
                echo $diametro->kilometers->estimated_diameter_min;
                echo '</td>';
                }
            }
                echo '<td>';
                if($newItem->is_potentially_hazardous_asteroid == 1){
                  echo "Danger";
                }else{
                  echo "Not Danger";
                }
                echo '</td>';
            echo '</tr>';
        }
    }
    echo '    
  </tbody>';
}

echo '
    </tr>
  </tbody>
</table>
';
?>

  </div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>
</html>



