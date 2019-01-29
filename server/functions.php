<?php
require_once "db_connection.php";

function getPro(){
    global $con;
    $getProQuery = '';
    if(!isset($_GET['cat']) && !isset($_GET['brand']) && !isset($_GET['search'])){
        $getProQuery = "select * from products order by RAND();";
    }
    else if(isset($_GET['cat'])){
        $pro_cat_id = $_GET['cat'];
        $getProQuery = "select * from products where pro_cat = '$pro_cat_id'";
    }
    else if(isset($_GET['brand'])){
        $pro_brand_id = $_GET['brand'];
        $getProQuery = "select * from products where pro_brand = '$pro_brand_id'";
    }
    else if(isset($_GET['search'])){
        $user_query = $_GET['search'];
        $getProQuery = "select * from products where pro_keywords like '%$user_query%'";
    }
    $getProResult = mysqli_query($con,$getProQuery);
    $count_pro = mysqli_num_rows($getProResult);
    if($count_pro==0){
        echo "<h4 class='alert-warning align-center my-2 p-2'> No Product found in selected criteria </h4>";
    }
    while($row = mysqli_fetch_assoc($getProResult)){
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
}