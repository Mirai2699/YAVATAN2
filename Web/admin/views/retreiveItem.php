<?php include('../../../db_con.php') ;

$va = $_GET['category'];
$option ='';

$sql = "SELECT * FROM `r_city` WHERE city_rgn = '".$va."'";

$results = mysqli_query($connection, $sql) or die("Bad Query: $sql"); 
while($row = mysqli_fetch_assoc($results))
        {  
        	$city = $row['city_name'];

            $option = $option. "<option name='chr_city' value='$city'> $city </option>";

        }

  echo json_encode(
          array("option" => $option)
     );
?>