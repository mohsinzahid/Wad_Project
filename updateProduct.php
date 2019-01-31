<?php
require_once "admin/db_connection.php";

$product = "select * from products order by RAND();";
$run_pro  = mysqli_query($con,$product);
$count = mysqli_num_rows($run_pro);
if($count==0){
    echo "<h4 class='alert-warning align-center my-2 p-2'> No Product found in selected criteria </h4>";
}
while($row = mysqli_fetch_assoc($run_pro)){
    $pro_id = $row['pro_id'];
    $pro_title = $row['pro_title'];
    $pro_desc = $row['pro_desc'];
    $pro_image = $row['pro_image'];
    echo"<div class=\"col-lg-3 col-md-6 mb-4\">
          <div class=\"card\">
            <img class=\"card-img-top\" src=\"admin/product_images/$pro_image\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">$pro_title</h4>
              <p class=\"card-text\">$pro_desc</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Find Out More!</a>
            </div>
          </div>
        </div>";
}