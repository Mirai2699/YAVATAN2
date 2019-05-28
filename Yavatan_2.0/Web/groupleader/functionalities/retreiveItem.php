<?php include('../../../db_con.php') ;
$va = $_GET['category'];
$option ='';
$sql = "SELECT DISTINCT city_rgn FROM `r_city` WHERE city_rgn = '".$va."'";
$results = mysqli_query($connection, $sql) or die("Bad Query: $sql"); 
while($row = mysqli_fetch_assoc($results))
        {  

            $name = $row['city_rgn'];
            $option =$option. "<option name='chr_city' value='$name'>$name</option>";

        }

  echo json_encode(
          array("option" => $option)
     );
?>