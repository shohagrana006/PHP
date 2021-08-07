<?php
  require_once 'auth_checking.php';
  require_once 'includes/db_connect.php';

  $fileName        = ($_FILES['portfolio_image']['name']);
  $afterExplode    = explode('.', $fileName);
  $fileExtension   = end($afterExplode);
  $exceptExtension = array('png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG');

  if (in_array($fileExtension, $exceptExtension)) {
    if ($_FILES['portfolio_image']['size'] <= 2000000) {

      $portfolioName        = $_POST['portfolio_name'];
      $portfolioDescription = $_POST['portfolio_description'];

      $insertPortfolioQuery = "INSERT INTO portfolios(portfolio_name, portfolio_description) VALUES ('$portfolioName','$portfolioDescription')";
      mysqli_query($db_connect, $insertPortfolioQuery);

      $lastId               = mysqli_insert_id($db_connect);
      $newFileName          = $lastId.'.'.$fileExtension;
      $newLocation          = 'uploads/portfolio/'.$newFileName;
      move_uploaded_file($_FILES['portfolio_image']['tmp_name'], $newLocation);

      $updatePortfolioQuery = "UPDATE portfolios SET portfolio_image = '$newFileName' WHERE id = $lastId";
      mysqli_query($db_connect, $updatePortfolioQuery);
      header("location: portfolio.php");

    } else {
      echo "File size must be under or equal 2 mb";
    }
  } else {
    echo "Your file format is invalid!!";
  }

 ?>
