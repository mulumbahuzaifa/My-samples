<?php
//start session
session_start();

  require_once('php/CreateDb.php');
  require_once('./php/component.php');

  //create instance of creatdb class
  $database = new CreateDb("Cartdb","table1");


  if(isset($_POST['add'])){
    //print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
      $item_array_id=array_column($_SESSION['cart'],"product_id");  
       if(in_array($_POST['product_id'],$item_array_id)){
        echo '<script type="text/javascript">alert("Product already added to the cart!");</script>';
        echo "<script>window.location='index.php'</script>";
      }else{
        $count = count($_SESSION['cart']);
        $item_array = array(
          'product_id' => $_POST['product_id']
        );
        $_SESSION['cart'][$count]= $item_array;
        print_r($_SESSION['cart']);
      }


    }else{
      $item_array=array(
        'product_id' => $_POST['product_id']
      );

      //Create new session variable
      $_SESSION['cart'][0] = $item_array;
      print_r($_SESSION['cart']);
    }



  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"/>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>shopping cart!</title>
	  <link href="css/style.css?<?=filemtime("css/style.css")?>" rel="stylesheet" type="text/css" />

  </head>
  <body>
    <?php require_once('php/header.php'); ?>
        <div class="container">
          <div class="row text-center py-5">
          <?php
          $result = $database->getData();
          while($row=mysqli_fetch_assoc($result)){
            component($row['product_name'],$row['product_price'],$row['initial_price'],$row['product_image'],$row['id']);
          }
          ?>
          </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>