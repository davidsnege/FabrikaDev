<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script  src = "https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<title>Neos</title>
</head>
<body>

<?php
ini_set('display_errors', 0 );
error_reporting(0);

    if(isset($_POST['dateIn'])){
        $today = $_POST['dateIn'];
        $tomorrow = date('Y-m-d', strtotime('+3 days', strtotime($today)));
    }else{
        $today = date("Y-m-d");
        $tomorrow = date('Y-m-d', strtotime('+3 days', strtotime($today)));
    }

    $responseDayImage = file_get_contents("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY"); 
    $responseDayImage = json_decode($responseDayImage, NULL);

?>


<div id="carouselExampleSlidesOnly" class="carousel slide collapse" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $responseDayImage->url; ?>" alt="First slide">

      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $responseDayImage->title; ?></h5>
        <p><?php echo $responseDayImage->explanation; ?></p>
        <a href="<?php echo $responseDayImage->hdurl; ?>" target="_blank" alt="See the FullHD image">HD image Link</a>
      </div>
    </div>

  </div>
</div>



<nav class="navbar navbar-light bg-secondary">
<a class="navbar-brand" href="#"><ion-icon name="finger-print-outline"></ion-icon>NEOS</a> 



<form class="form-inline" method="POST" action="neos.php">
<button class="btn btn-dark my-2 my-sm-0" type="button" data-toggle="collapse" data-target="#carouselExampleSlidesOnly" aria-expanded="false" aria-controls="collapseExample" alt="See the image of day by Nasa">
    Day Image
</button>&nbsp

  <div class="form-group">
    <label for="fname">Search Date &nbsp</label>
    <input class="form-control mr-sm-2" type="date" id="dateIn" name="dateIn" value="<?php echo $today; ?>"> To: <?php echo $tomorrow; ?> &nbsp
  </div>
  <button class="btn btn-warning my-2 my-sm-0" type="submit" >Search</button>
</form>
</nav>


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

// REQUEST SIM TO FILE EMULATED JSON RETURN
// $response = file_get_contents("neos.json"); 


// JSON DECODE FILE TO OBJECT TREAT
$response = json_decode($response, NULL);

// HTML FORMAT RESULT START
echo '
<table class="table table-bordered table-sm table-dark table-hover" style="font-size: 12px;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Nasa jpl_url</th>
      <th scope="col">Absolute mag.</th>
      <th scope="col">Diametro Km Min</th>
      <th scope="col">Diametro Km Max</th>
      <th scope="col">Hazardous</th>
      <th scope="col">Is sentry object</th>
      <th scope="col">Close Approach</th>


      <th scope="col">km/s</th>
      <th scope="col">km/h</th>
      <th scope="col">ml/h</th>
      <th scope="col">Astronomical</th>
      <th scope="col">Lunar</th>
      <th scope="col">Kilometers</th>
      <th scope="col">Miles</th>

    </tr>
  </thead>
  ';

      //  <th scope="col">close_approach_date_full</th> 
      // <th scope="col">epoch_date_close_approach</th>
      // <th scope="col">orbiting_body</th>

// FOREACH LOOP TO ALL ITEMS SEARCH
foreach($response as $newArray => $newResponse){
echo '  <tbody>
  ';
    foreach($newResponse as $itemRes => $item){

        foreach($item as $new => $newItem){
            echo '<tr><td>';
            echo $newItem->id;
            echo '</td>';
            echo '<td>';
            echo $newItem->name;
            echo '</td>';
            echo '<td>';
            echo '<a href="'.$newItem->nasa_jpl_url.'" target="_blank">';
            echo $newItem->nasa_jpl_url;
            echo '</a>';
            echo '</td>';
            echo '<td>';
            echo $newItem->absolute_magnitude_h;
            echo '</td>';

            foreach($newItem as $diameter => $diametro){
                if($diametro->kilometers->estimated_diameter_min !== null){
                echo '<td>';    
                echo $diametro->kilometers->estimated_diameter_min;
                echo '</td>';
                }
                    if($diametro->kilometers->estimated_diameter_max !== null){
                    echo '<td>';    
                    echo $diametro->kilometers->estimated_diameter_max;
                    echo '</td>';
                    }
            }
                echo '<td>';
                if($newItem->is_potentially_hazardous_asteroid == 1){
                  echo "Danger";
                }else{
                  echo "Not Danger";
                }
                // echo $newItem->is_potentially_hazardous_asteroid; 
                echo '</td>';

                echo '<td>';
                echo $newItem->is_sentry_object;  
                echo '</td>';

            foreach($newItem->close_approach_data as $close => $closeData){
                    echo '<td>';
                    echo $closeData->close_approach_date;
                    echo '</td>';
                    // echo '<td>';
                    // echo $closeData->close_approach_date_full;
                    // echo '</td>';
                    // echo '<td>';
                    // echo $closeData->epoch_date_close_approach;
                    // echo '</td>';
                        echo '<td>';
                        echo $closeData->relative_velocity->kilometers_per_second;
                        echo '</td>';
                        echo '<td>';
                        echo $closeData->relative_velocity->kilometers_per_hour;
                        echo '</td>';
                        echo '<td>';
                        echo $closeData->relative_velocity->miles_per_hour;
                        echo '</td>';
                            echo '<td>';
                            echo $closeData->miss_distance->astronomical;
                            echo '</td>';
                            echo '<td>';
                            echo $closeData->miss_distance->lunar;
                            echo '</td>';
                            echo '<td>';
                            echo $closeData->miss_distance->kilometers;
                            echo '</td>';
                            echo '<td>';
                            echo $closeData->miss_distance->miles;     
                            echo '</td>';                   
                                // echo '<td>';
                                // echo $closeData->orbiting_body;  
                                // echo '</td>';
                                echo '</tr>';                      
            }
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



